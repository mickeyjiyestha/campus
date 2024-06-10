<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    public function index(){
        return view('students', [
            'title' => 'Students Page',
            'students' => student::all()
        ]);
    }

    public function show(student $student){
        return view ('studentsall', [
            'title' => 'Student',
            'student' => $student
        ]);
    }
}