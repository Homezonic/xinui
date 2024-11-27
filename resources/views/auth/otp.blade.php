<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">
    <head>
        <!-- Meta Data -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- Title -->
        <title> Verify OTP </title>
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
        <div class="container-lg">
            <div class="row justify-content-center align-items-center authentication two-step-verification authentication-basic h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                    <div class="card custom-card my-4">
                        <div class="card-body p-4 p-sm-5">
                            <div class="mb-3 d-flex justify-content-center">
                                <a href="/">
                                    <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                                    <img src="../assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                                </a>
                            </div>
                            <p class="h5 mb-2 text-center">Verification Code</p>
                            <p class="mb-4 text-muted op-7 fw-normal text-center fs-12">Enter the 4 digit code sent to mailio*****@gmail.com</p>
                            <div class="row gy-3">
                                <div class="col-xl-12 mb-2">
                                    <div class="row">
                                        <div class="col-3">
                                            <input type="text" class="form-control text-center" id="one" maxlength="1" onkeyup="clickEvent(this,'two')">
                                        </div>
                                        <div class="col-3">
                                            <input type="text" class="form-control text-center" id="two" maxlength="1" onkeyup="clickEvent(this,'three')">
                                        </div>
                                        <div class="col-3">
                                            <input type="text" class="form-control text-center" id="three" maxlength="1" onkeyup="clickEvent(this,'four')">
                                        </div>
                                        <div class="col-3">
                                            <input type="text" class="form-control text-center" id="four" maxlength="1">
                                        </div>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label fs-14" for="defaultCheck1">
                                            Didn't recieve a code ?<a href="#" class="text-primary ms-2 d-inline-block">Resend</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xl-12 d-grid mt-2">
                                   <button class="btn btn-primary">Verify</button>
                                </div>
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
     <script src="{{ asset('assets/js/two-step-verification.js') }}"></script>
    </body>
</html>
