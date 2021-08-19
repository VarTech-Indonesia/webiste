<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeAdminController;
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
Route::get('/admin', function () {
    return "Halo";
});
// Login
Route::get('/admin', [AuthController::class, 'index'])->name('admin');
Route::get('/admin/login', [AuthController::class, 'login'])->name('admin-login');
Route::post('/admin/login-proses', [AuthController::class, 'proses'])->name('admin-login-proses');
// Login End

Route::group(['middleware' => 'auth'], function () {

    // Login and Logout
    Route::get('/admin/home', [HomeAdminController::class, 'index'])->name('admin-home');
    Route::get('/admin/logout', [AuthController::class, 'logout'])->name('admin-logout');
    // Login and Logout End

    // User
    // Route::get('/admin/user', [UserAdminController::class, 'index'])->name('admin-user');
    // Route::get('/admin/user-edit/{id}', [UserAdminController::class, 'edit']);
    // Route::post('/admin/user-update', [UserAdminController::class, 'update'])->name('admin-user-update');
    // Route::get('/admin/register-create', [AuthController::class, 'create'])->name('admin-register-create');
    // Route::post('/admin/register-store', [AuthController::class, 'store'])->name('admin-register-store');
    Route::resource('user-admin', UserAdminController::class);
    // User End

});
