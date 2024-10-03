<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\User\UserController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/post-register', [AuthController::class, 'post_register'])->name('post.register');
    Route::post('/post-login', [AuthController::class, 'login']);
});

Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/admin', function () {
        return view('pages.admin.index');
    })->name('admin.dashboard');

    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/product', [ProductController::class, 'index'])->name('admin.product');
    Route::get('/admin-logout', [
        AuthController::class,
        'admin_logout'
    ])->name('admin.logout');
});

Route::middleware('web')->group(function () {
    Route::get('/user', function () {
        return view('pages.user.index');
    })->name('user.dashboard');

    Route::get('/user', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/user-logout', [
        AuthController::class,
        'user_logout'
    ])->name('user.logout');
});
