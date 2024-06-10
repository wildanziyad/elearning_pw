<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/dashboard', [DashboardController::class, 'index']);


// route  untuk menampilkan student
Route::get('admin/student', [StudentController ::class, 'index']);

// route menampilkan courses
Route::get('admin/courses', [CoursesController ::class, 'index']);


// route untuk menampilkan form tambah students
Route::get('admin/student/create', [StudentController ::class, 'create']);

// route untuk mengirim data form tambah student
Route::post('/admin/student/create',[StudentController::class,'store']);

//route  untuk menampilkan halaman edit student
Route ::get ('admin/student/edit{id}',[StudentController::class,'edit'])->name('student.edit');

// root untuk menyimpan hasil update student
Route::put('admin/student/update/{id}', [StudentController::class,'update']);

// route untuk menghapus student
Route::delete('admin/student/delete/{id}', [StudentController::class,'destroy']);