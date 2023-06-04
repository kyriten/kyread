@extends('layouts.app')

@section('cart')
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card">
                    <div class="card-body p-4">

                        <div class="row">

                            <div class="col-lg-7">
                                <h5 class="mb-3"><a class="text-body" href="/home"><i
                                            class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                                <hr>

                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div>
                                        <p class="mb-1">Shopping cart</p>
                                        <p class="mb-0">You have 4 items in your cart</p>
                                    </div>
                                    <div>
                                        <p class="mb-0"><span class="text-muted">Sort by:</span> <a class="text-body"
                                                href="#!">price <i class="fas fa-angle-down mt-1"></i></a></p>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-row align-items-center">
                                                <div>
                                                    <img class="img-fluid rounded-3"
                                                        src="{{ asset('img/recommendations/Cantik Itu Luka.jpg') }}"
                                                        alt="Shopping item" style="width: 65px;">
                                                </div>
                                                <div class="ms-3">
                                                    <h5>Cantik Itu Luka</h5>
                                                    <p class="small mb-0">a Novel by Eka Kurniawan</p>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center">
                                                <div style="width: 50px;">
                                                    <h5 class="fw-normal mb-0">2</h5>
                                                </div>
                                                <div style="width: 80px;">
                                                    <h5 class="mb-0">$900</h5>
                                                </div>
                                                <a href="#!" style="color: #cecece;"><i
                                                        class="fas fa-trash-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-row align-items-center">
                                                <div>
                                                    <img class="img-fluid rounded-3"
                                                        src="{{ asset('img/recommendations/Twenty Four Eyes.jpg') }}"
                                                        alt="Shopping item" style="width: 65px;">
                                                </div>
                                                <div class="ms-3">
                                                    <h5>Twenty Four Eyes </h5>
                                                    <p class="small mb-0">a Novel by Sakae Tsuboi</p>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center">
                                                <div style="width: 50px;">
                                                    <h5 class="fw-normal mb-0">2</h5>
                                                </div>
                                                <div style="width: 80px;">
                                                    <h5 class="mb-0">$900</h5>
                                                </div>
                                                <a href="#!" style="color: #cecece;"><i
                                                        class="fas fa-trash-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-row align-items-center">
                                                <div>
                                                    <img class="img-fluid rounded-3"
                                                        src="{{ asset('img/recommendations/Fur Immer Dein Ian.jpg') }}"
                                                        alt="Shopping item" style="width: 65px;">
                                                </div>
                                                <div class="ms-3">
                                                    <h5>Fur Immer Dein Ian</h5>
                                                    <p class="small mb-0">a Novel by Valerie</p>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center">
                                                <div style="width: 50px;">
                                                    <h5 class="fw-normal mb-0">1</h5>
                                                </div>
                                                <div style="width: 80px;">
                                                    <h5 class="mb-0">$1199</h5>
                                                </div>
                                                <a href="#!" style="color: #cecece;"><i
                                                        class="fas fa-trash-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-3 mb-lg-0">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-row align-items-center">
                                                <div>
                                                    <img class="img-fluid rounded-3"
                                                        src="{{ asset('img/recommendations/Terpikat.jpg') }}"
                                                        alt="Shopping item" style="width: 65px;">
                                                </div>
                                                <div class="ms-3">
                                                    <h5>Terpikat</h5>
                                                    <p class="small mb-0">a Novel by Ghefira Zakhira</p>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center">
                                                <div style="width: 50px;">
                                                    <h5 class="fw-normal mb-0">1</h5>
                                                </div>
                                                <div style="width: 80px;">
                                                    <h5 class="mb-0">$1799</h5>
                                                </div>
                                                <a href="#!" style="color: #cecece;"><i
                                                        class="fas fa-trash-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-5">

                                <div class="card text-white rounded-3" style="background-color:rgb(67, 170, 255)">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <h5 class="mb-0">Card details</h5>
                                            <img class="img-fluid rounded-3"
                                                src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Avatar"
                                                style="width: 45px;">
                                        </div>

                                        <p class="small mb-2">Card type</p>
                                        <a class="text-white" type="submit" href="#!"><i
                                                class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                                        <a class="text-white" type="submit" href="#!"><i
                                                class="fab fa-cc-visa fa-2x me-2"></i></a>
                                        <a class="text-white" type="submit" href="#!"><i
                                                class="fab fa-cc-amex fa-2x me-2"></i></a>
                                        <a class="text-white" type="submit" href="#!"><i
                                                class="fab fa-cc-paypal fa-2x"></i></a>

                                        <form class="mt-4">
                                            <div class="form-outline form-white mb-4">
                                                <input class="form-control form-control-lg" id="typeName" type="text"
                                                    siez="17" placeholder="Cardholder's Name" />
                                                <label class="form-label" for="typeName">Cardholder's Name</label>
                                            </div>

                                            <div class="form-outline form-white mb-4">
                                                <input class="form-control form-control-lg" id="typeText" type="text"
                                                    siez="17" placeholder="1234 5678 9012 3457" minlength="19"
                                                    maxlength="19" />
                                                <label class="form-label" for="typeText">Card Number</label>
                                            </div>

                                            <div class="row mb-4">
                                                <div class="col-md-6">
                                                    <div class="form-outline form-white">
                                                        <input class="form-control form-control-lg" id="typeExp"
                                                            id="exp" type="text" placeholder="MM/YYYY"
                                                            size="7" minlength="7" maxlength="7" />
                                                        <label class="form-label" for="typeExp">Expiration</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-outline form-white">
                                                        <input class="form-control form-control-lg" id="typeText"
                                                            type="password" placeholder="&#9679;&#9679;&#9679;"
                                                            size="1" minlength="3" maxlength="3" />
                                                        <label class="form-label" for="typeText">Cvv</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>

                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between">
                                            <p class="mb-2">Subtotal</p>
                                            <p class="mb-2">$4798.00</p>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <p class="mb-2">Shipping</p>
                                            <p class="mb-2">$20.00</p>
                                        </div>

                                        <div class="d-flex justify-content-between mb-4">
                                            <p class="mb-2">Total(Incl. taxes)</p>
                                            <p class="mb-2">$4818.00</p>
                                        </div>

                                        <button class="btn btn-dark btn-block btn-lg" type="button">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span>$4818.00</span>
                                                <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                                            </div>
                                        </button>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
