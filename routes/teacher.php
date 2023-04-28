<?php

use App\Http\Controllers\Instructor\CourseController;
use Illuminate\Support\Facades\Route;

Route::redirect('', 'instructor/courses', 301);

Route::resource('courses', CourseController::class)->names('courses');