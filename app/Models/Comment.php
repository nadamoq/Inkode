<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = ['content','user_name'];

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
