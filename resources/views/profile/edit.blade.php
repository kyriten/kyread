@extends('layouts.app')

@section('editprofile')
    <div class="container">
        <div class="row gutters">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button class="btn-close" data-bs-dismiss="alert" type="button" aria-label="Close"></button>
                </div>
            @endif
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card edit-profile">
                    <div class="card-body">
                        <div class="account-settings">
                            <div class="user-profile">
                                <div class="user-avatar img-fluid">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                        alt="Abimanyu Okysaputra Rachman">
                                </div>
                                <h5 class="user-name">
                                    @if (auth()->user()->fullname === null)
                                        {{ auth()->user()->username }}
                                    @else
                                        {{ auth()->user()->fullname }}
                                    @endif
                                </h5>
                                <h6 class="user-email">{{ auth()->user()->email }}</h6>
                            </div>
                            <div class="about">
                                <h5>About</h5>
                                @if (auth()->user()->about === null)
                                    Fill in your shortest bio.
                                @else
                                    {{ auth()->user()->about }}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card edit-profile">
                    <div class="card-body">
                        <form action="{{ route('profile.update', auth()->user()->id) }}}}" method="POST">
                            @csrf

                            @method('PUT')
                            <div class="row gutters g-3">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-2 text-primary">Personal Details</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                                    <div class="form-group">
                                        <label for="fullName">Full name</label>
                                        <input class="form-control @error('fullname') is-invalid @enderror" id="fullName"
                                            name="fullname" type="text"
                                            value="{{ old('fullname' . $user->fullname, auth()->user()->fullname) }}"
                                            placeholder="Enter your full name">
                                        @error('fullname')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                                    <div class="form-group">
                                        <label for="nickName">Nick name</label>
                                        <input class="form-control @error('nickname') is-invalid @enderror" id="fullName"
                                            name="nickname" type="text"
                                            value="{{ old('nickname' . $user->nickname, auth()->user()->nickname) }}"
                                            placeholder="Enter your nick name">
                                        @error('nickname')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-3">
                                    <div class="form-group">
                                        <label for="userName">Username</label>
                                        <input class="form-control @error('username') is-invalid @enderror" id="fullName"
                                            name="username" type="text"
                                            value="{{ old('username' . $user->username, auth()->user()->username) }}"
                                            placeholder="Enter username">
                                        @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-3">
                                    <div class="form-group">
                                        <label for="eMail">Email</label>
                                        <input class="form-control @error('email') is-invalid @enderror" id="eMail"
                                            name="email" type="email"
                                            value="{{ old('email' . $user->email, auth()->user()->email) }}"
                                            placeholder="Enter your email">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-3">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input class="form-control @error('phone') is-invalid @enderror" id="website"
                                            name="phone" type="text"
                                            value="{{ old('phone' . $user->phone, auth()->user()->phone) }}"
                                            placeholder="Enter phone number">
                                        @error('phone')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-3">
                                    <div class="form-group">
                                        <label for="about">About</label>
                                        <input class="form-control" id="phone" name="about" type="text"
                                            value="{{ old('about' . $user->about, auth()->user()->about) }}"
                                            placeholder="Describe your self">
                                    </div>
                                </div>
                            </div>

                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
                                    <h6 class="mt-3 mb-2 text-primary">Address</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                                    <div class="form-group">
                                        <label for="Street">Street</label>
                                        <input class="form-control" id="Street" type="name"
                                            placeholder="Enter Street">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                                    <div class="form-group">
                                        <label for="ciTy">City</label>
                                        <input class="form-control" id="ciTy" type="name"
                                            placeholder="Enter City">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-3">
                                    <div class="form-group">
                                        <label for="sTate">Province</label>
                                        <input class="form-control" id="province" type="text"
                                            placeholder="Enter Province">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-3">
                                    <div class="form-group">
                                        <label for="zIp">Zip Code</label>
                                        <input class="form-control" id="zIp" type="text"
                                            placeholder="Zip Code">
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                    <div class="text-end">
                                        <button class="btn btn-secondary fw-bold text-primary" id="reset"
                                            type="reset">{{ __('RESET') }}</button>
                                        <button class="btn btn-primary fw-bold text-light" id="submit"
                                            type="submit">{{ __('SUBMIT') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
