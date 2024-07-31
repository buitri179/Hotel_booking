<?php

use App\Http\Controllers\AdminTemplateController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('departments', DepartmentController::class);
Route::resource('staffs', StaffController::class);
Route::resource('bookings', BookingController::class);
Route::get('/home',function (){
    return view('demo');
    });
