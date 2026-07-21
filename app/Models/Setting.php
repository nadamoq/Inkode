<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    //
    protected $connection='sqlite';
    protected $primaryKey = 'name';
    public $incrementing =false;
    public $keyType='string';

    public function getValue(string $name,$default=null){

        $value=Cache::get('setting-'.$name);

        if(!$value){
           $setting= self::query()->find($name);

            $value= $setting?->value;

            if($setting && $setting->cached){

                Cache::put('setting-'.$name,$value,Carbon::now()->addMinutes(5));
            }

           
        }
       return $value??$default;

    }
    public function setValue(string $name,$value,bool $cached=true){

        $setting= self::query()->find($name);

        if($setting){

            $setting->cached=$cached;
            $setting->value=$value;
            $setting->save();

        }else{

            self::create(['name'=>$name,'value'=>$value,'cached'=>$cached]);

        }

        if($cached){

            Cache::put('setting-'.$name,$value,Carbon::now()->addMinutes(5));

        }else{

            Cache::forget('setting-'.$name);

        }
           



    }
}
