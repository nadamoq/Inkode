<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('view',function(){
    return view('blog.index');
});
Route::view('/js','page');

Route::view('/article','blog.single-article-view');
Route::get('/home',HomeController::class)->name('home');