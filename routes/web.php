<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::get('/',[StudentController::class,'index']);
//Route::get('student-list',[StudentController::class,'index']);
Route::get('add-student',[StudentController::class,'addStudent']);
Route::get('save-student',[StudentController::class,'saveStudent']);
Route::get('edit-student/{id}',[StudentController::class,'editStudent']);
Route::get('update-student',[StudentController::class,'updateStudent']);
Route::get('delete-student/{id}',[StudentController::class,'deleteStudent']);