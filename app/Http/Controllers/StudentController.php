<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 10;
        $data = Student::latest();

        if ($request->has('search')) {
            $data->where('nama', 'like', '%' . $request->search . '%');
        }

        $students = $data->paginate($perPage);

        return view("student.all", [
            'halaman' => 'student',
            'title' => 'student',
            'students' =>  $students,
        ]);
    }


    public function show(Student $student){
        return view( "student.detail", [
            'halaman' => 'DetailPage' ,
            'foto' => "images/ghost2.png"
            ,
        'title' => 'detail-student', 'student' => $student//route model binding
    ,],);
    }

    public function create(){
        return view( "student.create", [
            'halaman' => 'AddPage',
            'title' => 'addPage',

    ]);
    }

    public function store(Request $request){


    $validated = $request->validate([
        'nis' => 'required|max:255',
        'nama' => 'required|max:255',
        'kelas' => 'required',
        'alamat' => 'required',
        'tgl_lahir' => 'required',
    ]);


//    Student::create($validated);

   //$validated['tgl_lahir'] = date('Y-m-d', strtotime($request->tgl_lahir));

   Student::create($validated);

   return redirect('/student')->with('success', 'Data siswa berhasil ditambahkan');
}

public function destroy($id){
    $data = Student::findOrFail($id);

 $data->delete();
    return redirect('/student')->with('success', 'Data siswa berhasil dihapus');
}

public function update(Request $request, $id){
    $validated = $request->validate([
        'nis' => 'required|max:255',
        'nama' => 'required|max:255',
        'kelas' => 'required',
        'alamat' => 'required',
        'tgl_lahir' => 'required',
    ]);

    $data = Student::findOrFail($id);

    $data->update($validated);

    return redirect('/student')->with('success', 'Student updated successfully');
}


public function edit(Student $student){
    return view('student.update', [
        'halaman' => 'EditPage',
        'title' => 'EditPage',
        'student' => $student
    ]);
}

}
