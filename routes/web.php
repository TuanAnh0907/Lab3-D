<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\Admin\HomeController as AdminHomeCrl;

use App\Http\Controllers\Web\HomeController as WebHomeCrl;

use App\Http\Controllers\Web\AuthController;

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

Route::get('/', [WebHomeCrl::class, 'getIndex'])->name('web.home');

Route::get('detail', [WebHomeCrl::class, 'getDetail'])->name('web.detail');

Route::get('category', [WebHomeCrl::class, 'getCategory'])->name('web.category');

/**/

Route::prefix('web')->group(function () {

    Route::get('login', [AuthController::class, 'getLogin'])->name('web.login');

    Route::post('check', [AuthController::class, 'postlogin'])->name('web.auth.login');

    Route::get('profile', [AuthController::class, 'profile'])->name('web.profile');

    Route::put('profile', [AuthController::class, 'updateProfile'])->name('web.profile.update');

});

Route::get('logout', [AuthController::class, 'logout'])->name('web.logout');
/**/
Route::get('register', [AuthController::class, 'getRegister'])->name('web.register');

Route::post('create', [AuthController::class, 'store'])->name('web.register.store');
// Admin page

Route::prefix('admin')->middleware('admin.login')->group(function () {

    Route::get('home', [AdminHomeCrl::class, 'getIndex'])->name('admin.home');

    Route::get('logout', [AdminHomeCrl::class, 'getLogin'])->name('admin.logout');

    Route::prefix('user')->group(function () {

        Route::get('', [UserController::class, 'index'])->name('admin.user.index');

        Route::get('edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');

        Route::put('update/{id}', [UserController::class, 'update'])->name('admin.user.update');

        Route::get('delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete');
    });
});
