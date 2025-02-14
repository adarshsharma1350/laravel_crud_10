<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [UserController::class, 'index'])->name('home');

Route::get('/adduser', [UserController::class, 'create'])->name('adduser');
Route::post('/adduser/store', [UserController::class, 'store'])->name('storeuser');
Route::get('/user/{id}/show', [UserController::class, 'show'])->name('showuser');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('edituser');
Route::put('/user/{id}/update', [UserController::class, 'update'])->name('updateuser');
Route::delete('/user/{id}/delete', [UserController::class, 'destroy'])->name('userdelete');
// Route::get('/user/{id}/update', [UserController::class, 'edit']);
// Route::get('/user/{id}/update', [UserController::class, 'edit']);



// Route::get('/users', [UserController::class, 'index']);

// Route::get('/count', [UserController::class, 'count']);
// Route::get('/min_and_max', [UserController::class, 'min_and_max']);
