<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoffeeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// admin route
Route::get('/dashboard', [AdminController::class, 'index']);

Route::get('/produk', [CoffeeController::class, 'index']);
Route::get('/tambah_produk', [CoffeeController::class, 'create']);
Route::post('/tambah_produk', [CoffeeController::class, 'store']);
Route::get('/produk/{coffee}/edit', [CoffeeController::class, 'edit']);
Route::post('/produk/{coffee}/edit', [CoffeeController::class, 'update']);
Route::get('/produk/{coffee}/hapus', [CoffeeController::class, 'destroy']);
Route::get('/produk/{coffee}/view', [CoffeeController::class, 'show']);

Route::get('/team_info', [TeamController::class, 'index']);
Route::get('/tambah_team', [TeamController::class, 'create']);
Route::post('/tambah_team', [TeamController::class, 'store']);
Route::get('/team/{team}/edit', [TeamController::class, 'edit']);
Route::post('/team/{team}/edit', [TeamController::class, 'update']);
Route::get('/team/{team}/hapus', [TeamController::class, 'destroy']);
Route::get('/team/{team}/view', [TeamController::class, 'show']);

// user route
Route::get('/', [UserController::class, 'index']);

