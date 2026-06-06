<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
              'name' => 'nullable|string|max:255|unique:Categories,id,except,'.$this->id,
            // 'slug' => 'required|unique:categories,slug',
            'description' => 'nullable|string|max:255',
            'parent_id' => 'nullable|exists:categories,id',
            'excerpt'=>'nullable|string|max:255',
            'tags'=>'nullable|string'
        ];
    }
}
