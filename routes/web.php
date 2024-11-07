<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\TableController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AddonController;

Route::get('/peskop/table', [TableController::class, 'showTable'])->name('show-table');
Route::post('/peskop/table/confirm', [TableController::class, 'confirmLogin'])->name('confirm-login');
Route::get('/peskop/table/logout', [TableController::class, 'logout'])->name('logout');

Route::get('/peskop/table/{id}/menu/makanan', [MenuController::class, 'MenuMakanan'])->name('menu.makanan');
Route::get('/peskop/table/{id}/menu/minuman', [MenuController::class, 'MenuMinuman'])->name('menu.minuman');
Route::post('/peskop/addons', [AddonController::class, 'getAddons'])->name('get-addons');
