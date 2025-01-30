<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'token' => $token,
                'user' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'entities' => $user->entities->map(function ($entity) {
                        return [
                            'id' => $entity->id,
                            'type' => $entity->entitiable_type,
                            'name' => $entity->entitiable->name,
                            'acronym' => $entity->entitiable->acronym,
                        ];
                    }),
                ],
            ]);
        }

        return response()->json(['message' => 'No autorizado'], 401);
    }

    public function user(Request $request)
    {
        //        return response()->json($request->user());
        return response()->json([
            'id' => $request->user()->id,
            'name' => $request->user()->name,
            'email' => $request->user()->email,
            'entities' => $request->user()->entities->map(function ($entity) {
                return [
                    'id' => $entity->id,
                    'type' => $entity->entitiable_type,
                    'name' => $entity->entitiable->name,
                    'acronym' => $entity->entitiable->acronym,
                ];
            }),
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json(['message' => 'Sesión cerrada']);
    }
}
