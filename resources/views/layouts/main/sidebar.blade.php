<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard.dashboard') }}" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> 
                        </a>
                    </li>
                    <li>
                        <a href="#ordermenu" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span> </a>
                        <ul class="collapse nav flex-column ms-1" id="ordermenu" data-bs-parent="#menu">
                            <li>
                                <a href="{{ route('order.index') }}" class="nav-link px-0"> <span class="d-none d-sm-inline">Order</span></a>
                            </li>
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Purchase Order</span> </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-truck"></i> <span class="ms-1 d-none d-sm-inline">Shipper</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="{{ route('shipper.index') }}" class="nav-link px-0"> <span class="d-none d-sm-inline">Shipper</span> </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Shipper order</span> </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('product.index') }}" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> 
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('customer.index') }}" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('supplier.index') }}" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Supplier</span> 
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('employee.index') }}" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Employee</span> 
                        </a>
                    </li>
                </ul>
                <hr>
                
            </div>
        </div>
        <div class="col py-3">
            <!-- yield content main -->
            @yield('content')
        </div>
    </div>
</div>