<!DOCTYPE html><!-- App title -->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>XY Project</title>
    <link rel="icon" href="home/img/xylogo.png" type="image/png" sizes="16x16">

    @include('master.css')
</head>

<body>

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
            <a href="index.html" class="navbar-brand ms-4 ms-xxl-15 d-flex align-items-center gap-2">
                <img src="/images/fav.png" class="logo" alt="logo">
                <img src="/images/logo-text.png" class="logo-text d-xxl-block d-none" alt="logo-text">
            </a>
            <div class="collapse navbar-collapse d-flex gap-10 w-100 justify-content-end px-8 pe-2" id="navbar-content">
                <div class="contact-info ms-xl-0 ms-xxl-5 d-none d-sm-flex align-items-center gap-2">
                    <i class="material-symbols-outlined mat-icon"> smartphone </i>
                    <span>(302) 555-0107</span>
                </div>
                <ul class="navbar-nav d-xl-flex d-none gap-3 py-4 py-lg-0 m-auto pe-20 align-self-center">
                    <li class="dropdown show-dropdown">
                        <button type="button" aria-label="Navbar Dropdown Button"
                            class="dropdown-toggle dropdown-nav">Home</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.html">Home One</a></li>
                            <li><a class="dropdown-item" href="index-2.html">Home Two</a></li>
                            <li><a class="dropdown-item" href="index-3.html">Home Three</a></li>
                        </ul>
                    </li>
                    <li class="dropdown show-dropdown">
                        <button type="button" aria-label="Navbar Dropdown Button"
                            class="dropdown-toggle dropdown-nav">games</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="game.html">games</a></li>
                            <li><a class="dropdown-item" href="game-details.html">games Details</a></li>
                        </ul>
                    </li>
                    <li class="dropdown show-dropdown">
                        <button type="button" aria-label="Navbar Dropdown Button"
                            class="dropdown-toggle dropdown-nav">Services</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="our-services-1.html">services one</a></li>
                            <li><a class="dropdown-item" href="our-services-2.html">services two</a></li>
                            <li><a class="dropdown-item" href="our-services-3.html">services three</a></li>
                            <li><a class="dropdown-item" href="our-services-details.html">services Details</a></li>
                            <li><a class="dropdown-item" href="our-services-details-2.html">services Details Two</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="dropdown-nav" href="about-us.html">About</a>
                    </li>
                    <li class="dropdown show-dropdown">
                        <button type="button" aria-label="Navbar Dropdown Button"
                            class="dropdown-toggle dropdown-nav">Pages</button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="pricing-plan.html">pricing plan</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="store.html">Store</a>
                            </li>
                            <li class="sub-dropdown">
                                <button type="button" aria-label="Navbar Dropdown Button"
                                    class="dropdown-item dropdown-toggle">shop details</button>
                                <ul class="sub sub-menu dropend">

                                    <li><a class="dropdown-item" href="shop-details-1.html">shop details one</a></li>
                                    <li><a class="dropdown-item" href="shop-details-2.html">shop details two</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item" href="cart.html">Cart</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="checkout.html">checkout</a>
                            </li>
                            <li class="sub-dropdown">
                                <button type="button" aria-label="Navbar Dropdown Button"
                                    class="dropdown-item dropdown-toggle">career</button>
                                <ul class="sub sub-menu dropend">
                                    <li><a class="dropdown-item" href="career.html">career</a></li>
                                    <li><a class="dropdown-item" href="career-details.html">career details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item" href="privacy-policy.html">privacy policy</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="terms-conditions.html">terms conditions</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown show-dropdown">
                        <button type="button" aria-label="Navbar Dropdown Button"
                            class="dropdown-toggle dropdown-nav">blog</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="blog.html">blog</a></li>
                            <li><a class="dropdown-item" href="blog-single.html">blog Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="dropdown-item" href="contact.html">Contact</a>
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
                            <div class="icon-area d-center position-relative">
                                <i class="material-symbols-outlined mat-icon fs-five">favorite</i>
                            </div>
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
                    <div class="single-item cart-area">
                        <div class="cmn-head">
                            <button type="button" aria-label="Shopping Button"
                                class="icon-area d-center position-relative">
                                <i class="material-symbols-outlined mat-icon fs-five">shopping_bag</i>
                            </button>
                        </div>
                        <div class="nav-items-wrapper d-flex flex-column p-4 p-sm-7 justify-content-between">
                            <button class="position-absolute close-btn">
                                <i class="material-symbols-outlined mat-icon fs-three">close</i>
                            </button>
                            <div class="nav-items">
                                <h4 class="mb-7">Your shopper</h4>
                                <div class="single-box p-2">
                                    <div class="d-flex gap-2 justify-content-between align-items-start">
                                        <div class="content-box d-flex gap-4">
                                            <div class="icon-box d-inline-flex d-center">
                                                <img src="/images/product-img-1.png" alt="icon">
                                            </div>
                                            <div class="info-box">
                                                <a href="shop-details-1.html">
                                                    <h5>Accessories</h5>
                                                </a>
                                                <span>$150.00</span>
                                                <div class="quantity-area">
                                                    <div class="d-flex align-items-center">
                                                        <div class="qtySelector py-1 d-inline-flex align-items-center">
                                                            <i class="fas fa-minus d-center decreaseQty"></i>
                                                            <input type="text" class="qtyValue text-center m-0 xxltxt"
                                                                value="4">
                                                            <i class="fas fa-plus d-center increaseQty"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="end-area">
                                            <i class="material-symbols-outlined fs-six">delete</i>
                                        </button>
                                    </div>
                                </div>
                                <div class="single-box p-2">
                                    <div class="d-flex gap-2 justify-content-between align-items-start">
                                        <div class="content-box d-flex gap-4">
                                            <div class="icon-box d-inline-flex d-center">
                                                <img src="/images/product-img-1.png" alt="icon">
                                            </div>
                                            <div class="info-box">
                                                <a href="shop-details-1.html">
                                                    <h5>Accessories</h5>
                                                </a>
                                                <span>$150.00</span>
                                                <div class="quantity-area">
                                                    <div class="d-flex align-items-center">
                                                        <div class="qtySelector py-1 d-inline-flex align-items-center">
                                                            <i class="fas fa-minus d-center decreaseQty"></i>
                                                            <input type="text" class="qtyValue text-center m-0 xxltxt"
                                                                value="3">
                                                            <i class="fas fa-plus d-center increaseQty"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="end-area">
                                            <i class="material-symbols-outlined fs-six">delete</i>
                                        </button>
                                    </div>
                                </div>
                                <div class="single-box p-2">
                                    <div class="d-flex gap-2 justify-content-between align-items-start">
                                        <div class="content-box d-flex gap-4">
                                            <div class="icon-box d-inline-flex d-center">
                                                <img src="/images/product-img-1.png" alt="icon">
                                            </div>
                                            <div class="info-box">
                                                <a href="shop-details-1.html">
                                                    <h5>Accessories</h5>
                                                </a>
                                                <span>$150.00</span>
                                                <div class="quantity-area">
                                                    <div class="d-flex align-items-center">
                                                        <div class="qtySelector py-1 d-inline-flex align-items-center">
                                                            <i class="fas fa-minus d-center decreaseQty"></i>
                                                            <input type="text" class="qtyValue text-center m-0 xxltxt"
                                                                value="2">
                                                            <i class="fas fa-plus d-center increaseQty"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="end-area">
                                            <i class="material-symbols-outlined fs-six">delete</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-area">
                                <div class="d-flex justify-content-between">
                                    <span>Products: 17 items</span>
                                    <span>Sub Total: $677</span>
                                </div>
                                <div class="d-center alt-bg mt-6 gap-5">
                                    <a href="cart.html" class="box-style btn-box second-btn d-center">
                                        Visit Cart
                                    </a>
                                    <a href="checkout.html" class="box-style btn-box d-center active-btn">
                                        Check Out
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- header-section end -->

    <!-- Login Registration start -->
    <div class="log-reg cmn-popup">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="modal fade" id="loginMod">
                        <div class="modal-dialog pt-8 pt-sm-0 modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header border-0 p-0 justify-content-between position-absolute">
                                    <button type="button" class="btn-close p-0" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <i class="material-symbols-outlined fs-two"> close </i>
                                    </button>
                                </div>
                                <div class="tab-content">
                                    <ul class="nav flex-nowrap log-reg-btn justify-content-center">
                                        <li class="bottom-area" role="presentation">
                                            <button class="nav-link py-4 active" id="loginArea-tab" data-bs-toggle="tab"
                                                data-bs-target="#loginArea" type="button" role="tab"
                                                aria-controls="loginArea" aria-selected="true">
                                                Login
                                            </button>
                                        </li>
                                        <li class="bottom-area" role="presentation">
                                            <button class="nav-link py-4" id="regArea-tab" data-bs-toggle="tab"
                                                data-bs-target="#regArea" type="button" role="tab"
                                                aria-controls="regArea" aria-selected="false">
                                                Sign Up
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="tab-pane fade show active" id="loginArea" role="tabpanel"
                                        aria-labelledby="loginArea-tab">
                                        <div class="login-content">
                                            <div class="modal-body p-0">
                                                <form action="#" class="p-4 p-sm-8">
                                                    <p>Sign up for faster checkout, special offers, and customer
                                                        support!</p>
                                                    <div class="form-inside mt-6 p-3 p-sm-6">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="single-input text-start">
                                                                    <label for="loginemail">Email*</label>
                                                                    <input type="text" id="loginemail"
                                                                        placeholder="Enter your email"
                                                                        autocomplete="off">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="single-input text-start">
                                                                    <label for="loginpassword">Password*</label>
                                                                    <div class="pass-box d-center position-relative">
                                                                        <input type="text" id="loginpassword"
                                                                            placeholder="Enter your Password"
                                                                            autocomplete="off">
                                                                        <i
                                                                            class="material-symbols-outlined show-hide-pass position-absolute end-0 pe-4">
                                                                            visibility </i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="checkbox-item d-grid gap-4 mt-4 mt-sm-6">
                                                                    <label
                                                                        class="single-radio checkbox position-relative d-flex align-items-center px-5 ps-8">
                                                                        <span class="text-start d-flex gap-1">
                                                                            I agree to the <span>Terms of
                                                                                Services</span>
                                                                        </span>
                                                                        <input type="checkbox" name="agree">
                                                                        <span class="checkmark start-0"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="btn-area mt-4 mt-sm-8">
                                                                    <button class="box-style btn-box">
                                                                        Login
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="regArea" role="tabpanel"
                                        aria-labelledby="regArea-tab">
                                        <div class="reg-content regMod">
                                            <div class="modal-body p-0">
                                                <form action="#" class="p-4 p-sm-8">
                                                    <p>Sign up for faster checkout, special offers, and customer
                                                        support!</p>
                                                    <div class="form-inside mt-6 p-3 p-sm-6">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="single-input text-start">
                                                                    <label for="fname">First Name*</label>
                                                                    <input type="text" id="fname"
                                                                        placeholder="Enter Your First Name"
                                                                        autocomplete="off">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="single-input text-start">
                                                                    <label for="lname">Last Name*</label>
                                                                    <input type="text" id="lname"
                                                                        placeholder="Enter Your Last Name"
                                                                        autocomplete="off">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="single-input text-start">
                                                                    <label for="email">Email*</label>
                                                                    <input type="text" id="email"
                                                                        placeholder="Enter your email"
                                                                        autocomplete="off">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="single-input text-start">
                                                                    <label for="password">Password*</label>
                                                                    <div class="pass-box d-center position-relative">
                                                                        <input type="text" id="password"
                                                                            placeholder="Enter your Password"
                                                                            autocomplete="off">
                                                                        <i
                                                                            class="material-symbols-outlined show-hide-pass position-absolute end-0 pe-4">
                                                                            visibility </i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="single-input text-start">
                                                                    <label for="cpassword">Confirm Password*</label>
                                                                    <div class="pass-box d-center position-relative">
                                                                        <input type="text" id="cpassword"
                                                                            placeholder="Enter your Password"
                                                                            autocomplete="off">
                                                                        <i
                                                                            class="material-symbols-outlined show-hide-pass position-absolute end-0 pe-4">
                                                                            visibility </i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="checkbox-item d-grid gap-4 mt-4 mt-sm-6">
                                                                    <label
                                                                        class="single-radio checkbox position-relative d-flex align-items-center px-5 ps-8">
                                                                        <span class="text-start d-flex gap-1">
                                                                            I agree to the <span>Terms of
                                                                                Services</span>
                                                                        </span>
                                                                        <input type="checkbox" name="agree">
                                                                        <span class="checkmark start-0"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="btn-area mt-4 mt-sm-8">
                                                                    <button class="box-style btn-box">
                                                                        Sign Up
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
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
    </div>
    <!-- Login Registration end -->

    <!-- Sidebar Menu start -->
    <div class="sidebar-wrapper">
        <div class="position-relative">
            <div class="side-menubar py-6 d-flex flex-column justify-content-between align-items-center">
                <div class="sidebar-close d-none d-xl-block">
                    <button class="d-center d-grid">
                        <i class="material-symbols-outlined mat-icon fs-three"> menu_open </i>
                        <span>MENU</span>
                    </button>
                </div>
                <ul class="d-grid gap-4 social-area">
                    <li>
                        <a href="https://www.facebook.com/" aria-label="Facebook" class="d-center">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/" aria-label="Instagram" class="d-center">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/" aria-label="Linkedin" class="d-center">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/" aria-label="Twitter" class="d-center">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                </ul>
                <div class="bottom-area">
                    <select>
                        <option value="1">ENG</option>
                        <option value="2">BNG</option>
                        <option value="3">HIN</option>
                    </select>
                </div>
            </div>
            <div class="sidebar-content d-center flex-columnn">
                <div class="header-section d-block">
                    <div class="navbar bg-transparent">
                        <ul class="navbar-nav d-xl-flex gap-2 gap-md-5 py-4 py-lg-0 px-4 px-lg-0 align-self-center">
                            <li class="dropdown show-dropdown">
                                <button type="button" aria-label="Navbar Dropdown Button"
                                    class="dropdown-toggle dropdown-nav fs-three heading">Home</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item fs-three heading" href="index.html">Home One</a></li>
                                    <li><a class="dropdown-item fs-three heading" href="index-2.html">Home Two</a></li>
                                    <li><a class="dropdown-item fs-three heading" href="index-3.html">Home Three</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown show-dropdown">
                                <button type="button" aria-label="Navbar Dropdown Button"
                                    class="dropdown-toggle dropdown-nav fs-three heading">games</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item fs-three heading" href="game.html">games</a></li>
                                    <li><a class="dropdown-item fs-three heading" href="game-details.html">games
                                            Details</a></li>
                                </ul>
                            </li>
                            <li class="dropdown show-dropdown">
                                <button type="button" aria-label="Navbar Dropdown Button"
                                    class="dropdown-toggle dropdown-nav fs-three heading">Services</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item fs-three heading" href="our-services-1.html">services
                                            one</a></li>
                                    <li><a class="dropdown-item fs-three heading" href="our-services-2.html">services
                                            two</a></li>
                                    <li><a class="dropdown-item fs-three heading" href="our-services-3.html">services
                                            three</a></li>
                                    <li><a class="dropdown-item fs-three heading"
                                            href="our-services-details.html">services Details</a></li>
                                    <li><a class="dropdown-item fs-three heading"
                                            href="our-services-details-2.html">services Details two</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-nav fs-three heading" href="about-us.html">About</a>
                            </li>
                            <li class="dropdown show-dropdown">
                                <button type="button" aria-label="Navbar Dropdown Button"
                                    class="dropdown-toggle dropdown-nav fs-three heading">Pages</button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item fs-three heading" href="pricing-plan.html">pricing
                                            plan</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item fs-three heading" href="store.html">Store</a>
                                    </li>
                                    <li class="sub-dropdown">
                                        <button type="button" aria-label="Navbar Dropdown Button"
                                            class="dropdown-item fs-three heading dropdown-toggle">shop details</button>
                                        <ul class="sub sub-menu dropend">

                                            <li><a class="dropdown-item fs-three heading"
                                                    href="shop-details-1.html">shop details one</a></li>
                                            <li><a class="dropdown-item fs-three heading"
                                                    href="shop-details-2.html">shop details two</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item fs-three heading" href="cart.html">Cart</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item fs-three heading" href="checkout.html">checkout</a>
                                    </li>
                                    <li class="sub-dropdown">
                                        <button type="button" aria-label="Navbar Dropdown Button"
                                            class="dropdown-item fs-three heading dropdown-toggle">career</button>
                                        <ul class="sub sub-menu dropend">
                                            <li><a class="dropdown-item fs-three heading" href="career.html">career</a>
                                            </li>
                                            <li><a class="dropdown-item fs-three heading"
                                                    href="career-details.html">career details</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item fs-three heading" href="privacy-policy.html">privacy
                                            policy</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item fs-three heading" href="terms-conditions.html">terms
                                            conditions</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown show-dropdown">
                                <button type="button" aria-label="Navbar Dropdown Button"
                                    class="dropdown-toggle dropdown-nav fs-three heading">blog</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item fs-three heading" href="blog.html">blog</a></li>
                                    <li><a class="dropdown-item fs-three heading" href="blog-single.html">blog
                                            Details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item fs-three heading" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer-items w-100 bottom-0">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6">
                            <div class="single-item p-5 py-xxl-10 px-xxl-8">
                                <h4 class="mb-6">Office</h4>
                                <div class="d-flex gap-3 align-items-center">
                                    <div class="icon-box d-center">
                                        <i class="material-symbols-outlined mat-icon fs-fure"> location_on </i>
                                    </div>
                                    <div class="right-item w-75">
                                        <h5>London</h5>
                                        <span>Al. Brucknera Aleksandra 63, Wrocław 51-410</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="single-item p-5 py-xxl-10 px-xxl-8">
                                <h4 class="mb-6">Email address</h4>
                                <div class="d-flex gap-3 align-items-center">
                                    <div class="icon-box d-center">
                                        <i class="material-symbols-outlined mat-icon fs-fure"> mail </i>
                                    </div>
                                    <div class="right-item d-grid">
                                        <span><a href="https://pixner.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="81c4f9e0ecf1ede4c1e6ece0e8edafe2eeec">[email&#160;protected]</a></span>
                                        <span><a href="https://pixner.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="43063b222e332f2603242e222a2f6d202c2e">[email&#160;protected]</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="single-item p-5 py-xxl-10 px-xxl-8">
                                <h4 class="mb-6">Phone Number</h4>
                                <div class="d-flex gap-3 align-items-center">
                                    <div class="icon-box d-center">
                                        <i class="material-symbols-outlined mat-icon fs-fure"> call </i>
                                    </div>
                                    <div class="right-item d-grid">
                                        <span>(302) 555-0107</span>
                                        <span>(302) 555-0107</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="single-item p-5 py-xxl-10 px-xxl-8">
                                <h4 class="mb-6">Working Hours</h4>
                                <div class="d-flex gap-3 align-items-center">
                                    <div class="icon-box d-center">
                                        <i class="material-symbols-outlined mat-icon fs-fure"> schedule </i>
                                    </div>
                                    <div class="right-item w-50">
                                        <span>Mon-Fri: 09: 00-18: 00 Sat-Sun: Weekend</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sidebar Menu end -->

    <!-- Banner-section start -->
    <section class="banner-section index-one overflow-hidden">
        <div class="shape-area">
            <img src="/images/abs-items/planet.png" class="shape-1" alt="icon">
            <img src="/images/abs-items/console-1.png" class="shape-2" alt="icon">
            <img src="/images/abs-items/console-2.png" class="shape-3" alt="icon">
        </div>
        <div class="ellipse-area ellipse-one position-absolute">
            <img src="/images/abs-items/ellipse-6.png" class="ellipse-1" alt="icon">
            <img src="/images/abs-items/ellipse-4.png" class="ellipse-2" alt="icon">
            <img src="/images/abs-items/ellipse-5.png" class="ellipse-3" alt="icon">
        </div>
        <div class="ellipse-area ellipse-two position-absolute">
            <img src="/images/abs-items/ellipse-6.png" class="ellipse-1" alt="icon">
            <img src="/images/abs-items/ellipse-3.png" class="ellipse-3" alt="icon">
            <img src="/images/abs-items/ellipse-4.png" class="ellipse-4" alt="icon">
            <img src="/images/abs-items/ellipse-1.png" class="ellipse-2" alt="icon">
            <img src="/images/abs-items/ellipse-5.png" class="ellipse-5" alt="icon">
        </div>
        <div class="ellipse-area ellipse-three position-absolute">
            <img src="/images/abs-items/ellipse-6.png" class="ellipse-1" alt="icon">
        </div>
        <div class="ellipse-area ellipse-four position-absolute">
            <img src="/images/abs-items/ellipse-6.png" class="ellipse-1" alt="icon">
            <img src="/images/abs-items/ellipse-3.png" class="ellipse-2" alt="icon">
            <img src="/images/abs-items/ellipse-2.png" class="ellipse-3" alt="icon">
        </div>
        <div class="overlay overflow-hidden">
            <div class="banner-content position-relative">
                <div class="container">
                    <div class="row justify-content-between justify-content-center align-items-center">
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-content">
                                <div class="mb-8">
                                    <h3 class="visible-slowly-bottom sub-title"><span>Building Gaming Worlds</span></h3>
                                    <span class="display-one">We Craft Games
                                        <br>
                                        <span class="typed d-inline-block">Entertainment</span>
                                    </span>
                                    <p class="fs-four">Developing games that are imaginative, fun and bringing
                                        colors to the gaming world</p>
                                </div>
                                <div class="btn-area alt-bg">
                                    <a href="game.html" class="box-style btn-box d-center">
                                        Explore Our Games
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-7 col-sm-9 mt-10 mt-lg-0 col-10">
                            <div class="game-carousel pb-20">
                                <div class="slide-area">
                                    <div class="top-area d-flex justify-content-end gap-4 mb-5 align-items-end">
                                        <img src="/images/icon/top-bottom.png" alt="Image">
                                        <h4 class="mb-1">Featured Games</h4>
                                    </div>
                                    <div class="single-slider p-3 p-sm-5">
                                        <div class="thumb-wrapper">
                                            <div class="thumb">
                                                <img src="/images/banner-slider-img-1.png" alt="Image">
                                            </div>
                                            <div class="app-download-title pt-5 pb-3 text-center">
                                                <h3>Crazy Wild</h3>
                                            </div>
                                            <div class="app-download d-flex gap-5 align-items-center">
                                                <a href="https://www.apple.com/app-store/"><img
                                                        src="/images/appstore.png" alt="Image"></a>
                                                <a href="https://play.google.com/"><img
                                                        src="/images/googleplay.png" alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-area">
                                    <div class="top-area d-flex justify-content-end gap-4 mb-5 align-items-end">
                                        <img src="/images/icon/top-bottom.png" alt="Image">
                                        <h4 class="mb-1">Featured Games</h4>
                                    </div>
                                    <div class="single-slider p-3 p-sm-5">
                                        <div class="thumb-wrapper">
                                            <div class="thumb">
                                                <img src="/images/banner-slider-img-1.png" alt="Image">
                                            </div>
                                            <div class="app-download-title pt-5 pb-3 text-center">
                                                <h3>Crazy Wild</h3>
                                            </div>
                                            <div class="app-download d-flex gap-5 align-items-center">
                                                <a href="https://www.apple.com/app-store/"><img
                                                        src="/images/appstore.png" alt="Image"></a>
                                                <a href="https://play.google.com/"><img
                                                        src="/images/googleplay.png" alt="Image"></a>
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

    <!-- About block section start -->
    <section class="about-block pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xxl-6 col-lg-6 order-1 order-lg-0">
                    <div class="sec-img mw-100 position-relative d-center">
                        <img src="/images/about-block-bg.png" alt="sec-img">
                        <div class="experience p-2 p-lg-4 position-absolute ">
                            <div class="experience-wrap p-3 px-lg-5 py-lg-8 d-inline-flex d-center gap-3">
                                <div class="counters d-center">
                                    <span class="odometer display-four" data-odometer-final="20">0</span>
                                    <span class="display-four visible-slowly-bottom symbol">+</span>
                                </div>
                                <span class="w-25 d-inline-bloc">Years Of Experience</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-lg-6">
                    <div class="section-text">
                        <h4 class="sub-title">Welcome to <span>Gamestorm</span> Game Studios</h4>
                        <span class="fs-two heading mb-6">Bringing people together through <span>the power of
                                play</span></span>
                        <p>As Game Gamestorm, we continue to open doors to new worlds every day and we are
                            working excitedly for creating new games and unique ideas!</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="counter-item mb-8 pb-4">
                                <div class="counters mb-3 d-flex align-items-center">
                                    <span class="odometer fs-three heading" data-odometer-final="500">0</span>
                                    <span class="fs-three heading">M</span>
                                    <span class="fs-three heading symbol">+</span>
                                </div>
                                <span class="name-area fs-seven">
                                    Downloads, or 6% of the world’s population.
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter-item mb-8 pb-4">
                                <div class="counters mb-3 d-flex align-items-center">
                                    <span class="odometer fs-three heading" data-odometer-final="2">0</span>
                                    <span class="fs-three heading">M</span>
                                    <span class="fs-three heading symbol">+</span>
                                </div>
                                <span class="name-area fs-seven">
                                    Our games have over 20 million unique daily users.
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter-item mb-8 pb-4">
                                <div class="counters mb-3 d-flex align-items-center">
                                    <span class="odometer fs-three heading" data-odometer-final="52">0</span>
                                    <span class="fs-three heading symbol">+</span>
                                </div>
                                <span class="name-area fs-seven">
                                    Experts collaborating to blow your mind in one place.
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter-item mb-8 pb-4">
                                <div class="counters mb-3 d-flex align-items-center">
                                    <span class="odometer fs-three heading" data-odometer-final="4">0</span>
                                    <span class="fs-three heading">k</span>
                                    <span class="fs-three heading symbol">+</span>
                                </div>
                                <span class="name-area fs-seven">
                                    The Gamestorm Studio is launching with 4K+ Games.
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="btn-area alt-bg mt-2">
                        <a href="game.html" class="box-style btn-box d-center">
                            Explore Our Games
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About block section end -->

    <!-- Our Games section start -->
    <section class="our-games overflow-hidden pt-120 pb-120">
        <div class="container singletab">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-text text-center">
                        <h4 class="sub-title">Crafting Unforgettable <span>Gaming Experiences</span></h4>
                        <span class="fs-two heading mb-6">Our Games are <span>Vibrant</span> Worlds With
                            <span>Charming</span> Characters</span>
                        <p>Our projects feature unique mechanics, fine-tuned game play, and eye-catching visual
                            style.Over 100 million people play our games every month</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <ul class="nav tablinks flex-wrap d-center mb-6 mb-sm-10 d-inline-flex gap-4 p-3 tab-area">
                        <li class="nav-item">
                            <button class="nav-link d-center box-style btn-box p-0 active">
                                <span class="icon-area">
                                    <i class="ri-macbook-line fs-two"></i>
                                </span>
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link d-center box-style btn-box p-0">
                                <span class="icon-area">
                                    <i class="ri-apple-line fs-two"></i>
                                </span>
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link d-center box-style btn-box p-0">
                                <span class="icon-area">
                                    <i class="ri-google-play-line fs-two"></i>
                                </span>
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link d-center box-style btn-box p-0">
                                <span class="icon-area">
                                    <i class="ri-amazon-line fs-two"></i>
                                </span>
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link d-center box-style btn-box p-0">
                                <span class="icon-area">
                                    <i class="ri-windows-line fs-two"></i>
                                </span>
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link d-center box-style btn-box p-0">
                                <span class="icon-area">
                                    <i class="ri-steam-line fs-two"></i>
                                </span>
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link d-center box-style btn-box p-0">
                                <span class="icon-area">
                                    <i class="ri-app-store-line fs-two"></i>
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
                                    <span
                                        class="feature-tag d-flex d-md-none d-xl-flex d-center position-absolute">Feature</span>
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="position-relative d-center">
                                                <img src="/images/game-image-1.png" class="w-100" alt="sec-img">
                                                <a href="https://www.youtube.com/watch?v=IaT4DneyKLc"
                                                    class="box-style btn-box-second heading-five fs-five mfp-iframe popupvideo text-uppercase d-center position-absolute">
                                                    Play
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mt-6 mt-md-0">
                                            <a href="game-details.html">
                                                <h3 class="visible-slowly-bottom mb-4">Upgrade Your Weapon</h3>
                                            </a>
                                            <ul
                                                class="d-flex flex-wrap mb-6 fs-seven align-items-center gap-5 gap-md-10">
                                                <li>Horror Adventure</li>
                                                <li>Mobile</li>
                                                <li>Action RPG</li>
                                                <li>PC</li>
                                            </ul>
                                            <p>Mauris euismod nibh mollis sodales eleifend. Donec tempor erat
                                                risus, nec congue magna accumsan commodo pretium.. <a
                                                    href="game-details.html">Read More</a></p>
                                            <div
                                                class="review-box mt-5 mt-md-8 mb-6 mb-md-10 w-100 p-2 p-sm-4 d-center gap-3 justify-content-between">
                                                <div class="single-area">
                                                    <img src="/images/review-img.png" alt="image">
                                                </div>
                                                <div class="single-area">
                                                    <div class="d-flex gap-1 align-items-center mb-1">
                                                        <i class="material-symbols-outlined mat-icon">star</i>
                                                        <h4 class="fs-four">4.5</h4>
                                                    </div>
                                                    <p class="fs-seven">5.2M Reviews</p>
                                                </div>
                                                <div class="single-area">
                                                    <h4 class="fs-four mb-1">500M+</h4>
                                                    <p class="fs-seven">Downloads</p>
                                                </div>
                                            </div>
                                            <div class="app-download d-flex gap-4 align-items-center">
                                                <a href="https://www.apple.com/app-store/" class="w-100"><img
                                                        src="/images/appstore.png" class="w-100" alt="Image"></a>
                                                <a href="https://play.google.com/" class="w-100"><img
                                                        src="/images/googleplay.png" class="w-100"
                                                        alt="Image"></a>
                                                <a href="https://www.amazon.com/" class="w-100"><img
                                                        src="/images/amazonstore.png" class="w-100"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-box position-relative p-3 p-md-4">
                                    <span
                                        class="feature-tag d-flex d-md-none d-xl-flex d-center position-absolute">Feature</span>
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="position-relative d-center">
                                                <img src="/images/game-image-3.png" class="w-100" alt="sec-img">
                                                <a href="https://www.youtube.com/watch?v=IaT4DneyKLc"
                                                    class="box-style btn-box-second heading-five fs-five mfp-iframe popupvideo text-uppercase d-center position-absolute">
                                                    Play
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mt-6 mt-md-0">
                                            <a href="game-details.html">
                                                <h3 class="visible-slowly-bottom mb-4">Shadow Quest</h3>
                                            </a>
                                            <ul
                                                class="d-flex flex-wrap mb-6 fs-seven align-items-center gap-5 gap-md-10">
                                                <li>Horror Adventure</li>
                                                <li>Mobile</li>
                                                <li>Action RPG</li>
                                                <li>PC</li>
                                            </ul>
                                            <p>Mauris euismod nibh mollis sodales eleifend. Donec tempor erat
                                                risus, nec congue magna accumsan commodo pretium.. <a
                                                    href="game-details.html">Read More</a></p>
                                            <div
                                                class="review-box mt-5 mt-md-8 mb-6 mb-md-10 w-100 p-2 p-sm-4 d-center gap-3 justify-content-between">
                                                <div class="single-area">
                                                    <img src="/images/review-img.png" alt="image">
                                                </div>
                                                <div class="single-area">
                                                    <div class="d-flex gap-1 align-items-center mb-1">
                                                        <i class="material-symbols-outlined mat-icon">star</i>
                                                        <h4 class="fs-four">4.5</h4>
                                                    </div>
                                                    <p class="fs-seven">5.2M Reviews</p>
                                                </div>
                                                <div class="single-area">
                                                    <h4 class="fs-four mb-1">500M+</h4>
                                                    <p class="fs-seven">Downloads</p>
                                                </div>
                                            </div>
                                            <div class="app-download d-flex gap-4 align-items-center">
                                                <a href="https://www.apple.com/app-store/" class="w-100"><img
                                                        src="/images/appstore.png" class="w-100" alt="Image"></a>
                                                <a href="https://play.google.com/" class="w-100"><img
                                                        src="/images/googleplay.png" class="w-100"
                                                        alt="Image"></a>
                                                <a href="https://www.amazon.com/" class="w-100"><img
                                                        src="/images/amazonstore.png" class="w-100"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-box position-relative p-3 p-md-4">
                                    <span
                                        class="feature-tag d-flex d-md-none d-xl-flex d-center position-absolute">Feature</span>
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="position-relative d-center">
                                                <img src="/images/game-image-4.png" class="w-100" alt="sec-img">
                                                <a href="https://www.youtube.com/watch?v=IaT4DneyKLc"
                                                    class="box-style btn-box-second heading-five fs-five mfp-iframe popupvideo text-uppercase d-center position-absolute">
                                                    Play
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mt-6 mt-md-0">
                                            <a href="game-details.html">
                                                <h3 class="visible-slowly-bottom mb-4">Galactic Escape</h3>
                                            </a>
                                            <ul
                                                class="d-flex flex-wrap mb-6 fs-seven align-items-center gap-5 gap-md-10">
                                                <li>Horror Adventure</li>
                                                <li>Mobile</li>
                                                <li>Action RPG</li>
                                                <li>PC</li>
                                            </ul>
                                            <p>Mauris euismod nibh mollis sodales eleifend. Donec tempor erat
                                                risus, nec congue magna accumsan commodo pretium.. <a
                                                    href="game-details.html">Read More</a></p>
                                            <div
                                                class="review-box mt-5 mt-md-8 mb-6 mb-md-10 w-100 p-2 p-sm-4 d-center gap-3 justify-content-between">
                                                <div class="single-area">
                                                    <img src="/images/review-img.png" alt="image">
                                                </div>
                                                <div class="single-area">
                                                    <div class="d-flex gap-1 align-items-center mb-1">
                                                        <i class="material-symbols-outlined mat-icon">star</i>
                                                        <h4 class="fs-four">4.5</h4>
                                                    </div>
                                                    <p class="fs-seven">5.2M Reviews</p>
                                                </div>
                                                <div class="single-area">
                                                    <h4 class="fs-four mb-1">500M+</h4>
                                                    <p class="fs-seven">Downloads</p>
                                                </div>
                                            </div>
                                            <div class="app-download d-flex gap-4 align-items-center">
                                                <a href="https://www.apple.com/app-store/" class="w-100"><img
                                                        src="/images/appstore.png" class="w-100" alt="Image"></a>
                                                <a href="https://play.google.com/" class="w-100"><img
                                                        src="/images/googleplay.png" class="w-100"
                                                        alt="Image"></a>
                                                <a href="https://www.amazon.com/" class="w-100"><img
                                                        src="/images/amazonstore.png" class="w-100"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-box position-relative p-3 p-md-4">
                                    <span
                                        class="feature-tag d-flex d-md-none d-xl-flex d-center position-absolute">Feature</span>
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="position-relative d-center">
                                                <img src="/images/game-image-5.png" class="w-100" alt="sec-img">
                                                <a href="https://www.youtube.com/watch?v=IaT4DneyKLc"
                                                    class="box-style btn-box-second heading-five fs-five mfp-iframe popupvideo text-uppercase d-center position-absolute">
                                                    Play
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mt-6 mt-md-0">
                                            <a href="game-details.html">
                                                <h3 class="visible-slowly-bottom mb-4">Cyber Crusade</h3>
                                            </a>
                                            <ul
                                                class="d-flex flex-wrap mb-6 fs-seven align-items-center gap-5 gap-md-10">
                                                <li>Horror Adventure</li>
                                                <li>Mobile</li>
                                                <li>Action RPG</li>
                                                <li>PC</li>
                                            </ul>
                                            <p>Mauris euismod nibh mollis sodales eleifend. Donec tempor erat
                                                risus, nec congue magna accumsan commodo pretium.. <a
                                                    href="game-details.html">Read More</a></p>
                                            <div
                                                class="review-box mt-5 mt-md-8 mb-6 mb-md-10 w-100 p-2 p-sm-4 d-center gap-3 justify-content-between">
                                                <div class="single-area">
                                                    <img src="/images/review-img.png" alt="image">
                                                </div>
                                                <div class="single-area">
                                                    <div class="d-flex gap-1 align-items-center mb-1">
                                                        <i class="material-symbols-outlined mat-icon">star</i>
                                                        <h4 class="fs-four">4.5</h4>
                                                    </div>
                                                    <p class="fs-seven">5.2M Reviews</p>
                                                </div>
                                                <div class="single-area">
                                                    <h4 class="fs-four mb-1">500M+</h4>
                                                    <p class="fs-seven">Downloads</p>
                                                </div>
                                            </div>
                                            <div class="app-download d-flex gap-4 align-items-center">
                                                <a href="https://www.apple.com/app-store/" class="w-100"><img
                                                        src="/images/appstore.png" class="w-100" alt="Image"></a>
                                                <a href="https://play.google.com/" class="w-100"><img
                                                        src="/images/googleplay.png" class="w-100"
                                                        alt="Image"></a>
                                                <a href="https://www.amazon.com/" class="w-100"><img
                                                        src="/images/amazonstore.png" class="w-100"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabitem">
                            <div class="cus-mar">
                                <div class="single-box position-relative p-3 p-md-4">
                                    <span
                                        class="feature-tag d-flex d-md-none d-xl-flex d-center position-absolute">Feature</span>
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="position-relative d-center">
                                                <img src="/images/game-image-5.png" class="w-100" alt="sec-img">
                                                <a href="https://www.youtube.com/watch?v=IaT4DneyKLc"
                                                    class="box-style btn-box-second heading-five fs-five mfp-iframe popupvideo text-uppercase d-center position-absolute">
                                                    Play
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mt-6 mt-md-0">
                                            <a href="game-details.html">
                                                <h3 class="visible-slowly-bottom mb-4">Cyber Crusade</h3>
                                            </a>
                                            <ul
                                                class="d-flex flex-wrap mb-6 fs-seven align-items-center gap-5 gap-md-10">
                                                <li>Horror Adventure</li>
                                                <li>Mobile</li>
                                                <li>Action RPG</li>
                                                <li>PC</li>
                                            </ul>
                                            <p>Mauris euismod nibh mollis sodales eleifend. Donec tempor erat
                                                risus, nec congue magna accumsan commodo pretium.. <a
                                                    href="game-details.html">Read More</a></p>
                                            <div
                                                class="review-box mt-5 mt-md-8 mb-6 mb-md-10 w-100 p-2 p-sm-4 d-center gap-3 justify-content-between">
                                                <div class="single-area">
                                                    <img src="/images/review-img.png" alt="image">
                                                </div>
                                                <div class="single-area">
                                                    <div class="d-flex gap-1 align-items-center mb-1">
                                                        <i class="material-symbols-outlined mat-icon">star</i>
                                                        <h4 class="fs-four">4.5</h4>
                                                    </div>
                                                    <p class="fs-seven">5.2M Reviews</p>
                                                </div>
                                                <div class="single-area">
                                                    <h4 class="fs-four mb-1">500M+</h4>
                                                    <p class="fs-seven">Downloads</p>
                                                </div>
                                            </div>
                                            <div class="app-download d-flex gap-4 align-items-center">
                                                <a href="https://www.apple.com/app-store/" class="w-100"><img
                                                        src="/images/appstore.png" class="w-100" alt="Image"></a>
                                                <a href="https://play.google.com/" class="w-100"><img
                                                        src="/images/googleplay.png" class="w-100"
                                                        alt="Image"></a>
                                                <a href="https://www.amazon.com/" class="w-100"><img
                                                        src="/images/amazonstore.png" class="w-100"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-box position-relative p-3 p-md-4">
                                    <span
                                        class="feature-tag d-flex d-md-none d-xl-flex d-center position-absolute">Feature</span>
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="position-relative d-center">
                                                <img src="/images/game-image-1.png" class="w-100" alt="sec-img">
                                                <a href="https://www.youtube.com/watch?v=IaT4DneyKLc"
                                                    class="box-style btn-box-second heading-five fs-five mfp-iframe popupvideo text-uppercase d-center position-absolute">
                                                    Play
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mt-6 mt-md-0">
                                            <a href="game-details.html">
                                                <h3 class="visible-slowly-bottom mb-4">Upgrade Your Weapon</h3>
                                            </a>
                                            <ul
                                                class="d-flex flex-wrap mb-6 fs-seven align-items-center gap-5 gap-md-10">
                                                <li>Horror Adventure</li>
                                                <li>Mobile</li>
                                                <li>Action RPG</li>
                                                <li>PC</li>
                                            </ul>
                                            <p>Mauris euismod nibh mollis sodales eleifend. Donec tempor erat
                                                risus, nec congue magna accumsan commodo pretium.. <a
                                                    href="game-details.html">Read More</a></p>
                                            <div
                                                class="review-box mt-5 mt-md-8 mb-6 mb-md-10 w-100 p-2 p-sm-4 d-center gap-3 justify-content-between">
                                                <div class="single-area">
                                                    <img src="/images/review-img.png" alt="image">
                                                </div>
                                                <div class="single-area">
                                                    <div class="d-flex gap-1 align-items-center mb-1">
                                                        <i class="material-symbols-outlined mat-icon">star</i>
                                                        <h4 class="fs-four">4.5</h4>
                                                    </div>
                                                    <p class="fs-seven">5.2M Reviews</p>
                                                </div>
                                                <div class="single-area">
                                                    <h4 class="fs-four mb-1">500M+</h4>
                                                    <p class="fs-seven">Downloads</p>
                                                </div>
                                            </div>
                                            <div class="app-download d-flex gap-4 align-items-center">
                                                <a href="https://www.apple.com/app-store/" class="w-100"><img
                                                        src="/images/appstore.png" class="w-100" alt="Image"></a>
                                                <a href="https://play.google.com/" class="w-100"><img
                                                        src="/images/googleplay.png" class="w-100"
                                                        alt="Image"></a>
                                                <a href="https://www.amazon.com/" class="w-100"><img
                                                        src="/images/amazonstore.png" class="w-100"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-box position-relative p-3 p-md-4">
                                    <span
                                        class="feature-tag d-flex d-md-none d-xl-flex d-center position-absolute">Feature</span>
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="position-relative d-center">
                                                <img src="/images/game-image-3.png" class="w-100" alt="sec-img">
                                                <a href="https://www.youtube.com/watch?v=IaT4DneyKLc"
                                                    class="box-style btn-box-second heading-five fs-five mfp-iframe popupvideo text-uppercase d-center position-absolute">
                                                    Play
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mt-6 mt-md-0">
                                            <a href="game-details.html">
                                                <h3 class="visible-slowly-bottom mb-4">Shadow Quest</h3>
                                            </a>
                                            <ul
                                                class="d-flex flex-wrap mb-6 fs-seven align-items-center gap-5 gap-md-10">
                                                <li>Horror Adventure</li>
                                                <li>Mobile</li>
                                                <li>Action RPG</li>
                                                <li>PC</li>
                                            </ul>
                                            <p>Mauris euismod nibh mollis sodales eleifend. Donec tempor erat
                                                risus, nec congue magna accumsan commodo pretium.. <a
                                                    href="game-details.html">Read More</a></p>
                                            <div
                                                class="review-box mt-5 mt-md-8 mb-6 mb-md-10 w-100 p-2 p-sm-4 d-center gap-3 justify-content-between">
                                                <div class="single-area">
                                                    <img src="/images/review-img.png" alt="image">
                                                </div>
                                                <div class="single-area">
                                                    <div class="d-flex gap-1 align-items-center mb-1">
                                                        <i class="material-symbols-outlined mat-icon">star</i>
                                                        <h4 class="fs-four">4.5</h4>
                                                    </div>
                                                    <p class="fs-seven">5.2M Reviews</p>
                                                </div>
                                                <div class="single-area">
                                                    <h4 class="fs-four mb-1">500M+</h4>
                                                    <p class="fs-seven">Downloads</p>
                                                </div>
                                            </div>
                                            <div class="app-download d-flex gap-4 align-items-center">
                                                <a href="https://www.apple.com/app-store/" class="w-100"><img
                                                        src="/images/appstore.png" class="w-100" alt="Image"></a>
                                                <a href="https://play.google.com/" class="w-100"><img
                                                        src="/images/googleplay.png" class="w-100"
                                                        alt="Image"></a>
                                                <a href="https://www.amazon.com/" class="w-100"><img
                                                        src="/images/amazonstore.png" class="w-100"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-box position-relative p-3 p-md-4">
                                    <span
                                        class="feature-tag d-flex d-md-none d-xl-flex d-center position-absolute">Feature</span>
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="position-relative d-center">
                                                <img src="/images/game-image-4.png" class="w-100" alt="sec-img">
                                                <a href="https://www.youtube.com/watch?v=IaT4DneyKLc"
                                                    class="box-style btn-box-second heading-five fs-five mfp-iframe popupvideo text-uppercase d-center position-absolute">
                                                    Play
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mt-6 mt-md-0">
                                            <a href="game-details.html">
                                                <h3 class="visible-slowly-bottom mb-4">Galactic Escape</h3>
                                            </a>
                                            <ul
                                                class="d-flex flex-wrap mb-6 fs-seven align-items-center gap-5 gap-md-10">
                                                <li>Horror Adventure</li>
                                                <li>Mobile</li>
                                                <li>Action RPG</li>
                                                <li>PC</li>
                                            </ul>
                                            <p>Mauris euismod nibh mollis sodales eleifend. Donec tempor erat
                                                risus, nec congue magna accumsan commodo pretium.. <a
                                                    href="game-details.html">Read More</a></p>
                                            <div
                                                class="review-box mt-5 mt-md-8 mb-6 mb-md-10 w-100 p-2 p-sm-4 d-center gap-3 justify-content-between">
                                                <div class="single-area">
                                                    <img src="/images/review-img.png" alt="image">
                                                </div>
                                                <div class="single-area">
                                                    <div class="d-flex gap-1 align-items-center mb-1">
                                                        <i class="material-symbols-outlined mat-icon">star</i>
                                                        <h4 class="fs-four">4.5</h4>
                                                    </div>
                                                    <p class="fs-seven">5.2M Reviews</p>
                                                </div>
                                                <div class="single-area">
                                                    <h4 class="fs-four mb-1">500M+</h4>
                                                    <p class="fs-seven">Downloads</p>
                                                </div>
                                            </div>
                                            <div class="app-download d-flex gap-4 align-items-center">
                                                <a href="https://www.apple.com/app-store/" class="w-100"><img
                                                        src="/images/appstore.png" class="w-100" alt="Image"></a>
                                                <a href="https://play.google.com/" class="w-100"><img
                                                        src="/images/googleplay.png" class="w-100"
                                                        alt="Image"></a>
                                                <a href="https://www.amazon.com/" class="w-100"><img
                                                        src="/images/amazonstore.png" class="w-100"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabitem">
                            <div class="cus-mar">
                                <div class="single-box position-relative p-3 p-md-4">
                                    <span
                                        class="feature-tag d-flex d-md-none d-xl-flex d-center position-absolute">Feature</span>
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="position-relative d-center">
                                                <img src="/images/game-image-4.png" class="w-100" alt="sec-img">
                                                <a href="https://www.youtube.com/watch?v=IaT4DneyKLc"
                                                    class="box-style btn-box-second heading-five fs-five mfp-iframe popupvideo text-uppercase d-center position-absolute">
                                                    Play
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mt-6 mt-md-0">
                                            <a href="game-details.html">
                                                <h3 class="visible-slowly-bottom mb-4">Galactic Escape</h3>
                                            </a>
                                            <ul
                                                class="d-flex flex-wrap mb-6 fs-seven align-items-center gap-5 gap-md-10">
                                                <li>Horror Adventure</li>
                                                <li>Mobile</li>
                                                <li>Action RPG</li>
                                                <li>PC</li>
                                            </ul>
                                            <p>Mauris euismod nibh mollis sodales eleifend. Donec tempor erat
                                                risus, nec congue magna accumsan commodo pretium.. <a
                                                    href="game-details.html">Read More</a></p>
                                            <div
                                                class="review-box mt-5 mt-md-8 mb-6 mb-md-10 w-100 p-2 p-sm-4 d-center gap-3 justify-content-between">
                                                <div class="single-area">
                                                    <img src="/images/review-img.png" alt="image">
                                                </div>
                                                <div class="single-area">
                                                    <div class="d-flex gap-1 align-items-center mb-1">
                                                        <i class="material-symbols-outlined mat-icon">star</i>
                                                        <h4 class="fs-four">4.5</h4>
                                                    </div>
                                                    <p class="fs-seven">5.2M Reviews</p>
                                                </div>
                                                <div class="single-area">
                                                    <h4 class="fs-four mb-1">500M+</h4>
                                                    <p class="fs-seven">Downloads</p>
                                                </div>
                                            </div>
                                            <div class="app-download d-flex gap-4 align-items-center">
                                                <a href="https://www.apple.com/app-store/" class="w-100"><img
                                                        src="/images/appstore.png" class="w-100" alt="Image"></a>
                                                <a href="https://play.google.com/" class="w-100"><img
                                                        src="/images/googleplay.png" class="w-100"
                                                        alt="Image"></a>
                                                <a href="https://www.amazon.com/" class="w-100"><img
                                                        src="/images/amazonstore.png" class="w-100"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-box position-relative p-3 p-md-4">
                                    <span
                                        class="feature-tag d-flex d-md-none d-xl-flex d-center position-absolute">Feature</span>
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="position-relative d-center">
                                                <img src="/images/game-image-5.png" class="w-100" alt="sec-img">
                                                <a href="https://www.youtube.com/watch?v=IaT4DneyKLc"
                                                    class="box-style btn-box-second heading-five fs-five mfp-iframe popupvideo text-uppercase d-center position-absolute">
                                                    Play
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mt-6 mt-md-0">
                                            <a href="game-details.html">
                                                <h3 class="visible-slowly-bottom mb-4">Cyber Crusade</h3>
                                            </a>
                                            <ul
                                                class="d-flex flex-wrap mb-6 fs-seven align-items-center gap-5 gap-md-10">
                                                <li>Horror Adventure</li>
                                                <li>Mobile</li>
                                                <li>Action RPG</li>
                                                <li>PC</li>
                                            </ul>
                                            <p>Mauris euismod nibh mollis sodales eleifend. Donec tempor erat
                                                risus, nec congue magna accumsan commodo pretium.. <a
                                                    href="game-details.html">Read More</a></p>
                                            <div
                                                class="review-box mt-5 mt-md-8 mb-6 mb-md-10 w-100 p-2 p-sm-4 d-center gap-3 justify-content-between">
                                                <div class="single-area">
                                                    <img src="/images/review-img.png" alt="image">
                                                </div>
                                                <div class="single-area">
                                                    <div class="d-flex gap-1 align-items-center mb-1">
                                                        <i class="material-symbols-outlined mat-icon">star</i>
                                                        <h4 class="fs-four">4.5</h4>
                                                    </div>
                                                    <p class="fs-seven">5.2M Reviews</p>
                                                </div>
                                                <div class="single-area">
                                                    <h4 class="fs-four mb-1">500M+</h4>
                                                    <p class="fs-seven">Downloads</p>
                                                </div>
                                            </div>
                                            <div class="app-download d-flex gap-4 align-items-center">
                                                <a href="https://www.apple.com/app-store/" class="w-100"><img
                                                        src="/images/appstore.png" class="w-100" alt="Image"></a>
                                                <a href="https://play.google.com/" class="w-100"><img
                                                        src="/images/googleplay.png" class="w-100"
                                                        alt="Image"></a>
                                                <a href="https://www.amazon.com/" class="w-100"><img
                                                        src="/images/amazonstore.png" class="w-100"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-box position-relative p-3 p-md-4">
                                    <span
                                        class="feature-tag d-flex d-md-none d-xl-flex d-center position-absolute">Feature</span>
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="position-relative d-center">
                                                <img src="/images/game-image-1.png" class="w-100" alt="sec-img">
                                                <a href="https://www.youtube.com/watch?v=IaT4DneyKLc"
                                                    class="box-style btn-box-second heading-five fs-five mfp-iframe popupvideo text-uppercase d-center position-absolute">
                                                    Play
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mt-6 mt-md-0">
                                            <a href="game-details.html">
                                                <h3 class="visible-slowly-bottom mb-4">Upgrade Your Weapon</h3>
                                            </a>
                                            <ul
                                                class="d-flex flex-wrap mb-6 fs-seven align-items-center gap-5 gap-md-10">
                                                <li>Horror Adventure</li>
                                                <li>Mobile</li>
                                                <li>Action RPG</li>
                                                <li>PC</li>
                                            </ul>
                                            <p>Mauris euismod nibh mollis sodales eleifend. Donec tempor erat
                                                risus, nec congue magna accumsan commodo pretium.. <a
                                                    href="game-details.html">Read More</a></p>
                                            <div
                                                class="review-box mt-5 mt-md-8 mb-6 mb-md-10 w-100 p-2 p-sm-4 d-center gap-3 justify-content-between">
                                                <div class="single-area">
                                                    <img src="/images/review-img.png" alt="image">
                                                </div>
                                                <div class="single-area">
                                                    <div class="d-flex gap-1 align-items-center mb-1">
                                                        <i class="material-symbols-outlined mat-icon">star</i>
                                                        <h4 class="fs-four">4.5</h4>
                                                    </div>
                                                    <p class="fs-seven">5.2M Reviews</p>
                                                </div>
                                                <div class="single-area">
                                                    <h4 class="fs-four mb-1">500M+</h4>
                                                    <p class="fs-seven">Downloads</p>
                                                </div>
                                            </div>
                                            <div class="app-download d-flex gap-4 align-items-center">
                                                <a href="https://www.apple.com/app-store/" class="w-100"><img
                                                        src="/images/appstore.png" class="w-100" alt="Image"></a>
                                                <a href="https://play.google.com/" class="w-100"><img
                                                        src="/images/googleplay.png" class="w-100"
                                                        alt="Image"></a>
                                                <a href="https://www.amazon.com/" class="w-100"><img
                                                        src="/images/amazonstore.png" class="w-100"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-box position-relative p-3 p-md-4">
                                    <span
                                        class="feature-tag d-flex d-md-none d-xl-flex d-center position-absolute">Feature</span>
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="position-relative d-center">
                                                <img src="/images/game-image-3.png" class="w-100" alt="sec-img">
                                                <a href="https://www.youtube.com/watch?v=IaT4DneyKLc"
                                                    class="box-style btn-box-second heading-five fs-five mfp-iframe popupvideo text-uppercase d-center position-absolute">
                                                    Play
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mt-6 mt-md-0">
                                            <a href="game-details.html">
                                                <h3 class="visible-slowly-bottom mb-4">Shadow Quest</h3>
                                            </a>
                                            <ul
                                                class="d-flex flex-wrap mb-6 fs-seven align-items-center gap-5 gap-md-10">
                                                <li>Horror Adventure</li>
                                                <li>Mobile</li>
                                                <li>Action RPG</li>
                                                <li>PC</li>
                                            </ul>
                                            <p>Mauris euismod nibh mollis sodales eleifend. Donec tempor erat
                                                risus, nec congue magna accumsan commodo pretium.. <a
                                                    href="game-details.html">Read More</a></p>
                                            <div
                                                class="review-box mt-5 mt-md-8 mb-6 mb-md-10 w-100 p-2 p-sm-4 d-center gap-3 justify-content-between">
                                                <div class="single-area">
                                                    <img src="/images/review-img.png" alt="image">
                                                </div>
                                                <div class="single-area">
                                                    <div class="d-flex gap-1 align-items-center mb-1">
                                                        <i class="material-symbols-outlined mat-icon">star</i>
                                                        <h4 class="fs-four">4.5</h4>
                                                    </div>
                                                    <p class="fs-seven">5.2M Reviews</p>
                                                </div>
                                                <div class="single-area">
                                                    <h4 class="fs-four mb-1">500M+</h4>
                                                    <p class="fs-seven">Downloads</p>
                                                </div>
                                            </div>
                                            <div class="app-download d-flex gap-4 align-items-center">
                                                <a href="https://www.apple.com/app-store/" class="w-100"><img
                                                        src="/images/appstore.png" class="w-100" alt="Image"></a>
                                                <a href="https://play.google.com/" class="w-100"><img
                                                        src="/images/googleplay.png" class="w-100"
                                                        alt="Image"></a>
                                                <a href="https://www.amazon.com/" class="w-100"><img
                                                        src="/images/amazonstore.png" class="w-100"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabitem">
                            <div class="cus-mar">
                                <div class="single-box position-relative p-3 p-md-4">
                                    <span
                                        class="feature-tag d-flex d-md-none d-xl-flex d-center position-absolute">Feature</span>
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="position-relative d-center">
                                                <img src="/images/game-image-3.png" class="w-100" alt="sec-img">
                                                <a href="https://www.youtube.com/watch?v=IaT4DneyKLc"
                                                    class="box-style btn-box-second heading-five fs-five mfp-iframe popupvideo text-uppercase d-center position-absolute">
                                                    Play
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mt-6 mt-md-0">
                                            <a href="game-details.html">
                                                <h3 class="visible-slowly-bottom mb-4">Shadow Quest</h3>
                                            </a>
                                            <ul
                                                class="d-flex flex-wrap mb-6 fs-seven align-items-center gap-5 gap-md-10">
                                                <li>Horror Adventure</li>
                                                <li>Mobile</li>
                                                <li>Action RPG</li>
                                                <li>PC</li>
                                            </ul>
                                            <p>Mauris euismod nibh mollis sodales eleifend. Donec tempor erat
                                                risus, nec congue magna accumsan commodo pretium.. <a
                                                    href="game-details.html">Read More</a></p>
                                            <div
                                                class="review-box mt-5 mt-md-8 mb-6 mb-md-10 w-100 p-2 p-sm-4 d-center gap-3 justify-content-between">
                                                <div class="single-area">
                                                    <img src="/images/review-img.png" alt="image">
                                                </div>
                                                <div class="single-area">
                                                    <div class="d-flex gap-1 align-items-center mb-1">
                                                        <i class="material-symbols-outlined mat-icon">star</i>
                                                        <h4 class="fs-four">4.5</h4>
                                                    </div>
                                                    <p class="fs-seven">5.2M Reviews</p>
                                                </div>
                                                <div class="single-area">
                                                    <h4 class="fs-four mb-1">500M+</h4>
                                                    <p class="fs-seven">Downloads</p>
                                                </div>
                                            </div>
                                            <div class="app-download d-flex gap-4 align-items-center">
                                                <a href="https://www.apple.com/app-store/" class="w-100"><img
                                                        src="/images/appstore.png" class="w-100" alt="Image"></a>
                                                <a href="https://play.google.com/" class="w-100"><img
                                                        src="/images/googleplay.png" class="w-100"
                                                        alt="Image"></a>
                                                <a href="https://www.amazon.com/" class="w-100"><img
                                                        src="/images/amazonstore.png" class="w-100"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-box position-relative p-3 p-md-4">
                                    <span
                                        class="feature-tag d-flex d-md-none d-xl-flex d-center position-absolute">Feature</span>
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="position-relative d-center">
                                                <img src="/images/game-image-4.png" class="w-100" alt="sec-img">
                                                <a href="https://www.youtube.com/watch?v=IaT4DneyKLc"
                                                    class="box-style btn-box-second heading-five fs-five mfp-iframe popupvideo text-uppercase d-center position-absolute">
                                                    Play
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mt-6 mt-md-0">
                                            <a href="game-details.html">
                                                <h3 class="visible-slowly-bottom mb-4">Galactic Escape</h3>
                                            </a>
                                            <ul
                                                class="d-flex flex-wrap mb-6 fs-seven align-items-center gap-5 gap-md-10">
                                                <li>Horror Adventure</li>
                                                <li>Mobile</li>
                                                <li>Action RPG</li>
                                                <li>PC</li>
                                            </ul>
                                            <p>Mauris euismod nibh mollis sodales eleifend. Donec tempor erat
                                                risus, nec congue magna accumsan commodo pretium.. <a
                                                    href="game-details.html">Read More</a></p>
                                            <div
                                                class="review-box mt-5 mt-md-8 mb-6 mb-md-10 w-100 p-2 p-sm-4 d-center gap-3 justify-content-between">
                                                <div class="single-area">
                                                    <img src="/images/review-img.png" alt="image">
                                                </div>
                                                <div class="single-area">
                                                    <div class="d-flex gap-1 align-items-center mb-1">
                                                        <i class="material-symbols-outlined mat-icon">star</i>
                                                        <h4 class="fs-four">4.5</h4>
                                                    </div>
                                                    <p class="fs-seven">5.2M Reviews</p>
                                                </div>
                                                <div class="single-area">
                                                    <h4 class="fs-four mb-1">500M+</h4>
                                                    <p class="fs-seven">Downloads</p>
                                                </div>
                                            </div>
                                            <div class="app-download d-flex gap-4 align-items-center">
                                                <a href="https://www.apple.com/app-store/" class="w-100"><img
                                                        src="/images/appstore.png" class="w-100" alt="Image"></a>
                                                <a href="https://play.google.com/" class="w-100"><img
                                                        src="/images/googleplay.png" class="w-100"
                                                        alt="Image"></a>
                                                <a href="https://www.amazon.com/" class="w-100"><img
                                                        src="/images/amazonstore.png" class="w-100"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-box position-relative p-3 p-md-4">
                                    <span
                                        class="feature-tag d-flex d-md-none d-xl-flex d-center position-absolute">Feature</span>
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="position-relative d-center">
                                                <img src="/images/game-image-5.png" class="w-100" alt="sec-img">
                                                <a href="https://www.youtube.com/watch?v=IaT4DneyKLc"
                                                    class="box-style btn-box-second heading-five fs-five mfp-iframe popupvideo text-uppercase d-center position-absolute">
                                                    Play
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mt-6 mt-md-0">
                                            <a href="game-details.html">
                                                <h3 class="visible-slowly-bottom mb-4">Cyber Crusade</h3>
                                            </a>
                                            <ul
                                                class="d-flex flex-wrap mb-6 fs-seven align-items-center gap-5 gap-md-10">
                                                <li>Horror Adventure</li>
                                                <li>Mobile</li>
                                                <li>Action RPG</li>
                                                <li>PC</li>
                                            </ul>
                                            <p>Mauris euismod nibh mollis sodales eleifend. Donec tempor erat
                                                risus, nec congue magna accumsan commodo pretium.. <a
                                                    href="game-details.html">Read More</a></p>
                                            <div
                                                class="review-box mt-5 mt-md-8 mb-6 mb-md-10 w-100 p-2 p-sm-4 d-center gap-3 justify-content-between">
                                                <div class="single-area">
                                                    <img src="/images/review-img.png" alt="image">
                                                </div>
                                                <div class="single-area">
                                                    <div class="d-flex gap-1 align-items-center mb-1">
                                                        <i class="material-symbols-outlined mat-icon">star</i>
                                                        <h4 class="fs-four">4.5</h4>
                                                    </div>
                                                    <p class="fs-seven">5.2M Reviews</p>
                                                </div>
                                                <div class="single-area">
                                                    <h4 class="fs-four mb-1">500M+</h4>
                                                    <p class="fs-seven">Downloads</p>
                                                </div>
                                            </div>
                                            <div class="app-download d-flex gap-4 align-items-center">
                                                <a href="https://www.apple.com/app-store/" class="w-100"><img
                                                        src="/images/appstore.png" class="w-100" alt="Image"></a>
                                                <a href="https://play.google.com/" class="w-100"><img
                                                        src="/images/googleplay.png" class="w-100"
                                                        alt="Image"></a>
                                                <a href="https://www.amazon.com/" class="w-100"><img
                                                        src="/images/amazonstore.png" class="w-100"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-box position-relative p-3 p-md-4">
                                    <span
                                        class="feature-tag d-flex d-md-none d-xl-flex d-center position-absolute">Feature</span>
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="position-relative d-center">
                                                <img src="/images/game-image-1.png" class="w-100" alt="sec-img">
                                                <a href="https://www.youtube.com/watch?v=IaT4DneyKLc"
                                                    class="box-style btn-box-second heading-five fs-five mfp-iframe popupvideo text-uppercase d-center position-absolute">
                                                    Play
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mt-6 mt-md-0">
                                            <a href="game-details.html">
                                                <h3 class="visible-slowly-bottom mb-4">Upgrade Your Weapon</h3>
                                            </a>
                                            <ul
                                                class="d-flex flex-wrap mb-6 fs-seven align-items-center gap-5 gap-md-10">
                                                <li>Horror Adventure</li>
                                                <li>Mobile</li>
                                                <li>Action RPG</li>
                                                <li>PC</li>
                                            </ul>
                                            <p>Mauris euismod nibh mollis sodales eleifend. Donec tempor erat
                                                risus, nec congue magna accumsan commodo pretium.. <a
                                                    href="game-details.html">Read More</a></p>
                                            <div
                                                class="review-box mt-5 mt-md-8 mb-6 mb-md-10 w-100 p-2 p-sm-4 d-center gap-3 justify-content-between">
                                                <div class="single-area">
                                                    <img src="/images/review-img.png" alt="image">
                                                </div>
                                                <div class="single-area">
                                                    <div class="d-flex gap-1 align-items-center mb-1">
                                                        <i class="material-symbols-outlined mat-icon">star</i>
                                                        <h4 class="fs-four">4.5</h4>
                                                    </div>
                                                    <p class="fs-seven">5.2M Reviews</p>
                                                </div>
                                                <div class="single-area">
                                                    <h4 class="fs-four mb-1">500M+</h4>
                                                    <p class="fs-seven">Downloads</p>
                                                </div>
                                            </div>
                                            <div class="app-download d-flex gap-4 align-items-center">
                                                <a href="https://www.apple.com/app-store/" class="w-100"><img
                                                        src="/images/appstore.png" class="w-100" alt="Image"></a>
                                                <a href="https://play.google.com/" class="w-100"><img
                                                        src="/images/googleplay.png" class="w-100"
                                                        alt="Image"></a>
                                                <a href="https://www.amazon.com/" class="w-100"><img
                                                        src="/images/amazonstore.png" class="w-100"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabitem">
                            <div class="cus-mar">
                                <div class="single-box position-relative p-3 p-md-4">
                                    <span
                                        class="feature-tag d-flex d-md-none d-xl-flex d-center position-absolute">Feature</span>
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="position-relative d-center">
                                                <img src="/images/game-image-1.png" class="w-100" alt="sec-img">
                                                <a href="https://www.youtube.com/watch?v=IaT4DneyKLc"
                                                    class="box-style btn-box-second heading-five fs-five mfp-iframe popupvideo text-uppercase d-center position-absolute">
                                                    Play
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mt-6 mt-md-0">
                                            <a href="game-details.html">
                                                <h3 class="visible-slowly-bottom mb-4">Upgrade Your Weapon</h3>
                                            </a>
                                            <ul
                                                class="d-flex flex-wrap mb-6 fs-seven align-items-center gap-5 gap-md-10">
                                                <li>Horror Adventure</li>
                                                <li>Mobile</li>
                                                <li>Action RPG</li>
                                                <li>PC</li>
                                            </ul>
                                            <p>Mauris euismod nibh mollis sodales eleifend. Donec tempor erat
                                                risus, nec congue magna accumsan commodo pretium.. <a
                                                    href="game-details.html">Read More</a></p>
                                            <div
                                                class="review-box mt-5 mt-md-8 mb-6 mb-md-10 w-100 p-2 p-sm-4 d-center gap-3 justify-content-between">
                                                <div class="single-area">
                                                    <img src="/images/review-img.png" alt="image">
                                                </div>
                                                <div class="single-area">
                                                    <div class="d-flex gap-1 align-items-center mb-1">
                                                        <i class="material-symbols-outlined mat-icon">star</i>
                                                        <h4 class="fs-four">4.5</h4>
                                                    </div>
                                                    <p class="fs-seven">5.2M Reviews</p>
                                                </div>
                                                <div class="single-area">
                                                    <h4 class="fs-four mb-1">500M+</h4>
                                                    <p class="fs-seven">Downloads</p>
                                                </div>
                                            </div>
                                            <div class="app-download d-flex gap-4 align-items-center">
                                                <a href="https://www.apple.com/app-store/" class="w-100"><img
                                                        src="/images/appstore.png" class="w-100" alt="Image"></a>
                                                <a href="https://play.google.com/" class="w-100"><img
                                                        src="/images/googleplay.png" class="w-100"
                                                        alt="Image"></a>
                                                <a href="https://www.amazon.com/" class="w-100"><img
                                                        src="/images/amazonstore.png" class="w-100"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-box position-relative p-3 p-md-4">
                                    <span
                                        class="feature-tag d-flex d-md-none d-xl-flex d-center position-absolute">Feature</span>
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="position-relative d-center">
                                                <img src="/images/game-image-3.png" class="w-100" alt="sec-img">
                                                <a href="https://www.youtube.com/watch?v=IaT4DneyKLc"
                                                    class="box-style btn-box-second heading-five fs-five mfp-iframe popupvideo text-uppercase d-center position-absolute">
                                                    Play
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mt-6 mt-md-0">
                                            <a href="game-details.html">
                                                <h3 class="visible-slowly-bottom mb-4">Shadow Quest</h3>
                                            </a>
                                            <ul
                                                class="d-flex flex-wrap mb-6 fs-seven align-items-center gap-5 gap-md-10">
                                                <li>Horror Adventure</li>
                                                <li>Mobile</li>
                                                <li>Action RPG</li>
                                                <li>PC</li>
                                            </ul>
                                            <p>Mauris euismod nibh mollis sodales eleifend. Donec tempor erat
                                                risus, nec congue magna accumsan commodo pretium.. <a
                                                    href="game-details.html">Read More</a></p>
                                            <div
                                                class="review-box mt-5 mt-md-8 mb-6 mb-md-10 w-100 p-2 p-sm-4 d-center gap-3 justify-content-between">
                                                <div class="single-area">
                                                    <img src="/images/review-img.png" alt="image">
                                                </div>
                                                <div class="single-area">
                                                    <div class="d-flex gap-1 align-items-center mb-1">
                                                        <i class="material-symbols-outlined mat-icon">star</i>
                                                        <h4 class="fs-four">4.5</h4>
                                                    </div>
                                                    <p class="fs-seven">5.2M Reviews</p>
                                                </div>
                                                <div class="single-area">
                                                    <h4 class="fs-four mb-1">500M+</h4>
                                                    <p class="fs-seven">Downloads</p>
                                                </div>
                                            </div>
                                            <div class="app-download d-flex gap-4 align-items-center">
                                                <a href="https://www.apple.com/app-store/" class="w-100"><img
                                                        src="/images/appstore.png" class="w-100" alt="Image"></a>
                                                <a href="https://play.google.com/" class="w-100"><img
                                                        src="/images/googleplay.png" class="w-100"
                                                        alt="Image"></a>
                                                <a href="https://www.amazon.com/" class="w-100"><img
                                                        src="/images/amazonstore.png" class="w-100"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-box position-relative p-3 p-md-4">
                                    <span
                                        class="feature-tag d-flex d-md-none d-xl-flex d-center position-absolute">Feature</span>
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="position-relative d-center">
                                                <img src="/images/game-image-4.png" class="w-100" alt="sec-img">
                                                <a href="https://www.youtube.com/watch?v=IaT4DneyKLc"
                                                    class="box-style btn-box-second heading-five fs-five mfp-iframe popupvideo text-uppercase d-center position-absolute">
                                                    Play
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mt-6 mt-md-0">
                                            <a href="game-details.html">
                                                <h3 class="visible-slowly-bottom mb-4">Galactic Escape</h3>
                                            </a>
                                            <ul
                                                class="d-flex flex-wrap mb-6 fs-seven align-items-center gap-5 gap-md-10">
                                                <li>Horror Adventure</li>
                                                <li>Mobile</li>
                                                <li>Action RPG</li>
                                                <li>PC</li>
                                            </ul>
                                            <p>Mauris euismod nibh mollis sodales eleifend. Donec tempor erat
                                                risus, nec congue magna accumsan commodo pretium.. <a
                                                    href="game-details.html">Read More</a></p>
                                            <div
                                                class="review-box mt-5 mt-md-8 mb-6 mb-md-10 w-100 p-2 p-sm-4 d-center gap-3 justify-content-between">
                                                <div class="single-area">
                                                    <img src="/images/review-img.png" alt="image">
                                                </div>
                                                <div class="single-area">
                                                    <div class="d-flex gap-1 align-items-center mb-1">
                                                        <i class="material-symbols-outlined mat-icon">star</i>
                                                        <h4 class="fs-four">4.5</h4>
                                                    </div>
                                                    <p class="fs-seven">5.2M Reviews</p>
                                                </div>
                                                <div class="single-area">
                                                    <h4 class="fs-four mb-1">500M+</h4>
                                                    <p class="fs-seven">Downloads</p>
                                                </div>
                                            </div>
                                            <div class="app-download d-flex gap-4 align-items-center">
                                                <a href="https://www.apple.com/app-store/" class="w-100"><img
                                                        src="/images/appstore.png" class="w-100" alt="Image"></a>
                                                <a href="https://play.google.com/" class="w-100"><img
                                                        src="/images/googleplay.png" class="w-100"
                                                        alt="Image"></a>
                                                <a href="https://www.amazon.com/" class="w-100"><img
                                                        src="/images/amazonstore.png" class="w-100"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-box position-relative p-3 p-md-4">
                                    <span
                                        class="feature-tag d-flex d-md-none d-xl-flex d-center position-absolute">Feature</span>
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="position-relative d-center">
                                                <img src="/images/game-image-5.png" class="w-100" alt="sec-img">
                                                <a href="https://www.youtube.com/watch?v=IaT4DneyKLc"
                                                    class="box-style btn-box-second heading-five fs-five mfp-iframe popupvideo text-uppercase d-center position-absolute">
                                                    Play
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mt-6 mt-md-0">
                                            <a href="game-details.html">
                                                <h3 class="visible-slowly-bottom mb-4">Cyber Crusade</h3>
                                            </a>
                                            <ul
                                                class="d-flex flex-wrap mb-6 fs-seven align-items-center gap-5 gap-md-10">
                                                <li>Horror Adventure</li>
                                                <li>Mobile</li>
                                                <li>Action RPG</li>
                                                <li>PC</li>
                                            </ul>
                                            <p>Mauris euismod nibh mollis sodales eleifend. Donec tempor erat
                                                risus, nec congue magna accumsan commodo pretium.. <a
                                                    href="game-details.html">Read More</a></p>
                                            <div
                                                class="review-box mt-5 mt-md-8 mb-6 mb-md-10 w-100 p-2 p-sm-4 d-center gap-3 justify-content-between">
                                                <div class="single-area">
                                                    <img src="/images/review-img.png" alt="image">
                                                </div>
                                                <div class="single-area">
                                                    <div class="d-flex gap-1 align-items-center mb-1">
                                                        <i class="material-symbols-outlined mat-icon">star</i>
                                                        <h4 class="fs-four">4.5</h4>
                                                    </div>
                                                    <p class="fs-seven">5.2M Reviews</p>
                                                </div>
                                                <div class="single-area">
                                                    <h4 class="fs-four mb-1">500M+</h4>
                                                    <p class="fs-seven">Downloads</p>
                                                </div>
                                            </div>
                                            <div class="app-download d-flex gap-4 align-items-center">
                                                <a href="https://www.apple.com/app-store/" class="w-100"><img
                                                        src="/images/appstore.png" class="w-100" alt="Image"></a>
                                                <a href="https://play.google.com/" class="w-100"><img
                                                        src="/images/googleplay.png" class="w-100"
                                                        alt="Image"></a>
                                                <a href="https://www.amazon.com/" class="w-100"><img
                                                        src="/images/amazonstore.png" class="w-100"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabitem">
                            <div class="cus-mar">
                                <div class="single-box position-relative p-3 p-md-4">
                                    <span
                                        class="feature-tag d-flex d-md-none d-xl-flex d-center position-absolute">Feature</span>
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="position-relative d-center">
                                                <img src="/images/game-image-4.png" class="w-100" alt="sec-img">
                                                <a href="https://www.youtube.com/watch?v=IaT4DneyKLc"
                                                    class="box-style btn-box-second heading-five fs-five mfp-iframe popupvideo text-uppercase d-center position-absolute">
                                                    Play
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mt-6 mt-md-0">
                                            <a href="game-details.html">
                                                <h3 class="visible-slowly-bottom mb-4">Galactic Escape</h3>
                                            </a>
                                            <ul
                                                class="d-flex flex-wrap mb-6 fs-seven align-items-center gap-5 gap-md-10">
                                                <li>Horror Adventure</li>
                                                <li>Mobile</li>
                                                <li>Action RPG</li>
                                                <li>PC</li>
                                            </ul>
                                            <p>Mauris euismod nibh mollis sodales eleifend. Donec tempor erat
                                                risus, nec congue magna accumsan commodo pretium.. <a
                                                    href="game-details.html">Read More</a></p>
                                            <div
                                                class="review-box mt-5 mt-md-8 mb-6 mb-md-10 w-100 p-2 p-sm-4 d-center gap-3 justify-content-between">
                                                <div class="single-area">
                                                    <img src="/images/review-img.png" alt="image">
                                                </div>
                                                <div class="single-area">
                                                    <div class="d-flex gap-1 align-items-center mb-1">
                                                        <i class="material-symbols-outlined mat-icon">star</i>
                                                        <h4 class="fs-four">4.5</h4>
                                                    </div>
                                                    <p class="fs-seven">5.2M Reviews</p>
                                                </div>
                                                <div class="single-area">
                                                    <h4 class="fs-four mb-1">500M+</h4>
                                                    <p class="fs-seven">Downloads</p>
                                                </div>
                                            </div>
                                            <div class="app-download d-flex gap-4 align-items-center">
                                                <a href="https://www.apple.com/app-store/" class="w-100"><img
                                                        src="/images/appstore.png" class="w-100" alt="Image"></a>
                                                <a href="https://play.google.com/" class="w-100"><img
                                                        src="/images/googleplay.png" class="w-100"
                                                        alt="Image"></a>
                                                <a href="https://www.amazon.com/" class="w-100"><img
                                                        src="/images/amazonstore.png" class="w-100"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-box position-relative p-3 p-md-4">
                                    <span
                                        class="feature-tag d-flex d-md-none d-xl-flex d-center position-absolute">Feature</span>
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="position-relative d-center">
                                                <img src="/images/game-image-5.png" class="w-100" alt="sec-img">
                                                <a href="https://www.youtube.com/watch?v=IaT4DneyKLc"
                                                    class="box-style btn-box-second heading-five fs-five mfp-iframe popupvideo text-uppercase d-center position-absolute">
                                                    Play
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mt-6 mt-md-0">
                                            <a href="game-details.html">
                                                <h3 class="visible-slowly-bottom mb-4">Cyber Crusade</h3>
                                            </a>
                                            <ul
                                                class="d-flex flex-wrap mb-6 fs-seven align-items-center gap-5 gap-md-10">
                                                <li>Horror Adventure</li>
                                                <li>Mobile</li>
                                                <li>Action RPG</li>
                                                <li>PC</li>
                                            </ul>
                                            <p>Mauris euismod nibh mollis sodales eleifend. Donec tempor erat
                                                risus, nec congue magna accumsan commodo pretium.. <a
                                                    href="game-details.html">Read More</a></p>
                                            <div
                                                class="review-box mt-5 mt-md-8 mb-6 mb-md-10 w-100 p-2 p-sm-4 d-center gap-3 justify-content-between">
                                                <div class="single-area">
                                                    <img src="/images/review-img.png" alt="image">
                                                </div>
                                                <div class="single-area">
                                                    <div class="d-flex gap-1 align-items-center mb-1">
                                                        <i class="material-symbols-outlined mat-icon">star</i>
                                                        <h4 class="fs-four">4.5</h4>
                                                    </div>
                                                    <p class="fs-seven">5.2M Reviews</p>
                                                </div>
                                                <div class="single-area">
                                                    <h4 class="fs-four mb-1">500M+</h4>
                                                    <p class="fs-seven">Downloads</p>
                                                </div>
                                            </div>
                                            <div class="app-download d-flex gap-4 align-items-center">
                                                <a href="https://www.apple.com/app-store/" class="w-100"><img
                                                        src="/images/appstore.png" class="w-100" alt="Image"></a>
                                                <a href="https://play.google.com/" class="w-100"><img
                                                        src="/images/googleplay.png" class="w-100"
                                                        alt="Image"></a>
                                                <a href="https://www.amazon.com/" class="w-100"><img
                                                        src="/images/amazonstore.png" class="w-100"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-box position-relative p-3 p-md-4">
                                    <span
                                        class="feature-tag d-flex d-md-none d-xl-flex d-center position-absolute">Feature</span>
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="position-relative d-center">
                                                <img src="/images/game-image-1.png" class="w-100" alt="sec-img">
                                                <a href="https://www.youtube.com/watch?v=IaT4DneyKLc"
                                                    class="box-style btn-box-second heading-five fs-five mfp-iframe popupvideo text-uppercase d-center position-absolute">
                                                    Play
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mt-6 mt-md-0">
                                            <a href="game-details.html">
                                                <h3 class="visible-slowly-bottom mb-4">Upgrade Your Weapon</h3>
                                            </a>
                                            <ul
                                                class="d-flex flex-wrap mb-6 fs-seven align-items-center gap-5 gap-md-10">
                                                <li>Horror Adventure</li>
                                                <li>Mobile</li>
                                                <li>Action RPG</li>
                                                <li>PC</li>
                                            </ul>
                                            <p>Mauris euismod nibh mollis sodales eleifend. Donec tempor erat
                                                risus, nec congue magna accumsan commodo pretium.. <a
                                                    href="game-details.html">Read More</a></p>
                                            <div
                                                class="review-box mt-5 mt-md-8 mb-6 mb-md-10 w-100 p-2 p-sm-4 d-center gap-3 justify-content-between">
                                                <div class="single-area">
                                                    <img src="/images/review-img.png" alt="image">
                                                </div>
                                                <div class="single-area">
                                                    <div class="d-flex gap-1 align-items-center mb-1">
                                                        <i class="material-symbols-outlined mat-icon">star</i>
                                                        <h4 class="fs-four">4.5</h4>
                                                    </div>
                                                    <p class="fs-seven">5.2M Reviews</p>
                                                </div>
                                                <div class="single-area">
                                                    <h4 class="fs-four mb-1">500M+</h4>
                                                    <p class="fs-seven">Downloads</p>
                                                </div>
                                            </div>
                                            <div class="app-download d-flex gap-4 align-items-center">
                                                <a href="https://www.apple.com/app-store/" class="w-100"><img
                                                        src="/images/appstore.png" class="w-100" alt="Image"></a>
                                                <a href="https://play.google.com/" class="w-100"><img
                                                        src="/images/googleplay.png" class="w-100"
                                                        alt="Image"></a>
                                                <a href="https://www.amazon.com/" class="w-100"><img
                                                        src="/images/amazonstore.png" class="w-100"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-box position-relative p-3 p-md-4">
                                    <span
                                        class="feature-tag d-flex d-md-none d-xl-flex d-center position-absolute">Feature</span>
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="position-relative d-center">
                                                <img src="/images/game-image-3.png" class="w-100" alt="sec-img">
                                                <a href="https://www.youtube.com/watch?v=IaT4DneyKLc"
                                                    class="box-style btn-box-second heading-five fs-five mfp-iframe popupvideo text-uppercase d-center position-absolute">
                                                    Play
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mt-6 mt-md-0">
                                            <a href="game-details.html">
                                                <h3 class="visible-slowly-bottom mb-4">Shadow Quest</h3>
                                            </a>
                                            <ul
                                                class="d-flex flex-wrap mb-6 fs-seven align-items-center gap-5 gap-md-10">
                                                <li>Horror Adventure</li>
                                                <li>Mobile</li>
                                                <li>Action RPG</li>
                                                <li>PC</li>
                                            </ul>
                                            <p>Mauris euismod nibh mollis sodales eleifend. Donec tempor erat
                                                risus, nec congue magna accumsan commodo pretium.. <a
                                                    href="game-details.html">Read More</a></p>
                                            <div
                                                class="review-box mt-5 mt-md-8 mb-6 mb-md-10 w-100 p-2 p-sm-4 d-center gap-3 justify-content-between">
                                                <div class="single-area">
                                                    <img src="/images/review-img.png" alt="image">
                                                </div>
                                                <div class="single-area">
                                                    <div class="d-flex gap-1 align-items-center mb-1">
                                                        <i class="material-symbols-outlined mat-icon">star</i>
                                                        <h4 class="fs-four">4.5</h4>
                                                    </div>
                                                    <p class="fs-seven">5.2M Reviews</p>
                                                </div>
                                                <div class="single-area">
                                                    <h4 class="fs-four mb-1">500M+</h4>
                                                    <p class="fs-seven">Downloads</p>
                                                </div>
                                            </div>
                                            <div class="app-download d-flex gap-4 align-items-center">
                                                <a href="https://www.apple.com/app-store/" class="w-100"><img
                                                        src="/images/appstore.png" class="w-100" alt="Image"></a>
                                                <a href="https://play.google.com/" class="w-100"><img
                                                        src="/images/googleplay.png" class="w-100"
                                                        alt="Image"></a>
                                                <a href="https://www.amazon.com/" class="w-100"><img
                                                        src="/images/amazonstore.png" class="w-100"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabitem">
                            <div class="cus-mar">
                                <div class="single-box position-relative p-3 p-md-4">
                                    <span
                                        class="feature-tag d-flex d-md-none d-xl-flex d-center position-absolute">Feature</span>
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="position-relative d-center">
                                                <img src="/images/game-image-5.png" class="w-100" alt="sec-img">
                                                <a href="https://www.youtube.com/watch?v=IaT4DneyKLc"
                                                    class="box-style btn-box-second heading-five fs-five mfp-iframe popupvideo text-uppercase d-center position-absolute">
                                                    Play
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mt-6 mt-md-0">
                                            <a href="game-details.html">
                                                <h3 class="visible-slowly-bottom mb-4">Cyber Crusade</h3>
                                            </a>
                                            <ul
                                                class="d-flex flex-wrap mb-6 fs-seven align-items-center gap-5 gap-md-10">
                                                <li>Horror Adventure</li>
                                                <li>Mobile</li>
                                                <li>Action RPG</li>
                                                <li>PC</li>
                                            </ul>
                                            <p>Mauris euismod nibh mollis sodales eleifend. Donec tempor erat
                                                risus, nec congue magna accumsan commodo pretium.. <a
                                                    href="game-details.html">Read More</a></p>
                                            <div
                                                class="review-box mt-5 mt-md-8 mb-6 mb-md-10 w-100 p-2 p-sm-4 d-center gap-3 justify-content-between">
                                                <div class="single-area">
                                                    <img src="/images/review-img.png" alt="image">
                                                </div>
                                                <div class="single-area">
                                                    <div class="d-flex gap-1 align-items-center mb-1">
                                                        <i class="material-symbols-outlined mat-icon">star</i>
                                                        <h4 class="fs-four">4.5</h4>
                                                    </div>
                                                    <p class="fs-seven">5.2M Reviews</p>
                                                </div>
                                                <div class="single-area">
                                                    <h4 class="fs-four mb-1">500M+</h4>
                                                    <p class="fs-seven">Downloads</p>
                                                </div>
                                            </div>
                                            <div class="app-download d-flex gap-4 align-items-center">
                                                <a href="https://www.apple.com/app-store/" class="w-100"><img
                                                        src="/images/appstore.png" class="w-100" alt="Image"></a>
                                                <a href="https://play.google.com/" class="w-100"><img
                                                        src="/images/googleplay.png" class="w-100"
                                                        alt="Image"></a>
                                                <a href="https://www.amazon.com/" class="w-100"><img
                                                        src="/images/amazonstore.png" class="w-100"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-box position-relative p-3 p-md-4">
                                    <span
                                        class="feature-tag d-flex d-md-none d-xl-flex d-center position-absolute">Feature</span>
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="position-relative d-center">
                                                <img src="/images/game-image-1.png" class="w-100" alt="sec-img">
                                                <a href="https://www.youtube.com/watch?v=IaT4DneyKLc"
                                                    class="box-style btn-box-second heading-five fs-five mfp-iframe popupvideo text-uppercase d-center position-absolute">
                                                    Play
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mt-6 mt-md-0">
                                            <a href="game-details.html">
                                                <h3 class="visible-slowly-bottom mb-4">Upgrade Your Weapon</h3>
                                            </a>
                                            <ul
                                                class="d-flex flex-wrap mb-6 fs-seven align-items-center gap-5 gap-md-10">
                                                <li>Horror Adventure</li>
                                                <li>Mobile</li>
                                                <li>Action RPG</li>
                                                <li>PC</li>
                                            </ul>
                                            <p>Mauris euismod nibh mollis sodales eleifend. Donec tempor erat
                                                risus, nec congue magna accumsan commodo pretium.. <a
                                                    href="game-details.html">Read More</a></p>
                                            <div
                                                class="review-box mt-5 mt-md-8 mb-6 mb-md-10 w-100 p-2 p-sm-4 d-center gap-3 justify-content-between">
                                                <div class="single-area">
                                                    <img src="/images/review-img.png" alt="image">
                                                </div>
                                                <div class="single-area">
                                                    <div class="d-flex gap-1 align-items-center mb-1">
                                                        <i class="material-symbols-outlined mat-icon">star</i>
                                                        <h4 class="fs-four">4.5</h4>
                                                    </div>
                                                    <p class="fs-seven">5.2M Reviews</p>
                                                </div>
                                                <div class="single-area">
                                                    <h4 class="fs-four mb-1">500M+</h4>
                                                    <p class="fs-seven">Downloads</p>
                                                </div>
                                            </div>
                                            <div class="app-download d-flex gap-4 align-items-center">
                                                <a href="https://www.apple.com/app-store/" class="w-100"><img
                                                        src="/images/appstore.png" class="w-100" alt="Image"></a>
                                                <a href="https://play.google.com/" class="w-100"><img
                                                        src="/images/googleplay.png" class="w-100"
                                                        alt="Image"></a>
                                                <a href="https://www.amazon.com/" class="w-100"><img
                                                        src="/images/amazonstore.png" class="w-100"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-box position-relative p-3 p-md-4">
                                    <span
                                        class="feature-tag d-flex d-md-none d-xl-flex d-center position-absolute">Feature</span>
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="position-relative d-center">
                                                <img src="/images/game-image-3.png" class="w-100" alt="sec-img">
                                                <a href="https://www.youtube.com/watch?v=IaT4DneyKLc"
                                                    class="box-style btn-box-second heading-five fs-five mfp-iframe popupvideo text-uppercase d-center position-absolute">
                                                    Play
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mt-6 mt-md-0">
                                            <a href="game-details.html">
                                                <h3 class="visible-slowly-bottom mb-4">Shadow Quest</h3>
                                            </a>
                                            <ul
                                                class="d-flex flex-wrap mb-6 fs-seven align-items-center gap-5 gap-md-10">
                                                <li>Horror Adventure</li>
                                                <li>Mobile</li>
                                                <li>Action RPG</li>
                                                <li>PC</li>
                                            </ul>
                                            <p>Mauris euismod nibh mollis sodales eleifend. Donec tempor erat
                                                risus, nec congue magna accumsan commodo pretium.. <a
                                                    href="game-details.html">Read More</a></p>
                                            <div
                                                class="review-box mt-5 mt-md-8 mb-6 mb-md-10 w-100 p-2 p-sm-4 d-center gap-3 justify-content-between">
                                                <div class="single-area">
                                                    <img src="/images/review-img.png" alt="image">
                                                </div>
                                                <div class="single-area">
                                                    <div class="d-flex gap-1 align-items-center mb-1">
                                                        <i class="material-symbols-outlined mat-icon">star</i>
                                                        <h4 class="fs-four">4.5</h4>
                                                    </div>
                                                    <p class="fs-seven">5.2M Reviews</p>
                                                </div>
                                                <div class="single-area">
                                                    <h4 class="fs-four mb-1">500M+</h4>
                                                    <p class="fs-seven">Downloads</p>
                                                </div>
                                            </div>
                                            <div class="app-download d-flex gap-4 align-items-center">
                                                <a href="https://www.apple.com/app-store/" class="w-100"><img
                                                        src="/images/appstore.png" class="w-100" alt="Image"></a>
                                                <a href="https://play.google.com/" class="w-100"><img
                                                        src="/images/googleplay.png" class="w-100"
                                                        alt="Image"></a>
                                                <a href="https://www.amazon.com/" class="w-100"><img
                                                        src="/images/amazonstore.png" class="w-100"
                                                        alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-box position-relative p-3 p-md-4">
                                    <span
                                        class="feature-tag d-flex d-md-none d-xl-flex d-center position-absolute">Feature</span>
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="position-relative d-center">
                                                <img src="/images/game-image-4.png" class="w-100" alt="sec-img">
                                                <a href="https://www.youtube.com/watch?v=IaT4DneyKLc"
                                                    class="box-style btn-box-second heading-five fs-five mfp-iframe popupvideo text-uppercase d-center position-absolute">
                                                    Play
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 mt-6 mt-md-0">
                                            <a href="game-details.html">
                                                <h3 class="visible-slowly-bottom mb-4">Galactic Escape</h3>
                                            </a>
                                            <ul
                                                class="d-flex flex-wrap mb-6 fs-seven align-items-center gap-5 gap-md-10">
                                                <li>Horror Adventure</li>
                                                <li>Mobile</li>
                                                <li>Action RPG</li>
                                                <li>PC</li>
                                            </ul>
                                            <p>Mauris euismod nibh mollis sodales eleifend. Donec tempor erat
                                                risus, nec congue magna accumsan commodo pretium.. <a
                                                    href="game-details.html">Read More</a></p>
                                            <div
                                                class="review-box mt-5 mt-md-8 mb-6 mb-md-10 w-100 p-2 p-sm-4 d-center gap-3 justify-content-between">
                                                <div class="single-area">
                                                    <img src="/images/review-img.png" alt="image">
                                                </div>
                                                <div class="single-area">
                                                    <div class="d-flex gap-1 align-items-center mb-1">
                                                        <i class="material-symbols-outlined mat-icon">star</i>
                                                        <h4 class="fs-four">4.5</h4>
                                                    </div>
                                                    <p class="fs-seven">5.2M Reviews</p>
                                                </div>
                                                <div class="single-area">
                                                    <h4 class="fs-four mb-1">500M+</h4>
                                                    <p class="fs-seven">Downloads</p>
                                                </div>
                                            </div>
                                            <div class="app-download d-flex gap-4 align-items-center">
                                                <a href="https://www.apple.com/app-store/" class="w-100"><img
                                                        src="/images/appstore.png" class="w-100" alt="Image"></a>
                                                <a href="https://play.google.com/" class="w-100"><img
                                                        src="/images/googleplay.png" class="w-100"
                                                        alt="Image"></a>
                                                <a href="https://www.amazon.com/" class="w-100"><img
                                                        src="/images/amazonstore.png" class="w-100"
                                                        alt="Image"></a>
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
    <!-- Our Games section end -->

    <!-- Team Members start -->
    <section class="team-members pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-header text-center">
                        <h4 class="sub-title">We Have A Passion For <span>Games!</span></h4>
                        <span class="fs-two heading mb-6">Our team is next-level. And we're <span>proud of
                                it.</span></span>
                        <p>Our dynamic team blends tech-savvy developers, imaginative artists, analytical minds,
                            and visionary product managers. Driven to innovate, we bring excitement to every
                            project</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="team-carousel">
                <div class="slide-area">
                    <div class="single-slider">
                        <div class="thumb">
                            <img src="/images/team-members-1.png" alt="Image">
                        </div>
                        <div class="title-area">
                            <h4 class="pt-8 pb-2"><a href="index.html">Jane Cooper</a></h4>
                            <span class="designation">Animator</span>
                        </div>
                    </div>
                </div>
                <div class="slide-area">
                    <div class="single-slider">
                        <div class="thumb">
                            <img src="/images/team-members-2.png" alt="Image">
                        </div>
                        <div class="title-area">
                            <h4 class="pt-8 pb-2"><a href="index.html">Esther Howard</a></h4>
                            <span class="designation">Artist</span>
                        </div>
                    </div>
                </div>
                <div class="slide-area">
                    <div class="single-slider">
                        <div class="thumb">
                            <img src="/images/team-members-3.png" alt="Image">
                        </div>
                        <div class="title-area">
                            <h4 class="pt-8 pb-2"><a href="index.html">Dianne Russell</a></h4>
                            <span class="designation">Animator</span>
                        </div>
                    </div>
                </div>
                <div class="slide-area">
                    <div class="single-slider">
                        <div class="thumb">
                            <img src="/images/team-members-4.png" alt="Image">
                        </div>
                        <div class="title-area">
                            <h4 class="pt-8 pb-2"><a href="index.html">Marvin McKinney</a></h4>
                            <span class="designation">Brand & Culture Manager</span>
                        </div>
                    </div>
                </div>
                <div class="slide-area">
                    <div class="single-slider">
                        <div class="thumb">
                            <img src="/images/team-members-5.png" alt="Image">
                        </div>
                        <div class="title-area">
                            <h4 class="pt-8 pb-2"><a href="index.html">Kristin Watson</a></h4>
                            <span class="designation">Developer</span>
                        </div>
                    </div>
                </div>
                <div class="slide-area">
                    <div class="single-slider">
                        <div class="thumb">
                            <img src="/images/team-members-6.png" alt="Image">
                        </div>
                        <div class="title-area">
                            <h4 class="pt-8 pb-2"><a href="index.html">Bessie Cooper</a></h4>
                            <span class="designation">Artist</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Members end -->

    <!-- Counter Section start -->
    <div class="counter-section pt-120">
        <div class="container">
            <div class="row cus-mar">
                <div class="col-sm-6 col-xl-3">
                    <div class="single-box py-6 box-style box-first d-center position-relative">
                        <div class="counters d-flex align-items-center">
                            <span class="odometer display-one" data-odometer-final="652">0</span>
                            <span class="display-one symbol">+</span>
                        </div>
                        <p class="name-area fs-five position-absolute">
                            Unique Daily Users.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single-box py-6 box-style box-first d-center active-area position-relative">
                        <div class="counters d-flex align-items-center">
                            <span class="odometer display-one" data-odometer-final="50">0</span>
                            <span class="display-one">M</span>
                        </div>
                        <p class="name-area fs-five position-absolute">
                            Downloads
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single-box py-6 box-style box-first d-center position-relative">
                        <div class="counters d-flex align-items-center">
                            <span class="odometer display-one" data-odometer-final="200">0</span>
                            <span class="display-one symbol">+</span>
                        </div>
                        <p class="name-area fs-five position-absolute">
                            Games Launched
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single-box py-6 box-style box-first d-center position-relative">
                        <div class="counters d-flex align-items-center">
                            <span class="odometer display-one" data-odometer-final="350">0</span>
                            <span class="display-one">k</span>
                        </div>
                        <p class="name-area fs-five position-absolute">
                            Gaming Projects Delivered
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Section end -->

    <!-- Our Services start -->
    <section class="our-services pt-120">
        <div class="container">
            <div class="row align-items-center section-text">
                <div class="col-lg-4">
                    <h4 class="sub-title">Our Team <span>Provide</span></h4>
                    <span class="fs-two heading">Next Level <span>Services</span></span>
                </div>
                <div class="col-lg-6">
                    <p>Gamestorm Studios provides end-to-end services for clients wishing to employ game
                        development businesses skilled in Unity3D, Unreal, PlayCanvas, blockchain, game design,
                        VR, NFT, metaverse, and more.</p>
                </div>
            </div>
            <div class="services-carousel">
                <div class="slide-area">
                    <div class="single-slider box-style box-first p-5 px-xl-8 py-xl-10">

                        <div class="icon-box d-center">
                            <i class="material-symbols-outlined fs-two"> sports_esports </i>
                        </div>
                        <div class="title-area">
                            <h3 class="mt-6 mb-3">Game Development</h3>
                            <p>Game design, programming, art, animation, audio, testing, marketing, publishing,
                                monetization, maintenance, player support, analytics.</p>
                            <div class="link-area mt-8">
                                <a href="our-services-details.html" class="d-flex align-items-center">
                                    Learn More
                                    <i class="material-symbols-outlined mat-icon">arrow_right_alt</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-area">
                    <div class="single-slider box-style box-first p-5 px-xl-8 py-xl-10">

                        <div class="icon-box d-center">
                            <i class="material-symbols-outlined fs-two"> draw </i>
                        </div>
                        <div class="title-area">
                            <h3 class="mt-6 mb-3">Game Art & Design</h3>
                            <p>Concept, character, environment, UI/UX, 2D/3D modeling, texturing, rigging,
                                animation, VFX, lighting, compositing, motion graphics.</p>
                            <div class="link-area mt-8">
                                <a href="our-services-details.html" class="d-flex align-items-center">
                                    Learn More
                                    <i class="material-symbols-outlined mat-icon">arrow_right_alt</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-area">
                    <div class="single-slider box-style box-first p-5 px-xl-8 py-xl-10">

                        <div class="icon-box d-center">
                            <i class="material-symbols-outlined fs-two">hub</i>
                        </div>
                        <div class="title-area">
                            <h3 class="mt-6 mb-3">Nft Development</h3>
                            <p>Smart contract development, NFT creation, blockchain integration,NFT games,
                                digital ownership, NFT transfers, NFT authentication, NFT analytics.</p>
                            <div class="link-area mt-8">
                                <a href="our-services-details.html" class="d-flex align-items-center">
                                    Learn More
                                    <i class="material-symbols-outlined mat-icon">arrow_right_alt</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-area">
                    <div class="single-slider box-style box-first p-5 px-xl-8 py-xl-10">

                        <div class="icon-box d-center">
                            <i class="material-symbols-outlined fs-two">home_max_dots</i>
                        </div>
                        <div class="title-area">
                            <h3 class="mt-6 mb-3">Vr & Ar Solutions</h3>
                            <p>VR, HMDs, mobile AR, spatial computing, gesture control, haptic feedback,
                                360-degree audio, user tracking, immersive experiences.</p>
                            <div class="link-area mt-8">
                                <a href="our-services-details.html" class="d-flex align-items-center">
                                    Learn More
                                    <i class="material-symbols-outlined mat-icon">arrow_right_alt</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-area">
                    <div class="single-slider box-style box-first p-5 px-xl-8 py-xl-10">

                        <div class="icon-box d-center">
                            <i class="material-symbols-outlined fs-two"> sports_esports </i>
                        </div>
                        <div class="title-area">
                            <h3 class="mt-6 mb-3">Game Development</h3>
                            <p>Game design, programming, art, animation, audio, testing, marketing, publishing,
                                monetization, maintenance, player support, analytics.</p>
                            <div class="link-area mt-8">
                                <a href="our-services-details.html" class="d-flex align-items-center">
                                    Learn More
                                    <i class="material-symbols-outlined mat-icon">arrow_right_alt</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Services end -->

    <!-- Life Gamestorm start -->
    <section class="life-gamestorm pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-text text-center">
                        <h4 class="sub-title">We're Part of a <span>Big Family</span></h4>
                        <span class="fs-two heading mb-6">The Art of Gaming Development: A Look <span>Inside Our
                                Studio</span></span>
                        <p>Experience the magic of gaming development with a look inside our studio. See the
                            art, science, and innovation at work.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="post-img d-grid gap-3 gap-md-6 justify-content-between">
                        <div class="single d-flex gap-3 gap-md-6">
                            <div class="items">
                                <img src="/images/life-post-img-1.png" alt="image">
                            </div>
                            <div class="items">
                                <img src="/images/life-post-img-2.png" alt="image">
                            </div>
                        </div>
                        <div class="single d-flex gap-3 gap-md-6">
                            <div class="items">
                                <img src="/images/life-post-img-3.png" alt="image">
                            </div>
                            <div class="items">
                                <img src="/images/life-post-img-4.png" alt="image">
                            </div>
                            <div class="items">
                                <img src="/images/life-post-img-5.png" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-10 mt-md-20">
                        <div class="col-lg-5">
                            <div class="join-us text-center">
                                <span class="display-four visible-slowly-bottom mb-4">JOIN US!</span>
                                <p>Still haven't found your dream job? Join Team Gamestorm and become the next
                                    Gamestorm of an ever-growing family!</p>
                                <div class="btn-area alt-bg mt-5 mt-md-10">
                                    <a href="about-us.html" class="box-style btn-box d-center">
                                        Check Open Positions
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Life Gamestorm end -->

    <!-- Job Opens start -->
    <section class="job-opens pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-text text-center">
                        <h4 class="sub-title">We're Looking for <span>Talented Professionals</span></h4>
                        <span class="fs-two heading mb-6 w-75 m-auto"><span>Let's Build the Future</span> of
                            Video Games Together!</span>
                        <p>Our belief is that being simple, honest, self-driven and motivated combined with the
                            constant pursuit of the ultimate company atmosphere can help grow a creative and
                            robust team.</p>
                    </div>
                </div>
            </div>
            <div class="row cus-mar">
                <div class="col-md-6">
                    <div
                        class="single-box flex-wrap box-style box-second p-3 p-md-6 d-flex gap-4 gap-md-6 justify-content-between">

                        <div class="content-box d-flex flex-wrap gap-4 gap-md-6">
                            <div class="icon-box d-inline-flex d-center">
                                <i class="material-symbols-outlined fs-three"> draw </i>
                            </div>
                            <div class="info-box">
                                <a href="career-details.html">
                                    <h5>Senior Level Game Designer</h5>
                                </a>
                                <a href="career-details.html"></a>
                                <span class="fs-seven mt-2">Al. Brucknera Aleksandra63, Wrocław 51-410</span>
                                <ul class="d-flex gap-6 mt-6">
                                    <li class="d-flex align-items-center gap-2">
                                        <i class="material-symbols-outlined mat-icon"> work </i>
                                        <span class="fs-seven">Full Time</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2">
                                        <i class="material-symbols-outlined mat-icon"> schedule </i>
                                        <span class="fs-seven">Full Time</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="end-area">
                            <span class="fs-seven p-1 px-2">Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div
                        class="single-box flex-wrap box-style box-second p-3 p-md-6 d-flex gap-4 gap-md-6 justify-content-between">

                        <div class="content-box d-flex flex-wrap gap-4 gap-md-6">
                            <div class="icon-box d-inline-flex d-center">
                                <i class="material-symbols-outlined fs-three"> draw </i>
                            </div>
                            <div class="info-box">
                                <a href="career-details.html">
                                    <h5>Level Game Designer</h5>
                                </a>
                                <span class="fs-seven mt-2">Al10</span>
                                <ul class="d-flex gap-6 mt-6">
                                    <li class="d-flex align-items-center gap-2">
                                        <i class="material-symbols-outlined mat-icon"> work </i>
                                        <span class="fs-seven">Full Time</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2">
                                        <i class="material-symbols-outlined mat-icon"> schedule </i>
                                        <span class="fs-seven">Full Time</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="end-area">
                            <span class="fs-seven p-1 px-2">Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div
                        class="single-box flex-wrap box-style box-second p-3 p-md-6 d-flex gap-4 gap-md-6 justify-content-between">

                        <div class="content-box d-flex flex-wrap gap-4 gap-md-6">
                            <div class="icon-box d-inline-flex d-center">
                                <i class="material-symbols-outlined fs-three"> view_in_ar </i>
                            </div>
                            <div class="info-box">
                                <a href="career-details.html">
                                    <h5>SR UI/UX Game designer</h5>
                                </a>
                                <span class="fs-seven mt-2">Al10</span>
                                <ul class="d-flex gap-6 mt-6">
                                    <li class="d-flex align-items-center gap-2">
                                        <i class="material-symbols-outlined mat-icon"> work </i>
                                        <span class="fs-seven">Full Time</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2">
                                        <i class="material-symbols-outlined mat-icon"> schedule </i>
                                        <span class="fs-seven">Full Time</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="end-area">
                            <span class="fs-seven p-1 px-2">Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div
                        class="single-box flex-wrap box-style box-second p-3 p-md-6 d-flex gap-4 gap-md-6 justify-content-between">

                        <div class="content-box d-flex flex-wrap gap-4 gap-md-6">
                            <div class="icon-box d-inline-flex d-center">
                                <i class="material-symbols-outlined fs-three"> draw </i>
                            </div>
                            <div class="info-box">
                                <a href="career-details.html">
                                    <h5>Sr. Unity Developer</h5>
                                </a>
                                <span class="fs-seven mt-2">Al10</span>
                                <ul class="d-flex gap-6 mt-6">
                                    <li class="d-flex align-items-center gap-2">
                                        <i class="material-symbols-outlined mat-icon"> work </i>
                                        <span class="fs-seven">Full Time</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2">
                                        <i class="material-symbols-outlined mat-icon"> schedule </i>
                                        <span class="fs-seven">Full Time</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="end-area">
                            <span class="fs-seven danger p-1 px-2">Developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div
                        class="single-box flex-wrap box-style box-second p-3 p-md-6 d-flex gap-4 gap-md-6 justify-content-between">

                        <div class="content-box d-flex flex-wrap gap-4 gap-md-6">
                            <div class="icon-box d-inline-flex d-center">
                                <i class="material-symbols-outlined fs-three"> draw </i>
                            </div>
                            <div class="info-box">
                                <a href="career-details.html">
                                    <h5>Lead VFX Artist</h5>
                                </a>
                                <span class="fs-seven mt-2">Al10</span>
                                <ul class="d-flex gap-6 mt-6">
                                    <li class="d-flex align-items-center gap-2">
                                        <i class="material-symbols-outlined mat-icon"> work </i>
                                        <span class="fs-seven">Full Time</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2">
                                        <i class="material-symbols-outlined mat-icon"> schedule </i>
                                        <span class="fs-seven">Full Time</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="end-area">
                            <span class="fs-seven info p-1 px-2">VFX Artist</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div
                        class="single-box flex-wrap box-style box-second p-3 p-md-6 d-flex gap-4 gap-md-6 justify-content-between">

                        <div class="content-box d-flex flex-wrap gap-4 gap-md-6">
                            <div class="icon-box d-inline-flex d-center">
                                <i class="material-symbols-outlined fs-three"> view_in_ar </i>
                            </div>
                            <div class="info-box">
                                <a href="career-details.html">
                                    <h5>3D Artist</h5>
                                </a>
                                <span class="fs-seven mt-2">Al10</span>
                                <ul class="d-flex gap-6 mt-6">
                                    <li class="d-flex align-items-center gap-2">
                                        <i class="material-symbols-outlined mat-icon"> work </i>
                                        <span class="fs-seven">Full Time</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2">
                                        <i class="material-symbols-outlined mat-icon"> schedule </i>
                                        <span class="fs-seven">Full Time</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="end-area">
                            <span class="fs-seven p-1 px-2">3D Artist</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div
                        class="single-box flex-wrap box-style box-second p-3 p-md-6 d-flex gap-4 gap-md-6 justify-content-between">

                        <div class="content-box d-flex flex-wrap gap-4 gap-md-6">
                            <div class="icon-box d-inline-flex d-center">
                                <i class="material-symbols-outlined fs-three"> view_in_ar </i>
                            </div>
                            <div class="info-box">
                                <a href="career-details.html">
                                    <h5>SR. 3D Artist</h5>
                                </a>
                                <span class="fs-seven mt-2">Al10</span>
                                <ul class="d-flex gap-6 mt-6">
                                    <li class="d-flex align-items-center gap-2">
                                        <i class="material-symbols-outlined mat-icon"> work </i>
                                        <span class="fs-seven">Full Time</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2">
                                        <i class="material-symbols-outlined mat-icon"> schedule </i>
                                        <span class="fs-seven">Full Time</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="end-area">
                            <span class="fs-seven p-1 px-2">3D Artist</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div
                        class="single-box flex-wrap box-style box-second p-3 p-md-6 d-flex gap-4 gap-md-6 justify-content-between">

                        <div class="content-box d-flex flex-wrap gap-4 gap-md-6">
                            <div class="icon-box d-inline-flex d-center">
                                <i class="material-symbols-outlined fs-three"> manage_accounts </i>
                            </div>
                            <div class="info-box">
                                <a href="career-details.html">
                                    <h5>Product Manager</h5>
                                </a>
                                <span class="fs-seven mt-2">Al10</span>
                                <ul class="d-flex gap-6 mt-6">
                                    <li class="d-flex align-items-center gap-2">
                                        <i class="material-symbols-outlined mat-icon"> work </i>
                                        <span class="fs-seven">Full Time</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2">
                                        <i class="material-symbols-outlined mat-icon"> schedule </i>
                                        <span class="fs-seven">Full Time</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="end-area">
                            <span class="fs-seven success p-1 px-2">Manager</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Job Opens end -->

    <!-- testimonials start -->
    <section class="testimonials">
        <div class="container pt-120">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="testimonials-carousel">
                        <div class="slide-area">
                            <div class="single-slider px-4 px-sm-8 pt-8 pb-15 pb-sm-20">
                                <div class="img-box">
                                    <img src="/images/testimonial-img-1.png" alt="Image">
                                </div>
                                <ul class="list pt-4 pb-6 d-flex gap-1 align-items-center">
                                    <li>
                                        <i class="material-symbols-outlined mat-icon"> star </i>
                                    </li>
                                    <li>
                                        <i class="material-symbols-outlined mat-icon"> star </i>
                                    </li>
                                    <li>
                                        <i class="material-symbols-outlined mat-icon"> star </i>
                                    </li>
                                    <li>
                                        <i class="material-symbols-outlined mat-icon"> star </i>
                                    </li>
                                    <li>
                                        <i class="material-symbols-outlined mat-icon"> star </i>
                                    </li>
                                </ul>
                                <p class="fs-four">“The graphics in their games are always top-notch and truly
                                    bring the world to life”</p>
                                <h5 class="pt-8 pb-3">Kristin Watson</h5>
                                <div class="location-date d-flex gap-5">
                                    <span class="location pe-5">United Kingdom</span>
                                    <span>Mar 22, 2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="slide-area">
                            <div class="single-slider px-4 px-sm-8 pt-8 pb-15 pb-sm-20">
                                <div class="img-box">
                                    <img src="/images/testimonial-img-2.png" alt="Image">
                                </div>
                                <ul class="list pt-4 pb-6 d-flex gap-1 align-items-center">
                                    <li>
                                        <i class="material-symbols-outlined mat-icon"> star </i>
                                    </li>
                                    <li>
                                        <i class="material-symbols-outlined mat-icon"> star </i>
                                    </li>
                                    <li>
                                        <i class="material-symbols-outlined mat-icon"> star </i>
                                    </li>
                                    <li>
                                        <i class="material-symbols-outlined mat-icon"> star </i>
                                    </li>
                                    <li>
                                        <i class="material-symbols-outlined mat-icon"> star </i>
                                    </li>
                                </ul>
                                <p class="fs-four">“The graphics in their games are always top-notch and truly
                                    bring the world to life”</p>
                                <h5 class="pt-8 pb-3">Jordyn Septimus</h5>
                                <div class="location-date d-flex gap-5">
                                    <span class="location pe-5">United Kingdom</span>
                                    <span>May 12, 2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="slide-area">
                            <div class="single-slider px-4 px-sm-8 pt-8 pb-15 pb-sm-20">
                                <div class="img-box">
                                    <img src="/images/testimonial-img-3.png" alt="Image">
                                </div>
                                <ul class="list pt-4 pb-6 d-flex gap-1 align-items-center">
                                    <li>
                                        <i class="material-symbols-outlined mat-icon"> star </i>
                                    </li>
                                    <li>
                                        <i class="material-symbols-outlined mat-icon"> star </i>
                                    </li>
                                    <li>
                                        <i class="material-symbols-outlined mat-icon"> star </i>
                                    </li>
                                    <li>
                                        <i class="material-symbols-outlined mat-icon"> star </i>
                                    </li>
                                    <li>
                                        <i class="material-symbols-outlined mat-icon"> star </i>
                                    </li>
                                </ul>
                                <p class="fs-four">“The graphics in their games are always top-notch and truly
                                    bring the world to life”</p>
                                <h5 class="pt-8 pb-3">Bessie Cooper</h5>
                                <div class="location-date d-flex gap-5">
                                    <span class="location pe-5">United Kingdom</span>
                                    <span>Nov 25, 2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="slide-area">
                            <div class="single-slider px-4 px-sm-8 pt-8 pb-15 pb-sm-20">
                                <div class="img-box">
                                    <img src="/images/testimonial-img-4.png" alt="Image">
                                </div>
                                <ul class="list pt-4 pb-6 d-flex gap-1 align-items-center">
                                    <li>
                                        <i class="material-symbols-outlined mat-icon"> star </i>
                                    </li>
                                    <li>
                                        <i class="material-symbols-outlined mat-icon"> star </i>
                                    </li>
                                    <li>
                                        <i class="material-symbols-outlined mat-icon"> star </i>
                                    </li>
                                    <li>
                                        <i class="material-symbols-outlined mat-icon"> star </i>
                                    </li>
                                    <li>
                                        <i class="material-symbols-outlined mat-icon"> star </i>
                                    </li>
                                </ul>
                                <p class="fs-four">“The graphics in their games are always top-notch and truly
                                    bring the world to life”</p>
                                <h5 class="pt-8 pb-3">Esther Howard</h5>
                                <div class="location-date d-flex gap-5">
                                    <span class="location pe-5">United Kingdom</span>
                                    <span>Dec 17, 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonials end -->

    <!-- Call to Action start -->
    <section class="call-to-action overflow-hidden">
        <div class="container pt-120 pb-120">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5">
                    <div class="sec-img mt-0 mb-10 mb-sm-15 mb-lg-0 text-start d-center position-relative">
                        <img src="/images/call-to-action-circle.png" alt="Image">
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
                        <h4 class="sub-title">Join Our <span>Community</span></h4>
                        <span class="fs-two heading mb-6">Connect With <span>Gamers Worldwide</span></span>
                        <p>Join the revolution and immerse yourself in the ultimate gaming experience, where the
                            boundaries between reality and fantasy blur, and the only limit is your imagination.
                            Sign up now and be the first to play our latest game releases.</p>
                    </div>
                    <div class="btn-area">
                        <div class="btn-area alt-bg mt-10 d-flex flex-wrap gap-6 align-items-center">
                            <a href="game.html" class="box-style btn-box d-center">
                                Explore Our Games
                            </a>
                            <a href="about-us.html" class="box-style btn-box btn-box-third d-center">
                                Join Now Our Community
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action end -->

    <!-- Contact Us start -->
    <section class="contact-us pb-120">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5">
                    <div class="section-text">
                        <h4 class="sub-title">Have <span>Questions?</span></h4>
                        <span class="fs-two heading mb-6">We'd Love To <span>Hear From You</span></span>
                        <p>Please fill out the form and let us know about your concerns.We will try our best to
                            provide optimized solutions.</p>
                    </div>
                    <div class="contact-area">
                        <div class="btn-area mt-10 d-grid gap-6 align-items-center">
                            <div class="d-flex gap-3 align-items-center">
                                <div class="icon-box d-center">
                                    <i class="material-symbols-outlined mat-icon fs-five"> call </i>
                                </div>
                                <span>+(2) 578 - 365 - 379</span>
                            </div>
                            <div class="d-flex gap-3 align-items-center">
                                <div class="icon-box d-center">
                                    <i class="material-symbols-outlined mat-icon fs-five"> mail </i>
                                </div>
                                <span><a href="https://pixner.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c189a4adadae81a4b9a0acb1ada4efa2aeac">[email&#160;protected]</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 me-20 mt-7 mt-lg-0">
                    <form action="#" class="p-4">
                        <div class="form-inside p-4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="single-input text-start">
                                        <label for="contactName">Name</label>
                                        <input type="text" id="contactName" placeholder="Enter Your Name"
                                            autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="single-input text-start">
                                        <label for="contactEmail">Email</label>
                                        <input type="email" id="contactEmail" placeholder="Enter your email"
                                            autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="single-input text-start">
                                        <label for="contactSubject">Subject</label>
                                        <input type="text" id="contactSubject" placeholder="Enter Subject"
                                            autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="single-input text-start">
                                        <label for="contactMessage">Leave us a message</label>
                                        <textarea cols="4" rows="4" id="contactMessage"
                                            placeholder="Please type your Message here..."></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-4">
                                    <div class="btn-area">
                                        <button class="box-style btn-box">
                                            Send Massage
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us end -->

    <!-- Footer Area Start -->
    <footer class="footer-section">
        <div class="container-fluid">
            <div class="social-items">
                <ul class="d-flex justify-content-around">
                    <li class="box-style box-second justify-content-center">
                        <a href="https://www.facebook.com/" class="d-center gap-2">
                            <i class="fab fa-facebook-f"></i>
                            <span>Facebook</span>
                        </a>
                    </li>
                    <li class="box-style box-second justify-content-center">
                        <a href="https://www.instagram.com/" class="d-center gap-2">
                            <i class="fab fa-instagram"></i>
                            <span>Instagram</span>
                        </a>
                    </li>
                    <li class="box-style box-second justify-content-center">
                        <a href="https://www.linkedin.com/" class="d-center gap-2">
                            <i class="fab fa-linkedin-in"></i>
                            <span>linkedin</span>
                        </a>
                    </li>
                    <li class="box-style box-second justify-content-center">
                        <a href="https://twitter.com/" class="d-center gap-2">
                            <i class="fab fa-twitter"></i>
                            <span>Twitter</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="row align-items-center justify-content-center overflow-hidden">
                <div class="col-lg-6 position-relative">
                    <div class="box-items d-inline-flex flex-wrap position-absolute">
                        <div class="single-item"></div>
                        <div class="single-item"></div>
                        <div class="single-item"></div>
                        <div class="single-item"></div>
                        <div class="single-item active-item opacity-25"></div>
                        <div class="single-item"></div>
                        <div class="single-item"></div>
                        <div class="single-item"></div>
                        <div class="single-item active-item opacity-25"></div>
                        <div class="single-item"></div>
                        <div class="single-item"></div>
                        <div class="single-item"></div>
                        <div class="single-item"></div>
                        <div class="single-item"></div>
                        <div class="single-item"></div>
                        <div class="single-item"></div>
                        <div class="single-item"></div>
                        <div class="single-item active-item opacity-25"></div>
                        <div class="single-item"></div>
                        <div class="single-item"></div>
                        <div class="single-item"></div>
                        <div class="single-item"></div>
                        <div class="single-item"></div>
                        <div class="single-item"></div>
                    </div>
                    <div
                        class="row pt-120 pb-120 px-5 ps-md-15 ps-lg-0 align-items-center justify-content-start justify-content-lg-end">
                        <div class="col-xl-8 col-lg-10 col-md-8">
                            <div class="content-area visible-from-bottom">
                                <div class="section-area">
                                    <a href="index.html" class="fs-four brand-area">Gamestorm</a>
                                    <p class="mt-4 w-75">Gamestorm is a premier gaming studio creating
                                        innovative and engaging games for players of all ages. Offering a wide
                                        variety of gaming experiences.</p>
                                </div>
                                <div class="location-area mt-8 d-grid gap-7">
                                    <div class="d-flex gap-3 align-items-center">
                                        <div class="icon-box d-center">
                                            <i class="material-symbols-outlined mat-icon fs-fure"> location_on
                                            </i>
                                        </div>
                                        <div class="right-item">
                                            <h5>London</h5>
                                            <span>Al. Brucknera Aleksandra 63, Wrocław 51-410</span>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-3 align-items-center">
                                        <div class="icon-box d-center">
                                            <i class="material-symbols-outlined mat-icon fs-fure"> location_on
                                            </i>
                                        </div>
                                        <div class="right-item">
                                            <h5>New York</h5>
                                            <span>7012 Green Lake Ave., Poughkeepsie, NY 12601</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content-right visible-from-bottom pt-120 pb-120 px-5 ps-md-15 ps-lg-10 px-xxl-20">
                        <div class="row">
                            <div class="col-xl-8 col-lg-10 col-md-7">
                                <div class="main-content">
                                    <div class="head-area">
                                        <h4 class="mb-3">Stay updated with news on all our games</h4>
                                        <p>Want to be the first to know about new releases? Subscribe out
                                            newsletter!</p>
                                    </div>
                                    <form action="#">
                                        <div
                                            class="input-area mt-6 p-4 d-grid d-sm-flex align-items-center justify-content-between">
                                            <input type="text" placeholder="Enter Your Email">
                                            <div class="btn-area mt-6 mt-sm-0">
                                                <button class="box-style text-nowrap btn-box">

                                                    Send Massage
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="instagram-post mt-10">
                                        <h5 class="mb-5">Instagram post</h5>
                                        <ul class="d-flex gap-2">
                                            <li>
                                                <a href="index.html"><img src="/images/instagram-img-1.png"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="index.html"><img src="/images/instagram-img-2.png"
                                                        alt="img"></a>
                                            </li>
                                            <li>
                                                <a href="index.html"><img src="/images/instagram-img-3.png"
                                                        alt="img"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom py-8">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center">
                            <div class="copyright">
                                <p>Copyright © 2023 <a href="index.html">Gamestorm</a> - All Right Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!--==================================================================-->

    <!-- ==== js dependencies start ==== -->
    
    @include('master.js')

</body>

</html>