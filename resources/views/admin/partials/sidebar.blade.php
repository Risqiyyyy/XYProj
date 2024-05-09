 <!-- ========== Left Sidebar Start ========== -->
 <div class="vertical-menu">

    <div data-simplebar="" class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('xyars') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('home') }}" class="waves-effect" target="_blank">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Lihat Web</span>
                    </a>
                </li>
                <li class="menu-title" key="t-apps">Produk</li>
                <li>
                    <a href="{{ route('xyars.kategori') }}" class="waves-effect">
                        <i class="bx bxl-product-hunt"></i>
                        <span key="t-layouts">Kategori Produk</span>
                    </a>
                </li>
                <li>
                    <a href="calendar.html" class="waves-effect">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-layouts">Lits Produk</span>
                    </a>
                </li>

                <li class="menu-title" key="t-apps">Transaksi</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span key="t-dashboards">Riwayat</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="calendar.html" key="t-tui-calendar">Transaksi Sukses</a></li>
                        <li><a href="calendar-full.html" key="t-full-calendar">Transaksi Gagal</a></li>
                    </ul>
                </li>

                <li class="menu-title" key="t-apps">Sistem</li>
                <li>
                    <a href="chat.html" class="waves-effect">
                        <i class="bx bx-bitcoin"></i>
                        <span key="t-chat">Banking</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user"></i>
                        <span key="t-dashboards">Member</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('xyars.user') }}" key="t-tui-calendar">User</a></li>
                        <li><a href="calendar-full.html" key="t-full-calendar">Admin</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
