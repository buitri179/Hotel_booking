<?php

use App\Http\Controllers\AdminTemplateController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('layouts.admintemplate');
});

//Departments Routes
Route::get('departments/create',[DepartmentController::class,'create'])->name('departments.create');
Route::get('departments/{id}/delete',[DepartmentController::class,'delete'])->name('departments.delete');
Route::post('departments/create',[DepartmentController::class,'store'])->name('departments.store');
Route::resource('departments',DepartmentController::class);

//Staffs Routes
Route::get('staffs/create',[StaffController::class,'create'])->name('staffs.create');
Route::get('staffs/{id}/delete',[StaffController::class,'delete'])->name('staffs.delete');
Route::post('staffs/create',[StaffController::class,'store'])->name('staffs.store');
Route::resource('staffs',StaffController::class);


//Bookings Routes
Route::get('bookings/create',[BookingController::class,'create'])->name('bookings.create');
Route::get('bookings/{id}/delete',[BookingController::class,'delete'])->name('bookings.delete');
Route::post('bookings/create',[BookingController::class,'store'])->name('bookings.store');
Route::resource('bookings',BookingController::class);

//User Template
Route::get('home',function (){
    return view('usertemplate.index');
});
