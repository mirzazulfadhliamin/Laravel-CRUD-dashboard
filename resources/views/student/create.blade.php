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
        <form action="/student/add" method="POST">
        @csrf
        <div class="form-group">
          <label for="nis">NIS</label>
          <input type="number" name="nis" class="form-control" id="nis" placeholder="Enter NIS">
        </div>
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" name="nama" class="form-control" id="nama" placeholder="Enter student name">
        </div>
        <div class="form-group">
          <label for="kelas">Kelas</label>
          <input type="text" name="kelas" class="form-control" id="kelas" placeholder="Enter class">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" class="form-control" id="alamat" rows="3" placeholder="Enter student address"></textarea>
          </div>
          <div class="form-group mb-2">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir">
          </div>
        <button type="submit" class="btn btn-primary mx-auto">Add Student</button>
      </form>
    </div>
  </div>
</div>
@endsection
