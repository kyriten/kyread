@extends('layouts.app')

@section('promo')
    <div class="row">
        <div class="col mt-4">
          <div
            id="carouselExampleSlidesOnly"
            class="carousel slide"
            data-bs-ride="carousel">
            <div class="carousel-inner rounded-3" id="promo-banner">
              <div class="carousel-item active">
                <img
                  src="{{ asset('img/promo-banner/banner1.jpg') }}"
                  class="d-block w-100"
                  alt="" />
              </div>
              <div class="carousel-item">
                <img
                  src="{{ asset('img/promo-banner/banner2.jpg') }}"
                  class="d-block w-100"
                  alt="" />
              </div>
              <div class="carousel-item">
                <img
                  src="{{ asset('img/promo-banner/banner3.jpg') }}"
                  class="d-block w-100"
                  alt="" />
              </div>
              <div class="carousel-item">
                <img
                  src="{{ asset('img/promo-banner/banner4.jpg') }}"
                  class="d-block w-100"
                  alt="" />
              </div>
              <div class="carousel-item">
                <img
                  src="{{ asset('img/promo-banner/banner5.jpg') }}"
                  class="d-block w-100"
                  alt="" />
              </div>
              <div class="carousel-item">
                <img
                  src="{{ asset('img/promo-banner/banner6.jpg') }}"
                  class="d-block w-100"
                  alt="" />
              </div>
              <div class="carousel-item">
                <img
                  src="{{ asset('img/promo-banner/banner7.jpg') }}"
                  class="d-block w-100"
                  alt="" />
              </div>
              <div class="carousel-item">
                <img
                  src="{{ asset('img/promo-banner/banner8.jpg') }}"
                  class="d-block w-100"
                  alt="" />
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
                    <img
                    src="{{ asset('img/categories/novel.png') }}"
                    alt=""
                    class="rounded-circle border border-2 border-dark p-2 border-opacity-25"
                    id="ctg1"
                    style="width: 70px" />
                    <label for="ctg1" class="fw-semibold">Novel</label>
                </li>

                <li class="list-group-item flex-item">
                <img
                    src="{{ asset('img/categories/biography.png') }}"
                    alt=""
                    class="rounded-circle border border-2 border-dark p-2 border-opacity-25"
                    id="ctg2"
                    style="width: 70px" />
                <label for="ctg2" class="fw-semibold">Biography</label>
                </li>

                <li class="list-group-item flex-item">
                <img
                    src="{{ asset('img/categories/comics.png') }}"
                    alt=""
                    class="rounded-circle border border-2 border-dark p-2 border-opacity-25"
                    id="ctg3"
                    style="width: 70px" />
                <label for="ctg3" class="fw-semibold">Comics</label>
                </li>

                <li class="list-group-item flex-item">
                <img
                    src="{{ asset('img/categories/magazine.png') }}"
                    alt=""
                    class="rounded-circle border border-2 border-dark p-2 border-opacity-25"
                    id="ctg4"
                    style="width: 70px" />
                <label for="ctg4" class="fw-semibold">Magazine</label>
                </li>

                <li class="list-group-item flex-item">
                <img
                    src="{{ asset('img/categories/dictionary.png') }}"
                    alt=""
                    class="rounded-circle border border-2 border-dark p-2 border-opacity-25"
                    id="ctg5"
                    style="width: 70px" />
                <label for="ctg5" class="fw-semibold">Dictionary</label>
                </li>

                <li class="list-group-item flex-item">
                <img
                    src="{{ asset('img/categories/script.png') }}"
                    alt=""
                    class="rounded-circle border border-2 border-dark p-2 border-opacity-25"
                    id="ctg6"
                    style="width: 70px" />
                <label for="ctg6" class="fw-semibold">Script</label>
                </li>

                <li class="list-group-item flex-item">
                <img
                    src="{{ asset('img/categories/manga.png') }}"
                    alt=""
                    class="rounded-circle border border-2 border-dark p-2 border-opacity-25"
                    id="ctg7"
                    style="width: 70px" />
                <label for="ctg7" class="fw-semibold">Manga</label>
                </li>

                <li class="list-group-item flex-item">
                <img
                    src="{{ asset('img/categories/encyclopedia.png') }}"
                    alt=""
                    class="rounded-circle border border-2 border-dark p-2 border-opacity-25"
                    id="ctg8"
                    style="width: 70px" />
                <label for="ctg8" class="fw-semibold">Encyclopedia</label>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('recommendations')
      <!-- RECOMMENDATIONS -->
      <h5 class="fw-semibold mt-4">RECOMMENDATIONS</h5>
      {{-- Row 1 --}}
      <div class="d-flex justify-content-between text-center mt-3">
        <div class="">
          <div class="card" style="width: 240px; height: 360px">
            <div class="image-wrapper">
              <img
                src="{{ asset('img/recommendations/00.00 Karya Ameylia Falensia.jpg') }}"
                alt=""
                style="height: 90%; width: 70%"
                class="card-img-top img-thumbnail mx-auto d-block mt-2" />
            </div>
            <h5 class="card-title mt-2">
              00.00 Karya Ameylia Falensia
              <span class="badge bg-primary text-light">Novel</span>
            </h5>
            <div class="row mt-auto mb-3">
              <div class="col">
                <small style="color: rgb(67, 170, 255)">Rp</small
                ><big class="me-1" style="color: rgb(67, 170, 255)">73.000</big>
              </div>
              <div class="col-md-auto me-4">
                <small>3,8RB Terjual</small>
              </div>
            </div>
            <a href="#" class="stretched-link"></a>
          </div>
        </div>
        <div class="ms-3">
          <div class="card" style="width: 240px; height: 360px">
            <div class="image-wrapper">
              <img
                src="{{ asset('img/recommendations/Yang Bertahan dan Binasa Perlahan.jpg') }}"
                alt=""
                style="height: 90%; width: 70%"
                class="card-img-top img-thumbnail mx-auto d-block mt-2" />
            </div>
            <h5 class="card-title ms-2 me-2">
              Yang Bertahan dan Binasa Perlahan
              <span class="badge bg-primary text-light">Novel</span>
            </h5>
            <div class="row mt-auto mb-3">
              <div class="col">
                <small style="color: rgb(67, 170, 255)">Rp</small
                ><big class="me-1" style="color: rgb(67, 170, 255)">73.000</big>
              </div>
              <div class="col-md-auto me-4">
                <small>3,8RB Terjual</small>
              </div>
            </div>
            <a href="#" class="stretched-link"></a>
          </div>
        </div>
        <div class="ms-3">
          <div class="card" style="width: 240px; height: 360px">
            <div class="image-wrapper">
              <img
                src="{{ asset('img/recommendations/Selamat Tinggal.jpg') }}"
                alt=""
                style="height: 90%; width: 70%"
                class="card-img-top img-thumbnail mx-auto d-block mt-2" />
            </div>
            <h5 class="card-title mt-2">
              Selamat Tinggal
              <span class="badge bg-primary text-light">Novel</span>
            </h5>
            <div class="row mt-auto mb-3">
              <div class="col">
                <small style="color: rgb(67, 170, 255)">Rp</small
                ><big class="me-1" style="color: rgb(67, 170, 255)">73.000</big>
              </div>
              <div class="col-md-auto me-4">
                <small>3,8RB Terjual</small>
              </div>
            </div>
            <a href="#" class="stretched-link"></a>
          </div>
        </div>
        <div class="ms-3">
          <div class="card" style="width: 240px; height: 360px">
            <div class="image-wrapper">
              <img
                src="{{ asset('img/recommendations/Black Showman dan Pembunuhan di Kota Tak Bernama.jpg') }}"
                alt=""
                style="height: 90%; width: 70%"
                class="card-img-top img-thumbnail mx-auto d-block mt-2" />
            </div>
            <h5 class="card-title mt-2">
              Dikta & Hukum
              <span class="badge bg-primary text-light">Novel</span>
            </h5>
            <div class="row mt-auto mb-3">
              <div class="col">
                <small style="color: rgb(67, 170, 255)">Rp</small
                ><big class="me-1" style="color: rgb(67, 170, 255)">73.000</big>
              </div>
              <div class="col-md-auto me-4">
                <small>3,8RB Terjual</small>
              </div>
            </div>
            <a href="#" class="stretched-link"></a>
          </div>
        </div>
        <div class="ms-3">
          <div class="card" style="width: 240px; height: 360px">
            <div class="image-wrapper">
              <img
                src="{{ asset('img/recommendations/Cantik Itu Luka.jpg') }}"
                alt=""
                style="height: 90%; width: 70%"
                class="card-img-top img-thumbnail mx-auto d-block mt-2" />
            </div>
            <h5 class="card-title mt-2">
              Cantik Itu Luka
              <span class="badge bg-primary text-light">Novel</span>
            </h5>
            <div class="row mt-auto mb-3">
              <div class="col">
                <small style="color: rgb(67, 170, 255)">Rp</small
                ><big class="me-1" style="color: rgb(67, 170, 255)">73.000</big>
              </div>
              <div class="col-md-auto me-4">
                <small>3,8RB Terjual</small>
              </div>
            </div>
            <a href="#" class="stretched-link"></a>
          </div>
        </div>
      </div>

      {{-- Row 2 --}}
      <div class="d-flex justify-content-between text-center mt-3">
        <div class="">
          <div class="card" style="width: 240px; height: 360px">
            <div class="image-wrapper">
              <img
                src="{{ asset('img/recommendations/Di Tanah Lada.jpg') }}"
                alt=""
                style="height: 90%; width: 70%"
                class="card-img-top img-thumbnail mx-auto d-block mt-2" />
            </div>
            <h5 class="card-title mt-2">
              Di Tanah Lada
              <span class="badge bg-primary text-light">Novel</span>
            </h5>
            <div class="row mt-auto mb-3">
              <div class="col">
                <small style="color: rgb(67, 170, 255)">Rp</small
                ><big class="me-1" style="color: rgb(67, 170, 255)">73.000</big>
              </div>
              <div class="col-md-auto me-4">
                <small>3,8RB Terjual</small>
              </div>
            </div>
            <a href="#" class="stretched-link"></a>
          </div>
        </div>
        <div class="ms-3">
          <div class="card" style="width: 240px; height: 360px">
            <div class="image-wrapper">
              <img
                src="{{ asset('img/recommendations/Fur Immer Dein Ian.jpg') }}"
                alt=""
                style="height: 90%; width: 70%"
                class="card-img-top img-thumbnail mx-auto d-block mt-2" />
            </div>
            <h5 class="card-title mt-2">
              Fur Immer Dein Ian
              <span class="badge bg-primary text-light">Novel</span>
            </h5>
            <div class="row mt-auto mb-3">
              <div class="col">
                <small style="color: rgb(67, 170, 255)">Rp</small
                ><big class="me-1" style="color: rgb(67, 170, 255)">73.000</big>
              </div>
              <div class="col-md-auto me-4">
                <small>3,8RB Terjual</small>
              </div>
            </div>
            <a href="#" class="stretched-link"></a>
          </div>
        </div>
        <div class="ms-3">
          <div class="card" style="width: 240px; height: 360px">
            <div class="image-wrapper">
              <img
                src="{{ asset('img/recommendations/Harry Potter and The Philosopher’s Stone.jpg') }}"
                alt=""
                style="height: 90%; width: 70%"
                class="card-img-top img-thumbnail mx-auto d-block mt-2" />
            </div>
            <h5 class="card-title mt-2">
              Harry Potter
              <span class="badge bg-primary text-light">Novel</span>
            </h5>
            <div class="row mt-auto mb-3">
              <div class="col">
                <small style="color: rgb(67, 170, 255)">Rp</small
                ><big class="me-1" style="color: rgb(67, 170, 255)">73.000</big>
              </div>
              <div class="col-md-auto me-4">
                <small>3,8RB Terjual</small>
              </div>
            </div>
            <a href="#" class="stretched-link"></a>
          </div>
        </div>
        <div class="ms-3">
          <div class="card" style="width: 240px; height: 360px">
            <div class="image-wrapper">
              <img
                src="{{ asset('img/recommendations/Heartbreak Motel.jpg') }}"
                alt=""
                style="height: 90%; width: 70%"
                class="card-img-top img-thumbnail mx-auto d-block mt-2" />
            </div>
            <h5 class="card-title mt-2">
              Heartbreak Motel
              <span class="badge bg-primary text-light">Novel</span>
            </h5>
            <div class="row mt-auto mb-3">
              <div class="col">
                <small style="color: rgb(67, 170, 255)">Rp</small
                ><big class="me-1" style="color: rgb(67, 170, 255)">73.000</big>
              </div>
              <div class="col-md-auto me-4">
                <small>3,8RB Terjual</small>
              </div>
            </div>
            <a href="#" class="stretched-link"></a>
          </div>
        </div>
        <div class="ms-3">
          <div class="card" style="width: 240px; height: 360px">
            <div class="image-wrapper">
              <img
                src="{{ asset('img/recommendations/I Think I Love You - Cha Mirae.jpg') }}"
                alt=""
                style="height: 90%; width: 70%"
                class="card-img-top img-thumbnail mx-auto d-block mt-2" />
            </div>
            <h5 class="card-title mt-2">
              I Think I Love You - Cha Mirae
              <span class="badge bg-primary text-light">Novel</span>
            </h5>
            <div class="row mt-auto mb-3">
              <div class="col">
                <small style="color: rgb(67, 170, 255)">Rp</small
                ><big class="me-1" style="color: rgb(67, 170, 255)">73.000</big>
              </div>
              <div class="col-md-auto me-4">
                <small>3,8RB Terjual</small>
              </div>
            </div>
            <a href="#" class="stretched-link"></a>
          </div>
        </div>
      </div>

      {{-- Row 3 --}}
      <div class="d-flex justify-content-between text-center mt-3">
        <div class="">
          <div class="card" style="width: 240px; height: 360px">
            <div class="image-wrapper">
              <img
                src="{{ asset('img/recommendations/Kita Pergi Hari Ini.jpg') }}"
                alt=""
                style="height: 90%; width: 70%"
                class="card-img-top img-thumbnail mx-auto d-block mt-2" />
            </div>
            <h5 class="card-title mt-2">
              Kita Pergi Hari Ini
              <span class="badge bg-primary text-light">Novel</span>
            </h5>
            <div class="row mt-auto mb-3">
              <div class="col">
                <small style="color: rgb(67, 170, 255)">Rp</small
                ><big class="me-1" style="color: rgb(67, 170, 255)">73.000</big>
              </div>
              <div class="col-md-auto me-4">
                <small>3,8RB Terjual</small>
              </div>
            </div>
            <a href="#" class="stretched-link"></a>
          </div>
        </div>
        <div class="ms-3">
          <div class="card" style="width: 240px; height: 360px">
            <div class="image-wrapper">
              <img
                src="{{ asset('img/recommendations/Moon atau Bulan.jpg') }}"
                alt=""
                style="height: 90%; width: 70%"
                class="card-img-top img-thumbnail mx-auto d-block mt-2" />
            </div>
            <h5 class="card-title mt-2">
              Moon atau Bulan
              <span class="badge bg-primary text-light">Novel</span>
            </h5>
            <div class="row mt-auto mb-3">
              <div class="col">
                <small style="color: rgb(67, 170, 255)">Rp</small
                ><big class="me-1" style="color: rgb(67, 170, 255)">73.000</big>
              </div>
              <div class="col-md-auto me-4">
                <small>3,8RB Terjual</small>
              </div>
            </div>
            <a href="#" class="stretched-link"></a>
          </div>
        </div>
        <div class="ms-3">
          <div class="card" style="width: 240px; height: 360px">
            <div class="image-wrapper">
              <img
                src="{{ asset('img/recommendations/Perpustakaan Tengah Malam.jpg') }}"
                alt=""
                style="height: 90%; width: 70%"
                class="card-img-top img-thumbnail mx-auto d-block mt-2" />
            </div>
            <h5 class="card-title mt-2">
              Perpustakaan Tengah Malam
              <span class="badge bg-primary text-light">Novel</span>
            </h5>
            <div class="row mt-auto mb-3">
              <div class="col">
                <small style="color: rgb(67, 170, 255)">Rp</small
                ><big class="me-1" style="color: rgb(67, 170, 255)">73.000</big>
              </div>
              <div class="col-md-auto me-4">
                <small>3,8RB Terjual</small>
              </div>
            </div>
            <a href="#" class="stretched-link"></a>
          </div>
        </div>
        <div class="ms-3">
          <div class="card" style="width: 240px; height: 360px">
            <div class="image-wrapper">
              <img
                src="{{ asset('img/recommendations/Twenty Four Eyes.jpg') }}"
                alt=""
                style="height: 90%; width: 70%"
                class="card-img-top img-thumbnail mx-auto d-block mt-2" />
            </div>
            <h5 class="card-title mt-2">
              Twenty Four Eyes
              <span class="badge bg-primary text-light">Novel</span>
            </h5>
            <div class="row mt-auto mb-3">
              <div class="col">
                <small style="color: rgb(67, 170, 255)">Rp</small
                ><big class="me-1" style="color: rgb(67, 170, 255)">73.000</big>
              </div>
              <div class="col-md-auto me-4">
                <small>3,8RB Terjual</small>
              </div>
            </div>
            <a href="#" class="stretched-link"></a>
          </div>
        </div>
        <div class="ms-3">
          <div class="card" style="width: 240px; height: 360px">
            <div class="image-wrapper">
              <img
                src="{{ asset('img/recommendations/ramai yang dulu kita bawa pergi.jpg') }}"
                alt=""
                style="height: 90%; width: 70%"
                class="card-img-top img-thumbnail mx-auto d-block mt-2" />
            </div>
            <h5 class="card-title mt-2">
              Ramai Yang Dulu Kita Bawa Pergi
              <span class="badge bg-primary text-light">Novel</span>
            </h5>
            <div class="row mt-auto mb-3">
              <div class="col">
                <small style="color: rgb(67, 170, 255)">Rp</small
                ><big class="me-1" style="color: rgb(67, 170, 255)">73.000</big>
              </div>
              <div class="col-md-auto me-4">
                <small>3,8RB Terjual</small>
              </div>
            </div>
            <a href="#" class="stretched-link"></a>
          </div>
        </div>
      </div>
@endsection
