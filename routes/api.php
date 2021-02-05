<?php

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;

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

Route::get('/posts', [postController::class, "index"]);

Route::post('/posts', [postController::class, "store"]);

Route::put('/posts/{posts}', [postController::class , 'update']);

Route::delete('/posts/{posts}', [postController::class , 'destroy']);