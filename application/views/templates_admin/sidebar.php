<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu" style="background:dark;">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Admin Pengaduan</div>
                    <a class="nav-link" href="<?= base_url('Admin')?>">
                        <div class="sb-nav-link-icon"><i class="fa-sharp fa-regular fa-circle-user"></i></i></i></div>
                        Dashboard Admin
                    </a>
                    <a class="nav-link" href="<?= base_url('admin/data_petugas')?>">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-landmark"></i></div>
                        Data Petugas
                    </a>
                    <a class="nav-link" href="<?= base_url('admin/data_pengaduan')?>">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-folder-open"></i></div>
                        Data pengaduan  
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                Authentication
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="login.html">Login</a>
                                    <a class="nav-link" href="register.html">Register</a>
                                    <a class="nav-link" href="password.html">Forgot Password</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                Error
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="401.html">401 Page</a>
                                    <a class="nav-link" href="404.html">404 Page</a>
                                    <a class="nav-link" href="500.html">500 Page</a>
                                </nav>
                            </div>
                        </nav>
                    </div>
                    <a class="nav-link" href="<?= base_url('admin/kategori')?>">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-user-secret"></i></div>
                        Kategori
                    </a>
                </div>
            </div>
        </nav>
    </div>