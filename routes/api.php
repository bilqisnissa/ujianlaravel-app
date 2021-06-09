<?php

use App\Http\Controllers\FoodController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//User
//GET untuk mendapatkan user by id
Route::get('user/{id}', [UserController::class, 'getUserById']);

//GET untuk mendapatkan semua user
Route::get('users', [UserController::class, 'getAllUsers']);

//POST untuk menambahkan data user
Route::post('users', [UserController::class, 'createUser']);

//PUT untuk mengupdate data user
Route::put('user/{id}', [UserController::class, 'updateUser']);

///DELETE user
Route::delete('user/{id}',[UserController::class, 'deleteUser']);


// //Food
// //GET untuk mendapatkan food by id
// Route::get('food/{id}', [FoodController::class, 'getFoodById']);

// //GET untuk mendapatkan semua food
// Route::get('foods', [FoodController::class, 'getAllFoods']);

// //POST untuk menambahkan data food
// Route::post('foods', [FoodController::class, 'createFood']);

// //PUT untuk mengupdate data food
// Route::put('food/{id}', [FoodController::class, 'updateFood']);

// ///DELETE food
// Route::delete('food/{id}',[FoodController::class, 'deleteFood']);

