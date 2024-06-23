<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\Comment\CommentController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('users',[UserController::class,'index']);
Route::post('users',[UserController::class,'store']);
Route::get('users/{id}',[UserController::class,'show']);
Route::put('users/{id}',[UserController::class,'update']);
Route::delete('users/{id}',[UserController::class,'destroy']);
//Route::resource('categories','Category\CategoryController',['except'=>['create','edit']]);
Route::get('posts',[PostController::class,'index']);
Route::post('post',[PostController::class,'store']);
Route::get('/post/{id}',[PostController::class,'show']);
Route::delete('post/{id}',[PostController::class,'delete']);
Route::get('categories',[CategoryController::class,'index']);
Route::post('category',[CategoryController::class,'store']);
Route::get('category/{id}',[CategoryController::class,'show']);
Route::delete('category/{id}',[CategoryController::class,'delete']);
Route::get('comments',[CommentController::class,'index']);
Route::get('comment/{id}',[CommentController::class,'show']);
Route::post('comment',[CommentController::class,'store']);
Route::delete('comment/{id}',[CommentController::class,'delete']);
