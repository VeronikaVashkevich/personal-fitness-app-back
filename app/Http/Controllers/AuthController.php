<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $user = User::query()->create(array_merge(
            $request->validated(),
            ['password' => Hash::make($request->password)])
        );

        return $this->sendJsonResponse([
            'data' => [
                'user_token' => $user->generateToken()
            ]
        ], 201);
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt($request->validated())) {
            return $this->sendJsonResponse([
                'data' => [
                    'user_token' => Auth::user()->generateToken()
                ]
            ]);
        }

        return $this->sendJsonResponse([
            'error' => 'Authentication failed'
        ], 401);
    }

    public function logout()
    {
        Auth::user()->removeToken();

        return $this->sendJsonResponse([
            'data' => [
                'message' => 'Logout'
            ]
        ]);
    }
}
