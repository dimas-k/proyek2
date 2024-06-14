<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href={{ asset('assets/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="shortcut icon" href={{ asset('assets/polindra21.png') }}>
    <title>SIKI POLINDRA | Paten</title>
</head>

<body>
    {{-- nav --}}
    @include('layout.nav')
    {{-- end nav --}}
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-sm-7 col-13">
                <div class="card shadow-sm p-3" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-3 mt-3 fw-normal font-family-Kokoro p-3">Total Permohonan
                            Paten</h5>
                        <p class="card-text text-center fs-1 mt-2 mb-3 fw-normal font-family-Kokoro p-1 fs-1">
                            {{ $hitung }}</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-sm-8 col-10">
                <div class="card shadow-sm " style="width: 46rem;">
                    <div class="card-body">
                        <h5 class="card-title mb-3 mt-3 fw-normal font-family-Kokoro ">Cari Paten</h5>

                        <form action="/cari" method="GET">
                            <div class="mb-1 row">
                                <label for="" class="col-sm-2 col-form-label fw-normal font-family-Kokoro">Judul
                                    Paten</label>
                                <div class="col-xxl-10">
                                    <input type="search"
                                        class="form-control form-control-sm fw-normal font-family-Kokoro"
                                        name="cari_judul">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="" class="col-sm-2 col-form-label fw-normal font-family-Kokoro">Nama
                                    Invensi</label>
                                <div class="col-xxl-10">
                                    <input type="search"
                                        class="form-control form-control-sm fw-normal font-family-Kokoro" id=""
                                        name="cari_nama">
                                </div>
                            </div>
                            <button type="submit"
                                class="btn btn-primary mb-2 mt-3 fw-normal font-family-Kokoro">Cari</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card shadow-sm p-1" style="width: 18rem;">
                    <a href="/paten/pemeriksaan-formalitas" class="link-dark link-underline link-underline-opacity-0">
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
                    </a>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card shadow-sm p-1" style="width: 18rem;">
                    <a href="/paten/menunggu-tanggapan-formalitas"
                        class="link-dark link-underline link-underline-opacity-0">
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
                <div class="card shadow-sm p-1" style="width: 18rem;">
                    <a href="/paten/masa-pengumuman" class="link-dark link-underline link-underline-opacity-0">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="align-self-center me-5">
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
                <div class="card shadow-sm p-1" style="width: 18rem;">
                    <a href="/paten/meunggu-pembayaran-substansif"
                        class="link-dark link-underline link-underline-opacity-0">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="align-self-center">
                                    <i class="bi bi-question-square float-start me-3" style="font-size: 50px;"></i>
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
            <div class="col-xl-3 col-sm-6 col-12 mt-4">
                <div class="card shadow-sm p-1" style="width: 18rem;">
                    <a href="/paten/substansif-tahap-awal" class="link-dark link-underline link-underline-opacity-0">
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
            <div class="col-xl-3 col-sm-6 col-12 mt-4">
                <div class="card shadow-sm p-1" style="width: 18rem;">
                    <a href="/paten/substansif-tahap-lanjut"
                        class="link-dark link-underline link-underline-opacity-0">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="align-self-center">
                                    <i class="bi bi-clipboard-data float-start me-5" style="font-size: 50px;"></i>
                                </div>
                                <div class="align-self-center">
                                    <h3 class="ms-5 d-flex justify-content-end">{{ $stl }}
                                    </h3>
                                    <span class="ms-3 d-flex justify-content-end">Substasif Tahap Lanjut</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mt-4">
                <div class="card shadow-sm p-1" style="width: 18rem;">
                    <a href="/paten/substansif-tahap-akhir" class="link-dark link-underline link-underline-opacity-0">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="align-self-center">
                                    <i class="bi bi-clipboard-data float-start me-5" style="font-size: 50px;"></i>
                                </div>
                                <div class="align-self-center">
                                    <h3 class="ms-5 d-flex justify-content-end">{{ $stak }}
                                    </h3>
                                    <span class="ms-3 d-flex justify-content-end">Substasif Tahap Akhir</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mt-4">
                <div class="card shadow-sm p-1" style="width: 18rem;">
                    <a href="/paten/menunggu-tanggapan-substansif"
                        class="link-dark link-underline link-underline-opacity-0">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="align-self-center">
                                    <i class="bi bi-question-square float-start me-4" style="font-size: 50px;"></i>
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
            <div class="col-xl-3 col-sm-6 col-12 mt-4">
                <div class="card shadow-sm p-2" style="width: 18rem;">
                    <a href="/paten/diberi" class="link-dark link-underline link-underline-opacity-0">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="align-self-center">
                                    <i class="bi bi-check-square float-start me-5 pe-5" style="font-size: 50px;"></i>
                                </div>
                                <div class="align-self-center">
                                    <h3 class="ms-5 d-flex justify-content-end">{{ $catat }}
                                    </h3>
                                    <span class="ms-5 d-flex justify-content-end">Diberi</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mt-4">
                <div class="card shadow-sm p-2" style="width: 18rem;">
                    <a href="/paten/ditolak" class="link-dark link-underline link-underline-opacity-0">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="align-self-center">
                                    <i class="bi bi-x-square float-start me-5 pe-5" style="font-size: 50px;"></i>
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

    <div class="container p-4">
        <h3 class="fw-normal font-family-Kokoro mb-3"><i class="bi bi-table me-2"></i>Daftar Paten</h3>
        <table class="table table-hover font-family-Kokoro">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama lengkap</th>
                    <th scope="col">Jenis Paten</th>
                    <th scope="col">Judul paten</th>
                    <th scope="col">Tanggal pengajuan</th>
                    <th scope="col">Status paten</th>
                    <th scope="col">Detail Pengajuan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($paten1 as $i => $p)
                    <tr>
                        <th scope="row">{{ $i + 1 }}</th>
                        <td>{{ $p->nama_lengkap }}</td>
                        <td>{{ $p->jenis_paten }}</td>
                        <td>{{ $p->judul_paten }}</td>
                        <td>{{ \Carbon\Carbon::parse($p->tanggal_permohonan)->format('d-m-Y') }}</td>
                        <td>{{ $p->status }}</td>
                        <td><a class="btn btn-primary" href={{ Route('paten.show', $p->id) }}>Selengkapnya</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row mt-5">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    {{-- <div class="card-header">
                        <h3 class="card-title">Diagram Paten</h3>
                    </div> --}}
                    <div class="card-body">
                        <h3 class="card-title">Diagram Paten</h3>
                        {{-- paten --}}
                        <input type="hidden" id="patenPF" value="{{ $patenPF }}">
                        <input type="hidden" id="patenMTF" value="{{ $patenMTF }}">
                        <input type="hidden" id="patenMP" value="{{ $patenMP }}">
                        <input type="hidden" id="patenMPS" value="{{ $patenMPS }}">
                        <input type="hidden" id="patenSTAW" value="{{ $patenSTAW }}">
                        <input type="hidden" id="patenSTL" value="{{ $patenSTL }}">
                        <input type="hidden" id="patenSTAK" value="{{ $patenSTAK }}">
                        <input type="hidden" id="patenMTS" value="{{ $patenMTS }}">
                        <input type="hidden" id="patenDI" value="{{ $patenDI }}">
                        <input type="hidden" id="patenDK" value="{{ $patenDK }}">
                        <input type="hidden" id="patenTahun" value="{{ $patenTahun }}">
                        <canvas id="paten-chart" style="height:40vh; width:50vw"></canvas>
                    </div>
                </div>
            </div>
        </div>
        {{ $paten1->links() }}
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
    <script src="https://cdn.jsdelivr.net/npm/js-confetti@latest/dist/js-confetti.browser.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>

        const patenTahun = document.getElementById('patenTahun').value;
        
        const paten = document.getElementById('paten-chart').getContext('2d');

        const patenChart = new Chart(paten, {
            type: 'bar',
            data: {
                labels: ['2024','2025','2026','2027'],
                datasets: [
                    {
                    label: 'PATEN',
                    data: [patenTahun],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',

                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                    ],
                    borderWidth: 1
                },
            ]
            },
            options: {
                scales: {
                    y: {
                        suggestedMin: 0,
                        ticks: {
                            precision: 0
                        }
                    }
                },
                categoryPercentage: 0.5
            }
        });
    </script>


</body>

</html>
