@extends("portal.layout.master")
@section('page_title', 'Products')
@section('styles')
    <style>
        div.dtr-modal div.dtr-modal-display {
            height: 80% !important;
        }

        .dtr-details [data-dt-column="0"] {
            display: none;
        }

    </style>
@endsection
@section('page_content')

    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Products</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="portal">Dashboard</a></li>
                    <li class="breadcrumb-item active">Products</li>
                </ul>
            </div>
            <div class="col-auto">
                <a class="btn btn-primary add-btn" href="#">
                    <i class="fa fa-plus fa-sm"></i> Add Product
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
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title f-w-600" id="examLabel">Product</h5>
                    <button class="close close-btn" type="button" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                <form class="global-submission needs-validation" id="category_creation" method="post"
                    action="{{ url('/portal/products/store') }}" data-type="add"
                    data-success="Product Successfully Updated">
                    <div class="modal-body">
                        <div class="form">
                            <div class="form-group">
                                <label for="validationCustom03" class="mb-1"><span>*</span> Item Name :</label>
                                <input class="form-control" name="item_name" type="text" required>
                            </div>
                            <div class="form-group">
                                <label for="validationCustom01" class="mb-1"><span>*</span> Item Category type:</label>
                                <select class="form-control select" name="item_category_id" required>
                                    <option value="" selected default>Select Item category type</option>
                                    @foreach ($cats as $cat)
                                        <option value="{{ $cat['category_id'] }}">{{ $cat['category_name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="validationCustom03" class="mb-1"><span>*</span> Item Selling Price :</label>
                                    <input class="form-control" name="item_selling_price" type="number" step="0.01"
                                        min="10.00" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="validationCustom03" class="mb-1"><span>*</span> Item Quantity :</label>
                                    <input class="form-control" name="item_quantity" type="text" placeholder="ex: 100ml"
                                        required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="validationCustom03" class="mb-1">Item Description:</label>
                                <textarea name="item_desc" type="textarea" class="form-control" id="text_editor" cols="30"
                                    rows="10"></textarea>
                                {{-- <input class="form-control" name="portrait_image_url" type="file"> --}}
                            </div>
                            <div class="form-group">
                                <label for="validationCustom03" class="mb-1"><span>*</span> Item Front Image :</label>
                                <input class="form-control" name="item_front_img" type="file">
                            </div>
                            <div class="form-group">
                                <label for="validationCustom03" class="mb-1">Item Back Image :</label>
                                <input class="form-control" name="item_back_img" type="file">
                            </div>
                            {{-- Meta Tags --}}
                            <div class="form-group">
                                <label for="validationCustom03" class="mb-1">Meta title :</label>
                                <input class="form-control" name="item_meta_title" type="text">
                            </div>
                            <div class="form-group">
                                <label for="validationCustom03" class="mb-1">Meta Description :</label>
                                <input class="form-control" name="item_meta_desc" type="text">
                            </div>
                            <div class="form-group">
                                <label for="validationCustom03" class="mb-1">Meta Keywords :</label>
                                <input class="form-control" name="item_meta_keywords" type="text">
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
                                        In-active
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="is_new" value="1"> New
                                        Products
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="is_featured" value="1">
                                        Featured Products
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="is_best_seller" value="1">
                                        Best Seller
                                    </label>
                                </div>
                            </div>
                        </div>
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
        $("#nav_products a").addClass("active");
        CKEDITOR.replace("text_editor", {
            toolbar: [{
                    name: 'basicstyles',
                    groups: ['basicstyles'],
                    items: ['Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor']
                },
                {
                    name: 'styles',
                    items: ['Format', 'Font', 'FontSize']
                },
                {
                    name: 'scripts',
                    items: ['Subscript', 'Superscript']
                },
                {
                    name: 'justify',
                    groups: ['blocks', 'align'],
                    items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']
                },
                {
                    name: 'paragraph',
                    groups: ['list', 'indent'],
                    items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent']
                },
                {
                    name: 'links',
                    items: ['Link', 'Unlink']
                },
                {
                    name: 'spell',
                    items: ['jQuerySpellChecker']
                },
                {
                    name: 'table',
                    items: ['Table']
                }
            ]
        });

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
                $("#exam form").append("<input type='hidden' id='update_tmp_id' name='item_id' value='" + data
                    .item_id + "'>");
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
            "ajax": "{{ url('/portal/products/getDtdata') }}",
            "columns": [{
                    "data": "item_id",
                    "title": "action",
                    "render": function() {
                        return "<i class='fa fa-edit btn'></i>";
                    }
                },
                {
                    "data": "item_id",
                    "title": "#ID"
                },
                {
                    "data": "item_name",
                    "title": "Item name"
                },
                {
                    "data": "category_name",
                    "title": "Type"
                },
                {
                    "data": "item_quantity",
                    "title": "Item Quantity"
                },
                {
                    "data": "item_selling_price",
                    "title": "Item Price"
                },
                {
                    "data": "item_front_img",
                    "title": "Item Front Image",
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
                    "data": "item_back_img",
                    "title": "Item Back Image",
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
                    "data": "item_desc",
                    "title": "Desc",
                    "render": function(data) {
                        if (data != "" && data != null) {
                            var text = data.replace(/<[^>]*>?/gm, '');
                            return text.substring(0, 100).trim() + "...";
                        } else {
                            return "---";
                        }
                    }
                },

                {
                    "data": "cat_active",
                    "title": "Category Status",
                    "render": function(data) {
                        if (data == 1) return "active";
                        else return "inactive";
                    }
                },
                {
                    "data": "active",
                    "title": "active",
                    "render": function(data) {
                        if (data == 1) return "active";
                        else return "inactive";
                    }
                },
                {
                    "data": "is_new",
                    "title": "is_new"
                },
                {
                    "data": "is_best_seller",
                    "title": "is_best_seller"
                },
                {
                    "data": "is_featured",
                    "title": "is_featured"
                },
                {
                    "data": "created_by_admin",
                    "title": "updated By Admin"
                },
                {
                    "data": "item_meta_title",
                    "title": "item_meta_title"
                },
                {
                    "data": "item_meta_desc",
                    "title": "item_meta_desc"
                },
                {
                    "data": "item_meta_keywords",
                    "title": "item_meta_keywords"
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
            "responsive": {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function(row) {
                            var data = row.data();
                            console.log(data);
                            return 'Details for ' + data.item_name;
                        }
                    }),
                    renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                        tableClass: 'table'
                    })
                }
            },
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
                if (data.active == "0" || data.cat_active == "0") {
                    $(row).addClass('bg-danger');
                }
            },
            "dom": '<"row"<"col"B><"col"l><"col"f>>rtip',
        });

    </script>

@endsection
