<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="{{ asset('img/admin.png') }}"
             alt="Product Demo"
             class="brand-image img-circle elevation-3">
        <span class="brand-text">Admin Home</span>
    </a>

    <!-- Product Sidebar -->
    <div class="sidebar">
        <!-- Product Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-music"></i>
                        <p>
                            Product
                            <i class="right fas fa-angle-down"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="padding-left:15px" style="padding-left:15px" style="padding-left:15px" style="padding-left:15px" style="padding-left:15px">
                        <li class="nav-item">
                            <a href="{{ url('admin/index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/productCreate') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create a Product</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

    <!-- User Sidebar -->
    <div class="sidebar">
        <!-- User Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>
                            User
                            <i class="right fas fa-angle-down"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="padding-left:15px" style="padding-left:15px" style="padding-left:15px" style="padding-left:15px">
                        <li class="nav-item">
                            <a href="{{ url('admin/index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/productCreate') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create User</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

    <!-- Event Sidebar -->
    <div class="sidebar">
        <!-- Event Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-grin-stars"></i>
                        <p>
                            Event
                            <i class="right fas fa-angle-down"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="padding-left:15px" style="padding-left:15px" style="padding-left:15px">
                        <li class="nav-item">
                            <a href="{{ url('admin/index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Event List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/productCreate') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Revenue & Liabilities</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
