<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/welcome',[WelcomeController::class,'welcome']);
Route::get('/user/{id}',[UserController::class,'index']);
Route::post('/add_task',[TaskController::class,'store']);
Route::post('/tasks',[TaskController::class,'index']);
Route::put('/update_task/{id}',[TaskController::class,'update']);
Route::get('/show/{id}',[TaskController::class,'findById']);
Route::delete('/delete_task/{id}',[TaskController::class,'destroy']);
Route::apiResource('resource', RController::class);
Route::post('profile',[ProfileController::class,'create']);
// Route::get('profile/{id}',[ProfileController::class,'show']);
Route::get('profile/{id}',action: [UserController::class,'getProfile']);
Route::get('user/{id}/tasks',action: [UserController::class,'getUserTasks']);