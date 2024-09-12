<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>

                <a class="nav-link" href="{{route('dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>


                <a class="nav-link collapsed" href="{{route('category.list')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-th-large"></i></div>
                    Category
                </a>
                
                <a class="nav-link collapsed" href="{{route('product.list')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                    Product
                </a>


                <a class="nav-link collapsed" href="{{route('product.category.list')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tags"></i></div>
                    Product Category
                </a>

                <a class="nav-link collapsed" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                    Order
                </a>

                <a class="nav-link collapsed" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-info-circle"></i></div>
                    Order Details
                </a>

                <a class="nav-link collapsed" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    Customer
                </a>

                <hr class="text-white my-2">
                <div class="sb-sidenav-menu-heading">External</div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
                    Report
                </a>

                <a class="nav-link collapsed" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
                    Discount
                </a>

                <a class="nav-link collapsed" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
                    Setting
                </a>

                <a class="nav-link collapsed" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                    Sign-Out
                </a>

            </div>
        </div>
    </nav>
</div>