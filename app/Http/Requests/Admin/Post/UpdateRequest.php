<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'nullable|file',
            'main_image' => 'nullable|file',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Thats pole nessasary to fill',
            'title.string' => 'Data have to be string',
            'content.required' => 'Thats pole nessasary to fill',
            'content.string' => 'Data have to be string',
            'preview_image.required' => 'Thats pole nessasary to fill',
            'preview_image.file' => 'You have to chose a file',
            'main_image.required' => 'Thats pole nessasary to fill',
            'main_image.file' => 'You have to chose a file',
            'category_id.required' => 'Thats pole nessasary to fill',
            'category_id.integer' => 'ID category have to be integer',
            'category_id.exists' => 'ID category have to be in Data Base',
            'tag_ids' => 'Have to send array',
        ];
    }
}