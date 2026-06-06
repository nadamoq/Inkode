<?php

namespace App\Models;

use Dom\Attr;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    //
    protected $fillable = ['title', 'content', 'slug', 'status', 'user_id', 'category_id', 'image', 'published_at', 'excerpt',];
    protected $casts = ['published_at' => 'datetime'];
    public function category()
    {

        return $this->belongsTo(Category::class, 'category_id')->withDefault([
            'id' => null,
            'name' => 'Uncategorized',
        ]);
    }
    // public static function booted()
    // {

    //    static::addGlobalScope('author', function (Builder $query) {
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
            set: fn($value) => strip_tags($value, '<h2><h3><h4><h5><h6><p><br><hr><img><a><ul><li><ol>')
        );
    }
    public function title(): Attribute
    {
        return new Attribute(
            get: fn($value) => ucwords($value),
            set: fn($value) => strip_tags($value)
        );
    }
    public function thumbnailUrl():Attribute{
        return new Attribute(
            get: function () {
                $this->image ? Storage::disk('public')->url($this->image): asset('assets/images/logo.png');
            }
        );
    }
}
