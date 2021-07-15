<!doctype html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pushkaram - College of Agriculture Science || @yield("page_title")</title>
    <meta name="description" content="">
    <meta name="viewport" conatent="width=device-width, initial-scale=1, user-scalable=0">

    <!-- favicon
  ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

    <!-- Google Fonts
  ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800' rel='stylesheet'
        type='text/css'>

    <!-- Color Swithcer CSS
  ============================================ -->
    <link rel="stylesheet" href="css/color-switcher.css">

    <!-- Fontawsome CSS
  ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Metarial Iconic Font CSS
  ============================================ -->
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">

    <!-- Bootstrap CSS
  ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Plugins CSS
  ============================================ -->
    <link rel="stylesheet" href="css/plugins.css">

    <!-- Style CSS
  ============================================ -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Color CSS
  ============================================ -->
    <link rel="stylesheet" href="css/color.css">

    <!-- Responsive CSS
  ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Modernizr JS
  ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
        .header-top-right .content:hover>a {
            color: #ffffff !important;
        }

        .logo {
            padding-top: 0;
        }

        @media (max-width: 991px) {
            .logo a img {
                max-width: 245px;
                padding-top: 20px;
            }
        }

        @media (max-width: 555px) {
            .about-container h3 {
                font-size: 1.5rem;
            }
        }

        form select.form-control {
            height: 45px !important;
        }

    </style>
    @yield("styles")
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!--Main Wrapper Start-->
    <div class="as-mainwrapper">
        <!--Bg White Start-->
        <div class="bg-white">
            <!--Header Area Start-->
            <header>
                <div class="header-top bg-green effect-blue">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-5 d-none d-lg-block d-md-block">
                                <span>Have any question? 0123456789</span>
                            </div>
                            <div class="col-lg-5 col-md-7 col-12">
                                <div class="header-top-right">
                                    <div class="content">
                                        <a href="#" data-toggle="modal" data-target="#modelId"><i
                                                class="zmdi zmdi-assignment-o"></i> Enquiry</a>
                                    </div>
                                    <div class="content"><a href="#"><i class="zmdi zmdi-phone-in-talk"></i> Reach
                                            Us</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-logo-menu">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-12 my-auto">
                                <div class="logo">
                                    <a href="#"><img src="assets/images/logo.png" alt="PUSHKARAM"></a>
                                </div>
                            </div>
                            <div class="col-lg-9 col-12 my-auto">
                                <div class="mainmenu-area pull-right">
                                    <div class="mainmenu d-none d-lg-block">
                                        <nav>
                                            <ul id="nav" class="border-full">
                                                <li class="current"><a href="/">Home</a></li>
                                                <li><a href="#">About</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">Governing Council</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Academics</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="/courses">B.Sc.(Hons.) Agriculture</a></li>
                                                        <li><a href="#">Departments<i
                                                                    class="zmdi zmdi-chevron-right"></i></a>
                                                            <ul class="inside-menu">
                                                                <li><a href="#">Dept 1</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Academics</a></li>
                                                        <li><a href="#">Faculty</a></li>
                                                        <li><a href="#">Eve 1</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Scholarships</a></li>
                                                <li><a href="#">Admission</a></li>
                                                <li><a href="#">Research</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">Pushkaram Centre for Research and Excellence</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">MoU’s</a></li>
                                                <li><a href="#">Campus Life</a></li>
                                                <li><a href="#">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <ul class="header-search">
                                        <li class="search-menu">
                                            <i id="toggle-search" class="zmdi zmdi-search-for"></i>
                                        </li>
                                    </ul>
                                    <!--Search Form-->
                                    <div class="search">
                                        <div class="search-form">
                                            <form id="search-form" action="#">
                                                <input type="search" placeholder="Search here..." name="search" />
                                                <button type="submit">
                                                    <span><i class="fa fa-search"></i></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <!--End of Search Form-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area start -->
                <div class="mobile-menu-area">
                    <div class="container clearfix">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul>
                                            <li class="current"><a href="/">Home</a></li>
                                            <li><a href="#">About</a>
                                                <ul class="sub-menu">
                                                    <li><a href="#">Governing Council</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Academics</a>
                                                <ul class="sub-menu">
                                                    <li><a href="/courses">B.Sc.(Hons.) Agriculture</a></li>
                                                    <li><a href="#">Departments<i
                                                                class="zmdi zmdi-chevron-right"></i></a>
                                                        <ul class="inside-menu">
                                                            <li><a href="#">Dept 1</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Academics</a></li>
                                                    <li><a href="#">Faculty</a></li>
                                                    <li><a href="#">Eve 1</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Scholarships</a></li>
                                            <li><a href="#">Admission</a></li>
                                            <li><a href="#">Research</a>
                                                <ul class="sub-menu">
                                                    <li><a href="#">Pushkaram Centre for Research and Excellence</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">MoU’s</a></li>
                                            <li><a href="#">Campus Life</a></li>
                                            <li><a href="#">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area end -->
            </header>
            <!--End of Header Area-->
