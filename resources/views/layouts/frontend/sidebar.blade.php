<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">

        </div>
        <div class="sidebar-brand-text mx-3">SIGBS <sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link active" href={{ route('sigbs.index') }}>
            <i class="fas fa-user-ninja"></i>
            <span>Pemetaan</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link active" href={{ route('sigbs.index') }}>
            <i class="fas fa-piggy-bank"></i>
            <span>Lihat Data Banksampah</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link active" href={{ route('sigbs.index') }}>
            <i class="fas fa-piggy-bank"></i>
            <span>Lihat Data Sampah</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-money-bill-wave-alt"></i>
            <span>Lihat Kecamatan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">daftar kecamatan</h6>
                <a class="collapse-item" href={{ route('sigbs.index') }}>Pontianak Timur</a>
                <a class="collapse-item" href={{ route('sigbs.index') }}>Pontianak Tenggara</a>
                <a class="collapse-item" href={{ route('sigbs.index') }}>Pontianak Selatan</a>
                <a class="collapse-item" href={{ route('sigbs.index') }}>Pontianak Barat</a>
                <a class="collapse-item" href={{ route('sigbs.index') }}>Pontianak Kota</a>
                <a class="collapse-item" href={{ route('sigbs.index') }}>Pontianak Utara</a>


            </div>
        </div>
    </li>

    <li class="nav-item active">
        <a class="nav-link active" href={{ route('sigbs.index') }}>
            <i class="fas fa-piggy-bank"></i>
            <span>Tentang Kami</span></a>
    </li>













    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
