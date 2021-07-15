@extends("portal.layout.master")
@section("page_title","Dashboard")
@section('page_content')

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Dashboard
                            <small>Rose Princess Panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}/portal"><i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card o-hidden widget-cards">
                    <div class="bg-warning card-body">
                        <div class="media static-top-widget row">
                            <div class="icons-widgets col-4">
                                <div class="align-self-center text-center"><i data-feather="navigation"
                                        class="font-warning"></i></div>
                            </div>
                            <div class="media-body col-8"><span class="m-0">Earnings</span>
                                <h3 class="mb-0"><span class="counter">6659</span> AED<small> This
                                        Month</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card o-hidden  widget-cards">
                    <div class="bg-secondary card-body">
                        <div class="media static-top-widget row">
                            <div class="icons-widgets col-4">
                                <div class="align-self-center text-center"><i data-feather="box" class="font-secondary"></i>
                                </div>
                            </div>
                            <div class="media-body col-8"><span class="m-0">Products</span>
                                <h3 class="mb-0"><span class="counter">9856</span> AED<small> This
                                        Month</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card o-hidden widget-cards">
                    <div class="bg-primary card-body">
                        <div class="media static-top-widget row">
                            <div class="icons-widgets col-4">
                                <div class="align-self-center text-center"><i data-feather="message-square"
                                        class="font-primary"></i></div>
                            </div>
                            <div class="media-body col-8"><span class="m-0">Messages</span>
                                <h3 class="mb-0"><span class="counter">893</span> AED<small> This
                                        Month</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card o-hidden widget-cards">
                    <div class="bg-danger card-body">
                        <div class="media static-top-widget row">
                            <div class="icons-widgets col-4">
                                <div class="align-self-center text-center"><i data-feather="users" class="font-danger"></i>
                                </div>
                            </div>
                            <div class="media-body col-8"><span class="m-0">New Vendors</span>
                                <h3 class="mb-0"><span class="counter">45631</span> AED<small> This
                                        Month</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->


@endsection
@section('scripts')
    <script>
        $("document").ready(function() {
            $(".page-sidebar li,.page-sidebar li a").removeClass("active");
            $(".nav_dashboard a").addClass("active");
            toggleFullScreen();
        });
        //market-chart
        // new Chartist.Bar(
        //     ".market-chart", {
        //         labels: ["100", "200", "300", "400", "500", "600", "700", "800"],
        //         series: [
        //             [2.5, 3, 3, 0.9, 1.3, 1.8, 3.8, 1.5],
        //             [3.8, 1.8, 4.3, 2.3, 3.6, 2.8, 2.8, 2.8],
        //         ],
        //     }, {
        //         seriesBarDistance: 2,
        //         chartPadding: {
        //             left: 0,
        //             right: 0,
        //             bottom: 0,
        //         },
        //         axisX: {
        //             showGrid: false,
        //             labelInterpolationFnc: function(value) {
        //                 return value[0];
        //             },
        //         },
        //     },
        //     [
        //         [
        //             "screen and (min-width: 300px)",
        //             {
        //                 seriesBarDistance: 15,
        //                 axisX: {
        //                     labelInterpolationFnc: function(value) {
        //                         return value.slice(0, 3);
        //                     },
        //                 },
        //             },
        //         ],
        //         [
        //             "screen and (min-width: 600px)",
        //             {
        //                 seriesBarDistance: 12,
        //                 axisX: {
        //                     labelInterpolationFnc: Chartist.noop,
        //                 },
        //             },
        //         ],
        //     ]
        // );

    </script>
@endsection
