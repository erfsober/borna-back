<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBlogPostRequest extends FormRequest
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
        $blogPostId = $this->route('blog_post');

        return [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', "unique:blog_posts,slug,{$blogPostId}"],
            'description' => ['required', 'string'],
            'writer_name' => ['required', 'string', 'max:255'],
            'read_duration' => ['required', 'integer', 'min:1'],
            'image' => ['nullable', 'image', 'max:2048'],
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
            'title.required' => 'عنوان الزامی است',
            'title.string' => 'عنوان باید متن باشد',
            'title.max' => 'عنوان نباید بیشتر از 255 کاراکتر باشد',
            'slug.required' => 'اسلاگ الزامی است',
            'slug.string' => 'اسلاگ باید متن باشد',
            'slug.max' => 'اسلاگ نباید بیشتر از 255 کاراکتر باشد',
            'slug.unique' => 'این اسلاگ قبلا استفاده شده است',
            'description.required' => 'توضیحات الزامی است',
            'description.string' => 'توضیحات باید متن باشد',
            'writer_name.required' => 'نام نویسنده الزامی است',
            'writer_name.string' => 'نام نویسنده باید متن باشد',
            'writer_name.max' => 'نام نویسنده نباید بیشتر از 255 کاراکتر باشد',
            'read_duration.required' => 'مدت زمان مطالعه الزامی است',
            'read_duration.integer' => 'مدت زمان مطالعه باید عدد صحیح باشد',
            'read_duration.min' => 'مدت زمان مطالعه باید حداقل 1 دقیقه باشد',
            'image.image' => 'فایل باید یک تصویر باشد',
            'image.max' => 'حجم تصویر نباید بیشتر از 2 مگابایت باشد',
        ];
    }
}
