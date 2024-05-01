@extends('partials.app')

@section('title', 'Page Title')

@section('content')
<!-- Banner-section start -->
<section class="banner-section index-one overflow-hidden">
    <div class="shape-area">
        <img src="assets/images/abs-items/planet.png" class="shape-1" alt="icon">
        <img src="assets/images/abs-items/console-1.png" class="shape-2" alt="icon">
        <img src="assets/images/abs-items/console-2.png" class="shape-3" alt="icon">
    </div>
    <div class="ellipse-area ellipse-one position-absolute">
        <img src="assets/images/abs-items/ellipse-6.png" class="ellipse-1" alt="icon">
        <img src="assets/images/abs-items/ellipse-4.png" class="ellipse-2" alt="icon">
        <img src="assets/images/abs-items/ellipse-5.png" class="ellipse-3" alt="icon">
    </div>
    <div class="ellipse-area ellipse-two position-absolute">
        <img src="assets/images/abs-items/ellipse-6.png" class="ellipse-1" alt="icon">
        <img src="assets/images/abs-items/ellipse-3.png" class="ellipse-3" alt="icon">
        <img src="assets/images/abs-items/ellipse-4.png" class="ellipse-4" alt="icon">
        <img src="assets/images/abs-items/ellipse-1.png" class="ellipse-2" alt="icon">
        <img src="assets/images/abs-items/ellipse-5.png" class="ellipse-5" alt="icon">
    </div>
    <div class="ellipse-area ellipse-three position-absolute">
        <img src="assets/images/abs-items/ellipse-6.png" class="ellipse-1" alt="icon">
    </div>
    <div class="ellipse-area ellipse-four position-absolute">
        <img src="assets/images/abs-items/ellipse-6.png" class="ellipse-1" alt="icon">
        <img src="assets/images/abs-items/ellipse-3.png" class="ellipse-2" alt="icon">
        <img src="assets/images/abs-items/ellipse-2.png" class="ellipse-3" alt="icon">
    </div>
    <div class="overlay overflow-hidden" id="home">
        <div class="banner-content position-relative">
            <div class="container">
                <div class="row justify-content-between justify-content-center align-items-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="main-content">
                            <div class="mb-8">
                                {{-- <h3 class="visible-slowly-bottom sub-title"><span>Building Gaming Worlds</span></h3> --}}
                                <span class="display-one">XY Project
                                    <br>
                                    <span class="typed d-inline-block">Entertainment</span>
                                </span>
                                <p class="fs-four">Platform yang menyediakan Layanan Pulsa, PPOB, TopUp Game Murah, Produk Digital, dan Jasa Pembuatan Website.</p>
                            </div>
                            <div class="btn-area alt-bg">
                                <button type="button" class="box-style btn-box d-center" data-bs-toggle="modal"
                                data-bs-target="#loginMod">
                              Mulai
                            </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-7 col-sm-9 mt-10 mt-lg-0 col-10">
                        <div class="game-carousel pb-20">
                            <div class="slide-area">
                                <div class="top-area d-flex justify-content-end gap-4 mb-5 align-items-end">
                                    <img src="assets/images/icon/top-bottom.png" alt="Image">
                                    <h4 class="mb-1">Featured Games</h4>
                                </div>
                                <div class="single-slider p-3 p-sm-5">
                                    <div class="thumb-wrapper">
                                        <div class="thumb">
                                            <img src="assets/images/logo/mole2.jpg" alt="Image">
                                        </div>
                                        <div class="app-download-title pt-5 pb-3 text-center">
                                            <h3>Mobile Legends</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-area">
                                <div class="top-area d-flex justify-content-end gap-4 mb-5 align-items-end">
                                    <img src="assets/images/icon/top-bottom.png" alt="Image">
                                    <h4 class="mb-1">Featured Games</h4>
                                </div>
                                <div class="single-slider p-3 p-sm-5">
                                    <div class="thumb-wrapper">
                                        <div class="thumb">
                                            <img src="assets/images/logo/pubg2.jpg" alt="Image">
                                        </div>
                                        <div class="app-download-title pt-5 pb-3 text-center">
                                            <h3>PUBG Mobile</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner-section end -->

<!-- Job Opens start -->
<section class="job-opens pt-120 pb-120" id="tentang">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-text text-center">
                    <span class="fs-two heading mb-6 w-75 m-auto">Mengapa Memilih <span>XY Project</span>
                    </span>
                    <p>Kami memberikan pelayanan yang terbaik dengan menghadirkan beberapa layanan seperti Isi Ulang
                        Ponsel, Topup Game, dan Jasa Pembuatan Website hanya dengan satu aplikasi.</p>
                </div>
            </div>
        </div>
        <div class="row cus-mar">
            <div class="col-md-6">
                <div
                    class="single-box flex-wrap box-style box-second p-3 p-md-6 d-flex gap-4 gap-md-6 justify-content-between">

                    <div class="content-box d-flex flex-wrap gap-4 gap-md-6">
                        <div class="icon-box d-inline-flex d-center">
                            <i class="material-symbols-outlined">person</i>
                        </div>
                        <div class="info-box">
                            <h5 class="mt-3">Pendaftaran Gratis Dan Mudah</h5>
                        </div>
                        <span class="fs-seven mt-2">Pendaftaran gratis tidak di kenakan biaya, setelah mendaftar akun
                            anda langsung aktif dan dapat melakukan Transaksi.</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-box flex-wrap box-style box-second p-3 p-md-6 d-flex gap-4 gap-md-6 justify-content-between">

                    <div class="content-box d-flex flex-wrap gap-4 gap-md-6">
                        <div class="icon-box d-inline-flex d-center">
                            <i class="material-symbols-outlined"> point_of_sale </i>
                        </div>
                        <div class="info-box">
                            <h5 class="mt-3">Pilihan Transaksi Lengkap</h5>
                        </div>
                        <span class="fs-seven mt-2 mb-4">Kami menerima pembayaran deposit melalui Bank, E-Money, dan Qris.</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="single-box flex-wrap box-style box-second p-3 p-md-6 d-flex gap-4 gap-md-6 justify-content-between">

                    <div class="content-box d-flex flex-wrap gap-4 gap-md-6">
                        <div class="icon-box d-inline-flex d-center">
                            <i class="material-symbols-outlined fs-three"> alarm_on </i>
                        </div>
                        <div class="info-box">
                            <h5 class="mt-3">Transaksi Otomatis 24 Jam </h5>
                        </div>
                        <span class="fs-seven mt-2">Anda tetap bisa melakukan transaksi di waktu kapan saja selama 24 Jam</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="single-box flex-wrap box-style box-second p-3 p-md-6 d-flex gap-4 gap-md-6 justify-content-between">

                    <div class="content-box d-flex flex-wrap gap-4 gap-md-6">
                        <div class="icon-box d-inline-flex d-center">
                            <i class="material-symbols-outlined"> shopping_cart </i>
                        </div>
                        <div class="info-box">
                            <h5 class="mt-3">Produk Yang Lengkap</h5>
                        </div>
                        <span class="fs-seven mt-2">Kami menyediakan produk yang lengkap dan murah hanya dengan satu aplikasi.</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="single-box flex-wrap box-style box-second p-3 p-md-6 d-flex gap-4 gap-md-6 justify-content-between">

                    <div class="content-box d-flex flex-wrap gap-4 gap-md-6">
                        <div class="icon-box d-inline-flex d-center">
                            <i class="material-symbols-outlined "> headset_mic </i>
                        </div>
                        <div class="info-box">
                            <h5 class="mt-3">Dukungan Pelayanan Bantuan</h5>
                        </div>
                        <span class="fs-seven mt-2">Kami siap membantu Anda dalam menangani masalah pesanan atau pertanyaan selama jam kerja.</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="single-box flex-wrap box-style box-second p-3 p-md-6 d-flex gap-4 gap-md-6 justify-content-between">

                    <div class="content-box d-flex flex-wrap gap-4 gap-md-6">
                        <div class="icon-box d-inline-flex d-center">
                            <i class="material-symbols-outlined fs-three"> rss_feed </i>
                        </div>
                        <div class="info-box">
                            <h5 class="mt-3">Dukungan Jalur Transaksi</h5>
                        </div>
                        <span class="fs-seven mt-2 mb-4">Anda dapat melakukan transaksi melalui Jalur Website, dan Whatsapp.</span>
                    </div>
                </div>
            </div>
            s
        </div>
    </div>
</section>
<!-- Job Opens end -->

<!-- Our Games section start -->
<section class="our-games overflow-hidden pt-120 pb-120" id="produk">
    <div class="container singletab">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-text text-center">
                    <h4 class="sub-title">Produk <span>XY Project</span></h4>
                    {{-- <span class="fs-two heading mb-6">Our Games are <span>Vibrant</span> Worlds With
                        <span>Charming</span> Characters</span> --}}
                    <p>XY Project menyediakan Layanan Pulsa, PPOB, TopUp  Murah, Produk Digital, dan Jasa Pembuatan Website.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <ul class="nav tablinks flex-wrap d-center mb-6 mb-sm-10 d-inline-flex gap-4 p-3 tab-area">
                    <li class="nav-item">
                        <button class="nav-link d-center box-style btn-box p-0 active">
                            <span class="icon-area">
                                <i class="ri-gamepad-line fs-two"></i>
                            </span>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link d-center box-style btn-box p-0">
                            <span class="icon-area">
                                <i class="ri-movie-line fs-two"></i>
                            </span>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link d-center box-style btn-box p-0">
                            <span class="icon-area">
                                <i class="ri-macbook-line fs-two"></i>
                            </span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="tabcontents">
                    <div class="tabitem active">
                        <div class="cus-mar">

                            <div class="single-box position-relative p-3 p-md-4">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <div class="position-relative d-center">
                                            <img src="assets/images/logo/mole1.jpg" class="w-50" alt="sec-img">
                                            <a href="" data-bs-toggle="modal"
                                            data-bs-target="#loginMod"
                                                class="box-style btn-box-second heading-five fs-five mfp-iframe text-uppercase d-center position-absolute">
                                                Beli
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 mt-6 mt-md-0">
                                        <h3 class="visible-slowly-bottom mb-4">Mobile Legends</h3>
                                        <p>Beli top up ML diamond Mobile Legends dan Weekly Diamond Pass MLBB harga paling murah, aman, cepat, dan terpercaya.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="single-box position-relative p-3 p-md-4">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <div class="position-relative d-center">
                                            <img src="assets/images/logo/pubg.jpg" class="w-50" alt="sec-img">
                                            <a href="" data-bs-toggle="modal"
                                            data-bs-target="#loginMod"
                                                class="box-style btn-box-second heading-five fs-five mfp-iframe text-uppercase d-center position-absolute">
                                                Beli
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 mt-6 mt-md-0">
                                        <h3 class="visible-slowly-bottom mb-4">PUBG Mobile</h3>
                                        <p>Top up UC PUBG Mobile harga paling murah, aman, cepat, dan terpercaya.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="single-box position-relative p-3 p-md-4">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <div class="position-relative d-center">
                                            <img src="assets/images/logo/ghensin.jpg" class="w-50" alt="sec-img">
                                            <a href="" data-bs-toggle="modal"
                                            data-bs-target="#loginMod"
                                                class="box-style btn-box-second heading-five fs-five mfp-iframe text-uppercase d-center position-absolute">
                                                Beli
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 mt-6 mt-md-0">
                                        <h3 class="visible-slowly-bottom mb-4">Genshin Impact</h3>
                                        <p>Top up crystal Genshin Impact harga paling murah, aman, cepat, dan terpercaya.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="single-box position-relative p-3 p-md-4">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <div class="position-relative d-center">
                                            <img src="assets/images/logo/freefire.jpg" class="w-50" alt="sec-img">
                                            <a href="" data-bs-toggle="modal"
                                            data-bs-target="#loginMod"
                                                class="box-style btn-box-second heading-five fs-five mfp-iframe text-uppercase d-center position-absolute">
                                                Beli
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 mt-6 mt-md-0">
                                        <h3 class="visible-slowly-bottom mb-4">Free Fire</h3>
                                        <p>Top up FF diamond Free Fire harga paling murah, aman, cepat, dan terpercaya. .</p>
                                    </div>
                                </div>
                            </div>
                            <a href="game.html" class="box-style btn-box d-center text-black">
                                Lihat Lebih Banyak
                            </a>
                        </div>
                    </div>
                    <div class="tabitem">
                        <div class="cus-mar">
                            <div class="single-box position-relative p-3 p-md-4">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <div class="position-relative d-center">
                                            <img src="assets/images/logo/yt.jpg" class="w-50" alt="sec-img">
                                            <a href="" data-bs-toggle="modal"
                                            data-bs-target="#loginMod"
                                            class="box-style btn-box-second heading-five fs-five mfp-iframe text-uppercase d-center position-absolute">
                                                Beli
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 mt-6 mt-md-0">
                                        <h3 class="visible-slowly-bottom mb-4">Youtube Premium</h3>
                                        <p>Beli Youtube Premium harga paling murah, aman, cepat, dan terpercaya hanya di XY Project. </p>
                                    </div>
                                </div>
                            </div>

                            <div class="single-box position-relative p-3 p-md-4">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <div class="position-relative d-center">
                                            <img src="assets/images/logo/disney.jpg" class="w-50" alt="sec-img">
                                            <a href="" data-bs-toggle="modal"
                                            data-bs-target="#loginMod"
                                            class="box-style btn-box-second heading-five fs-five mfp-iframe text-uppercase d-center position-absolute">
                                                Beli
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 mt-6 mt-md-0">
                                        <h3 class="visible-slowly-bottom mb-4">Disney+ Hotstar</h3>
                                        <p>Beli Disney+ Hotstar harga paling murah, aman, cepat, dan terpercaya hanya di XY Project. </p>
                                    </div>
                                </div>
                            </div>

                            <div class="single-box position-relative p-3 p-md-4">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <div class="position-relative d-center">
                                            <img src="assets/images/logo/netflix.jpg" class="w-50" alt="sec-img">
                                            <a href="{{ route('netflix') }}" data-bs-toggle="modal"
                                            data-bs-target="#loginMod"
                                            class="box-style btn-box-second heading-five fs-five mfp-iframe text-uppercase d-center position-absolute">
                                                Beli
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 mt-6 mt-md-0">
                                        <h3 class="visible-slowly-bottom mb-4">Netflix</h3>
                                        <p>Beli Netflix harga paling murah, aman, cepat, dan terpercaya hanya di XY Project. </p>
                                    </div>
                                </div>
                            </div>

                            <div class="single-box position-relative p-3 p-md-4">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <div class="position-relative d-center">
                                            <img src="assets/images/logo/vidio.jpg" class="w-50" alt="sec-img">
                                            <a href="" data-bs-toggle="modal"
                                            data-bs-target="#loginMod"
                                            class="box-style btn-box-second heading-five fs-five mfp-iframe text-uppercase d-center position-absolute">
                                                Beli
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 mt-6 mt-md-0">
                                        <h3 class="visible-slowly-bottom mb-4">Vidio Premium</h3>
                                        <p>Beli Vidio Premium harga paling murah, aman, cepat, dan terpercaya hanya di XY Project. </p>
                                    </div>
                                </div>
                            </div>
                            <a href="game.html" class="box-style btn-box d-center text-black">
                                Lihat Lebih Banyak
                            </a>

                        </div>
                    </div>
                    <div class="tabitem">
                        <div class="cus-mar">
                            <div class="single-box position-relative p-3 p-md-4">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <div class="position-relative d-center">
                                            <img src="assets/images/logo/whatsapp.jpg" class="w-100" alt="sec-img">
                                            <a href=""
                                                class="box-style btn-box-second heading-five fs-five mfp-iframe text-uppercase d-center position-absolute">
                                                Hubungi
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 mt-6 mt-md-0">
                                        <h3 class="visible-slowly-bottom mb-4"> Website Development</h3>
                                        <p>Jasa Pembuatan Website Bisa Langsung Konsultasi Melalui Whatsapp Admin atau Hubungi Lewat Community Server.</p>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Games section end -->


<!-- Call to Action start -->
<section class="call-to-action overflow-hidden" id="community">
    <div class="container pb-120 pt-120">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5">
                <div class="sec-img mt-0 mb-10 mb-sm-15 mb-lg-0 text-start d-center position-relative">
                    <img src="assets/images/call-to-action-circle.png" alt="Image">
                    <div class="video-bg position-absolute">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-text">
                    <h4 class="sub-title">Bergabung Kedalam <span> Komunitas</span></h4>
                    <p>Anda dapat berdiskusi dan mendapatkan info terbaru melalui server komunitas kami, Mendapatkan akses exlusif dan menjadi reseller.</p>
                </div>
                <div class="btn-area">
                    <div class="btn-area alt-bg mt-10 d-flex flex-wrap gap-6 align-items-center">
                        <a href="about-us.html" class="box-style btn-box btn-box-third d-center text-white">
                            Bergabung
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call to Action end -->
@endsection
