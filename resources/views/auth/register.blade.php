@extends('auth.template')

@section('content')
<title>Register</title>
<div class="card">
    <!-- Logo-->
    <div class="card-header px-4 text-center ">
        <a href="index.html">
            <span><img src="https://res.cloudinary.com/diptxmzhz/image/upload/v1685520080/Rawan%20Kecelakaan/image-removebg-preview_1_sqi7he.png" alt="logo" height="60" width="200"></span>
        </a>
    </div>
<hr>
    <div class="card-body px-4 pt-0 pb-4">
        <div class="text-center w-75 m-auto">
            <h4 class="text-dark-50 text-center mt-0 fw-bold">Registrasi</h4>
            <p class="text-muted mb-4">Belum Punya Akun? Buat akun anda sekarang </p>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <label for="fullname" class="form-label">Nama Lengkap</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="emailaddress" class="form-label">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email">

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
                        name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="input-group-text" data-password="false">
                        <span class="password-eye"></span>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Konfirmasi Password</label>
                <div class="input-group input-group-merge">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password">
                    <div class="input-group-text" data-password="false">
                        <span class="password-eye"></span>
                    </div>
                </div>
            </div>
            <div class="mb-3 text-center">
                <button class="btn btn-primary" type="submit"> Registrasi </button>
            </div>
        </form>
        <div class="row mt-3">
            <div class="col-12 text-center">
                <p class="text-muted">Sudah Punya Akun? <a href="{{ route('login') }}"
                        class="text-muted ms-1"><b>Login</b></a>
                </p>
            </div> <!-- end col-->
        </div>
    </div> <!-- end card-body -->
</div>
<!-- end card -->

<!-- end row -->
@endsection
