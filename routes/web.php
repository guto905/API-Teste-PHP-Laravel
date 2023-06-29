<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('users.index');
Route::get('/create', [UserController::class, 'create'])->name('users.create');
Route::post('/store', [UserController::class, 'store'])->name('users.store');
Route::get('/edit/{user}', [UserController::class, 'edit'])->name('users.edit');
Route::put('/update/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/delete/{user}', [UserController::class, 'destroy'])->name('users.destroy');
