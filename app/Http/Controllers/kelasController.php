<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use Illuminate\Http\Request;

class kelasController extends Controller
{
    public function index(Request $request){

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

        return view("student.kelas", [
            'halaman' => 'Kelas',
            'title' => 'Kelas',
            'students' =>  $students,
            'count' => $count,
            'executionTime' => $executionTime
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:255',
        ]);

        $result = kelas::create($validated);

        if ($result) {
            return redirect()->back()->with('success', 'Data kelas berhasil ditambahkan');
  }
    }

public function destroy($id){
    $data = kelas::findOrFail($id);

    $result = $data->delete();
 if($result){
    return redirect()->back()->with('success', 'Data kelas berhasil dihapus');
 }

}

public function update(Request $request, $id){
    $validated = $request->validate([

        'nama' => 'required|max:255',

    ]);

    $data = kelas::findOrFail($id);

    $data->update($validated);

    return redirect()->back()->with('success', 'Data siswa berhasil diupdate');
}


}
