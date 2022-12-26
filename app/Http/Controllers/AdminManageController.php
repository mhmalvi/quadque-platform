<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminManageController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:admins',
            'name' => 'required',
            'password' => 'required|confirmed'
        ]);
        $user = Admin::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken($request->name)->plainTextToken;
        return response()->json([
            'email' => $request->email,
            'name' => $request->name,
            'token' => $token,
            'message' => 'User created successfully'
        ], 201);
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = Admin::where('email', $request->email)->first();
        // dd($user);
        // if ($request->email == 'admin@gmail.com') {
        //     if (!$user || $request->password !== $user->password) {
        //         return response([
        //             'message' => 'Email or password mismatch'
        //         ]);
        //     } else {
        //         $token = $user->createToken('api_token')->plainTextToken;
        //         return response([
        //             'email' => $request->email,
        //             'token' => $token,
        //             'message' => 'Login successful'
        //         ]);
        //     }
        // } else {
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => 'Email or password mismatch'
            ]);
        } else {
            $token = $user->createToken('api_token')->plainTextToken;
            return response([
                'email' => $request->email,
                'token' => $token,
                'message' => 'Login successful'
            ]);
        }
    }

    public function logout(Request $request)
    {
        // dd($request);
        // $user->tokens()->delete();
        $request->user()->tokens()->delete();
        return response([
            'message' => 'Logged out successfully'
        ]);
    }
}
// }
