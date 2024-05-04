@extends('pages.partials.app')

@section('title', 'Netflix')

@section('content')
    <!-- Banner-section start -->
    <section class="banner-section inner-banner position-relative about game">
        <div class="shape-area">
            <img src="{{ asset('assets/images/abs-items/bubble.png') }}" class="shape-1" alt="icon">
            <img src="{{ asset('assets/images/abs-items/ellipse-7.png') }}" class="shape-2" alt="icon">
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
            <div class="icon-area position-relative d-center">
                @foreach($produk as $p)
                <img src="{{ asset('assets/images/logo/' . $p->images) }}" alt="Image" class="mb-3" style="width: 100px; height: auto;">
                @endforeach
               
            </div>
           
            <div class="single-box box-style box-first p-3 p-sm-6 d-flex flex-row gap-6">
                <div class="text-area text-start">
                    @foreach($produk as $p)
                    <p>{{ $p->deskripsi }}</p>
                    @endforeach
                </div>
            </div>
            <button class="btn btn-success mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Cara Pembelian
            </button>
              <div class="collapse" id="collapseExample">
                <div class="card card-body"> 
                    @foreach($produk as $p)
                        <p class="text-dark">{!! nl2br(e($p->cara_beli)) !!}</p>
                    @endforeach
                </div>
              </div>          
            <div class="tabitem mb-3">
                <div class="row cus-mar">
                    @if($gamelist->isEmpty())
                        <p class="text-center mb-10">Produk Tidak tersedia.</p>
                    @else
                            @foreach($gamelist as $g)
                            <div class="col-xl-4 col-md-6">
                                <div class="single-box box-style box-first p-3 p-sm-6 d-flex flex-row gap-6">
                                    <div class="text-area text-start">
                                        <h5 class="mb-2">{{ $g->game }}</h5>
                                        <h6>{{ $g->name }}</h6>
                                        <h5>Rp{{ number_format($g->price, 0, ',', '.') }}</h5>
                                        <div class="btn-area mt-4 alt-bg">
                                            <a href="" class="box-style btn-box d-center gap-2">
                                                <i class="material-symbols-outlined mat-icon fs-five">add_shopping_cart</i>
                                            </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                    @endif
                </div>
            </div>
            <div class="single-box box-style box-first p-3 p-sm-6 d-flex flex-row gap-6">
                <div class="text-area text-start">
                  <p>Ketentuan Pengguna: </p>
                  @foreach($produk as $p)
                  <p>{!! nl2br(e($p->ketentuan)) !!}</p>
                    @endforeach
                </div>
            </div>     
        </div>
    </section>
    <!-- Store end -->
@endsection
