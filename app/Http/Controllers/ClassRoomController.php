<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassRoomController extends Controller
{
    public function index(){
        return view('ClassRoom', [
            'title' => 'ClassRoom Page',
            'ClassRoom' => ClassRoom::all()
        ]);
    }
}