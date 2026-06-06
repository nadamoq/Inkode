<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
 return Route::get('/home',HomeController::class)->name('home');
});
Route::view('form', 'dashboard.post.form'); 
Route::view('/article','blog.single-article-view');
Route::get('/home',HomeController::class)->name('home');

Route::prefix('dashboard')->middleware('auth')->name('dashboard.')->group(function(){
    Route::resource('categories',CategoryController::class);
    Route::resource('posts',PostController::class);
});