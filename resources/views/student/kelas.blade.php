@extends("layouts.main")
@php
    $no = 1;
@endphp
@section('content')
<div class="container mt-4">

    <marquee behavior="" direction="left">
        <h1>Murid Murid tergabut 1 rt, suka rasing, WIbuuuuu</h1>
    </marquee>
    @auth

    <button type="button" class="btn btn-light " data-bs-toggle="modal" data-bs-target="#classModal">ADD</button>
    @endauth

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <h1>Welcome to My {{ $halaman }}</h1>

    <p>Total: {{ $count }} hasil ({{ number_format($executionTime, 2) }} detik)</p>

    <table class="table table-auto text-white">
        <thead class="thead-dark">
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama</th>
                @auth

                <th scope="col">Aksi</th>
                @endauth
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <th scope="row" class="">{{ $no++ }}</th>
                <td>{{ $student->nama }}</td>
                @auth
                <td class="align-middle">
                    <div class="btn-group m-2">
                        <button type="button" class="btn btn-warning btn-sm mr-2" data-bs-toggle="modal"
                            data-bs-target="#editModal_{{ $student->id }}">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm mr-2" data-bs-toggle="modal"
                            data-bs-target="#deleteModal_{{ $student->id }}">Delete</button>
                    </div>
                </td>
                @endauth

            </tr>

            <!-- Class Modal -->
<div class="modal fade" id="classModal" tabindex="-1" aria-labelledby="classModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="classModalLabel">Add Class</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="/student/kelas" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label text-light">Nama Kelas</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Class</button>
                </form>
            </div>
        </div>
    </div>
</div>



            <!-- Edit Modal -->
            <div class="modal fade" id="editModal_{{ $student->id }}" tabindex="-1" aria-labelledby="editModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit Class</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/student/kelas/{{ $student->id }}" method="POST">
                                @csrf
                                @method('PATCH') <!-- Corrected method to PATCH -->
                                <div class="mb-3">
                                    <label for="nama" class="form-label text-light">Nama Kelas</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        value="{{ $student->nama }}" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

                        <!-- Delete Modal -->
  <div class="modal fade" id="deleteModal_{{ $student->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            yakin bang mau di hapus ini murid? {{$student->nama}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form action="/student/kelas/{{ $student->id }}" method="POST" >
            @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger ">Delete</button>
      </form>
        </div>
      </div>
    </div>
  </div>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center mt-4">
        {{ $students->links('pagination::bootstrap-4') }}
    </div>

    <!-- Class Modal -->
    <div class="modal fade" id="classModal" tabindex="-1" aria-labelledby="classModalLabel" aria-hidden="true">

    </div>

</div>
@endsection
