<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //method untung menampilkan halaman student
    public function index()
    {
        // mendapatkan data students dari database
        $students = Student::all();

        //

        // panggil view dan kirim data ke view
        return view('admin.contents.student.index', [
            'students' => $students
        ]);
    }



    // methood untuk menapilkann from tambah student
    public function create()
    {
        // dapatkan data courses dari database
        $courses = Courses::all();

        return view('admin.contents.student.create',[
            'courses' => $courses
        ]);
    }

    //method untuk menyimpan  data student  
    public function store(Request $request)
    {
        //validasi data yang diterima 
        $request->validate([
            'name' => 'required',
            'nim' => 'required|numeric',
            'major' => 'required',
            'class' => 'required',
            'courses_id' => 'nullable|numeric',
        ]);

        //simpan ke database 
        Student::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'major' => $request->major,
            'class' => $request->class,
            'courses_id' => $request->courses_id,
        ]);

        //arahkan ke halaman student index
        return redirect('/admin/student')->with('pesan', 'berhasil menambahkan data.');

        
    }


    //methood untuk menampilkan halaman edit
    public function edit($id)
    {
        //cari student berdasarkan id 
        $student = Student::find($id); //SELECT * FROM students where id =$id;

        // kirim student ke view edit
        return view('admin.contents.student.edit', [
            'student' => $student,
        ]);
    }
}
