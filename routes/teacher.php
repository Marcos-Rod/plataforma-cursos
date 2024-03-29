<?php

use App\Http\Controllers\Instructor\CourseController;
use App\Http\Livewire\Instructor\CoursesCurriculum;
use Illuminate\Support\Facades\Route;

Route::redirect('', 'instructor/courses', 301);

Route::resource('courses', CourseController::class)->names('courses');

Route::get('courses/{course}/curriculum', CoursesCurriculum::class)->name('courses.curriculum');

Route::get('courses/{course}/goals', [CourseController::class, 'goals'])->name('courses.goals');