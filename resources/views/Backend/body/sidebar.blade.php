
  <div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 sidebar-bg">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Dashboard</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="{{ url('admin/login') }}" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="sidebar-text ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                  <i class="fs-4 bi-speedometer2"></i> <span class="sidebar-text ms-1 d-none d-sm-inline">
                                Manage Products</span> <i class="fa-solid fa-plus"></i> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="{{ route('categoryAdd') }}" class="nav-link px-0"> <span class="sidebar-text d-none d-sm-inline">
                                    Categories</span>  </a>
                            </li>
                            <li>
                                <a href="{{ route('unitAdd') }}" class="nav-link px-0"> <span class="sidebar-text d-none d-sm-inline">Units</span></a>
                            </li>
                            <li>
                                <a href="{{ route('texAdd') }}" class="nav-link px-0"> <span class="sidebar-text d-none d-sm-inline">
                                    Taxes</span></a>
                            </li>
                            <li>
                                <a href="{{ route('productHome') }}" class="nav-link px-0"> <span class="sidebar-text d-none d-sm-inline">
                                    Products</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>


            </div>
        </div>
        <div class="col py-3">
            @yield('content')
        </div>
    </div>
</div>
