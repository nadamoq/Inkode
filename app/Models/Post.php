<?php

namespace App\Models;

use App\Enums\PostStatus;
use App\Models\Scopes\OwnerScope;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
#[ScopedBy(OwnerScope::class)]
class Post extends Model
{
    //
    use SoftDeletes;

    protected $fillable = ['title', 'content', 'slug', 'status', 'user_id', 'category_id', 'image', 'published_at', 'excerpt',];

    protected $casts = ['published_at' => 'datetime', 'metadata' => 'json', 'status' => PostStatus::class,];

    
    public function scopePublished(Builder $builder, string|\DateTime|null $time = null)
    {
        $builder
            //->withoutGlobalScope('owner')
            ->where('status', PostStatus::Published)
            ->where(function ($query) use ($time) {
                $query->whereNotNull('published_at')
                    ->where('published_at', '<=', $time ?? now());

            });
    }

    public function scopeStatus(Builder $builder, string|PostStatus $status)
    {
        $builder->where('status', $status);
    }

    public function scopeSlug(Builder $builder, string $slug)
    {
        $builder->where('slug', $slug);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected static function booted()
    {
        static::creating(function (Post $post) {
            if (empty($post->slug) && ! empty($post->title)) {
                $post->slug = static::generateUniqueSlug($post->title);
            }
        });

        static::updating(function (Post $post) {
            if ($post->isDirty('title') && ! $post->isDirty('slug')) {
                $post->slug = static::generateUniqueSlug($post->title, $post->id);
            }
        });
    }

    protected static function generateUniqueSlug(string $title, ?int $ignoreId = null): string
    {
        $base = Str::slug($title);
        $slug = $base;
        $i = 1;
        while (static::where('slug', $slug)->when($ignoreId, fn($q) => $q->where('id', '!=', $ignoreId))->exists()) {
            $slug = $base . '-' . $i++;
        }
        return $slug;
    }
    public function category()
    {

        return $this->belongsTo(Category::class, 'category_id')->withDefault([
            'id' => null,
            'name' => 'Uncategorized',
        ]);
    }
    // public static function booted()
    // {

    //    static::addGlobalScope('owner', function (Builder $query) {
    //         $query->where('user_id', Auth::id());
    //     });
    // }
    public function author()
    {

        return $this->belongsTo(User::class, 'user_id');
    }
    public function tags()
    {

        return $this->belongsToMany(Tag::class, 'post_tag');
    }
    public function comments()
    {

        return $this->hasMany(Comment::class);
    }
    public function content(): Attribute
    {
        return new Attribute(
            set: fn($value) => strip_tags($value, '<h2><h3><h4><h5><h6><p><br><hr><img><a><ul><li><ol><video><audio>'),
        );
    }
    public function title(): Attribute
    {
        return new Attribute(
            get: fn($value) => ucwords($value),
            set: fn($value) => strip_tags($value)
        );
    }
    public function thumbnailUrl(): Attribute
    {
        return new Attribute(
            get: function () {
               return $this->image ? Storage::disk('public')->url($this->image) : asset('assets/images/logo.png');
            }
        );
    }
    public function publish_time(): Attribute
    {
        return new Attribute(
            get:  fn()=> $this->published_at ? $this->published_at->format('M j, Y') : $this->created_at->format('M j, Y')
           
        );
    }
}
