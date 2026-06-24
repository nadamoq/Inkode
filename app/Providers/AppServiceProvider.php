<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use App\Observers\CategoryObserver;
use App\Observers\PostObserver;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use PSpell\Config;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Category::observe(CategoryObserver::class);
        Post::observe(PostObserver::class);
        foreach(config('abilities') as $key =>$value){
            Gate::define($key,function ($user)use($key):bool{
                foreach($user->roles as $role){
                if(in_array($key,$role->abilities)){
                    return true;
                };
                }
                return false;

            });
        }
    }
}
