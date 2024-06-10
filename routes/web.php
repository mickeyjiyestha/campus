<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClassRoomController;
use App\Http\Controllers\TeacherController;
use App\Models\student;

Route::get('/', [HomeController::class, 'index']);

Route::get('/students', [StudentController::class, 'index']);

Route::get('/classroom', [ClassRoomController::class, 'index']);

Route::get('/teacher', [TeacherController::class, 'index']);

Route::get('/studentsall/{student:slug}', [StudentController::class, 'show']);

Route::get('/teacherall/{teacher:slug}', [TeacherController::class, 'show']);