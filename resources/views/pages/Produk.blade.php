@extends('pages.partials.app')

@section('title', 'Page Title')

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
                                <div class="icon-area">
                                    <img src="assets/images/{{ $product->images }}" alt="Image">
                                </div>
                                <div class="text-area text-start">
                                    <h5 class="mb-2">{{ $product->nama_produk }}</h5>
                                    <div class="btn-area mt-4 alt-bg">
                                        <a href="cart.html" class="box-style btn-box d-center">
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
                                    <div class="icon-area">
                                        <img src="assets/images/{{ $product->images }}" alt="Image">
                                    </div>
                                    <div class="text-area text-start">
                                        <h5 class="mb-2">{{ $product->nama_produk }}</h5>
                                        <div class="btn-area mt-4 alt-bg">
                                            <a href="cart.html" class="box-style btn-box d-center gap-2">
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
                                    <div class="icon-area">
                                        <img src="assets/images/{{ $product->images }}" alt="Image">
                                    </div>
                                    <div class="text-area text-start">
                                        <h5 class="mb-2">{{ $product->nama_produk }}</h5>
                                        <div class="btn-area mt-4 alt-bg">
                                            <a href="cart.html" class="box-style btn-box d-center gap-2">
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
                        <div class="col-xl-4 col-md-6">
                            <div class="single-box box-style box-first p-3 p-sm-6 d-flex flex-row gap-6">
                                <div class="icon-area">
                                    <img src="assets/images/store-img-11.png" alt="Image">
                                </div>
                                <div class="text-area text-start">
                                    <h5 class="mb-2">Accessories</h5>
                                    <div class="btn-area mt-4 alt-bg">
                                        <a href="cart.html" class="box-style btn-box d-center gap-2">
                                            <i class="material-symbols-outlined mat-icon fs-five">shopping_bag</i>
                                        </a>
                                    </div>
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
