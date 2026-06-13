<?php

namespace App\Listeners;

use App\Events\PostViewed;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Cookie;

class IncrementPostViews
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PostViewed $event): void
    {
        //
        // $views=Cookie::get('PostViews',[]);

        // if(is_string($views)){

        //    $views= unserialize($views);
        // }
        // if(in_array($event->post->id,$views)){
        //     return;
        // }
         //Cookie::queue('PostViews',serialize($views),2);
        
        /////////////////////////

        $cookieName = 'post_viewed_' . $event->post->id;

        if (Cookie::has($cookieName)) {
            return;
        }

        Cookie::queue(
            $cookieName,
            '1',
            30
        );

           
        $event->post->increment('views');

    }
}
