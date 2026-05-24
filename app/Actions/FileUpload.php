<?php

namespace App\Actions;

use Illuminate\Http\Request;

class FileUpload
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected Request $request)
    { }

    public function handle(string $key,$path='/',$disk='public'){

        if( $this->request->hasFile($key)){

            $this->request->file($key)->store($path,$disk);
        
        }
    }
}
