<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME' . '') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="News Portal" name="keywords">
    @yield('meta')

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/front/lib/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/lib/slick/slick-theme.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/front/css/style.css') }}" rel="stylesheet">
    @yield('css')

</head>

<body>
    @include('layout.front.header')


    @yield('content')


    @include('layout.front.footer')


    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/front/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/front/lib/slick/slick.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('assets/front/js/main.js') }}"></script>
    @yield('js')
</body>

</html>
