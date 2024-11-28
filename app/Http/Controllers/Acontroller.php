<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class Acontroller extends Controller
{
    public function apiRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $user = Suser::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['message' => 'Ro‘yhatdan o‘tish muvaffaqiyatli!', 'user' => $user], 201);
    }

    public function apiLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Tizimga muvaffaqiyatli kirdingiz!'], 200);
        }

        return response()->json(['error' => 'Email yoki parol noto‘g‘ri!'], 401);
    }

    public function apiLogout(Request $request)
    {
        Auth::logout();
        return response()->json(['message' => 'Tizimdan muvaffaqiyatli chiqdiniz!'], 200);
    }

    public function apiGetUsers()
    {
        $users = Suser::all();
        return response()->json($users, 200);
    }
}
