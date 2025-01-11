<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Scontroller;
use App\Http\Controllers\ApiController;

Route::get('/', [Scontroller::class, 'index'])->name('index');
Route::get('/reglog',[Scontroller::class, 'reglog'])->name('reglog');
Route::get('/home', [Scontroller::class, 'home'])->name('home');
Route::post('/register', [Scontroller::class, 'register'])->name('register.submit');
Route::post('/login', [Scontroller::class, 'login'])->name('login.submit');
Route::post('/logout', [Scontroller::class, 'logout'])->name('logout');
Route::post('/account/delete', [Scontroller::class, 'delete'])->name('account.delete');
Route::get('/apidocs', [Scontroller::class, 'apidocs'])->name('apidocs');

Route::post('/api/register', [ApiController::class, 'apiRegister']);
Route::post('/api/login', [ApiController::class, 'apiLogin']);
Route::get('/api/users', [ApiController::class, 'apiGetUsers']);

// Route::post('/test-csrf', function (Request $request) {
//     return response()->json(['message' => 'CSRF token is valid!']);
// });
