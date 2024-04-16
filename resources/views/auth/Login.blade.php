<!DOCTYPE html>
<html class="loading" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>XY Project</title>
    <link rel="icon" href="home/img/xylogo.png" type="image/png" sizes="16x16">
    <link rel="shortcut icon" type="image/x-icon" href="../../library/assets/images/ico/favicon.ico">
    <link href="../../library/assets/fonts/cssed62_family%3DMontserrat_300%2C400%2C500%2C600.css" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.7.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../../library/assets/vendors/css/vendors.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../library/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../library/assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="../../library/assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="../../library/assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="../../library/assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="../../library/assets/css/themes/semi-dark-layout.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../library/assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="../../library/assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="../../library/assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer=""></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../library/assets/js/scripts/main.custom.js"></script>

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../library/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>

<body
    class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page"
    id="ShennLicense" data-license="WCXV3-VIPaymentBypass" data-open="click" data-menu="vertical-menu-modern"
    data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row"></div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-12 col-12 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-12 col-12 p-0">
                                    <div class="card rounded-0 mb-0 px-2">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <a href="{{ route('auth') }}">
                                                    <h4 class="mb-0"><i class="feather icon-log-in"></i> Login</h4>
                                                </a>
                                            </div>
                                        </div>
                                        <p class="px-2">Halo, selamat datang pastikan Anda login menggunakan username.
                                        </p>
                                        <div class="card-content">
                                            <div class="card-body pt-1">
                                                <form method="POST">
                                                    <input type="hidden" id="csrf_token" name="csrf_token"
                                                        value="e19a58093714f1e492d99b742123d63fcf533607b7a844cc39a261eb4ecc07a2">
                                                    <fieldset
                                                        class="form-label-group form-group position-relative has-icon-left">
                                                        <input type="text" class="form-control" name="username"
                                                            id="user-name" placeholder="Username" required=""
                                                            oninvalid="this.setCustomValidity('Harap isi bidang ini')"
                                                            oninput="setCustomValidity('')">
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                        <label for="user-name">Username <font color="red">*</font>
                                                            </label>
                                                    </fieldset>

                                                    <fieldset class="form-label-group position-relative has-icon-left">
                                                        <input type="password" class="form-control" name="password"
                                                            id="user-password" placeholder="Password Akun" required=""
                                                            oninvalid="this.setCustomValidity('Harap isi bidang ini')"
                                                            oninput="setCustomValidity('')">
                                                        <div class="form-control-position">
                                                            <i class="feather icon-lock"></i>
                                                        </div>
                                                        <label for="user-password">Password <font color="red">*</font>
                                                            </label>
                                                    </fieldset>
                                                    <div
                                                        class="form-group d-flex justify-content-between align-items-center">
                                                        <div class="text-left">
                                                            <fieldset class="checkbox">
                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                    <input type="checkbox" name="remember" value="true"
                                                                        checked="">
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class="">Ingat saya</span>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="text-right"><a href="../forgot/"
                                                                class="card-link">Lupa Password?</a></div>
                                                    </div>
                                                    <a href="{{ route('registration') }}"
                                                        class="btn btn-outline-primary float-left btn-inline"
                                                        style="padding-top: 0.8rem;padding-bottom: .8rem;">Daftar</a>
                                                    <button name="login" type="submit"
                                                        class="btn btn-primary float-right btn-inline">Login</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="login-footer">
                                            <div class="divider">
                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <script type="text/javascript">
                    $('form').submit(function () {
                        $(this).find("button[type='submit']").prop('disabled', true);
                    });
                    $(document).ready(function () {

                        // $("#actionbutton").click(function() {
                        //     $("#actionbutton").hide();
                        //     $("#timerdiv").show(); 
                        //     var timer = 10;     
                        //     function counting(){
                        //         var rto = setTimeout(counting,1000);
                        //         $('#timerdiv').html( '<button type="button" class="btn bg-gradient-primary float-right btn-disabled"> Loading </button>' );
                        //         timer--;
                        //         if(timer < 0) {
                        //             clearTimeout(rto);
                        //             timer = 10;
                        //             $("#timerdiv").hide();             
                        //             $("#actionbutton").show();
                        //         }
                        //     }
                        //     counting();
                        //  });
                    });

                </script>
                <div class="fab-container">
                    <div class="fab fab-icon-holder" style="background-color:#FFF; padding:5px">
                        <img src="../../library/assets/images/icons/kjUntitled.jpg" class="img-fluid" alt="">
                    </div>
                    <ul class="fab-options">
                        <li>
                            <a href="https://wa.me/6281319042926" class="text-decoration-none" target="_blank">
                                <div class="fab-icon-holder" style="background-color: #25D366;">
                                    <i class="fab fa-whatsapp"></i>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/vipayment_id" class="text-decoration-none" target="_blank">
                                <div class="fab-icon-holder"
                                    style="background: radial-gradient(circle farthest-corner at 35% 90%, #fec564, transparent 50%), radial-gradient(circle farthest-corner at 0 140%, #fec564, transparent 50%), radial-gradient(ellipse farthest-corner at 0 -25%, #5258cf, transparent 50%), radial-gradient(ellipse farthest-corner at 20% -50%, #5258cf, transparent 50%), radial-gradient(ellipse farthest-corner at 100% 0, #893dc2, transparent 50%), radial-gradient(ellipse farthest-corner at 60% -20%, #893dc2, transparent 50%), radial-gradient(ellipse farthest-corner at 100% 100%, #d9317a, transparent), linear-gradient(#6559ca, #bc318f 30%, #e33f5f 50%, #f77638 70%, #fec66d 100%);">
                                    <i class="fab fa-instagram"></i>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="https://facebook.com/vipayment.id" class="text-decoration-none" target="_blank">
                                <div class="fab-icon-holder" style="background-color: #0F92F3;">
                                    <i class="fab fa-facebook-f"></i>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="https://t.me/vipayment" class="text-decoration-none" target="_blank">
                                <div class="fab-icon-holder" style="background-color: #2FA6DE;">
                                    <i class="fab fa-telegram"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <a href="#" class="act-btn-top text-decoration-none" onclick="toTop()"
                        style="display: none; background-color: #bd4cae; bottom: 19px;">
                        <i class="fas fa-angle-up mt-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="../../library/assets/vendors/js/vendors.min.js"></script>

    <!-- BEGIN: Theme JS-->
    <script src="../../library/assets/js/core/app-menu.min.js"></script>
    <script src="../../library/assets/js/core/app.min.js"></script>
    <script src="../../library/assets/js/scripts/components.min.js"></script>
    <script src="../../library/assets/js/scripts/show-password.min.js"></script>
    <!-- END: Theme JS-->


</body>

</html>
