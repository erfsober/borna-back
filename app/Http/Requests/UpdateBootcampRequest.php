<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBootcampRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'icon_image' => ['nullable', 'image', 'max:2048'],
            'top_image' => ['nullable', 'image', 'max:2048'],
            'gallery_images.*' => ['nullable', 'image', 'max:2048'],
            'video' => ['nullable', 'mimes:mp4,mov,avi,wmv', 'max:51200'],
            'video_thumbnail' => ['nullable', 'image', 'max:2048'],
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
            'description.required' => 'توضیحات الزامی است',
            'description.string' => 'توضیحات باید متن باشد',
            'icon_image.image' => 'آیکون باید یک تصویر باشد',
            'icon_image.max' => 'حجم آیکون نباید بیشتر از 2 مگابایت باشد',
            'top_image.image' => 'فایل باید یک تصویر باشد',
            'top_image.max' => 'حجم تصویر نباید بیشتر از 2 مگابایت باشد',
            'gallery_images.*.image' => 'تمام فایل‌های گالری باید تصویر باشند',
            'gallery_images.*.max' => 'حجم هر تصویر گالری نباید بیشتر از 2 مگابایت باشد',
            'video.mimes' => 'ویدیو باید یکی از فرمت‌های mp4, mov, avi, wmv باشد',
            'video.max' => 'حجم ویدیو نباید بیشتر از 50 مگابایت باشد',
            'video_thumbnail.image' => 'تصویر پیش‌نمایش ویدیو باید یک تصویر باشد',
            'video_thumbnail.max' => 'حجم تصویر پیش‌نمایش نباید بیشتر از 2 مگابایت باشد',
        ];
    }
}
