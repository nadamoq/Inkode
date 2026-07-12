<?php

use App\Http\Controllers\AdminDashboard\UserController;
use App\Http\Controllers\AiWriteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\User\PostController as UserPostController;
use App\Http\Middleware\EnsureUserType;
use App\Models\Role;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::redirect('/home', '/');
Route::view('form', 'dashboard.post.form');
Route::view('/article', 'blog.single-article-view');

Route::prefix('dashboard')->middleware(['auth', 'checkactive'])->name('dashboard.')->group(function () {

    Route::resource('categories', CategoryController::class);
    Route::put('/posts/{post}/restore', [PostController::class, 'restore'])->name('posts.restore');
    Route::delete('/posts/{post}/force-delete', [PostController::class, 'forceDelete'])->name('posts.force-delete');
    Route::resource('posts', PostController::class);
    Route::post('posts/ai',AiWriteController::class)->name('posts.ai');
    
    Route::prefix('/admin')->middleware(EnsureUserType::class)->group(function () {

        Route::post('/users/{user}/assign-role', [UserController::class, 'assignRole'])->name('assignRole');
        Route::get('/user/{user}/role', [UserController::class, 'editRoles'])->name('assignRolePage');
        Route::resource('users', UserController::class);
    });
    //users and roles

    Route::resource('roles', RoleController::class)->middleware('can:viewAny,view,create,update,delete,' . Role::class);


    Route::prefix('/notifications')->controller(NotificationController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::patch('/{id}/read', 'read')->name('read');
        Route::patch('/{id}/unread', 'unread')->name('unread');
        Route::delete('/{id}/delete', 'destroy')->name('delete');
    });
});

Route::middleware('auth')->group(function () {
    Route::delete('user/{user}/unfollow', [FollowController::class, 'destroy'])->name('unFollow');
    Route::post('user/{user}/follow', [FollowController::class, 'store'])->name('follow');
});

Route::get('/show-post/{post:slug}', [UserPostController::class, 'show'])->name('posts.show');
Route::get('/u/{username}', [ProfileController::class, 'show'])->name('user.profile');
