<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href={{ asset('assets/polindra21.png') }}>
    <title>SIKI POLINDRA-Admin | Paten</title>
    <link href={{ asset('assets/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
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
                                Selamat datang, {{ auth()->user()->nama_lengkap }}
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
    {{-- end of top naavbar --}}
    <div class="container-fluid">
        <div class="row">
            {{-- Side bar --}}
            @include('admin.layout.sidenav')
            {{-- end of sidebar --}}
            <div class="col-lg-10 mt-2">
                <div class="container bg-light rounded border pt-3">
                    <div class="card mb-3">
                        <div class="card-header text-center">
                            Rincian Data Paten
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <a href="/admin/paten/pemeriksaan-formalitas" class="link-dark link-underline link-underline-opacity-0">
                                        <div class="card shadow-sm" style="width: 18rem;">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center me-5">
                                                        <i class="bi bi-search float-start me-4" style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end">{{ $pf }}
                                                        </h3>
                                                        <span class="ms-4 d-flex justify-content-end">Pemeriksaan Formalitas</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm" style="width: 18rem;">
                                        <a href="/admin/paten/menunggu-tanggapan-formalitas" class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center ">
                                                        <i class="bi bi-recycle float-start me-3" style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end">{{ $mt }}
                                                        </h3>
                                                        <span class="ms-3 d-flex justify-content-end">Menunggu Tanggapan Formalitas</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm p-2" style="width: 18rem;">
                                        <a href="/admin/paten/masa-pengumuman" class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-exclamation-circle float-start me-3" style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end">{{ $mp }}
                                                        </h3>
                                                        <span class="ms-4 d-flex justify-content-end">Masa Pengumuman</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm" style="width: 18rem;">
                                        <a href="/admin/paten/menunggu-pembayaran-substansif" class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-question-square float-start me-2" style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end">{{ $mps }}
                                                        </h3>
                                                        <span class="ms-3 d-flex justify-content-end">Menunggu Pembayaran Substansif</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-3">
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm" style="width: 18rem;">
                                        <a href="/admin/paten/substansif-tahap-awal" class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-clipboard-data float-start me-5" style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end">{{ $staw }}
                                                        </h3>
                                                        <span class="ms-3 d-flex justify-content-end">Substansif Tahap Awal</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm" style="width: 18rem;">
                                        <a href="/admin/paten/substansif-tahap-lanjut" class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-clipboard-data float-start me-5" style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end">{{ $stl }}
                                                        </h3>
                                                        <span class="ms-3 d-flex justify-content-end">Substansif Tahap Lanjut</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm" style="width: 18rem;">
                                        <a href="/admin/paten/substansif-tahap-akhir" class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-clipboard-data float-start me-5" style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end">{{ $stak }}
                                                        </h3>
                                                        <span class="ms-3 d-flex justify-content-end">Substansif Tahap Akhir</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm" style="width: 18rem;">
                                        <a href="/admin/paten/menunggu-tanggapan-substansif" class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-question-square float-start me-2" style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end">{{ $mts }}
                                                        </h3>
                                                        <span class="ms-3 d-flex justify-content-end">Menunggu Tanggapan Substansif</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex flex-row mt-3">
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm p-1" style="width: 18rem;">
                                        <a href="/admin/paten/diberi" class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-check-square float-start pe-5 me-5" style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end">{{ $beri }}
                                                        </h3>
                                                        <span class="ms-5 d-flex justify-content-end">Diberi</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm p-1" style="width: 18rem;">
                                        <a href="/admin/paten/ditolak" class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-x-square float-start pe-5 me-5" style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end">{{ $tolak }}
                                                        </h3>
                                                        <span class="ms-5 d-flex justify-content-end">Ditolak</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container bg-light rounded border pt-3 mt-3">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show rounded" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    <h3 class="fw-normal font-family-Kokoro mb-3"><i class="bi bi-table me-3"></i>Daftar Paten</h3>
                    <table class="table table-hover font-family-Kokoro border rounded">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama lengkap</th>
                                <th scope="col">Jenis Paten</th>
                                <th scope="col">Judul paten</th>
                                <th scope="col">Tanggal pengajuan</th>
                                <th scope="col">Status paten</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($paten as $i => $p)
                                <tr>
                                    <th scope="row">{{ $i + 1 }}</th>
                                    <td>{{ $p->nama_lengkap }}</td>
                                    <td>{{ $p->jenis_paten }}</td>
                                    <td>{{ $p->judul_paten }}</td>
                                    <td>{{ $p->tanggal_permohonan }}</td>
                                    <td>{{ $p->status }}</td>
                                    <td><a href={{ Route('admin_paten.show', $p->id) }} class="btn btn-info"><i
                                                class="bi bi-eye"></i></a>
                                        <a href={{ Route('admin_paten.edit', $p->id) }} class="btn btn-warning"><i
                                                class="bi bi-pencil"></i></a>
                                        <a href={{ Route('admin_paten.delete', $p->id) }} class="btn btn-danger"
                                            onclick="return confirm('Apakah Kamu Yakin?')"><i
                                                class="bi bi-trash3"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
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
