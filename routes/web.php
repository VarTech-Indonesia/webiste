<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\HomeAdminController;
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

Route::get('/admin', [AuthController::class, 'index'])->name('admin');

Route::group(['prefix' => 'admin', 'middleware' => ['guest']], function () {

    Route::get('login', [AuthController::class, 'login'])->name('admin-login');
    Route::post('login-proses', [AuthController::class, 'proses'])->name('admin-login-proses');
    // Forget Password
    Route::get('forget-password', [MailController::class, 'forgetPassword'])->name('admin.forget.password.get');
    Route::post('forget-password', [MailController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
    Route::get('reset-password/{token}', [MailController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('reset-password', [MailController::class, 'submitResetPasswordForm'])->name('reset.password.post');
    // Route::post('/forgot-password', function (Request $request) {
    //     $request->validate(['email' => 'required|email']);
    //     dd($request->email);
    //     // $status = Password::sendResetLink(
    //     //     $request->only('email')
    //     // );

    //     // return $status === Password::RESET_LINK_SENT
    //     //     ? back()->with(['status' => __($status)])
    //     //     : back()->withErrors(['email' => __($status)]);
    // })->name('password.email');

    // Route::get('/reset-password/{token}', function ($token) {
    //     return view('admin.login.reset_password', ['token' => $token]);
    // })->name('password.reset');

    // Route::post('/reset-password', function (Request $request) {
    //     $request->validate([
    //         'token'     => 'required',
    //         'email'     => 'required|email',
    //         'password'  => 'required|min:8|confirmed',
    //     ]);

    //     $status = Password::reset(
    //         $request->only('email', 'password', 'password_confirmation', 'token'),
    //         function ($user, $password) {
    //             $user->forceFill([
    //                 'password' => Hash::make($password)
    //             ])->setRememberToken(Str::random(60));

    //             $user->save();

    //             event(new PasswordReset($user));
    //         }
    //     );

    //     return $status === Password::PASSWORD_RESET
    //         ? redirect()->route('login')->with('status', __($status))
    //         : back()->withErrors(['email' => [__($status)]]);
    // })->name('password.update');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    Route::get('home', [HomeAdminController::class, 'index'])->name('admin-home');
    Route::get('logout', [AuthController::class, 'logout'])->name('admin-logout');
    // User
    Route::resource('user-admin', UserAdminController::class);
    // Page Category
    Route::resource('page-category', PageCategoryController::class);
});
