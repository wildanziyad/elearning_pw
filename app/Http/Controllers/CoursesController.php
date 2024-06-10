<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    //method untung menampilkan halaman student
    public function index(){
        // mendapatkan data courses dari database
        $courses= Courses::all();

        // panggil view dan kirim data ke view
        return view('admin.contents.courses.index',[
            'courses' => $courses
        ]);
    }
}
