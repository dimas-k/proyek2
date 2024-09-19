<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href={{ URL('storage/polindra21.png') }}>
    <title>SIKI POLINDRA-Admin | Paten</title>
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
                <img class="navbar-brand" src={{ URL('storage/polindra2.jpg') }}>
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
            <div class="col-lg-2 bg-light border mt-2 rounded">
                {{-- Side bar --}}
                <nav class="navbar navbar-expand-lg bg-light">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                            aria-labelledby="offcanvasNavbarLabel" style="width: 245px">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav flex-column justify-content-end flex-grow-1">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="/admin/dashboard"><i
                                                class="bi bi-house me-4"></i>Dasboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/admin/listadmin"><i
                                                class="bi bi-person me-4"></i>Admin</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/admin/paten"><i
                                                class="bi bi-table me-4"></i></i>Paten</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/admin/desain-industri"><i
                                                class="bi bi-table me-4"></i>DesainIndustri</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/admin/hak-cipta"><i
                                                class="bi bi-table me-4"></i></i>Hak Cipta</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            {{-- end of sidebar --}}
            <div class="col-lg-10">
                <div class="container bg-light rounded border pt-3 mt-2">
                    <a href="/admin/paten" class="link-dark link-underline link-underline-opacity-0 mb-3 "><i class="bi bi-arrow-left-circle mb-3" style="font-size: 30px;"></i></a>
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show rounded" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    <h3 class="fw-normal font-family-Kokoro mb-3 mt-1"><i class="bi bi-table me-3"></i>Daftar Paten</h3>
                    <table class="table table-hover font-family-Kokoro border rounded">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                    <th scope="col">Nama lengkap</th>
                                    <th scope="col">Jenis Paten</th>
                                    <th scope="col">Judul paten</th>
                                    <th scope="col">Tanggal pengajuan</th>
                                    <th scope="col">Paten Milik</th>
                                    <th scope="col">Status paten</th>
                                    <th scope="col">Status Cek Data</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cek as $i => $p)
                                <tr>
                                    <tr>
                                        <th scope="row">{{ ($cek->currentPage() - 1) * $cek->perPage() + $loop->iteration }}</th>
                                        <td>{{ $p->nama_lengkap }}</td>
                                        <td>{{ $p->jenis_paten }}</td>
                                        <td>{{ $p->judul_paten }}</td>
                                        <td>{{ \Carbon\Carbon::parse($p->tanggal_permohonan)->format('d-m-Y ') }}</td>
                                        <td>{{ $p->institusi }}</td>
                                        <td>{{ $p->status }}</td>
                                        <td>
                                            @if ($p->cek?->cek_data == 'Valid')
                                                <i class="bi bi-check-circle-fill" style="color: green"></i>
                                            @elseif($p->cek?->cek_data == 'Tidak Valid')
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
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <span class="d-flex justify-content-end mb-3 me-3">
                        {{ $cek->links() }}
                    </span>
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
