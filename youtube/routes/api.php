<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CommentController;

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


//User route relational
Route::get('/user',[UserController::class, 'index']);
Route::post('/user',[UserController::class, 'store']);
Route::get('/user/{id}',[UserController::class,'show']);
Route::put('/user/{id}',[UserController::class, 'update']);
Route::delete('/user/{id}',[UserController::class, 'destroy']);

//Post route  relational
Route::get('/post',[PostController::class, 'index']);
Route::post('/post',[PostController::class, 'store']);
Route::get('/post/{id}',[PostController::class,'show']);
Route::put('/post/{id}',[PostController::class, 'update']);
Route::delete('/post/{id}',[PostController::class, 'destroy']);

//Profile route  relational
Route::get('/profile',[ProfileController::class, 'index']);
Route::post('/profile',[ProfileController::class, 'store']);
Route::get('/profile/{id}',[ProfileController::class,'show']);
Route::put('/profile/{id}',[ProfileController::class, 'update']);
Route::delete('/profile/{id}',[ProfileController::class, 'destroy']);

//Role route  relational
Route::get('/role',[RoleController::class, 'index']);
Route::post('/role',[RoleController::class, 'store']);
Route::get('/role/{id}',[RoleController::class,'show']);
Route::put('/role/{id}',[RoleController::class, 'update']);
Route::delete('/role/{id}',[RoleController::class, 'destroy']);

//Comment route  relational
Route::get('/comment',[CommentController::class, 'index']);
Route::post('/comment',[CommentController::class,  'store']);
Route::get('/comment/{id}',[CommentController::class, 'show']);
Route::put('/comment/{id}',[CommentController::class,  'update']);
Route::delete('/comment/{id}',[CommentController::class,  'destroy']);