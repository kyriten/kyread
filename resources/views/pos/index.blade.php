<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;1,500;1,700;1,800&display=swap"
        rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link href="{{ asset('pos/assets/img/brand.svg') }}" rel="icon">
    <link href="{{ asset('pos/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('pos/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('pos/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('pos/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('pos/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('pos/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('pos/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template POS CSS File -->
    <link href="{{ asset('pos/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    @include('pos.sidebar')
    @include('pos.topbar')

    @yield('dashboard')
    @yield('products')
    @yield('addproduct')
    @yield('editproduct')
    @yield('store')
    @yield('faq')
    @yield('contact')
    @yield('transaction')
    @yield('featurelocked')

    @include('partials.footer')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>

    @include('pos.feature.image')
    <!-- Vendor JS Files -->
    <script src="{{ asset('pos/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('pos/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('pos/assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('pos/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('pos/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('pos/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('pos/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('pos/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('pos/assets/js/main.js') }}"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
        function logout() {

            swal({

                title: "Logout Succeed!",

                text: "You have exited the app.",

                icon: "success",

                button: true

            });

        }
    </script>
</body>

</html>
