<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    function stuList() {

        $students = Student::all();
        return view('studentList', ['students' => $students]);

    }

    function addStudent(Request $req) {

        $student = new Student();

        $student->name = $req->input('name');
        $student->email = $req->input('email');
        $student->regNo = $req->input('regNo');
        $student->save();

        return redirect('/');

    }

    function delStu($id) {

        Student::find($id)->delete();
        return redirect('/');
    }
}
