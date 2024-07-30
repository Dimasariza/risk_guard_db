<?php

namespace App\DTO\User;

use App\Http\Requests\User\CreateUserRequest;
use Illuminate\Support\Str;

class InsertUserDTO
{
    public function __construct(
        public readonly string $user_id,
        public readonly string $user_firstName,
        public readonly string $user_lastName,
        public readonly string $user_username,
        public readonly string $user_company,
        public readonly string $user_jobTitle,
        public readonly string $user_phoneNumber,
        public readonly string $user_address,
        public readonly string $user_email,
        public readonly ?bool $user_status,
        public readonly ?string $user_role,
        public readonly string $user_emailVerifiedAt,
        public readonly string $remember_token,
        public readonly string $password,
    ) {
    }

    public static function fromRequest(CreateUserRequest $request): self
    {
        return new self(
            user_id: Str::random(9),
            user_firstName: $request->validated("user_firstName"),
            user_lastName: $request->validated("user_lastName"),
            user_username: $request->validated("user_username"),
            user_company: $request->validated("user_company"),
            user_jobTitle: $request->validated("user_jobTitle"),
            user_phoneNumber: $request->validated("user_phoneNumber"),
            user_address: $request->validated("user_address"),
            user_status: $request->validated("user_status"),
            user_email: $request->validated("user_email"),
            user_role: $request->validated("user_role"),
            user_emailVerifiedAt: $request->validated("user_emailVerifiedAt"),
            remember_token: $request->validated("remember_token"),
            password: $request->validated("password"),
        );
    }

    public function build(): array
    {
        return [
            "user_id" => $this->user_id,
            "user_firstName" => $this->user_firstName,
            "user_lastName" => $this->user_lastName,
            "user_username" => $this->user_username,
            "user_company" => $this->user_company,
            "user_jobTitle" => $this->user_jobTitle,
            "user_phoneNumber" => $this->user_phoneNumber,
            "user_address" => $this->user_address,
            "user_status" => $this->user_status ?? true,
            "user_email" => $this->user_email,
            "user_role" => $this->user_role ?? "guest",
            "user_emailVerifiedAt" => $this->user_emailVerifiedAt,
            "remember_token" => $this->remember_token,
            "password" => $this->password,
        ];
    }
}
