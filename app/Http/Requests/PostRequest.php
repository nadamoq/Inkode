<?php

namespace App\Http\Requests;

use App\Rules\RestrictedContent;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class PostRequest extends FormRequest
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
             'title' => 'required|string|max:500|min:3',
            'content' =>
                    [ 
                        'required',
                        'string',
                    new RestrictedContent(['god','admin','gay'])],
            'category_id' => 'required|exists:categories,id',
            'cover_image' => 'required|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'excerpt'=>'nullable|string|min:5|max:80',
            'tags'=>['nullable','string','min:2'],
            'published_at'=>'nullable|date|after_or_equal:today',
            'metadata'=>'nullable|array',
            'metadata.url'=>'nullable|url|max:255',
            'metadata.title'=>'nullable|string|max:255',
            'metadata.description'=>'nullable|string|max:500',
            'metadata.keywords'=>'nullable|string|max:255',

            
        ];
    }
    #[Override]
    public function messages()
    {
        return ['required'=>':attribute is required'];
    }
}
