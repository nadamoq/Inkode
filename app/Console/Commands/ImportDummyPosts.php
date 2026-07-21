<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

#[Signature('app:import-dummy-posts {--count=20 : The number of dummy posts to import}')]
#[Description('import-dummy-posts')]
class ImportDummyPosts extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
         $count = $this->option('count');

        $this->info('Importing dummy posts...');

        $user = User::query()
            ->where('type', 'user')
            ->limit(1)
            ->first();
        $category = \App\Models\Category::query()
            ->limit(1)
            ->first();

        $response = Http::baseUrl('https://jsonplaceholder.typicode.com')
            ->withHeaders([
                'Accept' => 'application/json',
          
            ])
            ->withToken('[your_api_token_here]')
            ->get('/posts', [
                'page' => 1,
                'limit' => 10,
            ]);

        if ($response->failed()) {
            $this->error($response->status() .  ': Failed to fetch dummy posts.');
            return;
        }

        $posts = $response->json();
        $posts = array_slice($posts, 0, $count);

        foreach ($posts as $post) {
            \App\Models\Post::create([
                'title' => $post['title'] . ' (Dummy 1)',
                'content' => $post['body'],
                'user_id' => $user?->id ?? 1, // Assign to the default user
                'category_id' => $category?->id ?? null, // Assign to a default category
                'published_at' => now(),
            ]);
        }

        $this->info('Dummy posts imported successfully.');
    }
}
