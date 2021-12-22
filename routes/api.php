<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TanamanController;
use App\Models\Tanaman;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tanaman', [TanamanController::class, 'index']);
Route::post('/tanaman', [TanamanController::class, 'create']);
Route::put('/tanaman/{id}', [TanamanController::class, 'update']);
Route::delete('/tanaman/{id}', [TanamanController::class, 'delete']);
