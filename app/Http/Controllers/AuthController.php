<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validate input (allow both email and username)
        $credentials = $request->validate([
            'login' => 'required|string',  // Can be email or username
            'password' => 'required|string',
        ]);

        // Determine if the input is an email or username
        $loginField = filter_var($credentials['login'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        // Attempt authentication using the detected field
        if (Auth::attempt([$loginField => $credentials['login'], 'password' => $credentials['password']])) {
            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'token' => $token,
                'user' => $this->formatUser($user),
            ]);
        }

        return response()->json(['message' => 'No autorizado'], 401);
    }

    public function user(Request $request)
    {
        return response()->json($this->formatUser($request->user()));
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json(['message' => 'Sesión cerrada']);
    }

    private function formatUser($user)
    {
        return [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'entities' => $user->entities->map(function ($entity) {
                return [
                    'id' => $entity->id,
                    'entitiable_type' => $entity->entitiable_type,
                    'name' => $entity->entitiable->name,
                    'acronym' => $entity->entitiable->acronym,
                ];
            }),
        ];
    }
}
