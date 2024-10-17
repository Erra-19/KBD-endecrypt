<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::match(['get', 'post'], 'Backend/Home', [HomeController::class, 'HomeBackend'])->name('backend.Home');
Route::get('Backend/Login', [LoginController::Class, 'LoginBackend'])->name('backend.Login');
Route::post('Backend/Login', [LoginController::Class, 'AuthenticateBackend'])->name('backend.Login');
Route::post('Backend/Logout', [LoginController::Class, 'LogoutBackend'])->name('backend.Logout');