<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Route;
Route::post('/api/register', [UserController::class, 'apiRegister']);


class ApiController extends Controller
{
    

   

    // public function apiRegister(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'password' => 'required|string|min:8|confirmed',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json($validator->errors(), 400);
    //     }

    //     $user = Suser::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //     ]);

    //     return response()->json(['message' => "Ro'yhatdan o'tish muvaffaqiyatli!", 'user' => $user], 201);
    // }
    public function apiRegister(Request $request)
    {
        // Validatsiya qoidalari
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:susers,email',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Agar validatsiyada xatoliklar bo'lsa, xatolarni qaytarish
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 400);
        }

        // Foydalanuvchini yaratish
        $user = Suser::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Avtomatik tizimga kirish
        Auth::login($user);

        // Muvaffaqiyatli javob qaytarish
        return response()->json([
            'success' => true,
            'message' => "Ro'yhatdan o'tish muvaffaqiyatli!",
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email
            ]
        ], 201);
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

        return response()->json(['error' => "Email yoki parol noto'g'ri!"], 401);
    }

    // public function apiLogout(Request $request)
    // {
    //     Auth::logout();
    //     return response()->json(['message' => 'Tizimdan muvaffaqiyatli chiqdiniz!'], 200);
    // }

    public function apiGetUsers()
    {
        $users = Suser::all();
        return response()->json($users, 200);
        
    }

}
