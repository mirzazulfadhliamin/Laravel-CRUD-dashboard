{{ $isture = false}}

<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{$title}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>My Homepage</title>
    <link rel="stylesheet" href="sign-in.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="{{ URL('css/home.css') }}"> --}}
    <style>
        .nav-link {
            color: white !important;
            font-size: 20px;
        }
        body::before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.432);
        z-index: -1;
    }

        body{
            user-select: none;
        background-image: url('{{URL('images/bg.jpg')}}');
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        margin: 0;
        color:white;

        }

        .dropdown-menu.bg-transparent .dropdown-item:hover {
        background-color: transparent; /* Membuat background transparan saat di-hover */
        color: #ffffff; /* Warna teks pada hover */
    }

    /* Gaya hover untuk shadow pada dropdown item */
    .dropdown-item.hover-shadow-soft:hover {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Ubah efek shadow sesuai keinginan Anda */
    }

    .pagination {
        padding: 10px; /* Menambahkan padding untuk memberikan margin */
        border-radius: 5px; /* Border radius untuk sudut pagination */
    }

    .pagination li {

        margin-right: 5px; /* Memberikan margin antar elemen pagination */
    }

    .pagination a,
    .pagination span {
        background-color: transparent;
        color: rgb(255, 255, 255);
    }

    .pagination a:hover,
.pagination span:hover {
    background-color: white;
    color: black;
}



.form-signin {
        width: 100%;
        max-width: 550px;
        padding: 100px;
        margin: auto;
    }

    .form-floating. {
        margin-bottom: 15px;
        color: black !important;
        border-radius: 50%;
        position: relative;
    }

    .form-control{
        outline: none !important;
        background:transparent !important;
    }

    .lala{
        margin-top: 10px;
    }

    .form-control:hover{
        background-color: transparent;
    }

    .form-control.is-invalid {
        border-color: #fc6868;
        box-shadow: 0 0 10px rgba(243, 115, 115, 0.7);
    }

    .modal-content {
        background-color: rgba(35, 35, 35, 0.418);
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(77, 77, 77, 0.405);
    }

    .modal-body {
        padding: 20px; /* Sesuaikan nilai padding sesuai kebutuhan */
    }

    .input-group-append {
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
    }

    .input-group-text {
        border: none;
        background: none;
        color: white;
    }

    .form-control:focus {
        color: white !important;
        border-color: #fdfdfd; /* Warna hijau yang diinginkan */
        box-shadow: 0 0 0 0.25rem rgba(254, 254, 254, 0.096); /* Shadow hijau yang diinginkan */
    }

    /* Sisipkan ini untuk mengatur posisi ikon mata saat input berfokus */
    .form-control-icon {
        position: absolute;
        right: 8px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
    }
        .form-control:focus {
        color: white !important;
    }
    .form-control{
        color: white !important;
    }

    .form-control::placeholder {
        color: #b9b9b9;
    }
    .form-control:focus {
        border-color: #fdfdfd; /* Warna hijau yang diinginkan */
        box-shadow: 0 0 0 0.25rem rgba(254, 254, 254, 0.096); /* Shadow hijau yang diinginkan */
    }

    .card{
        background-color: rgba(35, 35, 35, 0.418);
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(77, 77, 77, 0.405);
    }
    input[type="date"]::-webkit-calendar-picker-indicator {
    filter: invert(1);
}

#kelas:focus {
        background-color: rgba(0, 0, 0, 0.351) !important;

    }

    .sidebar{
        position:fixed;
        height: 100vh;
        background-color: rgba(8, 6, 14, 0.288);
        box-shadow: 10px 4px 10px rgba(77, 77, 77, 0.27);

    }

    .custom-search-form {
    position: relative;
    margin-left: 30px;
    flex-grow: 1; /* This will make the form take up all available space */
}

.custom-search-input {
    width: 80%; /* This will make the input fill the entire width of its container */
}

    </style>
</head>

<body style="background-image: url('{{URL('images/bg.jpg')}}'); class="img js-fullheight">



    @if (request()->route()->getName() != 'dashboard' && request()->route()->getName() != 'dashboardkelas')
    @include('layouts.partial.navbar')
    @endif




    <section class="vh-100 gradient-custom">

        @yield('content')
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
</body>

</html>
