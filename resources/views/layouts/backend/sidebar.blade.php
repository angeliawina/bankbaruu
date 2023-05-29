<nav class="sidebar sidebar-offcanvas" id="sidebar">
    {{-- style="background-color: #41d1b9;" --}}
    <ul class="nav">
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
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">Admin Name</span>
                    {{-- <span class="text-secondary text-small"></span> --}}
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="{{ route('admin.banksampah') }}" aria-expanded="false"
                aria-controls="ui-basic">
                <i class="material-icons">home</i>
                <span class="menu-title">Kelola Data Bank Sampah</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="{{ route('admin.datasampah') }}" aria-expanded="false"
                aria-controls="ui-basic">

                <i class="material-icons">delete</i>

                <span class="menu-title">Kelola Data Sampah</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="{{ route('admin.datakecamatan') }}"
                aria-expanded="false" aria-controls="ui-basic">
                <i class="material-icons">location_on</i>
                <span class="menu-title">Kelola Data Kecamatan</span>
            </a>
        </li>

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
        </li> --}}
    </ul>
</nav>
