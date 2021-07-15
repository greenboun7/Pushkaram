@extends("portal.layout.master")
@section('page_title', 'Event Partner')

@section('page_content')

    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Event Partners</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="portal">Dashboard</a></li>
                    <li class="breadcrumb-item active">Event Partners</li>
                </ul>
            </div>
            <div class="col-auto">
                <a class="btn btn-primary add-btn" href="#">
                    <i class="fa fa-plus fa-sm"></i> Add Event Partner
                </a>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body p-3">
                    <div class="table-responsive">
                        <table data-dtTable="true" class="table table-stripped table-hover" id="dataTable"></table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exam" tabindex="-1" role="dialog" aria-labelledby="examLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title f-w-600" id="examLabel">Event Partner</h5>
                    <button class="close close-btn" type="button" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                <form class="global-submission needs-validation" id="team_creation" method="post"
                    action="{{ url('/portal/team/store') }}" data-type="add" data-success="Event Partner Successfully Updated">
                    <div class="modal-body">
                        <div class="form">
                            <div class="form-group">
                                <label for="validationCustom03" class="mb-1"><span>*</span> Event Partner Name :</label>
                                <input class="form-control" name="event_part_name" type="text" required>
                            </div>
                            <div class="form-group">
                                <label for="validationCustom03" class="mb-1"><span>*</span> Event Partner Image :</label>
                                <input class="form-control" name="event_part_image" type="file" accept="image/*">
                            </div>
                            <div class="form-group">
                                <label for="validationCustom03" class="mb-1"><span>*</span> Event Partner Link :</label>
                                <input class="form-control" name="event_part_link" type="text">
                            </div>
                            <div class="form-group">
                                <label for="validationCustom03" class="mb-1">Order No :</label>
                                <input class="form-control" name="display_order" type="number">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label"><span>*</span> Status</label>
                                <div class="m-checkbox-inline custom-radio-ml d-flex radio-animated">
                                    <label class="d-block" for="edo-ani">
                                        <input class="radio_animated" id="edo-ani" type="radio" name="active" value="1"
                                            checked>
                                        Active
                                    </label>
                                    <label class="d-block" for="edo-ani1">
                                        <input class="radio_animated" id="edo-ani1" type="radio" name="active" value="0">
                                    </label>
                                </div>
                            </div>
                        </div>
                                In-active
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-primary" type="submit" value="SAVE">
                        <button class="btn btn-secondary" type="reset" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    {{-- <link rel="stylesheet" href="{{ url('/') }}/node_modules/datatables/media/css/jquery.dataTables.min.css"> --}}
    <link rel="stylesheet" href="{{ url('/') }}/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ url('/') }}/node_modules/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ url('/') }}/node_modules/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">

    <script src="{{ url('/') }}/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    {{-- <script src="{{ url('/') }}/node_modules/datatables.net/js/jquery.dataTables.min.js"></script> --}}
    <script src="{{ url('/') }}/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('/') }}/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('/') }}/node_modules/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ url('/') }}/node_modules/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ url('/') }}/node_modules/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ url('/') }}/node_modules/datatables.net-buttons/js/buttons.html5.min.js"></script>

    <!--ckeditor js-->
    <script src="{{ url('/') }}/assets/js/editor/ckeditor/ckeditor.js"></script>
    {{-- <script src="{{ url('/') }}/assets/js/editor/ckeditor/styles.js"></script> --}}
    {{-- <script src="{{ url('/') }}/assets/js/editor/ckeditor/adapters/jquery.js"></script> --}}
    {{-- <script src="{{ url('/') }}/assets/js/editor/ckeditor/ckeditor.custom.js"></script> --}}

    <script>
        $(".nav_event_partner").addClass("active");

        function dTSelection() {
            // alert("Init");
            $('#dataTable tbody tr').on('click', '.fa-edit', function() {
                var data = dTtable.row($(this).closest("tr")).data();
                console.log(data);
                // return false;

                $("form#team_creation .form-control,form#team_creation input,form#team_creation select")
                    .each(function(i) {
                        var name = $(this).attr("name");
                        var type = $(this).attr("type");
                        if (type == "file") return true;
                        if (type == "checkbox") {
                            $("#exam [name='" + name + "']").prop("checked", data[name]);
                            return;
                        }
                        if (type == "textarea") {
                            $("#exam [name='" + name + "']").html(data[name]);
                            // return true;
                        }
                        if (type == "radio") {
                            $("#exam [name='" + name + "'][value='" + data[name] + "']").prop("checked",
                            "true");
                            return true;
                        }
                        $("#exam [name='" + name + "']").val(data[name]);

                    });
                $("#exam [type='submit']").val("Update")
                $("#exam form").append("<input type='hidden' id='update_tmp_id' name='event_part_id' value='" + data
                    .event_part_id + "'>");
                $("#exam form").data("type", "update");
                // $("#exam form")[0].reset();
                // $("#exam [name='category_name']").attr("disabled", "true");
                $("#exam").modal('show');
            });
        }

        $(".add-btn").click(function() {
            $("#exam [name='category_name']").removeAttr("disabled");
            $("#exam [type='submit']").val("SAVE");
            $("#exam form").data("type", "add");
            $("#exam #update_tmp_id").remove();
            // $("#exam ")
            $("#exam form")[0].reset();
            $("#exam").modal("show");
        });


        window.dTtable = $("#dataTable").on('draw.dt', dTSelection).DataTable({
            "ajax": "{{ url('/portal/eventpartner/getDtdata') }}",
            destroy: true,
            "columns": [{
                    "data": "event_part_id",
                    "title": "action",
                    "render": function() {
                        return "<i class='fa fa-edit btn'></i>";
                    }
                },
                {
                    "data": "event_part_id",
                    "title": "#ID"
                },
                {
                    "data": "event_part_image",
                    "title": "Image",
                    "render": function(data) {
                        if (data != "" && data != null) {
                            return "<a href='{{ url('') }}/" + data +
                                "' target='_blank'><img src='{{ url('') }}/" + data +
                                "' style='text-align: center;height: 70px;object-fit: contain;'></a>";
                        } else {
                            return "No Image";
                        }
                    }
                },
                {
                    "data": "event_part_name",
                    "title": "Name"
                },
                {
                    "data": "event_part_link",
                    "title": "Link"
                },
                {
                    "data": "display_order",
                    "title": "Order No"
                },
                {
                    "data": "active",
                    "title": "active"
                },
                {
                    "data": "created_by_admin",
                    "title": "Created By Admin"
                },
                {
                    "data": "created_at",
                    "title": "Created at"
                },
                {
                    "data": "updated_at",
                    "title": "Updated at"
                }
            ],
            order: [
                [0, "desc"]
            ],
            "columnDefs": [{
                "width": "1%",
                "targets": 2
            }, {
                "width": "100px",
                "targets": 5
            }],
            "autoWidth": false,
            // "order": [[ 0, "desc" ]],
            "destroy": true,
            "lengthMenu": [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ],
            "buttons": [{
                    extend: 'csv',
                    // exportOptions: {
                    //     columns: [1, 2, 3, 4, 5, 6, 7, 8, 9]
                    // }
                },
                {
                    text: 'Reload',
                    action: function(e, dt, node, config) {
                        dt.ajax.reload();
                    }
                }
            ],
            "createdRow": function(row, data, dataIndex) {
                if (data.active == "0") {
                    $(row).addClass('bg-danger');
                }
            },
            "dom": '<"row"<"col"B><"col"l><"col"f>>rtip',
        });

    </script>

@endsection
