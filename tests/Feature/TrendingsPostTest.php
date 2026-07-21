<?php

use App\Models\Post;
use App\Models\User;
use App\Enums\PostStatus;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;

uses(RefreshDatabase::class);

it('renders globally trending posts for a guest user', function () {
    // Create posts with distinct views and set to published
    Post::factory()->create(['title' => 'Top Popular Post', 'views' => 1000, 'status' => PostStatus::Published, 'published_at' => now()]);
    Post::factory()->create(['title' => 'Medium Popular Post', 'views' => 500, 'status' => PostStatus::Published, 'published_at' => now()]);
    Post::factory()->create(['title' => 'Least Popular Post', 'views' => 100, 'status' => PostStatus::Published, 'published_at' => now()]);

    $view = $this->blade('<x-trendings-post title="Trendings Now" />');

    $view->assertSee('Top Popular Post');
    $view->assertSee('Medium Popular Post');
    $view->assertSee('Least Popular Post');
});

it('renders trending posts from followed authors for authenticated user', function () {
    $currentUser = User::factory()->create();
    $followedUser = User::factory()->create();
    $otherUser = User::factory()->create();

    // Setup follow
    $currentUser->followings()->attach($followedUser->id, ['id' => Str::uuid()]);

    // Create posts
    Post::factory()->create([
        'title' => 'Followed Hot Post',
        'user_id' => $followedUser->id,
        'views' => 2000,
        'status' => PostStatus::Published,
        'published_at' => now()
    ]);
    Post::factory()->create([
        'title' => 'Followed Mild Post',
        'user_id' => $followedUser->id,
        'views' => 1500,
        'status' => PostStatus::Published,
        'published_at' => now()
    ]);
    Post::factory()->create([
        'title' => 'Globally Super Hot Post',
        'user_id' => $otherUser->id,
        'views' => 5000, // higher views, but not followed!
        'status' => PostStatus::Published,
        'published_at' => now()
    ]);

    $this->actingAs($currentUser);

    $view = $this->blade('<x-trendings-post title="Trendings Now" />');

    // Should see posts from followed users, even if they have fewer views than others
    $view->assertSee('Followed Hot Post');
    $view->assertSee('Followed Mild Post');
    
    // But since there are only 2 followed posts, the 3rd slot should fall back to globally popular
    $view->assertSee('Globally Super Hot Post');
});
