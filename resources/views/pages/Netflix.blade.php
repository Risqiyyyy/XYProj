@extends('pages.partials.app')

@section('title', 'Netflix')

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
            <div class="icon-area position-relative d-center">
                <img src="assets/images/logo/netflix.jpg" alt="Image" class="mb-3" style="width: 100px; height: auto;">
            </div>
           
            <div class="single-box box-style box-first p-3 p-sm-6 d-flex flex-row gap-6">
                <div class="text-area text-start">
                  <p>Beli Netflix Premium UHD harga paling murah, aman, cepat, dan terpercaya hanya di XYProject.</p>
                </div>
            </div>
            <button class="btn btn-success mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Cara Pembelian
            </button>
              <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <p class="text-dark"> 1) Pilih Nominal dan Tentukan Jumlah Pembelian <br>
                        2) Pilih Pembayaran <br>
                        3) Masukkan Kode Promo (jika ada) <br>
                        4) Isi Detail Kontak <br>
                        5) Klik Pesan Sekarang dan lakukan Pembayaran <br>
                        6) Akun Netflix akan muncul di halaman invoice dengan format “Email|Password|Profile|PIN” <br>
                        7) Selesai
                    </p>
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
                  <p>Ketentuan Pengguna: <br>
                    - Dilarang mengubah Email, Password, Payment dan Plan. <br>
                    - Login Only 1 Device (Jika mau lebih, silakan beli profile lagi) <br>
                    - Dilarang menggunakan VPN dan login logout berulang kali!! <br>
                    - Dilarang masuk dan mengubah profil orang lain <br>
                    - ⁠25-30 hari terhitung 1 bulan <br>
                    - Wajib mengirimkan screenshoot bukti login & merek device Max. 1x24 Jam ke CS (ga ngirim = gaada garansi) <br>
                    - ⁠Garansi hanya berlaku jika akun hold payment, email invalid dan incorrect password (BUKAN HOUSEHOLD) <br>
                    - Harap lapor jika ada kejanggalan pada akun yang dipakai</p>
                </div>
            </div>     
        </div>
    </section>
    <!-- Store end -->
@endsection
