@extends('admin.layout.master')
@section('content')

<body class="bg-c-primary">
<div class="container">
   
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="card col-md-8 mt-5">
                <h1 class="mx-auto mt-4">Textile LIMS</h1>

                <div class="card-header mx-auto text-dark font-weight-bold">A project by RUBICSOL</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end text-dark">{{ __('Email Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end text-dark">{{ __('Password') }}</label>
                            <div class="col-md-8 input-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                <button type="button" class="btn btn-outline-secondary col-md-2" onclick="togglePasswordVisibility()">
                                <i class="fa fa-eye-slash toggle-icon"></i>
                                 </button>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-dark" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row flex mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-dark" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</body>

<script>
    function togglePasswordVisibility() {
        var passwordField = document.getElementById("password");
        var passwordToggleBtn = document.getElementById("togglePasswordBtn");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            passwordToggleBtn.innerHTML = '<i class="bi bi-eye"></i>';
        } else {
            passwordField.type = "password";
            passwordToggleBtn.innerHTML = '<i class="bi bi-eye-fill"></i>';
        }
    }
</script>
@endsection
