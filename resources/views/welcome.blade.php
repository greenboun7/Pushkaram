@extends("particles.layout")
@section('page_title', 'Home')
@section('styles')
    <style>
        /* .nivo-caption {
                                    background: #00000052;
                                } */
        .slides img {
            height: 450px;
            width: 100%;
            object-fit: cover;
            object-position: center;
        }

        .slider_notice {
            height: 450px;
            overflow: scroll;
            overflow-x: hidden;
        }

        .slider_notice::-webkit-scrollbar {
            width: 1em;
        }

        .slider_notice::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        .slider_notice::-webkit-scrollbar-thumb {
            background-color: darkgrey;
            outline: 1px solid slategrey;
        }

    </style>
@endsection
@section('content')
    <!--Slider Area Start-->
    <div class="row m-0" style="background: #f6f6f6 none repeat scroll 0 0;">
        <div class="col-lg-8 col-md-8 p-0">
            <div class="slider-area slider-two">
                <div class="preview-2">
                    <div id="nivoslider" class="slides">
                        <img src="assets/images/sliders/2.jpg" alt="Pushkaram College of Agriculture Science" />
                        <img src="assets/images/sliders/2.jpg" alt="Pushkaram College of Agriculture Science" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 p-0">
           <div class="slider_notice">
            <div class="single-latest-item mb-1">
                <div class="single-latest-text">
                    <h3 style="font-size: 130%;"><a href="#">Learn English in ease</a></h3>
                    <p class="mb-0 pb-0">There are many variaons of passage</p>
                </div>
            </div>
            <div class="single-latest-item mb-1">
                <div class="single-latest-text">
                    <h3 style="font-size: 130%;"><a href="#">Learn English in ease</a></h3>
                    <p class="mb-0 pb-0">There are many variaons of passage</p>
                </div>
            </div>
            <div class="single-latest-item mb-1">
                <div class="single-latest-text">
                    <h3 style="font-size: 130%;"><a href="#">Learn English in ease</a></h3>
                    <p class="mb-0 pb-0">There are many variaons of passage</p>
                </div>
            </div>
            <div class="single-latest-item mb-1">
                <div class="single-latest-text">
                    <h3 style="font-size: 130%;"><a href="#">Learn English in ease</a></h3>
                    <p class="mb-0 pb-0">There are many variaons of passage</p>
                </div>
            </div>
            <div class="single-latest-item mb-1">
                <div class="single-latest-text">
                    <h3 style="font-size: 130%;"><a href="#">Learn English in ease</a></h3>
                    <p class="mb-0 pb-0">There are many variaons of passage</p>
                </div>
            </div>
            <div class="single-latest-item mb-1">
                <div class="single-latest-text">
                    <h3 style="font-size: 130%;"><a href="#">Learn English in ease</a></h3>
                    <p class="mb-0 pb-0">There are many variaons of passage</p>
                </div>
            </div>
            <div class="single-latest-item mb-1">
                <div class="single-latest-text">
                    <h3 style="font-size: 130%;"><a href="#">Learn English in ease</a></h3>
                    <p class="mb-0 pb-0">There are many variaons of passage</p>
                </div>
            </div>
            <div class="single-latest-item mb-1">
                <div class="single-latest-text">
                    <h3 style="font-size: 130%;"><a href="#">Learn English in ease</a></h3>
                    <p class="mb-0 pb-0">There are many variaons of passage</p>
                </div>
            </div>
            <div class="single-latest-item mb-1">
                <div class="single-latest-text">
                    <h3 style="font-size: 130%;"><a href="#">Learn English in ease</a></h3>
                    <p class="mb-0 pb-0">There are many variaons of passage</p>
                </div>
            </div>
           </div>

        </div>
    </div>

    <!--End of Slider Area-->
    <!--About Area Start-->
    <div class="about-area mt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="about-container">
                        <h3>WHY PUSHKARAM ?</h3>
                        <p>What makes our college stand out is a clear vision to offer a good value education.
                        </p>
                        <a class="button-default" href="#">Learn Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of About Area-->

    <!--Teachers Area Start-->
    <div class="section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>Pillars of our college</h3>
                            <p>There are many variations of passages of Lorem Ipsum</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-teacher-item">
                        <div class="single-teacher-image">
                            <a href="#"><img src="img/teacher/rethinam-1.jpg" alt=""></a>
                        </div>
                        <div class="single-teacher-text">
                            <h3><a href="#">Dr.K.Rethinam MJF</a></h3>
                            <h4>Chairman</h4>
                            {{-- <p>Dr.K.Rethinam M.J.F,is a multi faceted personality. He is a leading Educationalist, Agriculturist, Business man and a good orator in Tamil Language and above all he is a good hearted philanthropist. For over 25 years,he has been deeply involved himself in social development and empowerment through education and social welfare activities in Dindigul & Pudukkottai district in Tamil Nadu, South India. Pushkaram is now synonymous with quality education and sustainable social empowerment.</p> --}}
                            <div class="social-links">
                                <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                <a href="#"><i class="zmdi zmdi-google-old"></i></a>
                                <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-teacher-item">
                        <div class="single-teacher-image">
                            <a href="#"><img src="img/teacher/durai.jpg" alt=""></a>
                        </div>
                        <div class="single-teacher-text">
                            <h3><a href="#">Mr.R.Durai B.E,MBA</a></h3>
                            <h4>Director</h4>
                            {{-- <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr</p> --}}
                            <div class="social-links">
                                <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                <a href="#"><i class="zmdi zmdi-google-old"></i></a>
                                <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-teacher-item">
                        <div class="single-teacher-image">
                            <a href="#"><img src="img/teacher/ao.jpg" alt=""></a>
                        </div>
                        <div class="single-teacher-text">
                            <h3><a href="#">Mr.M.Rajaram B.E, M.Tech.,</a></h3>
                            <h4>Administrative Officer cum secretary</h4>
                            {{-- <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr</p> --}}
                            <div class="social-links">
                                <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                <a href="#"><i class="zmdi zmdi-google-old"></i></a>
                                <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-teacher-item">
                        <div class="single-teacher-image">
                            <a href="#"><img src="img/teacher/Chellamuthu.jpg" alt=""></a>
                        </div>
                        <div class="single-teacher-text">
                            <h3><a href="#">Dr. V. Chellamuthu, Ph.D.,</a></h3>
                            <h4>Principal</h4>
                            {{-- <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr</p> --}}
                            <div class="social-links">
                                <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                <a href="#"><i class="zmdi zmdi-google-old"></i></a>
                                <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Teachers Area-->


    <!--Course Area Start-->
    <div class="courses-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title pb-3">
                            <h3>B.Sc (Hons) Agriculture</h3>
                            <!-- <p>There are many variations of passages of Lorem Ipsum</p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-item">
                        <div class="single-item-image overlay-effect">
                            <a href="#"><img
                                    src="https://pushkaram.in/wp-content/uploads/2018/08/IMG20200224180353-01-600x340.jpeg"
                                    alt=""></a>
                            <div class="single-item-text-info">
                            </div>
                            <div class="single-item-text">
                                <h4><a href="#">Horticulture</a></h4>
                                <span>B.sc (Hons.) Agriculture</span></span>
                                <span>ID: <span>391849</span></span>
                            </div>


                        </div>
                        <div class="button-bottom">
                            <a href="#" class="button-default">Learn Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-item">
                        <div class="single-item-image overlay-effect">
                            <a href="#"><img
                                    src="https://pushkaram.in/wp-content/uploads/2019/01/IMG_97401-e1550055242482-600x340.jpg"
                                    alt=""></a>
                        </div>
                        <div class="single-item-text">
                            <h4><a href="#">Agricultural Engineering</a></h4>
                            <div class="single-item-text-info">
                                <span>B.sc (Hons.) Agriculture</span></span>
                                <span>ID: <span>391846</span></span>
                            </div>


                        </div>
                        <div class="button-bottom">
                            <a href="#" class="button-default">Learn Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-item">
                        <div class="single-item-image overlay-effect">
                            <a href="#"><img
                                    src="https://pushkaram.in/wp-content/uploads/2018/08/2015_8largeimg25_Tuesday_2015_184420600-600x340.jpg"
                                    alt=""></a>
                        </div>
                        <div class="single-item-text">
                            <h4><a href="#">Agricultural Economics</a></h4>
                            <div class="single-item-text-info">
                                <span>B.sc (Hons.) Agriculture</span></span>
                                <span>ID: <span>391843</span></span>
                            </div>


                        </div>
                        <div class="button-bottom">
                            <a href="#" class="button-default">Learn Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 text-center">
                    <a href="/courses" class="button-default button-large">Browse All Courses <i
                            class="zmdi zmdi-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--End of Course Area-->
    <!--Fun Factor Area Start-->
    <div class="fun-factor-area section-margin mb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper white">
                        <div class="section-title pb-3">
                            <h3>Facilities</h3>
                            <!-- <p>There are many variations of passages of Lorem Ipsum</p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-fun-factor">
                        <h4>Residential Medical Facility
                        </h4>
                        <p> Our Medical center provides first aid and doctor is ready on call if required.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-fun-factor">
                        <h4>Power Supply</h4>
                        <p> The generators ensite uninterrupted power supply so that activities could be carried out withour
                            interuption</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-fun-factor">
                        <h4>Drinking Water</h4>
                        <p>RO systems are installed in many points in the college to ensure the avvailaiblity of safe
                            srinking water</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Fun Factor Area-->

    <!--Event Area Start-->
    <div class="event-area section-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>OUR EVENTS</h3>
                            <p>There are many variations of passages</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-event-item">
                        <div class="single-event-image">
                            <a href="#">
                                <img src="https://pushkaram.in/wp-content/uploads/2019/06/6-x-4-A-copy-1.jpg" alt="">
                                <span><span>15</span>Jun</span>
                            </a>
                        </div>
                        <div class="single-event-text">
                            <h3><a href="#">Yoga Day 21st June 2019</a></h3>
                            <div class="single-item-comment-view">
                                <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                                <span><i class="zmdi zmdi-pin"></i>Mr.Selvakumar</span>
                            </div>
                            <p>Yoga is an old discipline from India. It is both spiritual and physical. Yoga
                                uses breathing techniques, exercise and meditation. It helps to improve health
                                and happiness. … He defined yoga as “the cessation of the
                                modification of the mind”.</p>
                            <a class="button-default" href="#">LEARN Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-event-item">
                        <div class="single-event-image">
                            <a href="#">
                                <img src="https://pushkaram.in/wp-content/uploads/2018/10/IMG_8791.jpg" alt="">
                                <span><span>20</span>Apr</span>
                            </a>
                        </div>
                        <div class="single-event-text">
                            <h3><a href="#">Agriculture Farm Machinery practice sessions</a></h3>
                            <div class="single-item-comment-view">
                                <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                                <span><i class="zmdi zmdi-pin"></i>Pushakaram college of agriculture science,
                                    Pudukkottai</span>
                            </div>
                            <p>Agriculture Farm Machinery practice and training sessions for 1st year 2018 batch
                                which was held on 9.10.2018 ,Conducted by Mr Sivakumar Asst.Prof Agriculture
                                engineering
                            </p>
                            <a class="button-default" href="#">LEARN Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-event-item">
                        </a>
                        <div class="single-event-image">
                            <a href="#">
                                <img src="https://pushkaram.in/wp-content/uploads/2018/05/CEV-4.jpg" alt="">
                                <span><span>06</span>Dec</span>
                        </div>
                        <div class="single-event-text">
                            <h3><a href="#">Training on Indo-Israel Cultivation</a></h3>
                            <div class="single-item-comment-view">
                                <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                                <span><i class="zmdi zmdi-pin"></i>Centre of Excellence for Vegetable Crops,
                                    Indo-Israel Cultivation, Reddiyarchathram, Dindigul</span>
                            </div>
                            <p>Students of PCAS attended the One-day training programme on Indo-Israel
                                Cultivation at Centre of Excellence for Vegetable Crops, Indo-Israel
                                Cultivation, Reddiyarchathram, Dindigul</p>
                            <a class="button-default" href="#">LEARN Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Event Area-->
    <!--Fun Factor Area Start-->
    <div class="fun-factor-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper white">
                        <div class="section-title">
                            <h3>IMPORTANT FACTS</h3>
                            <!-- <p>There are many variations of passages of Lorem Ipsum</p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="single-fun-factor">
                        <h4>Students</h4>
                        <h2><span class="counter">500</span>+</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="single-fun-factor">
                        <h4>Teachers</h4>
                        <h2><span class="counter">50</span>+</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="single-fun-factor">
                        <h4>Departments</h4>
                        <h2><span class="counter">5</span>+</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="single-fun-factor">
                        <h4>Laboratories</h4>
                        <h2><span class="counter">20</span>+</h2>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--End of Fun Factor Area-->
    <!--Event Area Start-->
    <div class="event-area section-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>OUR Partners</h3>
                            <p>Some description</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-3 col-6 my-auto">
                    <a href="#">
                        <img src="/assets/images/favicon.png" alt="" srcset="">
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-6 my-auto">
                    <a href="#">
                        <img src="/assets/images/logo.png" alt="" srcset="">
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!--End of Event Area-->
@endsection
