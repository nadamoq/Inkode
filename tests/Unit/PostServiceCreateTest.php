<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Services\PostService;
use Tests\TestCase;

class PostServiceCreateTest extends TestCase
{
    public function test_create_with_valid_data(): void
    {
        $service = app(PostService::class);
        $post = $service->store(['title' => 'Test Post', 'content' => 'this is test post', 'tags' => 'test']);
        $this->assertInstanceOf(Post::class, $post);
        $this->assertEquals('Test Post', $post->title);
    }
}
