<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddStudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }
    public function studentsView()
    {
        return view('students.add-student-form');
    }

    public function addStudent(AddStudentRequest $request)
    {
        $data = $request->all();
        Student::create($data);
        return redirect()->route('students');
    }
}
