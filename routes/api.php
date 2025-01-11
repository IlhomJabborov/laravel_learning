<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

// API marshrutlari
Route::post('/register', [ApiController::class, 'apiRegister']);
Route::post('/login', [ApiController::class, 'apiLogin']);
Route::post('/logout', [ApiController::class, 'apiLogout']);
Route::get('/users', [ApiController::class, 'apiGetUsers']);
