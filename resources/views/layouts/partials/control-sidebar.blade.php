<div>


    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Welcome, {{auth()->user()->first_name}} {{auth()->user()->last_name}}</h5>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href=""
                            class="nav-link {{ request()->is('admin/profile') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Profile
                            </p>
                        </a>
                    </li>


                    <li class="nav-item">
                        <form method="POST" action="{{route('logout')}}">
                            @csrf
                            <a href="{{route('logout')}}" class="nav-link"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                                <i class=" nav-icon fa fa-sign-out-alt" aria-hidden="true"></i>

                                <p>
                                    logout

                                </p>
                            </a>
                        </form>
                    </li>

                </ul>
            </nav>
        </div>
    </aside>




</div>
