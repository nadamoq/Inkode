<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tag extends Model
{
   
    protected $fillable = ['name', 'slug'];
    public $timestamps = false;
    public function posts() {

        return $this->belongsToMany(Post::class,'post_tag');

    }
    protected static function booted()
    {
        static::creating(function ($tag) {
            $tag->slug = Str::slug($tag->name);
        });
    }
}
