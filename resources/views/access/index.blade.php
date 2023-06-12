@extends('access.master')

@section('formLogin')
    <div class="card p-4">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button class="btn-close" data-bs-dismiss="alert" type="button" aria-label="Close"></button>
            </div>
        @endif

        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button class="btn-close" data-bs-dismiss="alert" type="button" aria-label="Close"></button>
            </div>
        @endif

        <!-- Pills navs -->
        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link fw-bold text-dark {{ $active === 'access' }}" id="tab-login" data-mdb-toggle="pill"
                    href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link fw-bold text-dark {{ $active === 'access' }}" id="tab-register" data-mdb-toggle="pill"
                    href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false">Register</a>
            </li>
        </ul>
        <!-- Pills navs -->
        <!-- Pills content -->
        <div class="tab-content">
            <div class="tab-pane fade show" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                <form action="/login" method="post">
                    @csrf
                    <div class="text-center mb-3">
                        <p>Sign in with:</p>
                        <button class="btn btn-link btn-floating mx-1" type="button">
                            <i class="fab fa-facebook-f"></i>
                        </button>

                        <button class="btn btn-link btn-floating mx-1" type="button">
                            <i class="fab fa-google"></i>
                        </button>

                        <button class="btn btn-link btn-floating mx-1" type="button">
                            <i class="fab fa-twitter"></i>
                        </button>

                        <button class="btn btn-link btn-floating mx-1" type="button">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>

                    <p class="text-center">or:</p>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input class="form-control @error('login_email') is-invalid @enderror" id="loginName"
                            name="login_email" type="email" value="{{ old('login_email') }}" required />
                        <label class="form-label" for="loginName">Email</label>
                        @error('login_email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input class="form-control" id="loginPassword" name="login_password" type="password" required />
                        <label class="form-label" for="loginPassword">Password</label>
                    </div>

                    <!-- 2 column grid layout -->
                    <div class="row mb-4">
                        <div class="col-md-6 d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-3 mb-md-0">
                                <input class="form-check-input" id="loginCheck" type="checkbox" value="" checked />
                                <label class="form-check-label" for="loginCheck"> Remember me </label>
                            </div>
                        </div>

                        <div class="col-md-6 d-flex justify-content-center">
                            <!-- Simple link -->
                            <a href="#!">Forgot password?</a>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <button class="btn btn-primary btn-block mb-3 fw-bold text-light"
                        type="submit">{{ __('LOGIN') }}</button>
                </form>
            </div>
            <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                <form action="/register" method="POST">
                    @csrf
                    <div class="text-center mb-3">
                        <p>Sign up with:</p>
                        <button class="btn btn-link btn-floating mx-1" type="button">
                            <i class="fab fa-facebook-f"></i>
                        </button>

                        <button class="btn btn-link btn-floating mx-1" type="button">
                            <i class="fab fa-google"></i>
                        </button>

                        <button class="btn btn-link btn-floating mx-1" type="button">
                            <i class="fab fa-twitter"></i>
                        </button>

                        <button class="btn btn-link btn-floating mx-1" type="button">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>

                    <p class="text-center">or:</p>

                    <!-- Username input -->
                    <div class="form-outline mb-4">
                        <input class="form-control @error('username') is-invalid @enderror" id="registerUsername"
                            name="username" type="text" value="{{ old('username') }}" required />
                        <label class="form-label" for="registerUsername">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input class="form-control @error('email') is-invalid @enderror" id="registerEmail"
                            name="email" type="email" value="{{ old('email') }}" required />
                        <label class="form-label" for="registerEmail">Email</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input class="form-control @error('password') is-invalid @enderror" id="registerPassword"
                            name="password" type="password" required />
                        <label class="form-label" for="registerPassword">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Repeat Password input -->
                    <div class="form-outline mb-4">
                        <input class="form-control @error('password') is-invalid @enderror" id="registerRepeatPassword"
                            name="password_confirmation"type="password" required />
                        <label class="form-label" for="registerRepeatPassword">Confirm Password</label>
                    </div>

                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-center mb-4">
                        <input class="form-check-input me-2" id="registerCheck" type="checkbox" value=""
                            aria-describedby="registerCheckHelpText" checked />
                        <label class="form-check-label" for="registerCheck">
                            I have read and agree to the terms
                        </label>
                    </div>

                    <!-- Submit button -->
                    <button class="btn btn-primary btn-block mb-3 fw-bold text-light"
                        type="submit">{{ __('SUBMIT') }}</button>
                </form>
            </div>
        </div>
        <!-- Pills content -->
    </div>
@endsection
