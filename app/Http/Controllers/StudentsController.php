<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index(){
        return view( "student/all", ['halaman' => 'student' ,
        'title' => 'student',
       'students' => Student::all(),
       ]);
    }
}
