<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'regex:/^0?9\d{9}$/'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'min:10'],
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
            'name.required' => 'نام خود را وارد کنید',
            'name.string' => 'نام باید متن باشد',
            'name.max' => 'نام نباید بیشتر از 255 کاراکتر باشد',
            'email.required' => 'ایمیل خود را وارد کنید',
            'email.email' => 'ایمیل معتبر نیست',
            'email.max' => 'ایمیل نباید بیشتر از 255 کاراکتر باشد',
            'phone.regex' => 'شماره موبایل معتبر نیست',
            'subject.required' => 'موضوع را وارد کنید',
            'subject.string' => 'موضوع باید متن باشد',
            'subject.max' => 'موضوع نباید بیشتر از 255 کاراکتر باشد',
            'message.required' => 'پیام خود را وارد کنید',
            'message.string' => 'پیام باید متن باشد',
            'message.min' => 'پیام باید حداقل 10 کاراکتر باشد',
        ];
    }
}
