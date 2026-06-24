<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable = ['name', 'abilities','type'];

    protected $casts = ['abilities' => 'json'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function hasAblility(string $ability){
       return in_array($ability,$this->abilities);
    }
}
