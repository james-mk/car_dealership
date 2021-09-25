<style>
    /* .nav-item {
        display: inline-block !important;
    }
    .nav-icon {
        display: block !important;
        text-align: right !important;
    } */
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('/backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Sumotrips</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2"
        alt="User Image">
    </div>
    <div class="info">
        <a href="#" class="d-block">The Hotel</a>
    </div>
    </div> --}}

    <!-- SidebarSearch Form -->
    {{-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> --}}

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->

            <li class="nav-item">
                <a href="{{route('home')}}" class="nav-link
                    ">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard

                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link ">
                    {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                    <i class="nav-icon fa fa-building" aria-hidden="true"></i>
                    <p>
                        Car Listings

                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="" class="nav-link
                   ">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Messages

                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                    <i class="nav-icon  fa fa-bicycle" aria-hidden="true"></i>
                    <p>
                        Enquiries

                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="nav-icon fa fa-users" aria-hidden="true"></i>
                    <p>
                        Master
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    {{-- <i class="nav-icon fas fa fa-table-alt"></i> --}}
                    <i class=" nav-icon fa fa-table" aria-hidden="true"></i>
                    <p>
                        Users

                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    {{-- <i class="nav-icon fas fa fa-table-alt"></i> --}}
                    <i class=" nav-icon fa fa-table" aria-hidden="true"></i>
                    <p>
                        Settings

                    </p>
                </a>
            </li>



        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
