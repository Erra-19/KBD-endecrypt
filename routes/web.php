<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::match(['get', 'post'], 'Backend/Home', [HomeController::class, 'HomeBackend'])->name('backend.Home');
Route::get('Backend/Login', [LoginController::class, 'LoginBackend'])->name('backend.Login');
Route::post('Backend/Login', [LoginController::class, 'AuthenticateBackend'])->name('backend.Login');
Route::post('Backend/Logout', [LoginController::class, 'LogoutBackend'])->name('backend.Logout');
Route::get('Backend/Register', [RegisterController::class, 'RegisterBackend'])->name('backend.Register');
Route::post('Backend/Register', [RegisterController::class, 'RegisterAccBackend'])->name('backend.Register');