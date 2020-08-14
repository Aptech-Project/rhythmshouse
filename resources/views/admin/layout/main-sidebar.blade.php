<aside class="main-sidebar elevation-4" style="position: fixed; background-color: #2e3b46">
    <!-- Brand Logo -->
    <a href="{{ url('admin/index') }}" class="brand-link" style="background-color: #1a2732">
        <img src="{{ asset('img/Logo-black1.png') }}" alt="Managed Page" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text" style="color: ghostwhite">Manager Page</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background-color: #2e3b46">
        <!-- Sidebar user (optional) -->
        <ul class="nav nav-pills nav-sidebar flex-column user-panel mt-3 pb-3 mb-3 d-flex" data-widget="treeview"
            role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link" style="background-color: #2e3b46">
                    <img src="{{ asset('img/admin.png') }}" class="brand-image img-circle elevation-2" alt="User Image">
                    <p style="color: ghostwhite; background-color: #2e3b46">
                        &nbsp;&nbsp;{{ Auth::user()->name }}
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('web/index') }}" class="nav-link">
                            <i class="nav-icon fas"></i>
                            <p style="color: ghostwhite">Go to web homepage</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout')}}" class="nav-link">
                            <i class="nav-icon fas"></i>
                            <p style="color: ghostwhite">Log Out</p>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                    </form>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa fa-music" style="color: ghostwhite"></i>
                        <p style="color: ghostwhite">
                            Products
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/product/productCreate') }}" class="nav-link">
                                <i class="nav-icon fas"></i>
                                <p style="color: ghostwhite">Add Products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/product/productList') }}" class="nav-link">
                                <i class="nav-icon fas"></i>
                                <p style="color: ghostwhite">All Products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/product/productFavorite') }}" class="nav-link">
                                <i class="nav-icon fas"></i>
                                <p style="color: ghostwhite">Favorite Products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/event/eventList') }}" class="nav-link">
                                <i class="nav-icon fas"></i>
                                <p style="color: ghostwhite">Event</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa fa-list-ul " style="color: ghostwhite"></i>
                        <p style="color: ghostwhite">
                            Category
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/category/categoryList') }}" class="nav-link">
                                <i class="nav-icon fas"></i>
                                <p style="color: ghostwhite">All Category</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa fa-users" style="color: ghostwhite"></i>
                        <p style="color: ghostwhite">
                            Users
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/user/allUsers') }}" class="nav-link">
                                <i class="nav-icon fas"></i>
                                <p style="color: ghostwhite">All Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/user/message') }}" class="nav-link">
                                <i class="nav-icon fas"></i>
                                <p style="color: ghostwhite">Message</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa fa-cart-arrow-down" style="color: ghostwhite"></i>
                        <p style="color: ghostwhite">
                            Orders
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/order/listOrder') }}" class="nav-link">
                                <i class="nav-icon fas"></i>
                                <p style="color: ghostwhite">List Orders</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa fa-industry" style="color: ghostwhite"></i>
                        <p style="color: ghostwhite">
                            Revenue
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/revenue/partnerDept') }}" class="nav-link">
                                <i class="nav-icon fas"></i>
                                <p style="color: ghostwhite">Partner Dept</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/revenue/revenueDetails') }}" class="nav-link">
                                <i class="nav-icon fas"></i>
                                <p style="color: ghostwhite">Revenue Details</p>
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