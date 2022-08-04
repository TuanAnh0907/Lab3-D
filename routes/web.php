<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\Admin\HomeController as AdminHomeCrl;

use App\Http\Controllers\Web\HomeController as WebHomeCrl;

use App\Http\Controllers\Web\AuthController;

use App\Http\Controllers\Auth\ForgotPasswordController;

use App\Http\Controllers\Auth\ConfirmCreateController;

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

/* Web page */

Route::get('/', [WebHomeCrl::class, 'index'])->name('web.home');

Route::get('detail', [WebHomeCrl::class, 'detail'])->name('web.detail');

Route::get('category', [WebHomeCrl::class, 'category'])->name('web.category');

/* Login , Logout , Edit Profile -> Web */

Route::prefix('web')->group(function () {

    Route::get('login', [AuthController::class, 'login'])->name('web.login');

    Route::post('check', [AuthController::class, 'checkLogin'])->name('web.auth.login');

    Route::get('profile', [AuthController::class, 'profile'])->name('web.profile');

    Route::put('profile', [AuthController::class, 'updateProfile'])->name('web.profile.update');

});

Route::get('logout', [AuthController::class, 'logout'])->name('web.logout');
/**/
Route::get('register', [AuthController::class, 'register'])->name('web.register');

Route::post('register', [AuthController::class, 'store'])->name('web.register.store');

// Admin page

Route::prefix('admin')->middleware('admin.login')->group(function () {

    Route::get('home', [AdminHomeCrl::class, 'home'])->name('admin.home');

    Route::get('logout', [AdminHomeCrl::class, 'logout'])->name('admin.logout');

    /*CRUD User*/

    Route::prefix('user')->group(function () {

        Route::get('', [UserController::class, 'index'])->name('admin.user.index');

        Route::get('edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');

        Route::put('update/{id}', [UserController::class, 'update'])->name('admin.user.update');

        Route::get('delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete');
    });
});

/*Forgot Password*/

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');

Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');

Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');

Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

/*Confirm create account*/

Route::get('confirm-create-account/{token}', [ConfirmCreateController::class, 'showConfirmForm'])->name('confirm.create.account.get');

Route::post('confirm-create-account', [ConfirmCreateController::class, 'submitConfirmForm'])->name('confirm.create.account.post');
