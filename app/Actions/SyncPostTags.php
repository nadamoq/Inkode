<?php

namespace App\Actions;

use App\Models\Post;
use App\Models\Tag;

class SyncPostTags
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //

    }
    public function handle(Post $post,array|string|null $tags){

        if (empty($tags)) {
            return;
        }

      
        if (is_string($tags)) {
        
            $decoded = json_decode($tags, true);
         
            if (is_array($decoded)) {

                $tags = array_map(function($item) {
                   
                    return is_array($item) ? ($item['value'] ?? null) : $item;
                }, $decoded);
               
            } else {
              
                $tags = explode(',', $tags);
            }
        }
        //array filter وظيفتها هان انه تشيل كل العناصر الفاضية والنل بعد ما عملنا تريم للبينات
        $tags = array_filter(array_map('trim', (array)$tags));

   
        $tagIds = [];
        foreach ($tags as $tag) {
            if (!empty($tag)) {
                $tagIds[] = Tag::firstOrCreate(['name' => $tag])->id;
            }
        }

        
        $post->tags()->sync($tagIds);
    }
}
