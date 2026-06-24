<?php

namespace App\Services;

use App\Actions\FileUpload;
use App\Actions\SyncPostTags;
use App\Http\Requests\PostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Throwable;

class PostService
{

    /**
     * Create a new class instance.
     */
    public function __construct( public FileUpload $file, public SyncPostTags $Synctags)
    {
        //

        

    }
    public function store(PostRequest $request):Post|null{
        
        $clean = $request->validated();

        DB::beginTransaction();

        try {

            $data = array_merge([
                'image' => $this->file->handle('cover_image', 'posts', 'public') ?? null,
                'published_at' => now(),
            ], $clean);

            $post = Post::create($data);
            $this->Synctags->handle($post, $data['tags']);

            DB::commit();
            return $post;
            
        } catch (Throwable $e) {

            DB::rollBack();
            throw $e;
            }

    }
    public function update(UpdatePostRequest $request, Post $post){
        
        $clean = $request->validated();
        $data = array_merge([
            'user_id' => auth()->id??3,
           
            'image' => $this->file->handle('cover_image', 'posts', 'public') ?? null,
        ], $clean);

        $result = $post->update($data);

        if ($result && $request->hasFile('cover_image') && $previous = $post->getOriginal('image')) {
            Storage::disk('public')->delete($previous);
        }

        $this->Synctags->handle($post,$data['tags']??null);
        return true;

    }
}
