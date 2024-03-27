
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/avatar5.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Product
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('products.index')}}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('products.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New Product</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Employee
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('employees.index')}}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Employee</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('employees.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New Employee</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            User
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('user1.index')}}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('user1.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New User</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Invoice
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('invoices.index')}}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Invoice</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('invoices.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New Invoice</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Invoice Description
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('invoicedescriptions.index')}}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All invoice_descriptions</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('invoicedescriptions.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New invoice_descriptions</p>
                            </a>
                        </li>
                    </ul>
                </li>




                

                <li class="nav-item">
                    <a href="/logout" class="nav-link">
                        <i class="nav-icon far fa-arrow-alt-circle-left"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
