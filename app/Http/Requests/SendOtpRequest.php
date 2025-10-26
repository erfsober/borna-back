<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendOtpRequest extends FormRequest
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
            'phone' => ['required', 'regex:/^0?9\d{9}$/'],
            'terms' => ['required', 'accepted'],
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
            'phone.required' => 'شماره موبایل خود را وارد کنید',
            'phone.regex' => 'شماره موبایل معتبر نیست',
            'terms.required' => 'باید با قوانین برنا موافقت کنید',
            'terms.accepted' => 'باید با قوانین برنا موافقت کنید',
        ];
    }
}
