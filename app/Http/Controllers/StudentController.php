<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Retrieves the latest students and filters them based on the search criteria.
     *
     * @throws Some_Exception_Class description of exception
     * @return View The view that displays the list of students.
     */
    public function index(Request $request)
    {
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

        return view("student.all", [
            'halaman' => 'student',
            'title' => 'student',
            'students' =>  $students,
            'count' => $count,
            'executionTime' => $executionTime
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
        $grades = Kelas::all();



        return view( "student.create", [
            'halaman' => 'AddPage',
            'title' => 'addPage',
            'grades' => kelas::all()

    ]);
    }

    public function store(Request $request){


    $validated = $request->validate([
        'nis' => 'required|max:255',
        'nama' => 'required|max:255',
        'kelas_id' => 'required',
        'alamat' => 'required',
        'tgl_lahir' => 'required',
    ]);


    $result =  Student::create($validated);

    if($result){
   return redirect('/student')->with('success', 'Data siswa berhasil ditambahkan');

    }
}

public function destroy($id){
    $data = Student::findOrFail($id);

    $result = $data->delete();
 if($result){
    return redirect('/student')->with('success', 'Data siswa berhasil dihapus');
 }

}

public function update(Request $request, $id){
    $validated = $request->validate([
        'nis' => 'required|max:255',
        'nama' => 'required|max:255',
        'kelas_id' => 'required',
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
        'student' => $student,
        'grades' => kelas::all()
    ]);
}



}
