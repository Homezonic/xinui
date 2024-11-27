<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">
    <head>
        <!-- Meta Data -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Description" content="Sign In">
		<!-- Title -->
        <title> Sign In </title>
        <!-- Favicon -->
        <link rel="icon" href="{{ asset('assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">
        <!-- Start::custom-styles -->
        <!-- Main Theme Js -->
        <script src="{{ asset('assets/js/authentication-main.js') }}"></script>
        <!-- Bootstrap Css -->
      <link id="style" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

      <!-- Style Css -->
      <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

      <!-- Icons Css -->
      <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
        <!-- End::custom-styles -->
    </head>
	<body class="authentication-background">
        <div class="container">
            <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                    <div class="card custom-card my-4">
                        <div class="card-body p-5">
                            <div class="mb-3 d-flex justify-content-center">
                                <a href="/">
                                    <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                                    <img src="../assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                                </a>
                            </div>
                            <p class="h5 mb-2 text-center">Hi, Welcome.</p>
                            <p class="mb-4 text-muted op-7 fw-normal text-center">Please enter your username and password.</p>
                            <div class="row gy-3">
                                <div class="col-xl-12">
                                    <label for="signin-username" class="form-label text-default">User Name<sup class="fs-12 text-danger">*</sup></label>
                                    <input type="text" class="form-control" id="signin-username" placeholder="user name">
                                </div>
                                <div class="col-xl-12 mb-2">
                                    <label for="signin-password" class="form-label text-default d-block">Password<sup class="fs-12 text-danger">*</sup><a href="{{ route('resetpass') }}" class="float-end fw-normal text-muted">Forget password ?</a></label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control create-password-input" id="signin-password" placeholder="password">
                                        <a href="javascript:void(0);" class="show-password-button text-muted" onclick="createpassword('signin-password',this)" id="button-addon2"><i class="ri-eye-off-line align-middle"></i></a>
                                    </div>
                                    <div class="mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label text-muted fw-normal" for="defaultCheck1">
                                                Remember password ?
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid mt-4">
                                <button class="btn btn-primary">Sign In</button>
                            </div>
                            <div class="text-center">
                                <p class="text-muted mt-3 mb-0">Dont have an account? <a href="{{ route('signup') }}" class="text-primary">Sign Up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start::custom-scripts -->
       <!-- Bootstrap JS -->
     <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                <!-- End::custom-scripts -->
        <!-- Show Password JS -->
     <script src="{{ asset('assets/js/show-password.js') }}"></script>
    </body>
</html>
