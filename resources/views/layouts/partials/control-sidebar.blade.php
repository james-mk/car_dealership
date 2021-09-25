<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>Welcome, </h5>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="fa fa-user-alt" aria-hidden="true"></i>
                        <p>Profile</p>
                    </a>
                </li>


                <li class="nav-item">
                    <form method="POST" action="{{route('logout')}}">
                        @csrf
                        <a href="" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class=" nav-icon fa fa-sign-out-alt" aria-hidden="true"></i>
                            <p>logout</p>
                        </a>
                    </form>
                </li>

            </ul>
        </nav>
    </div>
</aside>
