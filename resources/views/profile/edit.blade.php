@extends('layouts.app')

@section('editprofile')
    <div class="container">
        <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card edit-profile">
                    <div class="card-body">
                        <div class="account-settings">
                            <div class="user-profile">
                                <div class="user-avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                        alt="Abimanyu Okysaputra Rachman">
                                </div>
                                <h5 class="user-name">
                                    @if (auth()->user()->fullname === null)
                                        {{ auth()->user()->nickname }}
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
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h6 class="mb-2 text-primary">Personal Details</h6>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                                <div class="form-group">
                                    <label for="fullName">Full Name</label>
                                    <input class="form-control @error('fullname') is-invalid @enderror" id="fullName"
                                        name="fullname" type="text" placeholder="Enter full name">
                                    @error('fullname')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                                <div class="form-group">
                                    <label for="nickName">Nick Name</label>
                                    <input class="form-control @error('nickname') is-invalid @enderror" id="fullName"
                                        name="nickname" type="text" placeholder="Enter nick name">
                                    @error('nickname')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-3">
                                <div class="form-group">
                                    <label for="userName">User Name</label>
                                    <input class="form-control @error('username') is-invalid @enderror" id="fullName"
                                        name="username" type="text" placeholder="Enter user name">
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
                                        name="email" type="email" placeholder="Enter email ID">
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
                                        name="phone" type="text" placeholder="Enter phone number">
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
                                    <input class="form-control" id="Street" type="name" placeholder="Enter Street">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-2">
                                <div class="form-group">
                                    <label for="ciTy">City</label>
                                    <input class="form-control" id="ciTy" type="name" placeholder="Enter City">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-3">
                                <div class="form-group">
                                    <label for="sTate">Province</label>
                                    <input class="form-control" id="province" type="text" placeholder="Enter Province">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-3">
                                <div class="form-group">
                                    <label for="zIp">Zip Code</label>
                                    <input class="form-control" id="zIp" type="text" placeholder="Zip Code">
                                </div>
                            </div>
                        </div>
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                <div class="text-end">
                                    <button class="btn btn-secondary" id="reset"
                                        type="reset">{{ __('CANCEL') }}</button>
                                    <button class="btn btn-primary" id="submit"
                                        type="submit">{{ __('SUBMIT') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
