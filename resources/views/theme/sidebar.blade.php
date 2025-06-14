<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="/dashboard">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link" href="/users">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Users
                </a>
                <a class="nav-link" href="/category">
                    <div class="category-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Categories
                </a>
                <a class="nav-link" href="/brands">
                    <div class="category-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Brands
                </a>
                <a class="nav-link" href="/coupons  ">
                    <div class="category-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Coupons
                </a>
                <a class="nav-link" href="/blogs">
                    <div class="category-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Blogs
                </a>
                <a class="nav-link" href="/faqs">
                    <div class="category-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Faqs
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
           {{ auth()->user()->name}}
        </div>
    </nav>
</div>
