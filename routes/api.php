<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ValuesController;
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
    Route::get('dashboard', [DashboardController::class, 'index']);
    
    Route::get('values', [ValuesController::class, 'all']);
    Route::get('values/{id}', [ValuesController::class, 'find']);
    Route::put('values/{id}', [ValuesController::class, 'update']);
    Route::post('values', [ValuesController::class, 'create']);
    Route::delete('values', [ValuesController::class, 'destroy']);