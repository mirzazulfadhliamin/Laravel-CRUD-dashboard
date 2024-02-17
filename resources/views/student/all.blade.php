@extends("layouts.main")
@php
   $no= 1;

@endphp
@section('content')
<div class="container mt-4">

    @auth

    <a href="/student/create"> <button type="button" class="btn btn-light ">ADD</button></a>
    @endauth

    @if (session()->has('success'))
    <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
    </div>
@endif

    <h1>Welcome to My {{$halaman}}</h1>

    <p>Total: {{ $count }} hasil ({{ number_format($executionTime, 2) }} detik)</p>



    <table class="table table-auto text-white">
        <thead class="thead-dark">
          <tr>
            <th scope="col">NO</th>
            <th scope="col">NIS</th>
            <th scope="col">Nama</th>
            <th scope="col">Kelas</th>

            <th scope="col">halo bang</th>

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
                    @auth
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

              @endauth

          @endforeach
        </tbody>
      </table>





      <div class="d-flex justify-content-center mt-4 ">
        {{ $students->links('pagination::bootstrap-4') }}
    </div>

</div>
@endsection
