@extends("layouts.main")

@section('content')
<div class="container mt-4">
    <h1>Welcome to My {{$halaman}}</h1>
    <p>This is a simple homepage created using Bootstrap.</p>

    <div class="row mt-4 ">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{URL($foto)}}" class="card-img-top img-fluid. max-width: 100% height: auto" alt="Foto Profil">
                <div class="card-body">
                    <h5 class="card-title text-dark">{{$nama}}</h5>
                    <p class="card-text text-dark">{{$kelas}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
