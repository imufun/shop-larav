<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="../../vendors/iconfonts/puse-icons-feather/feather.css">
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.png')}}"/>
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
            <div class="row w-100">
                <div class="col-lg-4 mx-auto">
                    <div class="auto-form-wrapper">
                        <div class="alert-danger">
                            <?php
                            $message = Session::get('message');
                            if ($message) {
                                echo $message;
                                Session::put('message', null);
                            }
                            ?>
                        </div>

                        <div>

                            <?php

                            $error_message = Session::get('error_message');
                            if ($error_message) {
                                echo $error_message;
                                Session::put('error_message', null);
                            }

                            ?>
                        </div>

                        <form action="{{url('admin')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="label">Email</label>
                                <div class="input-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="label">Password</label>
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control" placeholder="*********">
                                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group d-flex justify-content-between">
                                <div class="form-check form-check-flat mt-0">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" checked> Keep me signed in
                                    </label>
                                </div>
                                <a href="#" class="text-small forgot-password text-black">Forgot Password</a>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-block g-login">
                                    <img class="mr-3" src="../../images/file-icons/icon-google.svg" alt="">Log in with
                                    Google
                                </button>
                            </div>
                            <div class="text-block text-center my-3">
                                <span class="text-small font-weight-semibold">Not a member ?</span>
                                <a href="register.html" class="text-black text-small">Create new account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
{{--<script src="{{asset('admin/assets/vendors/js/vendor.bundle.base.js')}}"></script>--}}
{{--<script src="{{asset('admin/assets/vendors/js/vendor.bundle.addons.js')}}"></script>--}}
{{--<!-- endinject -->../../--}}
{{--<!-- inject:js -->--}}
{{--<script src="{{asset('')}}../../js/off-canvas.js"></script>--}}
{{--<script src="{{asset('')}}../../js/hoverable-collapse.js"></script>--}}
{{--<script src="{{asset('')}}../../js/misc.js"></script>--}}
{{--<script src="{{asset('')}}../../js/settings.js"></script>--}}
{{--<script src="{{asset('')}}../../js/todolist.js"></script>--}}
<!-- endinject -->
</body>

</html>