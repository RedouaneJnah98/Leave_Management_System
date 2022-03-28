<?php

use \App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\AdminController;
use \App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\DesignationController;
use App\Http\Controllers\Admin\LeaveTypes;
use \App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;

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

Route::prefix('user')->name('user.')->group(function () {
    Route::middleware(['guest:web'])->group(function () {
        Route::view('/login', 'user.login')->name('login');
        Route::post('/check', [UserController::class, 'check'])->name('check');
    });

    Route::middleware(['auth:web'])->group(function () {
        Route::view('/home', 'user.home')->name('home');
        Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    });
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(['guest:admin', 'preventBackHistory'])->group(function () {
        Route::view('/login', 'admin.login')->name('login');
        Route::post('/check', [AdminController::class, 'check'])->name('check');
    });

    Route::middleware(['auth:admin'])->group(function () {
        // Views
        Route::view('/home', 'admin.home')->name('home');
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
        // Resource Controller CRUD
        Route::resource('users', UsersController::class);
        Route::resource('employee', EmployeeController::class);
        Route::resource('department', DepartmentController::class);
        Route::resource('designation', DesignationController::class);
        Route::resource('leave_type', LeaveTypes::class);
    });
});


