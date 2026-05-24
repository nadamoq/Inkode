<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Translation\PotentiallyTranslatedString;

class RestrictedContent implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  Closure(string, ?string=): PotentiallyTranslatedString  $fail
     */
    public function __construct(protected array $forbidden =[])
    {
        
    }
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //
        $words=explode(' ',$value);
        foreach($words as $word ){

            if(in_array(trim($word,' ,.!?()-#@'),$this->forbidden)){
                $fail("Integrety violation ,In $attribute field this is not allowed word ($word)");
            }

        }
    }
}
