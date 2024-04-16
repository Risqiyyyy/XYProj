<!DOCTYPE html><!-- App title -->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>XY Project</title>
    <link rel="icon" href="home/img/xylogo.png" type="image/png" sizes="16x16">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('home/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/jquery.mb.YTPlayer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/responsive.css') }}">
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top bg-transparent">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <h3 class="text-white">XY Project</h3>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="ti-menu"></span>
                </button>
                <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto menu">
                        <li><a href="#home" class="page-scroll">Home</a></li>
                        <li><a href="#features" class="page-scroll">Tentang</a></li>
                        <li><a href="#product" class="page-scroll">Produk</a></li>
                        <li><a href="{{ route('auth') }}">Masuk</a></li>
                        <li><a href="{{ route('registration') }}">Daftar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="main">
        <section id="home" class="hero-equal-height ptb-100 gradient-overlay"
            style="background: url('img/server.jpg/')no-repeat center center / cover">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-7 col-lg-6">
                        <div class="hero-content-left text-white my-lg-0 my-md-5 my-sm-5 my-5">
                            <h1 class="text-white">XY Project | Tempat Berlangganan Produk Digital Dan Jasa </h1>
                            <div class="action-btns download-btn mt-4">
                                <a href="{{ route('auth') }}"
                                    class="page-scroll btn solid-white-btn animated-btn mr-lg-3">Masuk</a>
                                <a href="{{ route('registration') }}"
                                    class="page-scroll btn outline-white-btn animated-btn">Daftar</a>
                            </div>
                            <div style="margin-top:20px;">
                                <!--- <a href="https://play.google.com/store/apps/details?id=com.vippay.app" target="_blank"
                                class="btn solid-btn" style="width:230px;"><i class="ti-download"></i> Play Store</a> --->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-6">
                        <div class="video-app-wrap m-sm-auto ml-auto">
                            <div class="iphone-mask">
                                <img src="home/img/xylogo.png" alt="app" class="img-fluid mask-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-bottom">
                <img src="home/img/wave-line-bw-long.svg" alt="shape" class="bottom-shape img-fluid">
            </div>
        </section>
        <section class="promo-new-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-8">
                        <div class="section-heading mb-5">
                            <br>
                            <center>
                                <h2>3 Langkah Mudah Memulai Transaksi</h2>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <div
                            class="single-promo single-promo-hover single-promo-1 rounded text-center white-bg p-5 h-100">
                            <div class="circle-icon mb-5">
                                <span class="ti-user text-white"></span>
                            </div>
                            <h5>1. Daftar Akun</h5>
                            <p>Daftar akun sebelum melakukan pembelian produk, silahkan akses ke menu Daftar.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div
                            class="single-promo single-promo-hover single-promo-1 rounded text-center white-bg p-5 h-100">
                            <div class="circle-icon mb-5">
                                <span class="ti-wallet text-white"></span>
                            </div>
                            <h5>2. Pilih Produk</h5>
                            <p>Pilih Produk sesuai yang diinginkan, Lalu Lakukan pembayaran.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div
                            class="single-promo single-promo-hover single-promo-1 rounded text-center white-bg p-5 h-100">
                            <div class="circle-icon mb-5">
                                <span class="ti-shopping-cart text-white"></span>
                            </div>
                            <h5>3. Mulai Transaksi</h5>
                            <p>Metode Transaksi lengkap, tersedia Transaksi melalui Bank, E-Money, dan QRIS.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div id="features" class="feature-section gray-light-bg ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-9">
                        <div class="section-heading text-center mb-5">
                            <h2>Mengapa Memilih XY Project?</h2>
                            <p>Kami memberikan pelayanan yang terbaik dengan menghadirkan beberapa layanan seperti Isi
                                Ulang Ponsel, Topup Game, dan Jasa Pembuatan Website hanya dengan satu aplikasi.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex align-items-start mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="ti-user icon-sm color-1 color-1-bg p-3 mr-4 mt-1 rounded"></span>
                                    <div class="icon-text">
                                        <h5 class="mb-2">Pendaftaran Gratis Dan Mudah</h5>
                                        <p>Pendaftaran gratis tidak di kenakan biaya, setelah mendaftar akun anda
                                            langsung aktif dan dapat melakukan transaksi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-start mb-sm-0 mb-md-5 mb-lg-5">
                                    <span
                                        class="ti-alarm-clock icon-sm color-2 color-2-bg p-3 mr-4 mt-1 rounded"></span>
                                    <div class="icon-text">
                                        <h5 class="mb-2">Transaksi Otomatis 24 Jam</h5>
                                        <p>Anda tetap bisa melakukan transaksi di waktu kapan saja selama 24 Jam.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-start mb-sm-0 mb-md-5 mb-lg-5">
                                    <span
                                        class="ti-headphone-alt icon-sm color-5 color-5-bg p-3 mr-4 mt-1 rounded"></span>
                                    <div class="icon-text">
                                        <h5 class="mb-2">Dukungan Pelayanan Bantuan</h5>
                                        <p>Kami siap membantu Anda dalam menangani masalah pesanan atau pertanyaan
                                            selama jam kerja.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 d-none d-sm-none d-md-block d-lg-block">
                        <div class="position-relative pb-md-5 py-lg-0">
                            <img alt="Image placeholder" src="home/img/svg-icon-4.svg" class="img-center img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex align-items-start mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="ti-wallet icon-sm color-4 color-4-bg p-3 mr-4 mt-1 rounded"></span>
                                    <div class="icon-text">
                                        <h5 class="mb-2">Pilihan Deposit Lengkap</h5>
                                        <p>Kami menerima pembayaran deposit melalui Bank, dan E-Money.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-start mb-sm-0 mb-md-5 mb-lg-5">
                                    <span
                                        class="ti-shopping-cart icon-sm color-3 color-3-bg p-3 mr-4 mt-1 rounded"></span>
                                    <div class="icon-text">
                                        <h5 class="mb-2">Produk Yang Lengkap</h5>
                                        <p>Kami menyediakan produk yang lengkap dan murah hanya dengan satu aplikasi.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-start mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="ti-rss-alt icon-sm color-6 color-6-bg p-3 mr-4 mt-1 rounded"></span>
                                    <div class="icon-text">
                                        <h5 class="mb-2">Dukungan Jalur Transaksi</h5>
                                        <p>Anda dapat melakukan transaksi melalui Jalur Website, dan Whatsapp.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="reviews" class="testimonial-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading mb-5 text-center">
                            <h2>Testimonial</h2>
                            <p class="lead">
                                Apa kata mereka mengenai XY Project?
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="owl-carousel owl-theme client-testimonial">
                            <div class="item">
                                <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                                    <blockquote>
                                        XY Project mantep layanan nya lengkap dan murah-murah, cocok banget buat usaha
                                        sampingan atau pemakaian sendiri
                                    </blockquote>
                                    <div class="client-ratting mt-2">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                        </ul>
                                        <h6 class="font-weight-bold">5.0 <small
                                                class="font-weight-lighter">BizBite</small></h6>
                                    </div>
                                </div>
                                <div class="client-info-wrap d-flex align-items-center mt-5">
                                    <div class="client-img mr-3">
                                        <img src="home/img/avatar.png" alt="client" width="60"
                                            class="img-fluid rounded-circle shadow-sm">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="mb-0">Fandi FN</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                                    <blockquote>
                                        Saya sangat puas sekali dengan pelayanan XY Project dan juga sangat mudah untuk
                                        melakukan transaksi. TERIMA KASIH XY Project atas pelayanan yang super bagus.
                                    </blockquote>
                                    <div class="client-ratting mt-2">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                        </ul>
                                        <h6 class="font-weight-bold">5.0 <small
                                                class="font-weight-lighter">BizBite</small></h6>
                                    </div>
                                </div>
                                <div class="client-info-wrap d-flex align-items-center mt-5">
                                    <div class="client-img mr-3">
                                        <img src="home/img/avatar.png" alt="client" width="60"
                                            class="img-fluid rounded-circle shadow-sm">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="mb-0">Renaldy Kurniawan</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                                    <blockquote>
                                        Sangat terpercaya,100000% aman,pokoknya recomend banget deh,harganya murah² ga
                                        ada yg mahal,admin respondnya cepet,klo ada keluhan langsung ditangani,pokoknya
                                        kalian semua harus download apk ini ga download nyesel deh,sukses selalu. salam
                                        🙏
                                    </blockquote>
                                    <div class="client-ratting mt-2">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                        </ul>
                                        <h6 class="font-weight-bold">5.0 <small
                                                class="font-weight-lighter">BizBite</small></h6>
                                    </div>
                                </div>
                                <div class="client-info-wrap d-flex align-items-center mt-5">
                                    <div class="client-img mr-3">
                                        <img src="home/img/avatar.png" alt="client" width="60"
                                            class="img-fluid rounded-circle shadow-sm">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="mb-0">Nurina Saleha</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                                    <blockquote>
                                        Aplikasi nya user friendly bgt semua fitur-fitur nya jelas gk ribet, cocok bgt
                                        buat reseller, admin jg fast respon aman dah pokonya gw dh join dari lama. Pake
                                        kode referral gw biar dptin bonusnyaa [Pastiuntung]</blockquote>
                                    <div class="client-ratting mt-2">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                        </ul>
                                        <h6 class="font-weight-bold">5.0 <small
                                                class="font-weight-lighter">BizBite</small></h6>
                                    </div>
                                </div>
                                <div class="client-info-wrap d-flex align-items-center mt-5">
                                    <div class="client-img mr-3">
                                        <img src="home/img/avatar.png" alt="client" width="60"
                                            class="img-fluid rounded-circle shadow-sm">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="mb-0"> Trulli</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                                    <blockquote>
                                        Apk nya terpercaya banget dehh harganya dibawah pasaran :') Adminnya fast respon
                                        ada grup sesama reseller bisa sharing jadinya. Daftarnya jga gampang emang harus
                                        nunggu konfirmasi beberapa jam dlu dan PW harus sesuai huruf besar kecil ama
                                        angkanya, yg blng ga bsa bsa gamau usaha wkw padahal udh TOP ...
                                    </blockquote>
                                    <div class="client-ratting mt-2">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                        </ul>
                                        <h6 class="font-weight-bold">5.0 <small
                                                class="font-weight-lighter">BizBite</small></h6>
                                    </div>
                                </div>
                                <div class="client-info-wrap d-flex align-items-center mt-5">
                                    <div class="client-img mr-3">
                                        <img src="home/img/avatar.png" alt="client" width="60"
                                            class="img-fluid rounded-circle shadow-sm">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="mb-0"> Savira Hidayanti</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                                    <blockquote>
                                        Apk nya sangat bangus sekali👍👍👍👍👍, untuk kalian recomended banget nih
                                        apk😊dijamin 10000000000000000000%amanah banget, dan adminnya juga sopan dan
                                        ramah👍
                                    </blockquote>
                                    <div class="client-ratting mt-2">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                        </ul>
                                        <h6 class="font-weight-bold">5.0 <small
                                                class="font-weight-lighter">BizBite</small></h6>
                                    </div>
                                </div>
                                <div class="client-info-wrap d-flex align-items-center mt-5">
                                    <div class="client-img mr-3">
                                        <img src="home/img/avatar.png" alt="client" width="60"
                                            class="img-fluid rounded-circle shadow-sm">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="mb-0"> Dicky Hermawan</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                                    <blockquote>
                                        Tidak mengecewakan saya pakai ini aplikasi cepet banget sudah 1 tahun amanah
                                        pakai apl ini🤩
                                    </blockquote>
                                    <div class="client-ratting mt-2">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                            <li class="list-inline-item"><span class="ti-star ratting-color"></span>
                                            </li>
                                        </ul>
                                        <h6 class="font-weight-bold">5.0 <small
                                                class="font-weight-lighter">BizBite</small></h6>
                                    </div>
                                </div>
                                <div class="client-info-wrap d-flex align-items-center mt-5">
                                    <div class="client-img mr-3">
                                        <img src="home/img/avatar.png" alt="client" width="60"
                                            class="img-fluid rounded-circle shadow-sm">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="mb-0">Milhan R</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="product" class="client-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Berikut Produk XY Project</h2>
                            <p class="lead">
                                XY Project menyediakan produk/layanan seperti Isi Ulang Ponsel, Topup Game, dan Jasa
                                Social Media Marketing hanya dengan satu aplikasi.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                            <div class="item single-client">
                                <img src="home/img/produk/axis.png" alt="client logo" class="img-fluid client-img">
                            </div>
                            <div class="item single-client">
                                <img src="home/img/produk/byu.png" alt="client logo" class="img-fluid client-img">
                            </div>
                            <div class="item single-client">
                                <img src="home/img/produk/indosat.png" alt="client logo" class="img-fluid client-img">
                            </div>
                            <div class="item single-client">
                                <img src="home/img/produk/smart.png" alt="client logo" class="img-fluid client-img">
                            </div>
                            <div class="item single-client">
                                <img src="home/img/produk/ts.png" alt="client logo" class="img-fluid client-img">
                            </div>
                            <div class="item single-client">
                                <img src="home/img/produk/three.png" alt="client logo" class="img-fluid client-img">
                            </div>
                            <div class="item single-client">
                                <img src="home/img/produk/xl.png" alt="client logo" class="img-fluid client-img">
                            </div>
                            <div class="item single-client">
                                <img src="home/img/produk/free-fire.png" alt="client logo" class="img-fluid client-img">
                            </div>
                            <div class="item single-client">
                                <img src="home/img/produk/mobile-legends.png" alt="client logo"
                                    class="img-fluid client-img">
                            </div>
                            <div class="item single-client">
                                <img src="home/img/produk/pubgm-2.png" alt="client logo" class="img-fluid client-img">
                            </div>
                            <div class="item single-client">
                                <img src="home/img/produk/valorant.png" alt="client logo" class="img-fluid client-img">
                            </div>
                            <div class="item single-client">
                                <img src="home/img/produk/lords-mobile.png" alt="client logo"
                                    class="img-fluid client-img">
                            </div>
                            <div class="item single-client">
                                <img src="home/img/produk/sosial-media.png" alt="client logo"
                                    class="img-fluid client-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div align="center" style="margin-top:20px;">
                <a href="{{ route('auth') }}" class="btn solid-btn" style="width:200px;">Lihat Semua Produk</a></div>
        </section>
    </div>

    <footer class="footer-section">
        <div class="footer-top gradient-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="footer-nav-wrap text-white mb-0 mb-md-4 mb-lg-0">
                            <h3 class="text-white">XY Project</h3>
                            <p>XY Project Platform bisnis yang menyediakan Layanan Produk Digital dan Jasa Pembuatan Website.</p>
                            <ul class="list-unstyled social-list mb-0">
                                <li class="list-inline-item"><a href="#" class="rounded"><span
                                            class="ti-facebook white-bg color-2 shadow rounded-circle"></span></a></li>
                                <li class="list-inline-item"><a href="#" class="rounded"><span
                                            class="ti-twitter white-bg color-2 shadow rounded-circle"></span></a></li>
                                <li class="list-inline-item"><a href="#" class="rounded"><span
                                            class="ti-linkedin white-bg color-2 shadow rounded-circle"></span></a></li>
                                <li class="list-inline-item"><a href="#" class="rounded"><span
                                            class="ti-dribbble white-bg color-2 shadow rounded-circle"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-12">
                        <div class="footer-nav-wrap text-white">
                            <h5 class="text-white">Usefull Links</h5>
                            <ul class="list-unstyled footer-nav-list mt-3">
                                <li><a href="page/tos/" class="text-foot"><span class="ti-angle-double-right"></span>
                                        Ketentuan Layanan</a></li>
                                <li><a href="#" class="text-foot"><span class="ti-angle-double-right"></span>
                                        Dokumentasi</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-12">
                        <div class="footer-nav-wrap text-white">
                            <h5 class="text-white">Company</h5>
                            <ul class="list-unstyled footer-nav-list mt-3">
                                <li><a href="#features" class="page-scroll"><span class="ti-angle-double-right"></span>
                                        Tentang Kami</a></li>
                                <li><a href="page/product/" class="text-foot"><span
                                            class="ti-angle-double-right"></span> Daftar Layanan</a></li>
                                <li><a href="page/contact/" class="text-foot"><span
                                            class="ti-angle-double-right"></span> Kontak Admin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom gray-light-bg py-3">
            <div class="container">
                <div class="row text-center justify-content-center">
                    <div class="col-md-6 col-lg-5">
                        <p class="copyright-text pb-0 mb-0">Copyrights © 2023. All
                            rights reserved by
                            <a href="#">XY Project DIGITAL SOLUTION</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="ti-angle-up"></span>
    </button>

    <script src="{{ asset('home/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('home/js/popper.min.js') }}"></script>
    <script src="{{ asset('home/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('home/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('home/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('home/js/wow.min.js') }}"></script>
    <script src="{{ asset('home/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('home/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('home/js/scripts.js') }}"></script>
    <!-- <script src="//code.tidio.co/37ccvqy9n2h93tsczfbi3b1bcsnoti6t.js" async></script> -->

    <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "6281381520634", // WhatsApp number
                call_to_action: "Kirimi kami pesan", // Call to action
                position: "left", // Position may be 'right' or 'left'
                pre_filled_message: "Halo admin", // WhatsApp pre-filled message
            };
            var proto = document.location.protocol,
                host = "getbutton.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>

</body>

</html>