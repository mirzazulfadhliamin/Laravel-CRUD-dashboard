<aside id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar vh-100">
    <div class="position-sticky d-flex flex-column">
        <div class="profile text-center mb-4">
            <img src="{{ URL('images/foto.png') }}" alt="Image" class="img-fluid rounded-circle ppdashboard ">
            <h3 class="name mt-2">{{ $name }}</h3>
            <span class="country">Daren, Jalan Sudirman</span>
        </div>

        <hr class="border "/>
        <div class="row mb-3 mt-3 ">
            <div class="col text-center mr-2 ml-2">
                <strong class="number font-weight-bold display-6">{{ $studentscount / 1000 >= 1 ? number_format($studentscount / 1000, 2, '.', '') . 'K' : $studentscount }}</strong>
                <span class="number-label">Student</span>
            </div>
            <div class="col text-center mr-2 ml-2">
                <strong class="number font-weight-bold display-6">{{ $class / 1000 >= 1 ? number_format($class / 1000, 2, '.', '') . 'K' : $class }}</strong>
                <span class="number-label">Class</span>
            </div>

        </div>


        <hr class="border "/>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="/">
                    Home
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/dashboard">
                    Student
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dashboard/kelas">
                    Kelas
                </a>
            </li>

        </ul>
    </div>
</aside>
