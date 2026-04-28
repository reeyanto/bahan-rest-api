<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\LoginResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)->first();
        if (!$user || !Hash::check($password, $user->password)) {
            return response()->json([
                'message' => 'Invalid credentials'
            ], 401);
        }

        return LoginResource::make($user);
    }


    public function logout(Request $request) {
        $request->user()->currentAccessToken()->delete();

        return response()->noContent();
    }
}
