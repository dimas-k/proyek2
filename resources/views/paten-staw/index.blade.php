<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="shortcut icon" href={{ URL('storage/polindra21.png') }}>
    <title>SIKI POLINDRA | Paten</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow mb-5 bg-body-tertiary bg-white">
        <div class="container">
            <img class="navbar-brand" src={{ URL('storage/polindra2.jpg') }}>
            <span class="position-absolute border border-start border-1 border-black"></span>
            <a class="navbar-brand fs-6 fw-normal font-family-Kokoro" href="#">Sistem Informasi Kekayaan
                Intelektual<br>Politeknik Negeri Indramayu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
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
                            Pengajuan KI
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2"
                                    href="/pengajuan-paten">Paten</a></li>
                            <li><a class="dropdown-item fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2"
                                    href="/pengajuan-hak-cipta">Hak Cipta</a></li>
                            <li><a class="dropdown-item fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2"
                                    href="/pengajuan-desain-industri">Desain Industri</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2"
                            href="/disclaimer">Disclaimer</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container p-2">
        <a href="/paten" class="link-dark link-underline link-underline-opacity-0 mb-3 "><i class="bi bi-arrow-left-circle mb-3" style="font-size: 35px;"></i></a>
        <h3 class="fw-normal font-family-Kokoro mb-3 mt-3"><i class="bi bi-table me-2"></i>Daftar Paten</h3>
        <table class="table table-hover font-family-Kokoro">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama lengkap</th>
                    <th scope="col">Jenis Paten</th>
                    <th scope="col">Judul paten</th>
                    <th scope="col">Tanggal pengajuan</th>
                    <th scope="col">Status paten</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cek as $i => $p)
                <tr>
                    <th scope="row">{{ $i + 1 }}</th>
                    <td>{{ $p->nama_lengkap }}</td>
                    <td>{{ $p->jenis_paten }}</td>
                    <td>{{ $p->judul_paten }}</td>
                    <td>{{ $p->tanggal_permohonan }}</td>
                    <td>{{ $p->status }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <footer class="text-center text-lg-star bg-body-white shadow-lg mt-5 sticky-bottom">
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