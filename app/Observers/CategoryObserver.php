<?php

namespace App\Observers;

use App\Models\Category;

class CategoryObserver
{
    /**
     * Handle the Category "created" event.
     */
    public function creating(Category $category): void
    {
        //
        $category->slug = str()->slug($category->name);
    }

    /**
     * Handle the Category "updated" event.
     */
    public function updating(Category $category): void
    {
        //
        if($category->isDirty('name')){
            $category->slug = str()->slug($category->name);
           
        }
    }

}