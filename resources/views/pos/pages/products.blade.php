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

                    <div class="card">
                        <div class="card-body p-5">

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Item Name</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Stock</th>
                                        <th scope="col">Items Sold</th>
                                        <th scope="col">Sale Date</th>
                                        <th scope="col">Stock Update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Image</td>
                                        <td>Brandon Jacob</td>
                                        <td>Designer</td>
                                        <td>28</td>
                                        <td>28</td>
                                        <td>2016-05-25</td>
                                        <td>2016-05-25</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Image</td>
                                        <td>Bridie Kessler</td>
                                        <td>Developer</td>
                                        <td>35</td>
                                        <td>28</td>
                                        <td>2014-12-05</td>
                                        <td>2014-12-05</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Image</td>
                                        <td>Ashleigh Langosh</td>
                                        <td>Finance</td>
                                        <td>45</td>
                                        <td>28</td>
                                        <td>2011-08-12</td>
                                        <td>2011-08-12</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Image</td>
                                        <td>Angus Grady</td>
                                        <td>HR</td>
                                        <td>34</td>
                                        <td>28</td>
                                        <td>2012-06-11</td>
                                        <td>2012-06-11</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Image</td>
                                        <td>Raheem Lehner</td>
                                        <td>Dynamic Division Officer</td>
                                        <td>47</td>
                                        <td>28</td>
                                        <td>2011-04-19</td>
                                        <td>2011-04-19</td>
                                    </tr>
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
