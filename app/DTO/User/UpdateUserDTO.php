<?php

namespace App\DTO\User;

use App\Http\Requests\RBIValue\UpdateRBIValueRequest;
use App\Http\Requests\User\UpdateUserRequest;

class UpdateUserDTO
{
    public function __construct(
        public readonly string $user_firstName,
        public readonly string $user_lastName,
        public readonly string $user_username,
        public readonly string $user_company,
        public readonly string $user_jobTitle,
        public readonly string $user_phoneNumber,
        public readonly string $user_address,
        public readonly string $user_status,
        public readonly string $user_email,
        public readonly string $user_emailVerifiedAt,
        public readonly string $remember_token,
        public readonly string $password,
    ) {
    }

    public static function fromRequest(UpdateUserRequest $request): self
    {
        return new self(
            user_firstName: $request->validated("user_firstName"),
            user_lastName: $request->validated("user_lastName"),
            user_username: $request->validated("user_username"),
            user_company: $request->validated("user_company"),
            user_jobTitle: $request->validated("user_jobTitle"),
            user_phoneNumber: $request->validated("user_phoneNumber"),
            user_address: $request->validated("user_address"),
            user_status: $request->validated("user_status"),
            user_email: $request->validated("user_email"),
            user_emailVerifiedAt: $request->validated("user_emailVerifiedAt"),
            remember_token: $request->validated("remember_token"),
            password: $request->validated("password"),
        );
    }

    public function build(): array
    {
        $arr = [
            "user_firstName" => $this->user_firstName,
            "user_lastName" => $this->user_lastName,
            "user_username" => $this->user_username,
            "user_company" => $this->user_company,
            "user_jobTitle" => $this->user_jobTitle,
            "user_phoneNumber" => $this->user_phoneNumber,
            "user_address" => $this->user_address,
            "user_status" => $this->user_status,
            "user_email" => $this->user_email,
            "user_emailVerifiedAt" => $this->user_emailVerifiedAt,
            "remember_token" => $this->remember_token,
            "password" => $this->password,
        ];

        // if (!is_null($this->year)) {
        //     $arr['year'] = $this->year;
        // }

        return $arr;
    }
}
