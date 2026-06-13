<?php

namespace App\Enums;

enum PostStatus :string
{
    case Published = 'published';
    case Draft = 'draft';
    case Archived = 'archived'; 

    
    public function setColor(): string
    {
        return match($this) {
            self::Published => 'text-primary dark:text-[#c0c1ff] bg-primary/10 dark:bg-[#c0c1ff]/10',
            self::Draft => 'text-yellow-500 bg-yellow-100 dark:bg-yellow-900/50',
            self::Archived => 'text-red-500 bg-red-100 bg-error dark:bg-red-900/50',
        };
    }
 
}
