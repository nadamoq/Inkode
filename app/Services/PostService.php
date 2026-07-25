<?php

namespace App\Services;

use App\Actions\FileUpload;
use App\Actions\SyncPostTags;
use App\Ai\Agents\SeoAgent;
use App\Http\Requests\PostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Laravel\Ai\Enums\Lab;
use Throwable;

class PostService
{
    /**
     * Create a new class instance.
     */
    public function __construct(public FileUpload $file, public SyncPostTags $Synctags)
    {
        //

    }

    public function store(array|PostRequest $request): ?Post
    {
        if ($request instanceof PostRequest) {

            $clean = $request->validated();

        } else {
            $validator = Validator::make($request, ['title' => 'required|string|min:3|max:255', 'content' => 'required|string|min:3', 'tags' => 'nullable|string']);
            $clean = $validator->validate();
        }
        DB::beginTransaction();

        try {

            $data = array_merge([
                'image' => $this->file->handle('cover_image', 'posts', 'public') ?? null,
                'published_at' => now(),
            ], $clean);

            $post = Post::query()->create($data);
            $content = strip_tags($post->content);
            $prompt = "Generate SEO metadata and summary (maximum words: 100) for this blog post.
                - Post title: {$post->title}
                - Post Content: {$content}";
            $seoAgent = new SeoAgent;
            $response = $seoAgent->prompt(
                prompt: $prompt,
                provider: Lab::Groq,
                model: 'openai/gpt-oss-20b',
            );
            $post->metadata = [
                'title' => $response['title'] ?? '',
                'description' => $response['description'] ?? '',
                'keywords' => implode(', ', $response['keywords'] ?? []),
                'summary' => $response['summary'] ?? '',
            ];
            $post->excerpt=$response['summary'] ?? '';
            $post->save();
            $this->Synctags->handle($post, $data['tags']);

            DB::commit();

            return $post;
        } catch (Throwable $e) {

            DB::rollBack();
            throw $e;
        }
    }

    public function update(UpdatePostRequest $request, Post $post)
    {

        $clean = $request->validated();
        $data = array_merge([
            'user_id' => auth()->id ?? 3,

            'image' => $this->file->handle('cover_image', 'posts', 'public') ?? null,
        ], $clean);

        $result = $post->update($data);

        if ($result && $request->hasFile('cover_image') && $previous = $post->getOriginal('image')) {
            Storage::disk('public')->delete($previous);
        }

        $this->Synctags->handle($post, $data['tags'] ?? null);

        return true;
    }
}
