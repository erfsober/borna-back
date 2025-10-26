<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBootcampItemRequest extends FormRequest
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
            'bootcamp_id' => ['required', 'exists:bootcamps,id'],
            'description' => ['required', 'string'],
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
            'bootcamp_id.required' => 'بوت‌کمپ الزامی است',
            'bootcamp_id.exists' => 'بوت‌کمپ انتخاب شده معتبر نیست',
            'description.required' => 'توضیحات الزامی است',
            'description.string' => 'توضیحات باید متن باشد',
            'video.mimes' => 'ویدیو باید یکی از فرمت‌های mp4, mov, avi, wmv باشد',
            'video.max' => 'حجم ویدیو نباید بیشتر از 50 مگابایت باشد',
            'video_thumbnail.image' => 'تصویر پیش‌نمایش ویدیو باید یک تصویر باشد',
            'video_thumbnail.max' => 'حجم تصویر پیش‌نمایش نباید بیشتر از 2 مگابایت باشد',
        ];
    }
}
