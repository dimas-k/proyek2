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
                                    <a href="/admin/paten/pemeriksaan-formalitas"
                                        class="link-dark link-underline link-underline-opacity-0">
                                        <div class="card shadow-sm" style="width: 18rem;">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center me-5">
                                                        <i class="bi bi-search float-start me-4"
                                                            style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end">{{ $pf }}
                                                        </h3>
                                                        <span class="ms-4 d-flex justify-content-end">Pemeriksaan
                                                            Formalitas</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm" style="width: 18rem;">
                                        <a href="/admin/paten/menunggu-tanggapan-formalitas"
                                            class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center ">
                                                        <i class="bi bi-recycle float-start me-3"
                                                            style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end">{{ $mt }}
                                                        </h3>
                                                        <span class="ms-3 d-flex justify-content-end">Menunggu Tanggapan
                                                            Formalitas</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm p-2" style="width: 18rem;">
                                        <a href="/admin/paten/masa-pengumuman"
                                            class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-exclamation-circle float-start me-3"
                                                            style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end">{{ $mp }}
                                                        </h3>
                                                        <span class="ms-4 d-flex justify-content-end">Masa
                                                            Pengumuman</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm" style="width: 18rem;">
                                        <a href="/admin/paten/menunggu-pembayaran-substansif"
                                            class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-question-square float-start me-2"
                                                            style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end">{{ $mps }}
                                                        </h3>
                                                        <span class="ms-3 d-flex justify-content-end">Menunggu
                                                            Pembayaran Substansif</span>
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
                                        <a href="/admin/paten/substansif-tahap-awal"
                                            class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-clipboard-data float-start me-5"
                                                            style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end">{{ $staw }}
                                                        </h3>
                                                        <span class="ms-3 d-flex justify-content-end">Substansif Tahap
                                                            Awal</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm" style="width: 18rem;">
                                        <a href="/admin/paten/substansif-tahap-lanjut"
                                            class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-clipboard-data float-start me-5"
                                                            style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end">{{ $stl }}
                                                        </h3>
                                                        <span class="ms-3 d-flex justify-content-end">Substansif Tahap
                                                            Lanjut</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm" style="width: 18rem;">
                                        <a href="/admin/paten/substansif-tahap-akhir"
                                            class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-clipboard-data float-start me-5"
                                                            style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end">
                                                            {{ $stak }}
                                                        </h3>
                                                        <span class="ms-3 d-flex justify-content-end">Substansif Tahap
                                                            Akhir</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm" style="width: 18rem;">
                                        <a href="/admin/paten/menunggu-tanggapan-substansif"
                                            class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-question-square float-start me-2"
                                                            style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end">
                                                            {{ $mts }}
                                                        </h3>
                                                        <span class="ms-3 d-flex justify-content-end">Menunggu
                                                            Tanggapan Substansif</span>
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
                                        <a href="/admin/paten/diberi"
                                            class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-check-square float-start pe-5 me-5"
                                                            style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end">
                                                            {{ $beri }}
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
                                        <a href="/admin/paten/ditolak"
                                            class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-x-square float-start pe-5 me-5"
                                                            style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end">
                                                            {{ $tolak }}
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
                    <div class="d-flex justify-content-end mb-3">
                        <form action="/admin/paten/cari" method="GET">
                            <div class="row g-2 align-items-center">
                                <div class="col-auto">
                                    <label for="" class="col-form-label">Cari Paten</label>
                                </div>
                                <div class="col-auto">
                                    <input type="text" id="" class="form-control" aria-describedby=""
                                        name="cari">
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary ">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover font-family-Kokoro border rounded">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama lengkap</th>
                                    <th scope="col">Jenis Paten</th>
                                    <th scope="col">Judul paten</th>
                                    <th scope="col">Institusi</th>
                                    <th scope="col">Tanggal pengajuan</th>
                                    <th scope="col">Status paten</th>
                                    <th scope="col">Status Cek Data</th>
                                    <th scope="col">Keterangan</th>
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
                                        <td>{{ $p->institusi }}</td>
                                        <td>{{ \Carbon\Carbon::parse($p->tanggal_permohonan)->format('d-m-Y ') }}</td>
                                        <td>{{ $p->status }}</td>
                                        <td>
                                            @if ($p->cek?->cek_data == 'Benar')
                                                <i class="bi bi-check-circle-fill" style="color: green"></i>
                                            @elseif($p->cek?->cek_data == 'Salah')
                                                <i class="bi bi-times-circle" style="color: red"></i>
                                            @else
                                                <i class="bi bi-dash-circle-fill"
                                                    style="color: yellow"></i>{{ $p->cek?->cek_data }}
                                            @endif
                                        </td>
                                        <td>
                                            @if ($p->cek?->keterangan == '')
                                                Data Paten Belum Dicek
                                            @else
                                                {{ $p->cek?->keterangan }}
                                            @endif
                                        </td>
                                        <td><a href={{ Route('admin_paten.show', $p->id) }} class="btn btn-info"><i
                                                    class="bi bi-eye"></i></a>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal{{ $p->id }}">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <div class="modal fade" id="exampleModal{{ $p->id }}"
                                                tabindex="-1" data-bs-backdrop="static"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable">
                                                    <div class="modal-content p-2">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel"> Edit
                                                                status paten {{ $p->nama_lengkap }}</h1>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ Route('admin_paten.update', $p->id) }}"
                                                                enctype="multipart/form-data" method="POST">
                                                                @csrf
                                                                <div class="mb-3">
                                                                    <label for=""
                                                                        class="form-label">Status
                                                                        Paten</label>
                                                                    <select
                                                                        class="form-select @error('status') is-invalid @enderror"
                                                                        aria-label="Default select example"
                                                                        name="status">
                                                                        <option selected>Pilih Status Paten</option>
                                                                        <option value="Pemeriksaan Formalitas">
                                                                            Pemeriksaan Formalitas</option>
                                                                        <option
                                                                            value="Menunggu Tanggapan Formalitas">
                                                                            Menunggu Tanggapan Formalitas</option>
                                                                        <option value="Masa pengumuman">Masa
                                                                            pengumuman
                                                                        </option>
                                                                        <option
                                                                            value="Menunggu Pembayaran Substasif">
                                                                            Menunggu Pembayaran Substasif</option>
                                                                        <option value="Substansif Tahap Awal">
                                                                            Substansif Tahap Awal</option>
                                                                        <option value="Substansif Tahap Lanjut">
                                                                            Substansif Tahap Lanjut</option>
                                                                        <option value="Substansif Tahap Akhir">
                                                                            Substansif Tahap Akhir</option>
                                                                        <option
                                                                            value="Menunggu Tanggapan Substansif">
                                                                            Menunggu Tanggapan Substansif</option>
                                                                        <option value="Diberi">Diberi</option>
                                                                        <option value="Ditolak">Ditolak</option>
                                                                    </select>
                                                                    @error('status')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for=""
                                                                        class="form-label">Serifikat
                                                                        Paten</label>
                                                                    <input type="file"
                                                                        class="form-control @error('sertifikat_paten') is-invalid @enderror"
                                                                        id="" placeholder=""
                                                                        name="sertifikat_paten">
                                                                    @error('sertifikat_paten')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-outline-secondary"
                                                                        data-bs-dismiss="modal">Batal</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Update</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop{{ $p->id }}">
                                                <i class="bi bi-trash3"></i>
                                            </button>
                                            <div class="modal fade" id="staticBackdrop{{ $p->id }}"
                                                data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                                                Peringatan</h1>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Anda yakin akan menghapus paten milik
                                                            {{ $p->nama_lengkap }},
                                                            dengan judul paten "{{ $p->judul_paten }}" ?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline-secondary"
                                                                data-bs-dismiss="modal">Batal</button>
                                                            <a href={{ Route('admin_paten.delete', $p->id) }}
                                                                class="btn btn-danger">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <a href={{ Route('admin_paten.delete', $p->id) }} class="btn btn-danger"
                                            onclick="return confirm('Apakah Kamu Yakin?')"><i
                                                class="bi bi-trash3"></i></a> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $paten->links() }}
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
