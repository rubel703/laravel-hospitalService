<?php

use App\Http\Controllers\backend\AdminDashboardController;
use App\Http\Controllers\backend\AppoinmentController;
use App\Http\Controllers\backend\DepartmentController;
use App\Http\Controllers\backend\DoctorController;
use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Route;

//frontend route
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('service', [HomeController::class, 'service'])->name('service');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::POST('/home', [HomeController::class, 'store'])->name('storeappoinment');



//backend route-department
Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])->name('adminDashboard');

Route::get('/createdepartment', [DepartmentController::class, 'create'])->name('create');
Route::POST('/storedepartment', [DepartmentController::class, 'store'])->name('store');
Route::get('/viewdepartment', [DepartmentController::class, 'index'])->name('index');
Route::get('/deletedepartment/{id}', [DepartmentController::class, 'destroy'])->name('destroy');
Route::get('/editdepartment/{id}', [DepartmentController::class, 'edit'])->name('edit');
Route::POST('/updatedepartment/{id}', [DepartmentController::class, 'update'])->name('update');

#doctor route----------
Route::get('/createdoctor', [DoctorController::class, 'create'])->name('createdoctor');
Route::POST('/storedoctor', [DoctorController::class, 'store'])->name('storedoctor');
Route::get('/viewdoctor', [DoctorController::class, 'index'])->name('indexdoctor');
Route::get('/deletedoctor/{id}', [DoctorController::class, 'destroy'])->name('destroydoctor');
Route::get('/editdoctor/{id}', [DoctorController::class, 'edit'])->name('editdoctor');
Route::POST('/updatedoctor/{id}', [DoctorController::class, 'update'])->name('updatedoctor');

#appoinment route---------
Route::get('/viewappoinment',[AppoinmentController::class,'viewAppoinment'])->name('viewappoinment');
Route::get('/deletemessage/{id}',[AppoinmentController::class,'destroyMessage'])->name('deletemessage');
