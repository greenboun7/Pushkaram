@extends("portal.layout.auth_master")
@section("page_title","Login")
@section('content')
<div class="row">
    <div class="col-md-5 p-0 card-left">
        <div class="card bg-primary">
            <div class="text-center">
                <img src="{{url('/')}}/assets/images/favicon.png" alt="" style="width: 250px;height: 250px;">
            </div>
            <div class="single-item">
                <div>
                    <div>
                        <h3>Hi Admin</h3>
                        <p>Welcome to Pushkaram Admin Portal.</p>
                    </div>
                </div>
                {{-- <div>
                    <div>
                        <h3>Welcome to Rose Princess</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy.</p>
                    </div>
                </div>
                <div>
                    <div>
                        <h3>Welcome to Rose Princess</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy.</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="col-md-7 p-0 card-right">
        <div class="card tab2-card">
            <div class="card-body">
                <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="top-profile-tab" data-bs-toggle="tab"
                            href="#top-profile" role="tab" aria-controls="top-profile"
                            aria-selected="true"><span class="icon-user me-2"></span>Login</a>
                    </li>
                </ul>
                <div class="tab-content" id="top-tabContent">
                    <div class="tab-pane fade show active" id="top-profile" role="tabpanel"
                        aria-labelledby="top-profile-tab">
                        <form class="form-horizontal auth-form" id="signin_form">
                            <div class="form-group">
                                <input required="" name="email" type="email"
                                    class="form-control" placeholder="Email" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <input required="" name="password" type="password"
                                    class="form-control" placeholder="Password">
                            </div>
                            <div class="form-terms">
                                <div class="form-check mesm-2">
                                    <input type="checkbox" class="form-check-input"
                                        id="customControlAutosizing">
                                    <label class="form-check-label ps-2"
                                        for="customControlAutosizing">Remember me</label>
                                    <a href="#" class="btn btn-default forgot-pass">lost your
                                        password</a>
                                </div>
                            </div>
                            <div class="form-button">
                                <button class="btn btn-primary" type="submit">Login</button>
                            </div>
                            {{-- <div class="form-footer">
                                <span>Or Login up with social platforms</span>
                                <ul class="social">
                                    <li><a class="ti-facebook" href=""></a></li>
                                    <li><a class="ti-twitter" href=""></a></li>
                                    <li><a class="ti-instagram" href=""></a></li>
                                    <li><a class="ti-pinterest" href=""></a></li>
                                </ul>
                            </div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section("scripts")
<script>
    $("#signin_form").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "{{ url('/portal/login') }}",
            type: "POST",
            data: $("#signin_form").serialize(),
            beforeSend: function() {
                $("#signin_form input,#signin_form button").attr("disabled", "true");
            },
            success: function(data) {
                if (data == "true") {
                    toastr.success("You are signed in.");
                    console.log("Data",data);
                    setTimeout(function(){location.reload();},2000)
                } else {
                    toastr.warning(data);
                    $("#signin_form input,#signin_form button").removeAttr("disabled");
                }
            }
        }).fail(function(xhr, status, error) {
            $("#signin_form input,#signin_form button").removeAttr("disabled");
            if(xhr.status == 422){

                var data = JSON.parse(xhr.responseText);
                if(data.hasOwnProperty("errors") == true){
                    for(var dd in data.errors){
                        $("[name='"+dd+"']").focus();
                        toastr.warning(data.errors[dd],dd.toUpperCase());
                        break;
                    }
                }
                return false;
            }
            if(xhr.status == 419){
                Swal.fire({
                    title: "Token is timeout",
                    icon: "warning",
                    html: "<small>Refresh this page and try again</small>",
                    showConfirmButton: true,
                    confirmButtonText: "<i></i> Refresh"
                }).then((data)=>{
                    if(data.isConfirmed){
                        location.reload();
                    }
                });
                return false;
            }
            var errorMessage = xhr.status + ': ' + xhr.statusText
            toastr.error('Error',errorMessage);
        });
    });
</script>
@endsection
