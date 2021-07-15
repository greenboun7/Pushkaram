<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ url('/') }}/assets/images/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ url('/') }}/assets/images/favicon.png" type="image/x-icon" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pushkaram Portal - @yield('page_title')</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/vendors/fontawesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/vendors/flag-icon.css">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/vendors/icofont.css">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/vendors/prism.css">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/vendors/chartist.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/vendors/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/admin.css">
    @toastr_css
    <style>
        #toast-container>div {
            opacity: 1 !important;
        }

        .close.close-btn {
            background: no-repeat;
            border: navajowhite;
            font-size: 20px;
            font-weight: bold;
        }

        input.radio_animated {
            margin-right: 8px;
            position: relative;
            top: 1px;
        }
        .dt_button {
            border: none;
            border-radius: 4px;
            background: #ed1c24;
            color: white;
            box-shadow: 2px 1px 17px -8px black;
            padding: 8px 10px;
        }
    </style>
    @yield("styles")
</head>

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">

        @include("portal.layout.particles.topnav")

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Page Sidebar Start-->
            @include("portal.layout.particles.sidebar")
            <!-- Page Sidebar Ends-->

            <div class="page-body">

                @yield("page_content")

            </div>

            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright">
                            <p class="mb-0">Copyright 2021 © Cloudin All rights reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p class="pull-right mb-0">Hand crafted & made with<i class="fa fa-heart"></i></p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer end-->
        </div>

    </div>

    <!-- latest jquery-->
    <script src="{{ url('/') }}/assets/js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js-->
    {{-- <script src="{{ url('/') }}/assets/js/bootstrap.bundle.min.js"></script> --}}

    <!-- feather icon js-->
    <script src="{{ url('/') }}/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="{{ url('/') }}/assets/js/icons/feather-icon/feather-icon.js"></script>

    <!-- Sidebar jquery-->
    <script src="{{ url('/') }}/assets/js/sidebar-menu.js"></script>

    <!--chartist js-->
    <script src="{{ url('/') }}/assets/js/chart/chartist/chartist.js"></script>

    <!--chartjs js-->
    <script src="{{ url('/') }}/assets/js/chart/chartjs/chart.min.js"></script>

    <!-- lazyload js-->
    <script src="{{ url('/') }}/assets/js/lazysizes.min.js"></script>

    <!--copycode js-->
    <script src="{{ url('/') }}/assets/js/prism/prism.min.js"></script>
    <script src="{{ url('/') }}/assets/js/clipboard/clipboard.min.js"></script>
    <script src="{{ url('/') }}/assets/js/custom-card/custom-card.js"></script>

    <!--counter js-->
    <script src="{{ url('/') }}/assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="{{ url('/') }}/assets/js/counter/jquery.counterup.min.js"></script>
    <script src="{{ url('/') }}/assets/js/counter/counter-custom.js"></script>

    <!--peity chart js-->
    <script src="{{ url('/') }}/assets/js/chart/peity-chart/peity.jquery.js"></script>

    <!--sparkline chart js-->
    <script src="{{ url('/') }}/assets/js/chart/sparkline/sparkline.js"></script>

    <!--right sidebar js-->
    <script src="{{ url('/') }}/assets/js/chat-menu.js"></script>

    <!--height equal js-->
    <script src="{{ url('/') }}/assets/js/height-equal.js"></script>

    <!-- lazyload js-->
    <script src="{{ url('/') }}/assets/js/lazysizes.min.js"></script>

    <!--script admin-->
    <script src="{{ url('/') }}/assets/js/admin-script.js"></script>
    @toastr_js
    @toastr_render
    <script>
        // Modal Close Trigger
        var editor1cfg = {}

        $('[data-dismiss="modal"]').click(function() {
            $("#exam").modal("hide");
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".global-submission").submit(function(e) {
            e.preventDefault();
            // alert("Initiated 1");
            var id = "#" + $(this).attr("id");
            var msg = $(this).data("success");
            var form_id = $(this).attr("id");
            var type = $(this).data("type");
            var err = 0;
            var file = $(id + ' input[type=file][data-max-size]').each(function() {
                if (typeof this.files[0] !== 'undefined') {
                    var maxSize = parseInt($(this).data('max-size'), 10),
                        size = this.files[0].size;
                    isOk = maxSize > size;
                    if (isOk != true) {
                        toastr.info("File size must be below "+$(this).data("max-size") / 1000 + "kb.");
                        $(id + " input," + id + " select," + id + " button").removeAttr("disabled");
                        $(this).focus();
                        err = err + 1;
                        return false;
                    } else err = 0;
                }
            });
            if (err == 0) {
                // alert("Initiated 2");
                var form_data = new FormData();
                $(id + " input:not([readonly])," + id + " select:not([disabled])," + id +
                    " textarea:not([disabled])").each(function() {
                    var input = $(this);
                    if (input.attr("name") != undefined) {
                        if (input.attr("type") == "file") {
                            if (input.val() == null || input.val() == "") return;
                            form_data.append(input.attr("name"), input[0].files[0]);
                        } else {
                            if (input.attr("type") == "checkbox") {
                                if (input.prop("checked")) form_data.append(input.attr("name"), 1);
                                else form_data.append(input.attr("name"), 0);
                                return;
                            } else if (input.attr("type") == "radio") {
                                // alert("Radios");
                                var rad_val = $('[name="' + input.attr("name") + '"]:checked').val();
                                console.log("Helloworls", rad_val);
                                form_data.append(input.attr("name"), rad_val);
                                return;
                            }
                            else if(input.attr("type") == "textarea") {
                                if(input.attr("id") == "text_editor") {
                                    if($(".richtexteditor textarea[name='"+input.attr("name")+"']").length > 0){
                                        form_data.append(input.attr("name"),editor1.getHTMLCode());
                                        return;
                                    }
                                    // form_data.append(input.attr("name"),CKEDITOR.instances.text_editor.getData());
                                    form_data.append(input.attr("name"),input.val());
                                }
                                else {
                                    form_data.append(input.attr("name"),input.val());
                                }
                                return;
                            }
                            if (Array.isArray($(this).val())) {
                                form_data.append(input.attr("name"), $(this).val().join(','));
                                return;
                            }
                            form_data.append(input.attr("name"), $(this).val());
                        }
                        console.log("Form Data: ", form_data);
                    }
                });
                if (type == "add" || type == "update") {
                    // alert("Add Conditionals");
                    $.ajax({
                        url: $(this).attr("action"),
                        type: $(this).attr("method"),
                        data: form_data,
                        contentType: false,
                        cache: false,
                        processData: false,
                        beforeSend: function() {
                            $("#" + form_id + " input,#" + form_id + " input," + "#" + form_id +
                                " button,#" + form_id + " textarea").attr("disabled", "true");
                        },
                        success: function(data) {
                            $("#" + form_id + " input,#" + form_id + " input," + "#" + form_id +
                                " button,#" + form_id + " textarea").removeAttr("disabled");
                            if (data == "true" || data == true) {
                                toastr.success(msg);
                                dTtable.ajax.reload();
                                $("#exam").modal("hide");
                                $("#" + form_id)[0].reset;
                                // $("#smartswiz_freelancer").smartWizard("next");
                            } else {
                                toastr.warning(data);
                            }
                        }
                    }).fail(function(xhr, status, error) {
                        $("#" + form_id + " input,#" + form_id + " input," + "#" + form_id +
                            " button,#" + form_id + " textarea").removeAttr("disabled");

                        if (xhr.status == 422) {
                            var data = JSON.parse(xhr.responseText);
                            if (data.hasOwnProperty("errors") == true) {
                                for (var dd in data.errors) {
                                    $("[name='" + dd + "']").focus();
                                    toastr.warning(dd.toUpperCase(), data.errors[dd]);
                                    break;
                                }
                            }
                            return;
                        }
                        if (xhr.status == 419) {
                            Swal.fire({
                                title: "Token is timeout",
                                icon: "warning",
                                html: "<small>Refresh this page and try again</small>",
                                confirmButtonText: "<i></i> Refresh"
                            }).then((data) => {
                                if (data.confirmed) {
                                    location.reload();
                                }
                            });
                            return false;
                        }
                    });
                }

            }
        });

    </script>
    @yield("scripts")
</body>

</html>
