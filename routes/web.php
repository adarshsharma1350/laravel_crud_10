<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('home');

Route::get('/adduser', [UserController::class, 'create'])->name('adduser');
Route::post('/adduser/store', [UserController::class, 'store'])->name('storeuser');
Route::get('/user/{id}/show', [UserController::class, 'show'])->name('showuser');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('edituser');
Route::put('/user/{id}/update', [UserController::class, 'update'])->name('updateuser');
Route::delete('/user/{id}/delete', [UserController::class, 'destroy'])->name('userdelete');
