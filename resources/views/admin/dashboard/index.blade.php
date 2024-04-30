<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href={{ asset('assets/polindra21.png') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <title>SIKI POLINDRA-Admin | Dashboard</title>
</head>

<body>
    {{-- Top nav bar --}}
    <div class="container-fluid border">
        <nav class="navbar navbar-expand bg-body-tertiary">
            <div class="container-fluid">
                <img class="navbar-brand" src={{ asset('assets/polindra2.jpg') }}>
                <a class="navbar-brand fs-6 fw-normal font-family-Kokoro" href="#">Sistem Informasi Kekayaan
                    Intelektual<br>Politeknik Negeri Indramayu</a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Selamat Datang, {{ auth()->user()->nama_lengkap }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="/logout"><i class="bi bi-arrow-bar-left me-2"></i>Log
                                        Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    {{-- end of top navbar --}}
    <div class="container-fluid">
        <div class="row">
            {{-- Side bar --}}
            @include('admin.layout.sidenav')
            {{-- end of sidebar --}}
            {{-- ki --}}
            <div class="col-lg-10 mt-2">
                <div class="card">
                    <div class="card-header text-center">
                        List Kekayaan Intelektual
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-center">
                            <div class="col-xl-3 col-sm-6 col-12">
                                <div class="card shadow-sm" style="width: 18rem;">
                                    
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="align-self-center">
                                                <i class="bi bi-check-square float-start me-5"
                                                    style="font-size: 50px;"></i>
                                            </div>
                                            <div class="align-self-center">
                                                <h3 class="ms-4 d-flex justify-content-end">{{ $paten->count() }}</h3>
                                                <span class="ms-4 d-flex justify-content-end">Pengajuan Paten</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-12">
                                <div class="card shadow-sm" style="width: 18rem;">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="align-self-center">
                                                <i class="bi bi-check-square float-start me-3"
                                                    style="font-size: 50px;"></i>
                                            </div>
                                            <div class="align-self-center">
                                                <h3 class="ms-4 d-flex justify-content-end">{{ $hc->count() }}</h3>
                                                <span class="ms-4 d-flex justify-content-end">Pengajuan Hak Cipta</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-12">
                                <div class="card shadow-sm" style="width: 18rem;">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="align-self-center">
                                                <i class="bi bi-check-square float-start me-1"
                                                    style="font-size: 50px;"></i>
                                            </div>
                                            <div class="align-self-center">
                                                <h3 class="ms-4 d-flex justify-content-end">{{ $di->count() }}</h3>
                                                <span class="ms-3 d-flex justify-content-end">Pengajuan Desain Industri</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end of ki --}}
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js"
            integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous">
        </script>
</body>

</html>
