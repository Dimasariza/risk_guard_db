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
            "user_company" => ["required"],
            "user_jobTitle" => ["required"],
            "user_phoneNumber" => ["required"],
            "user_address" => ["required"],
            "user_status" => ["required"],
            "user_email" => ["required"],
            "user_picture" => [],
            "user_role" => [],
            "user_emailVerifiedAt" => ["required"],
            "password" => ["required"],
            "remember_token" => ["required"],
        ];
    }
}
