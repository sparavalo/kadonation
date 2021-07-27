<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;

class AuthController extends Controller
{
    public function login(UserRequest $request)
    {
        try {
            $credentials = request(['email', 'password']);

            if (!auth()->attempt($credentials)) {
                return response()->json([
                    'message' => 'The given data was invalid.',
                    'errors' => [
                        'password' => [
                            'Invalid credentials'
                        ]
                    ]
                ], 422);
            }

            $token = auth()->user()->createToken('authToken');

            return response()->json([
                'access_token' => $token->plainTextToken,
                'token_type' => 'Bearer'
            ], 200);
        } catch (\Exception $error) {
            return response()->json([
                'message' => 'Email or password are incorect!',
                'error' => $error
            ], 500);
        }
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return response()->json([
            'message' => 'You are logged out!'
        ], 201);
    }
}
