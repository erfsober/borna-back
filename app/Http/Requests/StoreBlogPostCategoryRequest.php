<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPostCategoryRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255', 'unique:blog_post_categories,title'],
        ];
    }

    /**
     * Get custom error messages for validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'عنوان دسته‌بندی الزامی است',
            'title.string' => 'عنوان دسته‌بندی باید متن باشد',
            'title.max' => 'عنوان دسته‌بندی نباید بیشتر از 255 کاراکتر باشد',
            'title.unique' => 'این دسته‌بندی قبلا ثبت شده است',
        ];
    }
}
