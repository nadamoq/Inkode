<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;


use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable,HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'timezone',
        'active',
        'avatar',
        'country_code',


    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function avatar(): Attribute
    {
        return new Attribute(
            get: function (mixed $value, array $attributes) {
                return ! empty($attributes['avatar'])
                    ? Storage::disk('public')->url($attributes['avatar'])
                    : asset('assets/images/DefaultUser.png');
            }
        );
    }
    public function followers()
    {
        return $this->belongsToMany(User::class, 'followers', 'user_id', 'follower_id')
            ->withPivot(['id', 'created_at']);
    }
    public function followings()
    {
        return $this->belongsToMany(User::class, 'followers', 'follower_id', 'user_id')
            ->withPivot(['id', 'created_at']);
    }
    public function hasAbility(string $ability):bool{

        foreach($this->roles as $role){

           return in_array($ability,$role->abilities);
            
        }
        return false;
    }
    public function hasRole(Role $role){
       
        foreach($this->roles as $userRole){

           if($userRole->name==$role->name){
            return true;
           }

        }
        return false;
            
        
    }

    // public function scopeWithFollowStatus(Builder $query): Builder
    // {
    //     return $query->withExists([
    //         'followers' => fn ($q) => $q->where('follower_id', Auth::id() ?? 0),
    //     ]);
    // }
}
