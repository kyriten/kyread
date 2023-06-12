@extends('pos.index')

@section('store')
    <main class="main" id="main">

        <div class="pagetitle">
            <h1>Store Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active"><a href="/store-profile">Store Profile</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                            @foreach ($pos as $item)
                                <img class="rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                    alt="Profile">
                                <h2>{{ auth()->user()->fullname }}</h2>
                                <h3> {{ $item->name }} Admin</h3>
                                <div class="social-links mt-2">
                                    <a class="twitter" href="#"><i class="bi bi-twitter"></i></a>
                                    <a class="facebook" href="#"><i class="bi bi-facebook"></i></a>
                                    <a class="instagram" href="#"><i class="bi bi-instagram"></i></a>
                                    <a class="linkedin" href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Overview</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                        Profile</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-settings">Settings</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-change-password">Change Password</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <h5 class="card-title">About</h5>
                                    <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores
                                        cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure
                                        rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at
                                        unde.</p>

                                    <h5 class="card-title">Profile Details</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                        <div class="col-lg-9 col-md-8">{{ auth()->user()->fullname }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Company</div>
                                        <div class="col-lg-9 col-md-8">Lueilwitz, Wisoky and Leuschke</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Job</div>
                                        <div class="col-lg-9 col-md-8">Web Designer</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Country</div>
                                        <div class="col-lg-9 col-md-8">USA</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Address</div>
                                        <div class="col-lg-9 col-md-8">{{ auth()->user()->street }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Phone</div>
                                        <div class="col-lg-9 col-md-8">{{ auth()->user()->phone }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8">{{ auth()->user()->email }}</div>
                                    </div>

                                </div>

                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                    <!-- Profile Edit Form -->
                                    <form>
                                        <div class="row mb-3">
                                            <label class="col-md-4 col-lg-3 col-form-label" for="profileImage">Profile
                                                Image</label>
                                            <div class="col-md-8 col-lg-9">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                                    alt="Profile">
                                                <div class="pt-2">
                                                    <a class="btn btn-primary btn-sm" href="#"
                                                        title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                                    <a class="btn btn-danger btn-sm" href="#"
                                                        title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-lg-3 col-form-label" for="fullName">Full Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input class="form-control" id="fullName" name="fullName" type="text"
                                                    value="{{ auth()->user()->fullname }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-lg-3 col-form-label" for="about">About</label>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea class="form-control" id="about" name="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-lg-3 col-form-label" for="company">Company</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input class="form-control" id="company" name="company" type="text"
                                                    value="Lueilwitz, Wisoky and Leuschke">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-lg-3 col-form-label" for="Job">Job</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input class="form-control" id="Job" name="job" type="text"
                                                    value="Web Designer">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-lg-3 col-form-label" for="Country">Country</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input class="form-control" id="Country" name="country" type="text"
                                                    value="USA">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-lg-3 col-form-label" for="Address">Address</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input class="form-control" id="Address" name="address" type="text"
                                                    value="A108 Adam Street, New York, NY 535022">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-lg-3 col-form-label" for="Phone">Phone</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input class="form-control" id="Phone" name="phone" type="text"
                                                    value="(436) 486-3538 x29071">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-lg-3 col-form-label" for="Email">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input class="form-control" id="Email" name="email" type="email"
                                                    value="k.anderson@example.com">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-lg-3 col-form-label" for="Twitter">Twitter
                                                Profile</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input class="form-control" id="Twitter" name="twitter" type="text"
                                                    value="https://twitter.com/#">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-lg-3 col-form-label" for="Facebook">Facebook
                                                Profile</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input class="form-control" id="Facebook" name="facebook"
                                                    type="text" value="https://facebook.com/#">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-lg-3 col-form-label" for="Instagram">Instagram
                                                Profile</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input class="form-control" id="Instagram" name="instagram"
                                                    type="text" value="https://instagram.com/#">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-lg-3 col-form-label" for="Linkedin">Linkedin
                                                Profile</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input class="form-control" id="Linkedin" name="linkedin"
                                                    type="text" value="https://linkedin.com/#">
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button class="btn btn-primary" type="submit">Save Changes</button>
                                        </div>
                                    </form><!-- End Profile Edit Form -->

                                </div>

                                <div class="tab-pane fade pt-3" id="profile-settings">

                                    <!-- Settings Form -->
                                    <form>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-lg-3 col-form-label" for="fullName">Email
                                                Notifications</label>
                                            <div class="col-md-8 col-lg-9">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="changesMade" type="checkbox"
                                                        checked>
                                                    <label class="form-check-label" for="changesMade">
                                                        Changes made to your account
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="newProducts" type="checkbox"
                                                        checked>
                                                    <label class="form-check-label" for="newProducts">
                                                        Information on new products and services
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="proOffers" type="checkbox">
                                                    <label class="form-check-label" for="proOffers">
                                                        Marketing and promo offers
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="securityNotify" type="checkbox"
                                                        checked disabled>
                                                    <label class="form-check-label" for="securityNotify">
                                                        Security alerts
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button class="btn btn-primary" type="submit">Save Changes</button>
                                        </div>
                                    </form><!-- End settings Form -->

                                </div>

                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                    <!-- Change Password Form -->
                                    <form>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-lg-3 col-form-label" for="currentPassword">Current
                                                Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input class="form-control" id="currentPassword" name="password"
                                                    type="password">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-lg-3 col-form-label" for="newPassword">New
                                                Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input class="form-control" id="newPassword" name="newpassword"
                                                    type="password">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-md-4 col-lg-3 col-form-label" for="renewPassword">Re-enter
                                                New Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input class="form-control" id="renewPassword" name="renewpassword"
                                                    type="password">
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button class="btn btn-primary" type="submit">Change Password</button>
                                        </div>
                                    </form><!-- End Change Password Form -->

                                </div>

                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
