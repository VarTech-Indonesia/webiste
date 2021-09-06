<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
// User
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });
// User
Route::get('/', [HomeController::class, 'index']);
Route::get('index/page/{slug}', [HomeController::class, 'page']);
Route::get('/lang/{locale}', [LocalizationController::class, 'index']);
// Admin
Route::get('/admin', [AuthController::class, 'index'])->name('admin');
Route::group(['prefix' => 'admin', 'middleware' => ['guest']], function () {
    Route::get('login', [AuthController::class, 'login'])->name('admin-login');
    Route::post('login-proses', [AuthController::class, 'proses'])->name('admin-login-proses');
    // Forget Password
    Route::get('forget-password', [MailController::class, 'forgetPassword'])->name('admin.forget.password.get');
    Route::post('forget-password', [MailController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
    Route::get('reset-password/{token}', [MailController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('reset-password', [MailController::class, 'submitResetPasswordForm'])->name('reset.password.post');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('home', [HomeAdminController::class, 'index'])->name('admin-home');
    Route::get('logout', [AuthController::class, 'logout'])->name('admin-logout');
    // User
    Route::resource('user-admin', UserAdminController::class);
    // Page Category
    Route::resource('page-category', PageCategoryController::class);
    // Page
    Route::GET('/page-admin', [PageController::class, 'index']);
    Route::POST('/page-admin/store', [PageController::class, 'store']);
    Route::GET('/page-admin/{id}/edit', [PageController::class, 'edit']);
    Route::POST('/page-admin/update/{id}', [PageController::class, 'update']);
    Route::DELETE('/page-admin/delete/{id}', [PageController::class, 'destroy']);
    // Post Category
    Route::resource('post-category', PostCategoryController::class);
    // Post
    Route::GET('/post-admin', [PostController::class, 'index']);
    Route::POST('/post-admin/store', [PostController::class, 'store']);
    Route::GET('/post-admin/{id}/edit', [PostController::class, 'edit']);
    Route::POST('/post-admin/update/{id}', [PostController::class, 'update']);
    Route::DELETE('/post-admin/delete/{id}', [PostController::class, 'destroy']);
});
