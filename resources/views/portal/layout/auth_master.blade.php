<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="E-Gov LLC">
    <meta name="keywords" content="E-Gov LLC">
    <meta name="author" content="E-Gov LLC">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ url('/') }}/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ url('/') }}/images/favicon.ico" type="image/x-icon" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pushkaram - Admin - @yield('page_title')</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/vendors/fontawesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/vendors/themify-icons.css">

    <!-- slick icon-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/vendors/slick-theme.css">

    <!-- jsgrid css-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/vendors/jsgrid.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/vendors/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/admin.css">
    @toastr_css
    <style>
        #toast-container>div {
            opacity: 1 !important;
        }

    </style>
</head>

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">
        <div class="authentication-box">
            <div class="container">
                @yield("content")
                <a href="#" class="btn btn-primary back-btn" onclick="history.back();"><i
                        data-feather="arrow-left"></i>back</a>
            </div>
        </div>
    </div>

    <!-- latest jquery-->
    <script src="{{ url('/') }}/assets/js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="{{ url('/') }}/assets/js/bootstrap.bundle.min.js"></script>

    <!-- feather icon js-->
    <script src="{{ url('/') }}/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="{{ url('/') }}/assets/js/icons/feather-icon/feather-icon.js"></script>

    <!-- Sidebar jquery-->
    <script src="{{ url('/') }}/assets/js/sidebar-menu.js"></script>
    <script src="{{ url('/') }}/assets/js/slick.js"></script>

    <!-- Jsgrid js-->
    <script src="{{ url('/') }}/assets/js/jsgrid/jsgrid.min.js"></script>
    <script src="{{ url('/') }}/assets/js/jsgrid/griddata-invoice.js"></script>
    <script src="{{ url('/') }}/assets/js/jsgrid/jsgrid-invoice.js"></script>

    <!-- lazyload js-->
    <script src="{{ url('/') }}/assets/js/lazysizes.min.js"></script>

    <!--right sidebar js-->
    <script src="{{ url('/') }}/assets/js/chat-menu.js"></script>

    <!--script admin-->
    <script src="{{ url('/') }}/assets/js/admin-script.js"></script>

    <script>
        $('.single-item').slick({
            arrows: false,
            dots: true
        });

    </script>
    @toastr_js
    @toastr_render
    @include('sweetalert::alert')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    </script>
    @yield('scripts')
</body>

</html>
