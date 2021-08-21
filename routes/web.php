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

Route::get('/admin', [AuthController::class, 'index'])->name('admin');
Route::get('/admin/login', [AuthController::class, 'login'])->name('admin-login');
Route::post('/admin/login-proses', [AuthController::class, 'proses'])->name('admin-login-proses');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    Route::get('home', [HomeAdminController::class, 'index'])->name('admin-home');
    Route::get('logout', [AuthController::class, 'logout'])->name('admin-logout');
    // User
    Route::resource('user-admin', UserAdminController::class);

});
