<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;




class Scontroller extends Controller
{
   
    public function index()
    {
        return view('index');
    }

    public function home()
    {
        $users = Suser::orderBy('created_at', 'desc')->get();

        // Blade shabloniga yuborish
        return view('home', compact('users'));
    }

    public function reglog()
    {
        return view('reglog');
    }

    public function register(Request $request)
    {
        // Validatsiya
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Agar validatsiya xatosi bo'lsa, 'reglog' routiga yo'naltiramiz
        if ($validator->fails()) {
            return redirect()->route('reglog')->withErrors($validator)->withInput();
        }

        // Agar email mavjud bo'lsa, 'reglog' routiga yo'naltiramiz
        if (Suser::where('email', $request->email)->exists()) {
            return redirect()->route('reglog')->with('error', 'Bu email allaqachon ro\'yhatdan o\'tgan!');
        }

        // Yangi foydalanuvchining yaratilishi
        Suser::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Tizimga kiritish
        Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        // Home routiga yo'naltirish
        return redirect()->route('home')->with('success', 'Ro\'yxatdan muvaffaqiyatli o\'tdingiz!');
    }

    public function login(Request $request)
    {
        // Validatsiya
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        ]);

        // Foydalanuvchini ma'lumotlar bazasidan izlash
        $user = Suser::where('email', $request->email)->first();

        // Parolni tekshirish va tizimga kiritish
        if ($user && Hash::check($request->password, $user->password)) {
            $request->session()->regenerate(); // Sessiyani yangilash
            return redirect()->route('home'); // Yo'naltirish
        }

        // Xato holati
        return redirect()->route('reglog')->with('error', 'Email yoki parol noto‘g‘ri');
    }

    public function logout(Request $request)
    {
        // Foydalanuvchini tizimdan chiqarish
        Auth::logout();

        // Sessiyani tozalash
        $request->session()->invalidate(); // Barcha sessiya ma'lumotlarini o'chirish
        $request->session()->regenerateToken(); // CSRF tokenni qayta yaratish

        // Asosiy sahifaga yo'naltirish
        return redirect()->route('index')->with('success', 'Tizimdan muvaffaqiyatli chiqdingiz.');
    }

}
