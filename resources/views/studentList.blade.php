@extends('main')

@section('title', 'Students')

@section('content')     

<div class="row my-5 px-3">
    <div class="col-md-4 shadow-lg p-0">
        <div class="alert alert-dark text-center">
            <h3 class="m-0">Add Student</h3>
        </div>
        <div class="p-4">
            <form action="addStudent" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Student Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="regNo" class="form-label">Register Number</label>
                    <input type="text" class="form-control" id="regNo" name="regNo" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-outline-dark col-md-12 fw-bold">Add Student</button>
            </form>
        </div>
    </div>
    <div class="col-md-7 offset-md-1 shadow-lg p-0">
        <div class="alert alert-dark text-center">
            <h3 class="m-0">Students List</h3>
        </div>
        <div class="p-4">
            @if (count($students) > 0)
                <table class="table">
                    <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Reg.No</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->regNo }}</td>
                            <td>
                                <a href="/delId/{{ $student->id }}" class="btn btn-outline-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-danger text-center">...No records found...</p>
            @endif
        </div>
    </div>
</div>

@endsection