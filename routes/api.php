<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BarberController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('auth/login', [AuthController::class, 'login']);
Route::post('auth/logout', [AuthController::class, 'logout']);
Route::post('auth/refresh', [AuthController::class, 'refresh']);

Route::post('user/store', [UserController::class, 'store']);
Route::get('user', [UserController::class, 'read']);
Route::put('user/{id}', [UserController::class, 'update']);
Route::get('user/favorites', [UserController::class, 'getFavorites']);
Route::post('user/favorite', [UserController::class, 'addFavorite']);
Route::post('user/appointments', [UserController::class, 'getAppointments']);

Route::get('barbers/index', [BarberController::class, 'index']);
Route::get('barber/{id}', [BarberController::class, 'show']);
Route::post('barber/{id}/appointment', [BarberController::class, 'setAppointment']);


Route::get('barber/search', [BarberController::class, 'search']);
