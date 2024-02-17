@extends("layouts.main")

@section('content')
<div class="container mt-4">
  <h1>Welcome to My {{$halaman}}</h1>

  <a href="/student" class="btn btn-primary mb-4">Back to List</a>

  <div class="card">
    <div class="card-header">
      <h5 class="card-title">Add Student</h5>
    </div>
    <div class="card-body">
        <form action="/student/update/{{$student->id}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="nis">NIS</label>
          <input type="number" name="nis" class="form-control" id="nis" placeholder="Enter NIS" value={{ $student->nis }}>
        </div>
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" name="nama" class="form-control" id="nama" placeholder="Enter student name" value={{ $student->nama }}>
        </div>
        <div class="form-group">
            <label for="kelas-id">Kelas</label>
            <select name="kelas_id" class="form-control @error('kelas') is-invalid @enderror" id="kelas">
                <option value="">Select Class</option>
                @foreach($grades as $grade)

                <option value="{{ $grade->id}}" {{ $grade->id == $student->kelas_id ? 'selected' : '' }}>
                    {{ $grade->nama }}
                </option>
                @endforeach
            </select>

            @error('kelas_id')
                <strong class="text-danger">{{ $message }}</strong>
            @enderror
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" class="form-control" id="alamat" rows="3" placeholder="Enter student address" >{{ $student->alamat }}</textarea>
          </div>
          <div class="form-group mb-2">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value={{ $student->tgl_lahir }}>
          </div>
        <button type="submit" class="btn btn-primary mx-auto">Add Student</button>
      </form>
    </div>
  </div>
</div>
@endsection
