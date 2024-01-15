@extends("layouts.main")
@php
   $no= 1;

@endphp
@section('content')
<div class="container mt-4">
    <a href="/student/create"> <button type="button" class="btn btn-success btn-sm">ADD</button></a>

    @if (session()->has('success'))
    <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
    </div>
@endif

    <h1>Welcome to My {{$halaman}}</h1>
    <table class="table table-striped">
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
              <th scope="row">{{$no++}}</th>
              <td>{{$student->nis}}</td>
              <td>{{$student->nama}}</td>
              <td>{{$student->kelas}}</td>
              <td class="align-middle">
                <div class="btn-group m-2">
                    <a href="/student/detail/{{ $student->id }}"> <button type="button" class="btn btn-success btn-sm mr-2">Info</button></a>
                    <a href="/student/edit/{{$student->id}}"><button type="button" class="btn btn-warning btn-sm mr-2">Edit</button></a>
                    <form action="/student/delete/{{ $student->id }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                  </form>
                </div>

             </td>
            </tr>
          @endforeach
        </tbody>
      </table>

      <div class="d-flex justify-content-center mt-4">
        {{ $students->links('pagination::bootstrap-4') }}
    </div>

</div>
@endsection
