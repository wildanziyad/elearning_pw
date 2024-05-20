@extends('admin.main')
@section('content')
<div class="pagetitle">
      <h1>Dashboard </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="card">
        <div class="card-body">
            <a href="/student/create" class="btn btn-primary m-3">+student</a>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Nim</th>
                        <th>Major</th>
                        <th>Class</th>
                        <th>Action</th>
                    </tr>

                    @foreach($students as $student)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->nim}}</td>
                            <td>{{$student->major}}</td>
                            <td>{{$student->class}}</td>
                            <td>
                                <a href="#" class="btn btn-warning"> Edit</a>
                                <a href="#" class="btn btn-danger"> Delete</a>
                            </td>
                        </tr>

                    @endforeach
                </table>
            </div>
        </div>
      </div>
    </section>

@endsection