<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class PostResourceApiTest extends TestCase
{
    use RefreshDatabase;

    protected $posts;

    protected $user;

    protected function setUp(): void
    {
        parent::setUp();

        $this->posts = Post::factory(5)->create();
        $this->user = User::factory()->create();
        $this->actingAs($this->user);
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * A basic feature test example.
     */
    public function test_posts_can_be_retrieved(): void
    {

        $response = $this->get('/api/V1/posts', ['accept' => 'application/json']);

        $response->assertStatus(200);

        $response->assertJson(function (AssertableJson $json) {

            $json->has('data');
            $json->has('data.0', function (AssertableJson $json) {
                $json->has('id');
                $json->has('title');
                $json->has('content');
                $json->has('slug');
                $json->etc();
            });

            $json->has('links');
            $json->has('meta');
        });
    }

    public function test_post_can_be_created_by_user()
    {
        $category = Category::factory()->create();
        $response = $this->post('api/V1/posts', [
            'title' => 'New Test Post',
            'content' => 'Test Post Content',
            'tags' => 'Ai',
            'category_id' => $category->id,
        ], ['Accept' => 'application/json']);

        $response->assertCreated();
        $response->assertJson(function (AssertableJson $json) {
            $json->has('post');
            $json->has('post.id');
            $json->where('post.title', 'New Test Post');
            $json->where('post.content', 'Test Post Content');
            $json->where('post.user_id', $this->user->id);
            $json->etc();
        });
    }
}
