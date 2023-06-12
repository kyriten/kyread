@extends('pos.access.master')

@section('formLogin')
    <section class="section register min-vh-50 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="row justify-content-center">

            <div class="d-flex justify-content-center py-4">
                <a class="logo d-flex align-items-center" href="/home">
                    <span class="d-none d-lg-block fs-1 fw-bold fst-italic">{{ config('app.name') }}</span>
                </a>
            </div><!-- End Logo -->

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button class="btn-close" data-bs-dismiss="alert" type="button" aria-label="Close"></button>
                </div>
            @endif

            <div class="card mb-3">
                <div class="card-body">

                    <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Please Login</h5>
                    </div>

                    <form action="/shop-login" method="POST">
                        @csrf

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input class="form-control @error('login_store_name') is-invalid @enderror" id="registerEmail"
                                name="login_store_name" type="text" value="{{ old('login_store_name') }}" required />
                            <label class="form-label" for="registerEmail">Store Name</label>
                            @error('login_store_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input class="form-control @error('login_store_password') is-invalid @enderror"
                                id="registerPassword" name="login_store_password" type="password" required />
                            <label class="form-label" for="registerPassword">Password</label>
                            @error('login_store_password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button class="btn btn-primary btn-block mb-3 fw-bold text-light"
                            type="submit">{{ __('SUBMIT') }}</button>

                    </form>
                    <div class="col-12">
                        <p class="small mb-0">Not have an account? <a href="/shop-register">Register</a></p>
                    </div>
                </div>
            </div>

            <div class="credits text-center">
                Designed by <a href="/kyriten">kyridev</a>
            </div>

        </div>
    </section>
@endsection
