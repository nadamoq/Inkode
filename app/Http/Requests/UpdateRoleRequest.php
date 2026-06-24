<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name'=>'sometimes|string|min:3|max:250',
            'type'=>'string|string|min:3|max:50',
            'abilities'=>['nullable','array',],
            'abilities.*'=>['nullable','string',Rule::in(array_keys(Config('abilities')))]
     
        ];
    }
}
