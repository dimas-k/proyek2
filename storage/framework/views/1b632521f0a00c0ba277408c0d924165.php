<div class="app-header header sticky">
    <div class="container-fluid main-container">
        <div class="d-flex">
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
            <!-- sidebar-toggle-->
            <a class="logo-horizontal " href="/dosen/dashboard">
                <img src=<?php echo e(asset('assets/polindra21.png')); ?> class="header-brand-img desktop-logo" alt="logo">
                <img src=<?php echo e(asset('assets-user/images/brand/logo-no-bg-1.png')); ?> class="header-brand-img light-logo1"
                    alt="logo" style="width: 220px">
            </a>
            <!-- LOGO -->
            
            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                
                <!-- SEARCH -->
                <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                    aria-controls="navbarSupportedContent-4" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                </button>
                <div class="navbar navbar-collapse responsive-navbar p-0">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                        <div class="d-flex order-lg-2">
                            <!-- SIDE-MENU -->
                            <div class="dropdown d-flex profile-1">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                    Selamat datang, <?php echo e(auth()->user()->nama_lengkap); ?>

                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <div class="drop-heading">
                                        <div class="text-center">
                                            <h5 class="text-dark mb-0 fs-14 fw-semibold"><?php echo e(auth()->user()->nama_lengkap); ?></h5>
                                            <small class="text-muted"><?php echo e(auth()->user()->jabatan); ?></small> 
                                        </div>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <a class="dropdown-item" href="/dosen/user/lihat/">
                                        <i class="dropdown-icon fe fe-user"></i> Profile
                                    </a>
                                    
                                    <a class="dropdown-item" href="/logout/dosen">
                                        <i class="dropdown-icon fe fe-alert-circle"></i> Log out
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH D:\POLITEKNIK NEGERI INDRAMAYU\proyek2\resources\views/dosen/layout/header.blade.php ENDPATH**/ ?>