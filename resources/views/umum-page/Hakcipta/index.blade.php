<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="shortcut icon" href={{ asset('assets/polindra21.png') }}>
    <title>SIKI POLINDRA | Hak-Cipta</title>
</head>

<body>
    {{-- nav --}}
    @include('layout.nav')
    {{-- end nav --}}

    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-sm-7 col-13">
                <div class="card shadow-sm p-2" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-3 mt-3 fw-normal font-family-Kokoro p-3">Total Permohonan
                            Hak Cipta</h5>
                        <p class="card-text text-center fs-1 mt-2 mb-3 fw-normal font-family-Kokoro p-1 fs-1">
                            {{ $itung }}</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-sm-8 col-10">
                <div class="card shadow-sm " style="width: 46rem;">
                    <div class="card-body">
                        <h5 class="card-title mb-3 mt-3 fw-normal font-family-Kokoro ">Cari Hak Cipta</h5>
                        <form action={{ route('hc.cari') }} method="GET">
                            @csrf
                            <div class="mb-1 row">
                                <label for=""
                                    class="col-sm-2 col-form-label fw-normal font-family-Kokoro">Judul Hak Cipta</label>
                                <div class="col-xxl-10">
                                    <input type="search"
                                        class="form-control form-control-sm fw-normal font-family-Kokoro" name="cari_hc">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for=""
                                    class="col-sm-2 col-form-label fw-normal font-family-Kokoro">Nama Invensi</label>
                                <div class="col-xxl-10">
                                    <input type="search"
                                        class="form-control form-control-sm fw-normal font-family-Kokoro"
                                        id="" name="cari_nama">
                                </div>
                            </div>
                            <button type="button"
                                class="btn btn-primary mb-2 mt-3 fw-normal font-family-Kokoro ">Cari</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card shadow-sm p-2" style="width: 18rem;">
                    <a href="/hak-cipta/tercatat" class="link-dark link-underline link-underline-opacity-0">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="align-self-center me-5">
                                    <i class="bi bi-check-square float-start me-5" style="font-size: 50px;"></i>
                                </div>
                                <div class="align-self-center">
                                    <h3 class="ms-5 d-flex justify-content-end">{{ $tercatat }}
                                    </h3>
                                    <span class="ms-4 d-flex justify-content-end">Tercatat</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card shadow-sm p-2" style="width: 18rem;">
                    <a href="/hak-cipta/ditolak" class="link-dark link-underline link-underline-opacity-0">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="align-self-center me-5">
                                    <i class="bi bi-x-square float-start me-5" style="font-size: 50px;"></i>
                                </div>
                                <div class="align-self-center">
                                    <h3 class="ms-5 d-flex justify-content-end">{{ $tolak }}
                                    </h3>
                                    <span class="ms-4 d-flex justify-content-end">Ditolak</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card shadow-sm" style="width: 18rem;">
                    <a href="/hak-cipta/keterangan-belum-lengkap" class="link-dark link-underline link-underline-opacity-0">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="align-self-center ">
                                    <i class="bi bi-question-square float-start me-4" style="font-size: 50px;"></i>
                                </div>
                                <div class="align-self-center">
                                    <h3 class="ms-4 d-flex justify-content-end pe-2">{{ $null }}
                                    </h3>
                                    <span class="ms-4 d-flex justify-content-end">Keterangan Belum lengkap</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container p-4">
        <h3 class="fw-normal font-family-Kokoro mb-2"><i class="bi bi-table me-2"></i>Daftar Hak Cipta</h3>
        <table class="table table-hover font-family-Kokoro">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama lengkap</th>
                    <th scope="col">Jenis Ciptaan</th>
                    <th scope="col">Judul Ciptaan</th>
                    <th scope="col">Tanggal pengajuan</th>
                    <th scope="col">Status paten</th>
                    <th scope="col">Detail Pengajuan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hc as $i => $p)
                    <tr>
                        <th scope="row">{{ $i + 1 }}</th>
                        <td>{{ $p->nama_lengkap }}</td>
                        <td>{{ $p->jenis_ciptaan }}</td>
                        <td>{{ $p->judul_ciptaan }}</td>
                        <td>{{ $p->tanggal_permohonan }}</td>
                        <td>{{ $p->status }}</td>
                        <td><a class="btn btn-primary" href={{ Route('hak-cipta.show', $p->id) }}>Selengkapnya</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $hc->links() }}
    </div>
    <footer class="text-center text-lg-star bg-body-white shadow-lg mt-5">
        <!-- Copyright -->
        <div class="text-center p-3">
            © 2023 Copyright:
            <a class="text-body link-underline link-underline-opacity-0" href="https://polindra.ac.id/">Politeknik
                Negeri Indramayu</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>