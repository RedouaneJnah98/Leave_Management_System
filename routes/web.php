<?php

//use \App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\DesignationController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LeaveApplicationController;
use App\Http\Controllers\Admin\LeavesController;
use App\Http\Controllers\Admin\LeaveTypeController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\User\EmployeeHomeController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('employee')->name('employee.')->group(function () {
    Route::middleware(['guest:web'])->group(function () {
        Route::view('/login', 'employee.login')->name('login');
        Route::post('/check', [UserController::class, 'check'])->name('check');
    });

    Route::middleware(['auth:web'])->group(function () {
        Route::get('/home', [EmployeeHomeController::class, 'index'])->name('home');
        Route::get('/application_leave', [LeaveApplicationController::class, 'index'])->name('application_leave');
        Route::post('/application', [LeaveApplicationController::class, 'application'])->name('application');
        Route::get('/applications', [EmployeeHomeController::class, 'leave_applications'])->name('applications');

        Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    });
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(['guest:admin', 'preventBackHistory'])->group(function () {
        Route::view('/login', 'admin.login')->name('login');
        Route::post('/check', [AdminController::class, 'check'])->name('check');
    });

    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
        Route::get('/report', [HomeController::class, 'reports'])->name('report');
        Route::get('/pending_leaves', [LeavesController::class, 'pending'])->name('pending_leaves');
        Route::get('approved_leaves', [LeavesController::class, 'approved'])->name('approved_leaves');
        Route::get('not_approved_leaves', [LeavesController::class, 'not_approved'])->name('not_approved_leaves');
        // Resource Controller CRUD
        Route::resource('users', UsersController::class);
        Route::resource('employee', EmployeeController::class);
        Route::resource('department', DepartmentController::class);
        Route::resource('designation', DesignationController::class);
        Route::resource('leave_type', LeaveTypeController::class);
        Route::resource('leaves', LeavesController::class)->parameter('leaves', 'leave');
    });
});


