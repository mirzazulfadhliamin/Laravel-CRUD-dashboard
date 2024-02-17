<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request){

        $perPage = 10;
        $data = Student::latest();
        $count = 0;

        $startTime = microtime(true);

        if ($request->has('search')) {
            $result = $data->where('nama', 'like', '%' . $request->search . '%');
            $count = $result->count();
        }
        else {

            $count = Student::count();
        }

        $students = $data->paginate($perPage);

        $endTime = microtime(true);
        $executionTime = ($endTime - $startTime);


        $studentscount = Student::count();
        $classcount = kelas::count();

        return view("dashboard.dashboard", [
            'name' => $request->user()->name,
            'halaman' => 'Dashboard',
            'title' => 'Dashboarad',
            'user' => $request->user()->name,
            'role' => 'Admin',
            'students' =>  $students,
            'count' => $count,
            'executionTime' => $executionTime,
            'studentscount' => $studentscount,
            'class' => $classcount,

        ]);
    }

    public function kelas(Request $request){

        $perPage = 10;
        $data = kelas::latest();
        $count = 0;

        $startTime = microtime(true);

        if ($request->has('search')) {
            $result = $data->where('nama', 'like', '%' . $request->search . '%');
            $count = $result->count();
        }
        else {

            $count = kelas::count();
        }

        $students = $data->paginate($perPage);

        $endTime = microtime(true);
        $executionTime = ($endTime - $startTime);

        $studentscount = Student::count();
        $classcount = kelas::count();




        return view("dashboard.dbkelas", [
            'name' => $request->user()->name,
            'halaman' => 'Dashboard',
            'title' => 'Dashboarad',
            'user' => $request->user()->name,
            'role' => 'Admin',
            'students' =>  $students,
            'count' => $count,
            'executionTime' => $executionTime,
            'studentscount' => $studentscount,
            'class' => $classcount,

        ]);
    }
}
