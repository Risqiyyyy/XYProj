    <!-- start preloader -->
    <div class="preloader align-items-center justify-content-center">
        <span class="loader"></span>
    </div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <button class="scrollToTop d-none d-md-flex d-center" aria-label="scroll Bar Button">Back To Top</button>
    <!-- Scroll To Top End -->

    <!-- Start Custom Cursor -->
    <div class="mouse-follower">
        <span class="cursor-outline"></span>
        <span class="cursor-dot"></span>
    </div>
    <!-- End Custom Cursor -->

    <!-- header-section start -->
    <header class="header-section header-menu">
        <nav class="navbar w-100 flex-nowrap px-2 py-6 ps-2 ps-xl-10 ps-xxl-10 navbar-expand-xl">
            <div class="sidebar-close mobile-menu">
                <button class="d-center d-grid d-xl-none">
                    <i class="material-symbols-outlined mat-icon fs-four"> menu_open </i>
                    <span class="fs-six">MENU</span>
                </button>
            </div>
            <a href="{{ route('home') }}" class="navbar-brand ms-4 ms-xxl-15 d-flex align-items-center gap-2">
                <img src="assets/images/logo/xylogo.png" class="logo" alt="logo" width="50" height="50">
                <h4>Project</h4>
                {{-- <img src="assets/images/logo-text.png" class="logo-text d-xxl-block d-none" alt="logo-text"> --}}
            </a>
            <div class="collapse navbar-collapse d-flex gap-10 w-100 justify-content-end px-8 pe-2" id="navbar-content">
                <ul class="navbar-nav d-xl-flex d-none gap-3 py-4 py-lg-0 m-auto pe-20 align-self-center">
                    <li>
                        <a class="dropdown-nav" href="#home">Home</a>
                    </li>
                    <li>
                        <a class="dropdown-nav" href="#tentang">Tentang</a>
                    </li>
                    <li>
                        <a class="dropdown-nav" href="#produk">Produk</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#community">Community</a>
                    </li>
                </ul>
                <div class="right-area position-relative d-flex gap-3 gap-xxl-6 align-items-center">
                    <div class="single-item">
                        <div class="cmn-head">
                            <div class="icon-area d-center position-relative">
                                <i class="material-symbols-outlined mat-icon fs-five">search</i>
                            </div>
                        </div>
                        <div class="main-area p-5">
                            <h5 class="mb-2">Search</h5>
                            <form action="#">
                                <div class="input-area mt-6 p-4 d-flex align-items-center">
                                    <input type="text" placeholder="Enter Your Email">
                                    <div class="btn-area">
                                        <button class="box-style btn-box border-re py-1 p-2">
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="cmn-head">
                            <button type="button" class="icon-area d-center position-relative" data-bs-toggle="modal"
                                data-bs-target="#loginMod">
                                <i class="material-symbols-outlined mat-icon fs-five">person</i>
                            </button>
                        </div>
                    </div>
                  
                </div>
            </div>
        </nav>
    </header>
    <!-- header-section end -->
