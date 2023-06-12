@extends('pos.access.master')

@section('formRegister')
    <section class="section register min-vh-50 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="row justify-content-center">

            <div class="d-flex justify-content-center py-4">
                <a class="logo d-flex align-items-center" href="/home">
                    <span class="d-none d-lg-block fs-1 fw-bold fst-italic">{{ config('app.name') }}</span>
                </a>
            </div><!-- End Logo -->

            <div class="card mb-3">
                <div class="card-body">
                    <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Create your Shop Account</h5>
                        <p class="text-center small">Enter your shop personal details to create shop account
                        </p>
                    </div>

                    <form action="/shop-register" method="POST">
                        @csrf

                        <!-- Store Name input -->
                        <div class="form-outline mb-4">
                            <input class="form-control @error('name') is-invalid @enderror" id="registerName" name="name"
                                type="text" value="{{ old('name') }}" required />
                            <label class="form-label" for="registerName">Store Name</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Description input -->
                        <div class="form-outline mb-4">
                            <input class="form-control @error('description') is-invalid @enderror" id="registerDesc"
                                name="description" type="text" value="{{ old('description') }}" required />
                            <label class="form-label" for="registerDesc">Description</label>
                            @error('description')
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

                        <div class="form-check">
                            <input class="form-check-input" id="acceptTerms" name="terms" type="checkbox" value=""
                                required>
                            <label class="form-check-label" for="acceptTerms">I agree and accept
                                the
                                <a href="#">terms and conditions</a></label>
                            <div class="invalid-feedback">You must agree before submitting.
                            </div>
                        </div>

                        <button class="btn btn-primary btn-block mb-3 fw-bold text-light"
                            type="submit">{{ __('SUBMIT') }}</button>

                    </form>
                    <div class="col-12">
                        <p class="small mb-0">Already have an account? <a href="/shop-login">Log in</a></p>
                    </div>
                </div>
            </div>

            <div class="credits text-center">
                Designed by <a href="/kyriten">kyridev</a>
            </div>

        </div>
    </section>
@endsection
