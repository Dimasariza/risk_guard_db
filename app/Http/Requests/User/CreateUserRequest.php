<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            "user_status" => ["nullable"],
            "user_email" => ["required", "email"],
            "user_picture" => ["nullable"],
            "user_role" => ["nullable"],
            "user_emailVerifiedAt" => [],
            "password" => ["required"],
            "remember_token" => [],
        ];
    }
}
