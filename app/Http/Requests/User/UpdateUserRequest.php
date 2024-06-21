<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            "user_firstName" => ["required"],
            "user_lastName" => ["required"],
            "user_username" => ["required"],
            "password" => ["required"],
            "user_company" => ["required"],
            "user_jobTitle" => ["required"],
            "user_phoneNumber" => ["required"],
            "user_address" => ["required"],
            "user_status" => ["required"],
            "user_email" => ["required"],
            "user_emailVerifiedAt" => ["required"],
            "user_remember_token" => ["required"],
        ];
    }
}
