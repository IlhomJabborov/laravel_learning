<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Acontroller;

Route::post('/register', [Acontroller::class, 'apiRegister']);
Route::post('/login', [Acontroller::class, 'apiLogin']);
Route::post('/logout', [Acontroller::class, 'apiLogout']);
Route::get('/users', [Acontroller::class, 'apiGetUsers']);