<nav class="navbar navbar-expand-lg navbar-collapse bg-transparent">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="#">Navbar</a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item ">
                    <a class="nav-link active" aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/student">Student</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Student
                    </a>
                    <ul class="dropdown-menu bg-transparent" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-white hover-shadow-soft" href="/student">Student</a></li>
                        <li><a class="dropdown-item text-white" href="/student/kelas">Kelas</a></li>
                        {{-- <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/extracurricular" tabindex="-1" aria-disabled="true">Extracurricular</a>
                </li>
            </ul>
            <form class="d-flex" action="/student" method="GET">
                <input id="searchInput" class="form-control me-2 placeho" type="search" name="search" placeholder="Search...." aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>

            @auth
            <li class="nav-item dropdown list-unstyled">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                    {{ auth()->user()->name }}
                </a>

                <ul class="dropdown-menu dropdown-menu-end" style="list-style-type: none;"> <!-- Added inline style -->
                    <li><a href="/dashboard" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Dashboard</a></li>
                    <li>
                        <a href="/logout" class="dropdown-item">Logout</a>
                    </li>
                </ul>
            </li>
@else
    <li class="nav-item">
        <a href="/login" class="btn btn-outline-light ms-2">Login</a>
    </li>
@endauth

            <!-- Add the login button -->
        </div>
    </div>
</nav>
