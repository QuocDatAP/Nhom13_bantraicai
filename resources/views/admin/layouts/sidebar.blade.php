<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
            target="_blank">
            <img src="./assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Material Dashboard 2</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
<<<<<<< HEAD
<<<<<<< HEAD
                <a class="nav-link text-white active bg-gradient-primary" href="./pages/dashboard.html">
=======
                <a class="nav-link text-white   {{ request()->routeIs('dashboard') ? 'bg-gradient-primary active' : '' }}"
                    href="{{ route('dashboard') }}">
>>>>>>> create_role
=======
                <a class="nav-link text-white   {{ request()->routeIs('dashboard') ? 'bg-gradient-primary active' : '' }}"
                    href="{{ route('dashboard') }}">
>>>>>>> crud_user
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
<<<<<<< HEAD
<<<<<<< HEAD
                <a class="nav-link text-white " href="./pages/tables.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1">Tables</span>
=======
                <a class="nav-link text-white {{ request()->routeIs('roles.*') ? 'bg-gradient-primary active' : '' }} "
                    href="{{ route('roles.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1">Role</span>
>>>>>>> create_role
=======
                <a class="nav-link text-white {{ request()->routeIs('roles.*') ? 'bg-gradient-primary active' : '' }} "
                    href="{{ route('roles.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1">Role</span>
>>>>>>> crud_user
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('users.*') ? 'bg-gradient-primary active' : '' }} "
                    href="{{ route('users.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">receipt_long</i>
                    </div>
<<<<<<< HEAD
<<<<<<< HEAD
                    <span class="nav-link-text ms-1">Billing</span>
=======
                    <span class="nav-link-text ms-1">User</span>
>>>>>>> create_role
=======
                    <span class="nav-link-text ms-1">User</span>
>>>>>>> crud_user
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="./pages/virtual-reality.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">view_in_ar</i>
                    </div>
<<<<<<< HEAD
<<<<<<< HEAD
                    <span class="nav-link-text ms-1">Virtual Reality</span>
=======
                    <span class="nav-link-text ms-1">Product</span>
>>>>>>> create_role
=======
                    <span class="nav-link-text ms-1">Product</span>
>>>>>>> crud_user
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('categories.*') ? 'bg-gradient-primary active' : '' }} "
                    href="{{ route('categories.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
                    </div>
<<<<<<< HEAD
<<<<<<< HEAD
                    <span class="nav-link-text ms-1">RTL</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="./pages/notifications.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">notifications</i>
                    </div>
                    <span class="nav-link-text ms-1">Notifications</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages
                </h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="./pages/profile.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="./pages/sign-in.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">login</i>
                    </div>
                    <span class="nav-link-text ms-1">Sign In</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="./pages/sign-up.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">assignment</i>
                    </div>
                    <span class="nav-link-text ms-1">Sign Up</span>
=======
                    <span class="nav-link-text ms-1">Category</span>
>>>>>>> crud_user
                </a>
            </li>

        </ul>
    </div>
<<<<<<< HEAD
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
            <a class="btn bg-gradient-primary mt-4 w-100"
                href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade
                to pro</a>
        </div>
    </div>
=======
                    <span class="nav-link-text ms-1">Category</span>
                </a>
            </li>

        </ul>
    </div>

>>>>>>> create_role
=======

>>>>>>> crud_user
</aside>
