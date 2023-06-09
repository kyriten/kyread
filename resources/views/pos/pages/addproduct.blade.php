@extends('pos.index')

@section('addproduct')
    <main class="main" id="main">

        <div class="pagetitle">
            <h1>Add New Product</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="/products">Product</a></li>
                    <li class="breadcrumb-item active">Add Product</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fs-4">Upload Product Image
                                <br>
                                <small class="text-dark fs-6">Only one image can be uploaded</small>
                            </h5>

                            <!--Image-->
                            <div>
                                <div class="mb-4 d-flex justify-content-center">
                                    <img src="http://www.proedsolutions.com/wp-content/themes/micron/images/placeholders/placeholder_large.jpg"
                                        alt="image placeholder" style="width: 300px;" />
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="btn btn-primary btn-rounded">
                                        <label class="form-label text-white m-1" for="customFile1">Choose file</label>
                                        <input class="form-control d-none" id="customFile1" type="file" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fs-4">Detail Product</h5>

                            <!-- Detail Product Form -->
                            <form>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Information</label>
                                    <div class="col-sm-10">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="floatingInput" name="name" type="text"
                                                placeholder="Enter product name">
                                            <label for="floatingInput">Name of Product</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="floatingPassword" type="text"
                                                placeholder="Enter product description">
                                            <label for="floatingPassword">Product Description and #hashtag</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="floatingSelect"
                                                aria-label="Floating label select example">
                                                <option selected>None</option>
                                                <option value="1">Novel</option>
                                                <option value="2">Biography</option>
                                                <option value="3">Comics</option>
                                                <option value="4">Magazine</option>
                                                <option value="5">Dictionary</option>
                                                <option value="6">Script</option>
                                                <option value="7">Manga</option>
                                                <option value="8">Encyclopedia</option>
                                            </select>
                                            <label for="floatingSelect">Select Category</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <label class="col-sm-2 col-form-label">Stock & Price</label>
                                    <div class="col-sm-10">

                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Rp</span>
                                            <input class="form-control" type="text"
                                                placeholder="Enter product price (in Rupiah)">
                                            <span class="input-group-text border-0">.00</span>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="floatingInput" name="name" type="text"
                                                placeholder="Enter stock of product">
                                            <label for="floatingInput">Stock</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <label class="col-sm-2 col-form-label">Delivery</label>
                                    <div class="col-sm-10">

                                        <div class="input-group mb-3">
                                            <input class="form-control" type="text" placeholder="Enter product weight">
                                            <span class="input-group-text border-0">gr</span>
                                        </div>
                                        <div class="card border border-1 bg-transparent shadow-none p-2">
                                            <span
                                                class="position-absolute top-0 ms-3 translate-middle badge bg-white text-success border border-1 border-white">Aktif</span>
                                            <div
                                                class="form-check form-switch d-flex align-items-center justify-content-between">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">JNE
                                                    Reguler</label>
                                                <input class="form-check-input" id="flexSwitchCheckDefault" type="checkbox">
                                            </div>
                                            <div
                                                class="form-check form-switch d-flex align-items-center justify-content-between">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">J&T
                                                    Express</label>
                                                <input class="form-check-input" id="flexSwitchCheckDefault" type="checkbox">
                                            </div>
                                            <div
                                                class="form-check form-switch d-flex align-items-center justify-content-between">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">JNE
                                                    OKE</label>
                                                <input class="form-check-input" id="flexSwitchCheckDefault"
                                                    type="checkbox">
                                            </div>
                                            <div
                                                class="form-check form-switch d-flex align-items-center justify-content-between">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">GO-SEND
                                                    INSTANT</label>
                                                <input class="form-check-input" id="flexSwitchCheckDefault"
                                                    type="checkbox">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-end">
                                    <button class="btn btn-secondary fw-bold text-primary" id="reset"
                                        type="reset">{{ __('RESET') }}</button>
                                    <button class="btn btn-primary fw-bold text-light" id="submit"
                                        type="submit">{{ __('SUBMIT') }}</button>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>

                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
