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

                <form class="d-flex custom-search-form" action="/dashboard" method="GET">
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

<a href="/student/create"> <button type="button" class="btn btn-light ">ADD</button></a>


<div class="container ">
    <table class="table table-sm text-white">
        <thead class="thead-dark">
            <tr>
                <th scope="col">NO</th>
                <th scope="col">NIS</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>

        <tbody>

            @foreach($students as $student)

            <tr>
              <th scope="row" class="">{{$no++}}</th>
              <td>{{$student->nis}}</td>
              <td>{{$student->nama}}</td>
              <td>{{$student->kelas->nama}}</td>
              <td class="align-middle">
                <div class="btn-group m-2">
                    <a href="/student/detail/{{ $student->id }}"> <button type="button" class="btn btn-success btn-sm mr-5">Info</button></a>
                    <a href="/student/edit/{{$student->id}}"><button type="button" class="btn btn-warning btn-sm mr-2">Edit</button></a>
                    <button type="button" class="btn btn-danger btn-sm mr-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Delete
                      </button>
                </div>

             </td>
            </tr>

              <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <form action="/student/delete/{{ $student->id }}" method="POST" >
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





      <div class="d-flex justify-content-center mt-4 ">
        {{ $students->links('pagination::bootstrap-4') }}
    </div>
</div>
@endif





        </main>
    </div>

</div>



@endsection
