<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\MailController;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/lang/{locale}', [LocalizationController::class, 'index']);

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
});
