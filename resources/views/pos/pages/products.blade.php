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
