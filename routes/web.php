<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;    
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EnrollmentController;

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

Route::get('/', function () {
    return view('layout');
});


//group routing
Route::group(['prefix' => '/students'], function () {
Route::get('', [StudentController::class,'index']);
Route::get('/create', [StudentController::class,'create']);
Route::post('', [StudentController::class,'store']);
Route::get('/{id?}', [StudentController::class,'show']);
Route::get('/{id?}/edit', [StudentController::class,'edit']);
Route::patch('/{id?}', [StudentController::class,'update']);
Route::delete('/{id?}', [StudentController::class,'destroy']);
});


//group routing
Route::group(['prefix' => '/teachers'], function () {
Route::get('', [TeacherController::class,'index']);
Route::get('/create', [TeacherController::class,'create']);
Route::post('', [TeacherController::class,'store']);
Route::get('/{id?}', [TeacherController::class,'show']);
Route::get('/{id?}/edit', [TeacherController::class,'edit']);
Route::patch('/{id?}', [TeacherController::class,'update']);
Route::delete('/{id?}', [TeacherController::class,'destroy']);
});

//group routing
Route::group(['prefix' => '/courses'], function () {
Route::get('', [CourseController::class,'index']);
Route::get('/create', [CourseController::class,'create']);
Route::post('', [CourseController::class,'store']);
Route::get('/{id?}', [CourseController::class,'show']);
Route::get('/{id?}/edit', [CourseController::class,'edit']);
Route::patch('/{id?}', [CourseController::class,'update']);
Route::delete('/{id?}', [CourseController::class,'destroy']);
});


//group routing
Route::group(['prefix' => '/batches'], function () {
Route::get('', [BatchController::class,'index']);
Route::get('/create', [BatchController::class,'create']);
Route::post('', [BatchController::class,'store']);
Route::get('/{id?}', [BatchController::class,'show']);
Route::get('/{id?}/edit', [BatchController::class,'edit']);
Route::patch('/{id?}', [BatchController::class,'update']);
Route::delete('/{id?}', [BatchController::class,'destroy']);
});

//group routing
Route::group(['prefix' => '/enrollments'], function () {
Route::get('', [EnrollmentController::class,'index']);
Route::get('/create', [EnrollmentController::class,'create']);
Route::post('', [EnrollmentController::class,'store']);
Route::get('/{id?}', [EnrollmentController::class,'show']);
Route::get('/{id?}/edit', [EnrollmentController::class,'edit']);
Route::patch('/{id?}', [EnrollmentController::class,'update']);
Route::delete('/{id?}', [EnrollmentController::class,'destroy']);
});

