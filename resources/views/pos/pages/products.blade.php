@extends('pos.index')

@section('products')
    <main class="main" id="main">

        <div class="pagetitle">
            <h1>Product List</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="/products">Product</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button class="btn-close" data-bs-dismiss="alert" type="button" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body p-5">

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        {{-- <th scope="col">Image</th> --}}
                                        <th scope="col">Name</th>
                                        {{-- <th scope="col">Category</th> --}}
                                        <th scope="col">Description</th>
                                        <th scope="col">Stock</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Weight</th>
                                        <th scope="col">Action</th>
                                        {{-- <th scope="col">Stock Update</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($products as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            {{-- <td>{{ $item->image }}</td> --}}
                                            <td>{{ $item->name }}</td>
                                            {{-- <td>{{ $item->category->name }}</td> --}}
                                            <td>{{ $item->description }}</td>
                                            <td>{{ $item->stock }}</td>
                                            <td><span>Rp </span>{{ $item->harga }}</td>
                                            <td>{{ $item->weight }} <span>gr</span></td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button class="btn btn-info" data-bs-toggle="modal"
                                                    data-bs-target="#productInfo" type="button"><i class="bi bi-eye"></i>
                                                </button>
                                                <a class="btn btn-warning" href="/products/{{ $item->id }}/edit"><i
                                                        class="bi bi-pencil"></i></a>
                                                <form class="d-inline" action="/products/{{ $item->id }}"
                                                    method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger"
                                                        onclick="return confirm('Are you sure to delete your product?')"><i
                                                            class="bi bi-trash"></i></button>
                                                </form>
                                                {{-- <a class="btn btn-danger fw-bold text-light mt-2"
                                                    href="/products/{{ $item->id }}"
                                                    onclick="return confirm('Are you sure to remove your account?')"><i
                                                        class="bi bi-trash"></i></a> --}}
                                            </td>
                                            {{-- <td>{{ $item->sale_date }}</td> --}}
                                            {{-- <td>{{ $item->stock_update }}</td> --}}
                                        </tr>
                                        <!-- Modal -->
                                        <div class="modal fade" id="productInfo" aria-labelledby="productInfoLabel"
                                            aria-hidden="true" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title fw-bold" id="productInfoLabel">
                                                            {{ $item->name }}
                                                            <span
                                                                class="position-absolute top-0 start-50 translate-middle badge bg-primary text-light">Novel</span>
                                                        </h5>
                                                        <button class="btn-close" data-bs-dismiss="modal" type="button"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="image-wrapper">
                                                            <img class="card-img-top img-thumbnail mx-auto d-block mt-2"
                                                                src="http://www.proedsolutions.com/wp-content/themes/micron/images/placeholders/placeholder_large.jpg"
                                                                alt="" width="100" />
                                                        </div>
                                                        <div class="mt-3">
                                                            <h5 class="text-primary">
                                                                Description:
                                                            </h5>
                                                            {{ $item->description }}
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer justify-content-center fw-bold">
                                                        <small style="color: rgb(67, 170, 255)">Rp</small><big
                                                            class="me-1"
                                                            style="color: rgb(67, 170, 255)">{{ $item->harga }}</big>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <tr>
                                            <td colspan="7">No products available here</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
