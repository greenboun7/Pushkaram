@extends("portal.layout.master")
@section('page_title', 'Users')
@section('page_content')

    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Users</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="portal">Dashboard</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ul>
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


    <script>
        $("#nav_users a").addClass("active");

        function dTSelection() {
            // alert("Init");
            $('#dataTable tbody tr').on('click', '.fa-edit', function() {
                var data = dTtable.row($(this).closest("tr")).data();
                console.log(data);
                // return false;

                $("form#category_creation .form-control,form#category_creation input,form#category_creation select")
                    .each(function(i) {
                        var name = $(this).attr("name");
                        var type = $(this).attr("type");
                        if (type == "file") return true;
                        if (type == "checkbox") {
                            $("#exam [name='" + name + "']").prop("checked", data[name]);
                            return;
                        }
                        if (type == "textarea") {
                            CKEDITOR.instances['text_editor'].setData(data[name]);
                            return true;
                        }
                        if (type == "radio") {
                            $("#exam [name='" + name + "'][value='" + data[name] + "']").prop("checked",
                            "true");
                            return true;
                        }
                        $("#exam [name='" + name + "']").val(data[name]);

                    });
                $("#exam [type='submit']").val("Update")
                $("#exam form").append("<input type='hidden' id='update_tmp_id' name='category_id' value='" + data
                    .category_id + "'>");
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
            CKEDITOR.instances['text_editor'].setData("");
            $("#exam").modal("show");
        });


        window.dTtable = $("#dataTable").on('draw.dt', dTSelection).DataTable({
            destroy: true,
            "ajax": "{{ url('/portal/users/getDtdata') }}",
            "columns": [{
                    "data": "id",
                    "title": "#ID",
                },
                {
                    "data": "name",
                    "title": "Name",
                },
                {
                    "data": "email",
                    "title": "Email",
                },
                {
                    "data": "username",
                    "title": "Username",
                },
                {
                    "data": "mobile",
                    "title": "Mobile",
                },
                {
                    "data": "active",
                    "title": "active_status",
                },
                {
                    "data": "email_verified_at",
                    "title": "Email verified at",
                },
                {
                    "data": "visitor",
                    "title": "Visitor IP",
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
                    exportOptions: {
                        columns: []
                    }
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
