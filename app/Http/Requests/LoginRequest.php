<?php

namespace App\Http\Requests;

class LoginRequest extends MainRequest
{
    public function rules(): array
    {
        return [
            "login" => "required",
            "password" => "required"
        ];
    }
}
