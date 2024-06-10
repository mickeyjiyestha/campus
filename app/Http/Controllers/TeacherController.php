<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index(){
        return view('teacher', [
            'title' => 'Teacher Page',
            'teacher' => Teacher::all()
        ]);
    }

    public function show(Teacher $teacher){
        return view('teacherall', [
            'title' => 'Single Teacher Page',
            'teacher' => $teacher
        ]);
    }
}