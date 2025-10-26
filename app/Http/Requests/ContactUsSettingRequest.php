<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsSettingRequest extends FormRequest
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
            'address' => ['nullable', 'string', 'max:500'],
            'phone' => ['nullable', 'string', 'max:50'],
            'email' => ['nullable', 'email', 'max:255'],
            'work_hours' => ['nullable', 'string', 'max:255'],
            'lat' => ['nullable', 'numeric', 'between:-90,90'],
            'lng' => ['nullable', 'numeric', 'between:-180,180'],
            'map_image' => ['nullable', 'image', 'max:2048'],
            'telegram' => ['nullable', 'string', 'max:255'],
            'whatsapp' => ['nullable', 'string', 'max:50'],
            'instagram' => ['nullable', 'string', 'max:255'],
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
            'address.string' => 'آدرس باید متن باشد',
            'address.max' => 'آدرس نباید بیشتر از 500 کاراکتر باشد',
            'phone.string' => 'تلفن باید متن باشد',
            'phone.max' => 'تلفن نباید بیشتر از 50 کاراکتر باشد',
            'email.email' => 'ایمیل معتبر نیست',
            'email.max' => 'ایمیل نباید بیشتر از 255 کاراکتر باشد',
            'work_hours.string' => 'ساعات کاری باید متن باشد',
            'work_hours.max' => 'ساعات کاری نباید بیشتر از 255 کاراکتر باشد',
            'lat.numeric' => 'عرض جغرافیایی باید عدد باشد',
            'lat.between' => 'عرض جغرافیایی باید بین 90- تا 90 باشد',
            'lng.numeric' => 'طول جغرافیایی باید عدد باشد',
            'lng.between' => 'طول جغرافیایی باید بین 180- تا 180 باشد',
            'map_image.image' => 'فایل باید یک تصویر باشد',
            'map_image.max' => 'حجم تصویر نقشه نباید بیشتر از 2 مگابایت باشد',
            'telegram.string' => 'تلگرام باید متن باشد',
            'telegram.max' => 'تلگرام نباید بیشتر از 255 کاراکتر باشد',
            'whatsapp.string' => 'واتساپ باید متن باشد',
            'whatsapp.max' => 'واتساپ نباید بیشتر از 50 کاراکتر باشد',
            'instagram.string' => 'اینستاگرام باید متن باشد',
            'instagram.max' => 'اینستاگرام نباید بیشتر از 255 کاراکتر باشد',
        ];
    }
}
