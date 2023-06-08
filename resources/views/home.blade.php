@extends('layouts.app')

@section('promo')
    <div class="row">
        <div class="col mt-4">
            <div class="carousel slide" id="carouselExampleSlidesOnly" data-bs-ride="carousel">
                <div class="carousel-inner rounded-3" id="promo-banner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('img/promo-banner/banner1.jpg') }}" alt="" />
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/promo-banner/banner2.jpg') }}" alt="" />
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/promo-banner/banner3.jpg') }}" alt="" />
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/promo-banner/banner4.jpg') }}" alt="" />
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/promo-banner/banner5.jpg') }}" alt="" />
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/promo-banner/banner6.jpg') }}" alt="" />
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/promo-banner/banner7.jpg') }}" alt="" />
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/promo-banner/banner8.jpg') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('categories')
    <div class="row">
        <div class="col mt-4">
            <h5 class="fw-semibold mt-3">CATEGORIES</h5>
        </div>
    </div>
    <div class="row">
        <div class="d-flex mt-3 mb-4 align-items-center justify-content-between text-center">
            <ul class="list-group list-group-horizontal list-unstyled">
                <li class="list-group-item flex-item">
                    <img class="rounded-circle border border-2 border-dark p-2 border-opacity-25" id="ctg1"
                        src="{{ asset('img/categories/novel.png') }}" alt="" style="width: 70px" />
                    <label class="fw-semibold mt-2" for="ctg1">Novel</label>
                </li>

                <li class="list-group-item flex-item">
                    <img class="rounded-circle border border-2 border-dark p-2 border-opacity-25" id="ctg2"
                        src="{{ asset('img/categories/biography.png') }}" alt="" style="width: 70px" />
                    <label class="fw-semibold mt-2" for="ctg2">Biography</label>
                </li>

                <li class="list-group-item flex-item">
                    <img class="rounded-circle border border-2 border-dark p-2 border-opacity-25" id="ctg3"
                        src="{{ asset('img/categories/comics.png') }}" alt="" style="width: 70px" />
                    <label class="fw-semibold mt-2" for="ctg3">Comics</label>
                </li>

                <li class="list-group-item flex-item">
                    <img class="rounded-circle border border-2 border-dark p-2 border-opacity-25" id="ctg4"
                        src="{{ asset('img/categories/magazine.png') }}" alt="" style="width: 70px" />
                    <label class="fw-semibold mt-2" for="ctg4">Magazine</label>
                </li>

                <li class="list-group-item flex-item">
                    <img class="rounded-circle border border-2 border-dark p-2 border-opacity-25" id="ctg5"
                        src="{{ asset('img/categories/dictionary.png') }}" alt="" style="width: 70px" />
                    <label class="fw-semibold mt-2" for="ctg5">Dictionary</label>
                </li>

                <li class="list-group-item flex-item">
                    <img class="rounded-circle border border-2 border-dark p-2 border-opacity-25" id="ctg6"
                        src="{{ asset('img/categories/script.png') }}" alt="" style="width: 70px" />
                    <label class="fw-semibold mt-2" for="ctg6">Script</label>
                </li>

                <li class="list-group-item flex-item">
                    <img class="rounded-circle border border-2 border-dark p-2 border-opacity-25" id="ctg7"
                        src="{{ asset('img/categories/manga.png') }}" alt="" style="width: 70px" />
                    <label class="fw-semibold mt-2" for="ctg7">Manga</label>
                </li>

                <li class="list-group-item flex-item">
                    <img class="rounded-circle border border-2 border-dark p-2 border-opacity-25" id="ctg8"
                        src="{{ asset('img/categories/encyclopedia.png') }}" alt="" style="width: 70px" />
                    <label class="fw-semibold mt-2" for="ctg8">Encyclopedia</label>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('recommendations')
    <!-- RECOMMENDATIONS -->
    <h5 class="fw-semibold mt-4">RECOMMENDATIONS</h5>
    {{-- Row 1 --}}
    <div class="d-flex justify-content-between d-block text-center mt-3">
        <div class="card" style="width: 240px; height: 360px">
            <div class="image-wrapper">
                <img class="card-img-top img-thumbnail mx-auto d-block mt-2"
                    src="{{ asset('img/recommendations/00.00 Karya Ameylia Falensia.jpg') }}" alt=""
                    style="height: 220px; width: 70%" />
            </div>
            <h5 class="card-title fs-6 px-3">
                00.00 Karya Ameylia Falensia
                <span class="position-absolute top-0 start-50 translate-middle badge bg-primary text-light">Novel</span>
            </h5>
            <div class="card-footer mb-3 border-0">
                <div class="row mt-auto">
                    <div class="col">
                        <small style="color: rgb(67, 170, 255)">Rp</small><big class="me-1"
                            style="color: rgb(67, 170, 255)">73.000</big>
                    </div>
                    <div class="col-md-auto me-3">
                        <small>3,8RB Terjual</small>
                    </div>
                </div>
            </div>
            <a class="stretched-link" href="#"></a>
        </div>
        <div class="ms-3">
            <div class="card" style="width: 240px; height: 360px">
                <div class="image-wrapper">
                    <img class="card-img-top img-thumbnail mx-auto d-block mt-2"
                        src="{{ asset('img/recommendations/Yang Bertahan dan Binasa Perlahan.jpg') }}" alt=""
                        style="height: 220px; width: 70%" />
                </div>
                <h5 class="card-title ms-2 me-2 fs-6 px-3">
                    Yang Bertahan dan ...
                    <span
                        class="position-absolute top-0 start-50 translate-middle badge bg-primary text-light">Novel</span>
                </h5>
                <div class="card-footer mb-3 border-0">
                    <div class="row mt-auto">
                        <div class="col">
                            <small style="color: rgb(67, 170, 255)">Rp</small><big class="me-1"
                                style="color: rgb(67, 170, 255)">73.000</big>
                        </div>
                        <div class="col-md-auto me-3">
                            <small>3,8RB Terjual</small>
                        </div>
                    </div>
                </div>
                <a class="stretched-link" href="#"></a>
            </div>
        </div>
        <div class="ms-3">
            <div class="card" style="width: 240px; height: 360px">
                <div class="image-wrapper">
                    <img class="card-img-top img-thumbnail mx-auto d-block mt-2"
                        src="{{ asset('img/recommendations/Selamat Tinggal.jpg') }}" alt=""
                        style="height: 220px; width: 70%" />
                </div>
                <h5 class="card-title mt-2 fs-6 px-3">
                    Selamat Tinggal
                    <span
                        class="position-absolute top-0 start-50 translate-middle badge bg-primary text-light">Novel</span>
                </h5>
                <div class="card-footer mb-3 border-0">
                    <div class="row mt-auto">
                        <div class="col">
                            <small style="color: rgb(67, 170, 255)">Rp</small><big class="me-1"
                                style="color: rgb(67, 170, 255)">73.000</big>
                        </div>
                        <div class="col-md-auto me-3">
                            <small>3,8RB Terjual</small>
                        </div>
                    </div>
                </div>
                <a class="stretched-link" href="#"></a>
            </div>
        </div>
        <div class="ms-3">
            <div class="card" style="width: 240px; height: 360px">
                <div class="image-wrapper">
                    <img class="card-img-top img-thumbnail mx-auto d-block mt-2"
                        src="{{ asset('img/recommendations/Black Showman dan Pembunuhan di Kota Tak Bernama.jpg') }}"
                        alt="" style="height: 220px; width: 70%" />
                </div>
                <h5 class="card-title mt-2 fs-6 px-3">
                    Dikta & Hukum
                    <span
                        class="position-absolute top-0 start-50 translate-middle badge bg-primary text-light">Novel</span>
                </h5>
                <div class="card-footer mb-3 border-0">
                    <div class="row mt-auto">
                        <div class="col">
                            <small style="color: rgb(67, 170, 255)">Rp</small><big class="me-1"
                                style="color: rgb(67, 170, 255)">73.000</big>
                        </div>
                        <div class="col-md-auto me-3">
                            <small>3,8RB Terjual</small>
                        </div>
                    </div>
                </div>
                <a class="stretched-link" href="#"></a>
            </div>
        </div>
        <div class="ms-3">
            <div class="card" style="width: 240px; height: 360px">
                <div class="image-wrapper">
                    <img class="card-img-top img-thumbnail mx-auto d-block mt-2"
                        src="{{ asset('img/recommendations/Cantik Itu Luka.jpg') }}" alt=""
                        style="height: 220px; width: 70%" />
                </div>
                <h5 class="card-title mt-2 fs-6 px-3">
                    Cantik Itu Luka
                    <span
                        class="position-absolute top-0 start-50 translate-middle badge bg-primary text-light">Novel</span>
                </h5>
                <div class="card-footer mb-3 border-0">
                    <div class="row mt-auto">
                        <div class="col">
                            <small style="color: rgb(67, 170, 255)">Rp</small><big class="me-1"
                                style="color: rgb(67, 170, 255)">73.000</big>
                        </div>
                        <div class="col-md-auto me-3">
                            <small>3,8RB Terjual</small>
                        </div>
                    </div>
                </div>
                <a class="stretched-link" href="#"></a>
            </div>
        </div>
    </div>

    {{-- Row 2 --}}
    <div class="d-flex justify-content-between text-center mt-3">
        <div class="card" style="width: 240px; height: 360px">
            <div class="image-wrapper">
                <img class="card-img-top img-thumbnail mx-auto d-block mt-2"
                    src="{{ asset('img/recommendations/Di Tanah Lada.jpg') }}" alt=""
                    style="height: 220px; width: 70%" />
            </div>
            <h5 class="card-title mt-2 fs-6 px-3">
                Di Tanah Lada
                <span class="position-absolute top-0 start-50 translate-middle badge bg-primary text-light">Novel</span>
            </h5>
            <div class="card-footer mb-3 border-0">
                <div class="row mt-auto">
                    <div class="col">
                        <small style="color: rgb(67, 170, 255)">Rp</small><big class="me-1"
                            style="color: rgb(67, 170, 255)">73.000</big>
                    </div>
                    <div class="col-md-auto me-3">
                        <small>3,8RB Terjual</small>
                    </div>
                </div>
            </div>
            <a class="stretched-link" href="#"></a>
        </div>
        <div class="ms-3">
            <div class="card" style="width: 240px; height: 360px">
                <div class="image-wrapper">
                    <img class="card-img-top img-thumbnail mx-auto d-block mt-2"
                        src="{{ asset('img/recommendations/Fur Immer Dein Ian.jpg') }}" alt=""
                        style="height: 220px; width: 70%" />
                </div>
                <h5 class="card-title mt-2 fs-6 px-3">
                    Fur Immer Dein Ian
                    <span
                        class="position-absolute top-0 start-50 translate-middle badge bg-primary text-light">Novel</span>
                </h5>
                <div class="card-footer mb-3 border-0">
                    <div class="row mt-auto">
                        <div class="col">
                            <small style="color: rgb(67, 170, 255)">Rp</small><big class="me-1"
                                style="color: rgb(67, 170, 255)">73.000</big>
                        </div>
                        <div class="col-md-auto me-3">
                            <small>3,8RB Terjual</small>
                        </div>
                    </div>
                </div>
                <a class="stretched-link" href="#"></a>
            </div>
        </div>
        <div class="ms-3">
            <div class="card" style="width: 240px; height: 360px">
                <div class="image-wrapper">
                    <img class="card-img-top img-thumbnail mx-auto d-block mt-2"
                        src="{{ asset('img/recommendations/Harry Potter and The Philosopher’s Stone.jpg') }}"
                        alt="" style="height: 220px; width: 70%" />
                </div>
                <h5 class="card-title mt-2 fs-6 px-3">
                    Harry Potter
                    <span
                        class="position-absolute top-0 start-50 translate-middle badge bg-primary text-light">Novel</span>
                </h5>
                <div class="card-footer mb-3 border-0">
                    <div class="row mt-auto">
                        <div class="col">
                            <small style="color: rgb(67, 170, 255)">Rp</small><big class="me-1"
                                style="color: rgb(67, 170, 255)">73.000</big>
                        </div>
                        <div class="col-md-auto me-3">
                            <small>3,8RB Terjual</small>
                        </div>
                    </div>
                </div>
                <a class="stretched-link" href="#"></a>
            </div>
        </div>
        <div class="ms-3">
            <div class="card" style="width: 240px; height: 360px">
                <div class="image-wrapper">
                    <img class="card-img-top img-thumbnail mx-auto d-block mt-2"
                        src="{{ asset('img/recommendations/Heartbreak Motel.jpg') }}" alt=""
                        style="height: 220px; width: 70%" />
                </div>
                <h5 class="card-title mt-2 fs-6 px-3">
                    Heartbreak Motel
                    <span
                        class="position-absolute top-0 start-50 translate-middle badge bg-primary text-light">Novel</span>
                </h5>
                <div class="card-footer mb-3 border-0">
                    <div class="row mt-auto">
                        <div class="col">
                            <small style="color: rgb(67, 170, 255)">Rp</small><big class="me-1"
                                style="color: rgb(67, 170, 255)">73.000</big>
                        </div>
                        <div class="col-md-auto me-3">
                            <small>3,8RB Terjual</small>
                        </div>
                    </div>
                </div>
                <a class="stretched-link" href="#"></a>
            </div>
        </div>
        <div class="ms-3">
            <div class="card" style="width: 240px; height: 360px">
                <div class="image-wrapper">
                    <img class="card-img-top img-thumbnail mx-auto d-block mt-2"
                        src="{{ asset('img/recommendations/I Think I Love You - Cha Mirae.jpg') }}" alt=""
                        style="height: 220px; width: 70%" />
                </div>
                <h5 class="card-title mt-2 fs-6 px-3">
                    I Think I Love You - Cha Mirae
                    <span
                        class="position-absolute top-0 start-50 translate-middle badge bg-primary text-light">Novel</span>
                </h5>
                <div class="card-footer mb-3 border-0">
                    <div class="row mt-auto">
                        <div class="col">
                            <small style="color: rgb(67, 170, 255)">Rp</small><big class="me-1"
                                style="color: rgb(67, 170, 255)">73.000</big>
                        </div>
                        <div class="col-md-auto me-3">
                            <small>3,8RB Terjual</small>
                        </div>
                    </div>
                </div>
                <a class="stretched-link" href="#"></a>
            </div>
        </div>
    </div>

    {{-- Row 3 --}}
    <div class="d-flex justify-content-between text-center mt-3">
        <div class="card" style="width: 240px; height: 360px">
            <div class="image-wrapper">
                <img class="card-img-top img-thumbnail mx-auto d-block mt-2"
                    src="{{ asset('img/recommendations/Kita Pergi Hari Ini.jpg') }}" alt=""
                    style="height: 220px; width: 70%" />
            </div>
            <h5 class="card-title mt-2 fs-6 px-3">
                Kita Pergi Hari Ini
                <span class="position-absolute top-0 start-50 translate-middle badge bg-primary text-light">Novel</span>
            </h5>
            <div class="card-footer mb-3 border-0">
                <div class="row mt-auto">
                    <div class="col">
                        <small style="color: rgb(67, 170, 255)">Rp</small><big class="me-1"
                            style="color: rgb(67, 170, 255)">73.000</big>
                    </div>
                    <div class="col-md-auto me-3">
                        <small>3,8RB Terjual</small>
                    </div>
                </div>
            </div>
            <a class="stretched-link" href="#"></a>
        </div>
        <div class="ms-3">
            <div class="card" style="width: 240px; height: 360px">
                <div class="image-wrapper">
                    <img class="card-img-top img-thumbnail mx-auto d-block mt-2"
                        src="{{ asset('img/recommendations/Moon atau Bulan.jpg') }}" alt=""
                        style="height: 220px; width: 70%" />
                </div>
                <h5 class="card-title mt-2 fs-6 px-3">
                    Moon atau Bulan
                    <span
                        class="position-absolute top-0 start-50 translate-middle badge bg-primary text-light">Novel</span>
                </h5>
                <div class="card-footer mb-3 border-0">
                    <div class="row mt-auto">
                        <div class="col">
                            <small style="color: rgb(67, 170, 255)">Rp</small><big class="me-1"
                                style="color: rgb(67, 170, 255)">73.000</big>
                        </div>
                        <div class="col-md-auto me-3">
                            <small>3,8RB Terjual</small>
                        </div>
                    </div>
                </div>
                <a class="stretched-link" href="#"></a>
            </div>
        </div>
        <div class="ms-3">
            <div class="card" style="width: 240px; height: 360px">
                <div class="image-wrapper">
                    <img class="card-img-top img-thumbnail mx-auto d-block mt-2"
                        src="{{ asset('img/recommendations/Perpustakaan Tengah Malam.jpg') }}" alt=""
                        style="height: 220px; width: 70%" />
                </div>
                <h5 class="card-title mt-2 me-2 fs-6 px-3">
                    Perpustakaan Tengah Malam
                    <span
                        class="position-absolute top-0 start-50 translate-middle badge bg-primary text-light">Novel</span>
                </h5>
                <div class="card-footer mb-3 border-0">
                    <div class="row mt-auto">
                        <div class="col">
                            <small style="color: rgb(67, 170, 255)">Rp</small><big class="me-1"
                                style="color: rgb(67, 170, 255)">73.000</big>
                        </div>
                        <div class="col-md-auto me-3">
                            <small>3,8RB Terjual</small>
                        </div>
                    </div>
                </div>
                <a class="stretched-link" href="#"></a>
            </div>
        </div>
        <div class="ms-3">
            <div class="card" style="width: 240px; height: 360px">
                <div class="image-wrapper">
                    <img class="card-img-top img-thumbnail mx-auto d-block mt-2"
                        src="{{ asset('img/recommendations/Twenty Four Eyes.jpg') }}" alt=""
                        style="height: 220px; width: 70%" />
                </div>
                <h5 class="card-title mt-2 fs-6 px-3">
                    Twenty Four Eyes
                    <span
                        class="position-absolute top-0 start-50 translate-middle badge bg-primary text-light">Novel</span>
                </h5>
                <div class="card-footer mb-3 border-0">
                    <div class="row mt-auto">
                        <div class="col">
                            <small style="color: rgb(67, 170, 255)">Rp</small><big class="me-1"
                                style="color: rgb(67, 170, 255)">73.000</big>
                        </div>
                        <div class="col-md-auto me-3">
                            <small>3,8RB Terjual</small>
                        </div>
                    </div>
                </div>
                <a class="stretched-link" href="#"></a>
            </div>
        </div>
        <div class="ms-3">
            <div class="card" style="width: 240px; height: 360px">
                <div class="image-wrapper">
                    <img class="card-img-top img-thumbnail mx-auto d-block mt-2"
                        src="{{ asset('img/recommendations/ramai yang dulu kita bawa pergi.jpg') }}" alt=""
                        style="height: 220px; width: 70%" />
                </div>
                <h5 class="card-title mt-2 fs-6 px-3">
                    Ramai Yang Dulu Kita ...
                    <span
                        class="position-absolute top-0 start-50 translate-middle badge bg-primary text-light">Novel</span>
                </h5>
                <div class="card-footer mb-3 border-0">
                    <div class="row mt-auto">
                        <div class="col">
                            <small style="color: rgb(67, 170, 255)">Rp</small><big class="me-1"
                                style="color: rgb(67, 170, 255)">73.000</big>
                        </div>
                        <div class="col-md-auto me-3">
                            <small>3,8RB Terjual</small>
                        </div>
                    </div>
                </div>
                <a class="stretched-link" href="#"></a>
            </div>
        </div>
    </div>
@endsection
