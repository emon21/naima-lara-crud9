<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/demo',[WebsiteController::class,'index']);
Route::get('/student',[WebsiteController::class,'index']);
Route::post('/student_process',[WebsiteController::class,'student_process']);
Route::get('/student-list',[WebsiteController::class,'student_view']);
Route::get('/student-edit/{id}',[WebsiteController::class,'edit'])->name('student.edit');
Route::post('/student/update/{id}',[WebsiteController::class,'update'])->name('student.update');
Route::get('/student-delete/{id}',[WebsiteController::class,'studentDelete'])->name('student.delete');



