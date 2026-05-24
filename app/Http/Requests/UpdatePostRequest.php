<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            'title' => 'required|string|max:500|min:3|unique:posts,title,except,'.$this->id,
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'cover_image' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
            function($attribute,$value,$fail){
                if(str_contains($value,'god'))
                    $fail('The :attribute field contains inappropriate content.');
            }
        ];
    }
}
