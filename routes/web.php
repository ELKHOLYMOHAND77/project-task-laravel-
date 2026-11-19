<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/courses', function () {
    return view('courses.index');
})->name('courses');


Route::resource('courses', CourseController::class);

Route::resource('courses', CourseController::class);
Route::resource('students', StudentController::class);
