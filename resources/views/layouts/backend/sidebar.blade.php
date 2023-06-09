        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="{{ route('admin.dashboard') }}">
                <img class="sidebar-card-illustration mb-2" style="width: 30px" src="{{ asset('images/logo.svg') }}"
                    alt="...">
                <div class="sidebar-brand-text mx-3">SIGBS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Fitur
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.datakecamatan') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Kelola Data Kecamatan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.banksampah') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Kelola Data Banksampah</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.datasampah') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Kelola Data Sampah</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="{{ asset('images/logo.svg') }}" alt="logo">
                <p class="text-center mb-2"><strong>Sistem Informasi Geografis Banksampah</strong> adalah
                    website yang memberikan informasi tentang lokasi dan data banksampah di Kota
                    Pontianak</p>
            </div>

        </ul>
        <!-- End of Sidebar -->




        {{-- <nav class="sidebar sidebar-offcanvas" id="sidebar">

    {{-- style="background-color: #41d1b9;" --}}
        {{-- <ul class="nav">
    <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
            <div class="nav-profile-image">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
                {{-- <img src="assets/images/faces/face1.jpg" alt="profile"> --}}
        {{-- <span class="login-status online"></span>
<!--change to offline or busy as needed-->
</div>
<div class="nav-profile-text d-flex flex-column">
    <span class="font-weight-bold mb-2">Admin Name</span>
    {{-- <span class="text-secondary text-small"></span> --}}
        {{-- </div>
<i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
</a>
</li>
<li class="nav-item">
    <a class="nav-link" data-bs-toggle="collapse" href="{{ route('admin.banksampah') }}" aria-expanded="false"
        aria-controls="ui-basic">
        <i class="material-icons">home</i>
        <span class="menu-title">Kelola Data Bank Sampah</span>
    </a>
</li> --}}
        {{-- 
<li class="nav-item">
    <a class="nav-link" data-bs-toggle="collapse" href="{{ route('admin.datasampah') }}" aria-expanded="false"
        aria-controls="ui-basic">

        <i class="material-icons">delete</i>

        <span class="menu-title">Kelola Data Sampah</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" data-bs-toggle="collapse" href="{{ route('admin.datakecamatan') }}" aria-expanded="false"
        aria-controls="ui-basic">
        <i class="material-icons">location_on</i>
        <span class="menu-title">Kelola Data Kecamatan</span>
    </a>
</li> --}}

        {{-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="{{ route('admin.map') }}" aria-expanded="false"
                aria-controls="ui-basic">
                <i class="bi bi-geo-alt-fill"></i>
                <span class="menu-title">Pemetaan</span>

            </a>
        </li> --}}
        {{-- <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
                <span class="menu-title">Forms</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
                <span class="menu-title">Charts</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="menu-title">Tables</span>
                <i class="mdi mdi-table-large menu-icon"></i>
            </a>
        </li>
        <li class="nav-item sidebar-actions">
            <span class="nav-link">
                <div class="border-bottom">
                    <h6 class="font-weight-normal mb-3">Projects</h6>
                </div>
                <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>
                <div class="mt-4">
                    <div class="border-bottom">
                        <p class="text-secondary">Categories</p>
                    </div>
                    <ul class="gradient-bullet-list mt-4">
                        <li>Free</li>
                        <li>Pro</li>
                    </ul>
                </div>
            </span>
        </li> 
</ul> 
{{-- </nav>  --}}
