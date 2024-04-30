<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href={{ asset('assets/polindra21.png') }}>
    <title>SIKI POLINDRA-Admin | Hak Cipta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                            Rincian Hak Cipta
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-row justify-content-center">
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm p-2" style="width: 18rem;">
                                        <a href="/admin/hak-cipta/tercatat"
                                            class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-check-square float-start pe-5 me-5"
                                                            style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-4 d-flex justify-content-end">{{ $tercatat }}
                                                        </h3>
                                                        <span class="ms-5  d-flex justify-content-end">Dicatat</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm p-2" style="width: 18rem;">
                                        <a href="/admin/hak-cipta/ditolak"
                                            class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-x-square float-start pe-5 me-5"
                                                            style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class=" d-flex justify-content-end ms-5">
                                                            {{ $tolak }}</h3>
                                                        <span
                                                            class=" d-flex justify-content-end ms-5">Ditolak</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm" style="width: 18rem;">
                                        <a href="/admin/hak-cipta/keterangan-belum-lengkap"
                                            class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-question-square float-start me-2"
                                                            style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="d-flex justify-content-end ms-5">
                                                            {{ $null }}</h3>
                                                        <span
                                                            class=" d-flex justify-content-end ms-5">Keterarangan Belum lengkap</span>
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
                    <h3 class="fw-normal font-family-Kokoro mb-3"><i class="bi bi-table me-3"></i>Daftar Hak Cipta
                    </h3>
                    <table class="table table-hover font-family-Kokoro">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama lengkap</th>
                                <th scope="col">Jenis Ciptaan</th>
                                <th scope="col">Judul Ciptaan</th>
                                <th scope="col">Tanggal pengajuan</th>
                                <th scope="col">Status Hak Cipta</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hak_cipta as $i => $hk)
                                <tr>
                                    <th scope="row">{{ $i + 1 }}</th>
                                    <td>{{ $hk->nama_lengkap }}</td>
                                    <td>{{ $hk->jenis_ciptaan }}</td>
                                    <td>{{ $hk->judul_ciptaan }}</td>
                                    <td>{{ $hk->tanggal_permohonan }}</td>
                                    <td>{{ $hk->status }}</td>
                                    <td><a href={{ Route('admin_hakcipta.show', $hk->id) }} class="btn btn-info"><i
                                                class="bi bi-eye"></i></a>
                                        <a href={{ Route('admin_hakcipta.edit', $hk->id) }} class="btn btn-warning"><i
                                                class="bi bi-pencil"></i></a> <a
                                            href={{ Route('admin_hakcipta.delete', $hk->id) }} class="btn btn-danger"
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
