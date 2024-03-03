<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Services\Response\ResponseService;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function login(LoginRequest $request)
    {
        $user = User::where("email", $request->login)->with("roles")->first();
        if (Auth::attempt([
            "email" => $request->login,
            "password" => $request->password
        ])) {
            return ResponseService::sendJsonResponse(true, 200, [], [
                "user" => $user,
                "token" => $user->createToken("login_token")->plainTextToken,
            ]);
        } else {
            return ResponseService::sendJsonResponse(false, 401, [
                "message" => "Неправильный логин или пароль"
            ]);
        }
    }
}
