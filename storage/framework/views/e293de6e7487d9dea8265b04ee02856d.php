<style>
    .navbar .container {
        display: flex;
        justify-content: flex-start !important;
        align-items: center;
        
    } 

    .navbar-brand {
        flex-shrink: 1;
        text-align: left;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .navbar-toggler {
        flex-shrink: 0;
        margin-left: auto !important;
    }

    img.navbar-brand {
        flex-shrink: 0;
        margin-right: 4px;
        max-height: 50px;
    }

    Tambahkan aturan untuk elemen navbar-collapse */
    .navbar-collapse {
        flex-basis: 100%; 
        flex-grow: 1; 
        transition: height 0.5s ease; 
    }

    .navbar-collapse.collapse.show {
        display: block !important; 
    }

    /* Penyesuaian untuk tampilan kecil */
    @media (max-width: 740px) {
        .navbar-brand {
            font-size: 14px !important;
            
        }

        .navbar img.navbar-brand {
            max-height: 55px !important;
            /* margin-right: 4px !important; */
        }

        .navbar-toggler {
            margin-left: 0;
        }

        /* Pastikan menu dropdown muncul di bawah */
        .navbar-collapse {
            flex-wrap: wrap; 
        }

        .nav-item {
            width: 100%; /
            text-align: left; 
        }
    }
</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary shadow mb-5 bg-body-tertiary bg-white fixed-top navbar-inverse">
    <div class="container d-flex align-items-center">
        <img class="navbar-brand" src="<?php echo e(asset('assets/logo-polindra.png')); ?>" style="height: 50px;">

        <a class="navbar-brand fs-6 fw-normal font-family-Kokoro ms-2" href="/">Sistem Informasi Kekayaan
            Intelektual<br>Politeknik Negeri Indramayu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2"
                        aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2"
                        href="/paten">Paten</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2"
                        href="/hak-cipta">Hak Cipta</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2"
                        href="/desain-industri">Desain Industri</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2"
                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tentang SIKI
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2"
                                href="/visi-misi">Visi dan Misi P3M</a></li>
                        <li><a class="dropdown-item fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2"
                                href="/struktur-organisasi">Struktur Organisasi</a></li>
                        <li><a class="dropdown-item fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2"
                                href="/panduan">Panduan</a></li>
                        <li><a class="dropdown-item fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2"
                                href="/disclaimer">Disclaimer</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2" href="/login"
                        target="_blank"><button class="btn btn-outline-primary btn-sm">Login</button></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH D:\coolyeah\proyek_ki_polindra\proyek2\resources\views/layout/nav.blade.php ENDPATH**/ ?>