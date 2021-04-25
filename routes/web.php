<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

Route::resource('student', StudentController::class);
Route::resource('teacher', TeacherController::class);
