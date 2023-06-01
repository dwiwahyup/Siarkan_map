@extends('auth.template')

@section('content')
<title>Log In</title>
<div class="card">

    <!-- Logo -->
    <div class="card-header px-4 text-center ">
        <a href="index.html">
            <span><img src="https://res.cloudinary.com/diptxmzhz/image/upload/v1685520080/Rawan%20Kecelakaan/image-removebg-preview_1_sqi7he.png" alt="logo" height="60" width="200"></span>
        </a>
    </div>
    <hr>
    <div class="card-body px-4 pt-0 pb-4">
        <div class="text-center w-75 m-auto">
            <h4 class="text-dark-50 text-center pb-0 fw-bold">Login</h4>
            <p class="text-muted mb-4">Masukkan email dan password anda untuk masuk</p>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="emailaddress" class="form-label">Email address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group input-group-merge">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">
                        <div class="input-group-text" data-password="false">
                            <span class="password-eye"></span>
                        </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="mb-3 mb-0 text-center">
                <button class="btn btn-primary" type="submit"> Log In </button>
            </div>

        </form>
        <div class="row mt-3">
            <div class="col-12 text-center">
                <p class="text-muted">Balum Punya Akun? <a href="{{ route('register') }}" class="text-muted ms-1"><b>Registrasi</b></a></p>
            </div> <!-- end col -->
        </div>
    </div> <!-- end card-body -->
</div>
<!-- end card -->

@endsection
