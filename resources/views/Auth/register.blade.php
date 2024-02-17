@extends("layouts.main")

@section('content')



<main class="form-signin">
    <form action="/register" method="POST" id="registerForm">
        @csrf <!-- Add CSRF token for security -->
        <h1 class="h1 mb-4 text-center text-white">Please Register</h1>

        <div class="form-floating">
            <input type="name" class="form-control lala @error('name') is-invalid @enderror" id="floatingInput" placeholder="Budi suparman" name="name" value="{{ old('name') }}">
            <label for="floatingInput">Username</label>
            @error('name')
            <p class="text-light ">{{ $message }}</p>
      @enderror
        </div>

        <div class="form-floating">
            <input type="email" class="form-control lala @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" name="email" value="{{ old('email') }}">
            <label for="floatingInput">Email address</label>
            @error('email')

            <p class="text-light">{{ $message }}</p>

      @enderror
        </div>
        <div class="form-floating">
            <input type="password" class="form-control lala @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password" >
            <label for="floatingPassword">Password</label>
            <div class="input-group-append">
                <span class="input-group-text">
                    <i class="fas fa-eye" id="togglePassword"></i>
                </span>
            </div>
            @error('password')
            <p class="text-light">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault" name="remember">
            <label class="form-check-label" for="flexCheckDefault">
                Remember me
            </label>
        </div>
        <button class="btn  btn-rounded  btn-light w-100 py-2" type="submit">Register</button>
        </form>
</main>

<script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('floatingPassword');

    togglePassword.addEventListener('click', function () {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        // Ganti ikon mata berdasarkan status saat ini
        togglePassword.classList.toggle('fa-eye-slash');
    });
</script>

@endsection
