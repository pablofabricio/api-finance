<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', [AuthController::class, 'login'])->withoutMiddleware('auth-jwt')->name('auth.jwt');
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
});

// Dashboard
    Route::get('dashboard', [DashboardController::class, 'index']);
    
// Values
    Route::get('values', [DashboardController::class, 'all']);
    Route::get('values/{id}', [DashboardController::class, 'find']);
    Route::put('values/{id}', [DashboardController::class, 'update']);
    Route::post('values', [DashboardController::class, 'create']);
    Route::delete('values', [DashboardController::class, 'destroy']);