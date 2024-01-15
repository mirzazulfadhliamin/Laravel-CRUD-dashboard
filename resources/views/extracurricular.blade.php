@extends("layouts.main")
@php
   $no= 1;

@endphp
@section('content')
<div class="container mt-4">
    <h1>Welcome to My {{$halaman}}</h1>
    <table class="table table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Nama_Pembina</th>
            <th scope="col">Deskripsi</th>

          </tr>
        </thead>
        <tbody>

            @foreach($extracurricular as $extracurriculars)

            <tr>
              <th scope="row">{{$no++}}</th>
              <td>{{$extracurriculars['nama']}}</td>
              <td>{{$extracurriculars['nama_pembina']}}</td>
              <td>{{$extracurriculars['kegiatan']}}</td>

            </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection
