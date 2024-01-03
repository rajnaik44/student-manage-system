<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;    

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