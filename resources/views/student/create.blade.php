@extends("layouts.main")

@section('content')
<div class="container mt-4">
  <h1 class="text-center mb-4">Welcome to My {{$halaman}}</h1>

  <a href="{{ url('/student') }}" class="btn btn-primary mb-4">Back to List</a>

  <div class="card">
    <div class="card-header">
      <h5 class="card-title">Add Student</h5>
    </div>
    <div class="card-body">
      <form action="{{ url('/student/add') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="nis">NIS</label>
          <input type="number" name="nis" class="form-control @error('nis') is-invalid @enderror" id="nis" placeholder="Enter NIS" value="{{ old('nis') }}">

          @error('nis')
                <strong class="text-danger">{{ $message }}</strong>
          @enderror
        </div>
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Enter student name" value="{{ old('nama') }}">
          @error('nama')
                <strong class="text-danger">{{ $message }}</strong>
          @enderror
        </div>
        <div class="form-group">
            <label for="kelas-id">Kelas</label>
            <select name="kelas_id" class="form-control @error('kelas') is-invalid @enderror" id="kelas">
                <option value="">Select Class</option>
                @foreach($grades as $grade)

                <option value="{{ $grade->id }}">
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
            <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" rows="3" placeholder="Enter student address">{{ old('alamat') }}</textarea>

            @error('alamat')
            <strong class="text-danger">{{ $message }}</strong>
          @enderror
        </div>
        <div class="form-group mb-2">
          <label for="tgl_lahir">Tanggal Lahir</label>
          <input type="date" name="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" value="{{ old('tgl_lahir') }}">

          @error('tgl_lahir')
          <strong class="text-danger">{{ $message }}</strong>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary d-block mx-auto">Add Student</button>
      </form>
    </div>
  </div>
</div>
@endsection
