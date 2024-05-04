@extends('pages.partials.app')

@section('title', 'Produk')

@section('content')
    <!-- Banner-section start -->
    <section class="banner-section inner-banner position-relative about pricing-plan">
        <div class="shape-area">
            <img src="assets/images/abs-items/bubble.png" class="shape-1" alt="icon">
            <img src="assets/images/abs-items/ellipse-7.png" class="shape-2" alt="icon">
        </div>
        <div class="container position-relative">
            <div class="banner-content row justify-content-between">
            </div>
        </div>
    </section>
    <!-- Banner-section end -->

    <!-- Store start -->
    <section class="store overflow-hidden pt-120 pb-120">
        <div class="container singletab">
            <div class="row section-header justify-content-center">
                <div class="main-area p-5">
                    <form action="#">
                        <div class="input-area mt-6 p-4 d-flex align-items-center">
                            <input type="text" placeholder="Cari Produk">
                            <div class="btn-area">
                                <button class="box-style btn-box border-re py-1 p-2">
                                    Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 text-center">
                    <ul class="nav tablinks gap-4 flex-wrap justify-content-center tab-area">
                        <li class="nav-item">
                            <button class="nav-link d-center active">
                                all
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link d-center">
                                games
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link d-center">
                                Streaming
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link d-center">
                                Website
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content tabcontents">

                <div class="tabitem active">
                    <div class="row cus-mar">
                        @foreach($produk as $product)
                        <div class="col-xl-4 col-md-6">
                            <div class="single-box box-style box-first p-3 p-sm-6 d-flex flex-row gap-6">
                                <div class="icon-area position-relative d-center">
                                    <img src="assets/images/logo/{{ $product->images }}" alt="Image" class="mb-3" style="width: 100px; height: 100px;">
                                </div>
                                <div class="text-area text-start">
                                    <h5 class="mb-2">{{ $product->nama_produk }}</h5>
                                    <div class="btn-area mt-4 alt-bg">
                                        <a href="{{ route('produkOne', $product->nama_produk) }}" class="box-style btn-box d-center">
                                            <i class="material-symbols-outlined mat-icon fs-five">shopping_bag</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>            
                </div>
                <div class="tabitem">
                    <div class="row cus-mar">
                        @foreach($produk as $product)
                            @if($product->kategori_id == 2) 
                            <div class="col-xl-4 col-md-6">
                                <div class="single-box box-style box-first p-3 p-sm-6 d-flex flex-row gap-6">
                                    <div class="icon-area position-relative d-center">
                                        <img src="assets/images/logo/{{ $product->images }}" alt="Image" class="mb-3" style="width: 100px; height: 100px;">
                                    </div>
                                    <div class="text-area text-start">
                                        <h5 class="mb-2">{{ $product->nama_produk }}</h5>
                                        <div class="btn-area mt-4 alt-bg">
                                            <a href="{{ route('redirect', ['id' => $product->id]) }}" class="box-style btn-box d-center gap-2">
                                                <i class="material-symbols-outlined mat-icon fs-five">shopping_bag</i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="tabitem">
                    <div class="row cus-mar">
                        @foreach($produk as $product)
                            @if($product->kategori_id == 1)
                            <div class="col-xl-4 col-md-6">
                                <div class="single-box box-style box-first p-3 p-sm-6 d-flex flex-row gap-6">
                                    <div class="icon-area position-relative d-center">
                                        <img src="assets/images/logo/{{ $product->images }}" alt="Image" class="mb-3" style="width: 100px; height: 100px;">
                                    </div>
                                    <div class="text-area text-start">
                                        <h5 class="mb-2">{{ $product->nama_produk }}</h5>
                                        <div class="btn-area mt-4 alt-bg">
                                            <a href="{{ route('redirect', ['id' => $product->id]) }}" class="box-style btn-box d-center gap-2">
                                                <i class="material-symbols-outlined mat-icon fs-five">shopping_bag</i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @endforeach
                    </div>
                </div>

                <div class="tabitem">
                    <div class="cus-mar">
                        <div class="single-box position-relative p-3 p-md-4">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <div class="position-relative d-center">
                                        <img src="assets/images/logo/whatsapp.jpg" class="w-50" alt="sec-img">
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
    </section>
    <!-- Store end -->


        

@endsection
