<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;




Route::get('/', function () {
    return view('welcome');
});

//Route::get('/dashboard', function () {
//   return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');


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
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
