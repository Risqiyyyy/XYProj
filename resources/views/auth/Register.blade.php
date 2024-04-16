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
                        <div class="row m-0">
                            <div class="col-lg-12 col-12 p-0">
                                <div class="card rounded-0 mb-0 p-2">
                                    <div class="card-header pt-50 pb-1">
                                        <div class="card-title">
                                            <a href="{{ route('registration') }}">
                                                <h4 class="mb-0"><i class="feather icon-user-plus"></i> Buat Akun</h4>
                                            </a>
                                        </div>
                                    </div>
                                    <p class="px-2">Isi formulir di bawah ini untuk membuat akun baru.</p>
                                    <div class="card-content">
                                        <div class="card-body pt-0">
                                            <form action="{{ route('registration.store') }}" method="POST">
                                                @csrf
                                                <div class="form-label-group">
                                                    <input type="email" name="email" id="inputEmail" maxlength="128"
                                                        class="form-control" placeholder="Email (Aktif!)" required=""
                                                        oninvalid="this.setCustomValidity('Isi Email Anda')"
                                                        oninput="setCustomValidity('')">
                                                    <label for="inputEmail">Email <font color="red">*</font></label>
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="text" name="name" id="inputfullName"
                                                        onkeyup="this.value=this.value.replace(/[^A-Za-z ]/g,'')"
                                                        maxlength="128" class="form-control" placeholder="Nama Lengkap"
                                                        required=""
                                                        oninvalid="this.setCustomValidity('Isi Nama Lengkap')"
                                                        oninput="setCustomValidity('')">
                                                    <label for="inputfullName">Nama Lengkap <font color="red">*</font>
                                                        </label>
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="text" name="username" id="inputUsername"
                                                        onkeyup="this.value=this.value.replace(/[^A-Za-z0-9]/g,'')"
                                                        minlength="5" maxlength="18" class="form-control"
                                                        placeholder="Username (tanpa simbol atau spasi)" required=""
                                                        oninvalid="this.setCustomValidity('Silahkan isi kolom ini')"
                                                        oninput="setCustomValidity('')">
                                                    <label for="inputUsername">Username <font color="red">*</font>
                                                        </label>
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="text" name="no_wa" id="inputPhone"
                                                        onkeyup="this.value=this.value.replace(/[^\d]+/g,'')"
                                                        minlength="11" maxlength="14" class="form-control"
                                                        placeholder="Nomor Whatsapp (Aktif!)" required="">
                                                    <label for="inputPhone">Nomor Whatsapp <font color="red">*</font>
                                                        </label>
                                                </div>
                                                <div class="form-label-group">
                                                    <div class="input-group">
                                                        <input type="password" name="pin" inputmode="numeric"
                                                            id="inputtwo-factor"
                                                            onkeyup="this.value=this.value.replace(/[^\d]+/g,'')"
                                                            maxlength="6" minlength="6" class="form-control"
                                                            placeholder="PIN Keamanan (6 digit)" data-toggle="password"
                                                            required="">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i
                                                                    class="fa fa-eye"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-label-group">
                                                    <div class="input-group">
                                                        <input type="password" name="password" id="password"
                                                            class="form-control" placeholder="Password"
                                                            data-toggle="password" required="">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i
                                                                    class="fa fa-eye"></i></span>
                                                        </div>
                                                    </div>
                                                    <span class="mt-5"><a onclick="generatePassword('password')"
                                                            class="text-primary">Generate Password</a></span>
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="text" class="form-control" name="referal"
                                                        placeholder="Kode Referral (Kosongkan jika tidak ada)" value="">
                                                    <label for="inputReferall">*Kode Referral</label>
                                                </div>
                                                <div class="form-label-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            name="accepttos" id="AcceptTOS" value="true" checked="">
                                                        <label class="custom-control-label text-dark"
                                                            for="AcceptTOS">Saya menerima<a
                                                                href="../../page/terms-of-service/" target="BLANK"
                                                                class="text-primary"> Syarat dan Ketentuan</a></label>
                                                    </div>
                                                </div>
                                                <a href="{{ route('auth') }}"
                                                    class="btn btn-outline-primary float-left btn-inline mb-50"
                                                    style="padding-top: 0.8rem;padding-bottom: .8rem;">Login</a>
                                                <button type="submit" name="sendOTP" id="actionbutton"
                                                    class="btn btn-primary float-right btn-inline mb-50">Daftar</button>
                                                <div id="timerdiv" style="display:none;"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <script type="text/javascript">
                $(document).ready(function () {
                    $("#actionbutton").click(function () {
                        $("#actionbutton").hide();
                        $("#timerdiv").show();
                        var timer = 30;

                        function counting() {
                            var rto = setTimeout(counting, 1000);
                            $('#timerdiv').html(
                                '<button type="button" class="btn bg-gradient-primary float-right btn-disabled"> Loading </button>'
                                );
                            timer--;
                            if (timer < 0) {
                                clearTimeout(rto);
                                timer = 30;
                                $("#timerdiv").hide();
                                $("#actionbutton").show();
                            }
                        }
                        counting();
                    });
                });

            </script>
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
