<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the  -->
        <li class="nav-item">
            <a href="{{ route('admin') }}" class="nav-link {{ Route::is('admin') ? 'active' : '' }}">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                    Admin Dashboard
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('pariwisata.index') }}" class="nav-link {{ Route::is('pariwisata.index') ? 'active' : '' }}">
                <i class="nav-icon fas fa-hotel"></i>
                <p>
                    Pariwisata
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('galery.index') }}" class="nav-link {{ Route::is('galery.index') ? 'active' : '' }}">
                <i class="nav-icon fas fa-th-large"></i>
                <p>
                    Galery
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('pesanan') }}" class="nav-link {{ Route::is('pesanan') ? 'active' : '' }}">
                <i class="nav-icon fas fa-file-invoice"></i>
                <p>
                    Pesanan Masuk
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('payment.index') }}" class="nav-link {{ Route::is('payment.index') ? 'active' : '' }}">
                <i class="nav-icon fas fa-money-bill-wave"></i>
                <p>
                    Metode Pembayaran
                </p>
            </a>
        </li>
    </ul>
</nav>
<!-- /.sidebar-menu -->
