@extends("layouts.main")


@section('content')
@php
   $no= 1;

@endphp


<div class="container-fluid">

    <div class="row">
<!-- Sidebar -->
@include('layouts.partial.sidebar')



        <!-- Main content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>

                <form class="d-flex custom-search-form" action="/dashboard/kelas" method="GET">
                    <input id="searchInput" class="form-control me-2 placeho custom-search-input" type="search" name="search" placeholder="Search...." aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>

                <a href="/logout" class="btn btn-outline-light ms-2">Logout</a>
            </div>



            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">

                                <h2 class="card-title">Selamat datang, {{ $user }}!</h2>
                                <p class="card-text">Role: {{ $role }}</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Statistics</h2>
    <p>Total: {{ $count }} hasil ({{ number_format($executionTime, 2) }} detik)</p>

                        </div>
                    </div>
                </div>
            </div>


            @if($count == 0)

            <div class="text-center">
                <img class="img-fluid" src="{{ URL('images/notfound.png') }}" alt="No Data Found" style="opacity: 0.7;" draggable="false">
                <p>No data found</p>
            </div>
@else

@if (session()->has('success'))
<div class="alert alert-success col-lg-12" role="alert">
    {{ session('success') }}
</div>
@endif

<button type="button" class="btn btn-light " data-bs-toggle="modal" data-bs-target="#classModal">ADD</button>

<div class="container ">
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

        </div>

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
@endif





        </main>
    </div>

</div>



@endsection
