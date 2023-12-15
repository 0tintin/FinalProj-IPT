<?php

use App\Http\Controllers\SiteController;
// use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\AttendanceController;


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [SiteController::class, 'home'])->name('home');

// Route::get('/users', [UserController::class, 'user'])->name('users');
// Route::get('/users/create', [UserController::class, 'create'])->name('users');
// Route::post('/users/create', [UserController::class, 'store'])->name('users');
// Route::get('/users/{user}', [UserController::class, 'edit'])->name('users');
// Route::post('/users/{user}', [UserController::class, 'update'])->name('users');
// Route::delete('/users/delete/{user}', [UserController::class, 'delete']);

Route::get('/employees', [EmployeeController::class, 'employee'])->name('employees');
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees');
Route::post('/employees/create', [EmployeeController::class, 'store'])->name('employees');
Route::get('/employees/{employee}', [EmployeeController::class, 'edit'])->name('employees');
Route::post('/employees/{employee}', [EmployeeController::class, 'update'])->name('employees');
Route::delete('/employees/delete/{employee}', [EmployeeController::class, 'delete']);

Route::get('/shifts', [ShiftController::class, 'shift'])->name('shifts');
Route::get('/shifts/create', [ShiftController::class, 'create'])->name('shifts');
Route::post('/shifts/create', [ShiftController::class, 'store'])->name('shifts');
Route::get('/shifts/{shift}', [ShiftController::class, 'edit'])->name('shifts');
Route::post('/shifts/{shift}', [ShiftController::class, 'update'])->name('shifts');
Route::delete('/shifts/delete/{shift}', [ShiftController::class, 'delete']);

Route::get('/attendances', [AttendanceController::class, 'attendance'])->name('attendances');
Route::get('/attendances/create', [AttendanceController::class, 'create'])->name('attendances');
Route::post('/attendances/create', [AttendanceController::class, 'store'])->name('attendances');
Route::get('/attendances/{attendance}', [AttendanceController::class, 'edit'])->name('attendances');
Route::post('/attendances/{attendance}', [AttendanceController::class, 'update'])->name('attendances');
Route::delete('/attendances/delete/{attendance}', [AttendanceController::class, 'delete']);



