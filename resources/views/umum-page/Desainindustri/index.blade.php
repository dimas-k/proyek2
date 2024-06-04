<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href={{ asset('assets/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="shortcut icon" href={{ asset('assets/polindra21.png') }}>
    <title>SIKI POLINDRA | desain-industri</title>
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
                        <h5 class="card-title text-center mb-3 mt-3 fw-normal font-family-Kokoro p-2">Total Permohonan
                            Desain Industri</h5>
                        <p class="card-text text-center fs-1 mt-2 mb-3 fw-normal font-family-Kokoro p-1 fs-1">
                            {{ $di->count() }}</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-sm-8 col-10">
                <div class="card shadow-sm " style="width: 46rem;">
                    <div class="card-body">
                        <h5 class="card-title mb-3 mt-3 fw-normal font-family-Kokoro ">Cari Desain industri</h5>
                        <form action="get" method="">
                            @csrf
                            <div class="mb-1 row">
                                <label for="staticEmail"
                                    class="col-sm-2 col-form-label fw-normal font-family-Kokoro">Judul Paten</label>
                                <div class="col-xxl-10">
                                    <input type="search"
                                        class="form-control form-control-sm fw-normal font-family-Kokoro">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="inputPassword"
                                    class="col-sm-2 col-form-label fw-normal font-family-Kokoro">Nama Invensi</label>
                                <div class="col-xxl-10">
                                    <input type="search"
                                        class="form-control form-control-sm fw-normal font-family-Kokoro"
                                        id="inputPassword">
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
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card shadow-sm p-2" style="width: 18rem;">
                    <a href="/desain-industri/diberi" class="link-dark link-underline link-underline-opacity-0">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="align-self-center me-5">
                                    <i class="bi bi-check-square float-start me-5" style="font-size: 50px;"></i>
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
                <div class="card shadow-sm " style="width: 18rem;">
                    <a href="/desain-industri/dalam-proses-usulan" class="link-dark link-underline link-underline-opacity-0">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="align-self-center ">
                                    <i class="bi bi-recycle float-start me-4" style="font-size: 50px;"></i>
                                </div>
                                <div class="align-self-center">
                                    <h3 class="ms-5 d-flex justify-content-end">{{ $proses }}
                                    </h3>
                                    <span class="ms-5 d-flex justify-content-end">Dalam Proses Usulan</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card shadow-sm p-2" style="width: 18rem;">
                    <a href="/desain-industri/pemeriksaan" class="link-dark link-underline link-underline-opacity-0">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="align-self-center me-5">
                                    <i class="bi bi-search float-start me-4" style="font-size: 50px;"></i>
                                </div>
                                <div class="align-self-center">
                                    <h3 class="ms-5 d-flex justify-content-end">{{ $priksa }}
                                    </h3>
                                    <span class="ms-4 d-flex justify-content-end">Pemeriksaan</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card shadow-sm" style="width: 18rem;">
                    <a href="/desain-industri/keterangan-belum-lengkap" class="link-dark link-underline link-underline-opacity-0">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="align-self-center">
                                    <i class="bi bi-question-square float-start me-3" style="font-size: 50px;"></i>
                                </div>
                                <div class="align-self-center">
                                    <h3 class="ms-5 d-flex justify-content-end">{{ $null }}
                                    </h3>
                                    <span class="ms-3 d-flex justify-content-end">Keterangan belum Lengkap</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mt-4">
                <div class="card shadow-sm p-2" style="width: 18rem;">
                    <a href="/desain-industri/ditolak" class="link-dark link-underline link-underline-opacity-0">
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
        <h3 class="fw-normal font-family-Kokoro mb-3"><i class="bi bi-table me-2"></i>Daftar Desain Industri</h3>
        <table class="table table-hover font-family-Kokoro">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama lengkap</th>
                    <th scope="col">Jenis Desain</th>
                    <th scope="col">Judul Desain</th>
                    <th scope="col">Tanggal pengajuan</th>
                    <th scope="col">Status paten</th>
                    <th scope="col">Detail Pengajuan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($di as $i => $d)
                    <tr>
                        <th scope="row">{{ $i + 1 }}</th>
                        <td>{{ $d->nama_lengkap }}</td>
                        <td>{{ $d->jenis_di }}</td>
                        <td>{{ $d->judul_di }}</td>
                        <td>{{ $d->tanggal_permohonan }}</td>
                        <td>{{ $d->status }}</td>
                        <td><a class="btn btn-primary" href={{ Route('desain-industri.show', $d->id) }}>Selengkapnya</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Diagram</h3>
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Filter</button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </div>
                    <div class="card-body">
                        
                        <input type="hidden" id="desainDi" value="{{ $desainDi }}">
                        <input type="hidden" id="desainDK" value="{{ $desainDK }}">
                        <input type="hidden" id="desainP" value="{{ $desainP }}">
                        <input type="hidden" id="desainKBL" value="{{ $desainKBL }}">
                        <input type="hidden" id="desainDPU" value="{{ $desainDPU }}">
                        <canvas id="di-chart"></canvas>                            

                    </div>
        {{ $di->links() }}
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
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const desainDi = document.getElementById('desainDi').value;
        const desainDK = document.getElementById('desainDK').value;
        const desainP = document.getElementById('desainP').value;
        const desainKBL = document.getElementById('desainKBL').value;
        const desainDPU = document.getElementById('desainDPU').value;
        const di = document.getElementById('di-chart').getContext('2d');
        const diChart = new Chart(di, {
            type: 'bar',
            data: {
                labels: ['Ditolak', 'Diberi','Pemeriksaan','Dalam proses usulan','Keterangan belum lengkap'],
                datasets: [
                    {
                    label: 'DESAIN INDUSTRI',
                    data: [desainDK, desainDi, desainP,desainDPU,desainKBL],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
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
                }
            }
        });
    </script>
</body>

</html>
