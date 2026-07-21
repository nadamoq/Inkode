<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        $slug = $this->route('category')->slug;

        return [
            //
            'name' => ['nullable', 'string', 'max:255', Rule::unique('categories', 'slug')->ignore($slug)],
            // 'slug' => 'required|unique:categories,slug',
            'description' => 'nullable|string|max:255',
            'parent_id' => 'nullable|exists:categories,id',
            'excerpt' => 'nullable|string|max:255',
            'tags' => 'nullable|string',
        ];
    }
}
