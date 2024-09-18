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
    <br>
    <br>
    <br>
    <br>
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
                        <form action="/desain-industri/cari/data" method="POST">
                            @csrf
                            <div class="mb-1 row">
                                <label for=""
                                    class="col-sm-2 col-form-label fw-normal font-family-Kokoro">Judul Desain Industri</label>
                                <div class="col-xxl-10">
                                    <input type="search"
                                        class="form-control form-control-sm fw-normal font-family-Kokoro" name="cari_di">
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
                            <button type="submit"
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
                <div class="card shadow-sm" style="width: 18rem;">
                    <a href="/desain-industri/menunggu-verifikasi" class="link-dark link-underline link-underline-opacity-0">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="align-self-center">
                                    <i class="bi bi-question-square float-start pe-2" style="font-size: 50px;"></i>
                                </div>
                                <div class="align-self-center">
                                    <h3 class="ms-5 d-flex justify-content-end">{{ $mvdov }}
                                    </h3>
                                    <span class="ms-5 d-flex justify-content-end">Menunggu Verifikasi Data Oleh Verifikator</span>
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
        <hr class="border border-black border-2 opacity-75 rounded">
        <div class="row ms-5">
            <div class="d-flex justify-content-center">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card shadow-sm p-1" style="width: 14rem;">
                        <a href="/desain-industri/list/pegawai"
                            class="link-dark link-underline link-underline-opacity-0 text-center" id="perorangan">
                            <div class="card-body">
                                <i class="bi bi-person-circle" style="font-size: 30px;"></i> <br>
                                <h5>Pegawai</h5>
                            </div>
                    </div>
                    </a>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card shadow-sm p-1" style="width: 14rem;">
                        <a href="/desain-industri/list/jurusan"
                            class="link-dark link-underline link-underline-opacity-0 text-center" id="perorangan">
                            <div class="card-body">
                                <i class="bi bi-bank" style="font-size: 30px;"></i> <br>
                                <h5>Jurusan</h5>
                            </div>
                    </div>
                    </a>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card shadow-sm p-1" style="width: 14rem;">
                        <a href="/desain-industri/list/prodi"
                            class="link-dark link-underline link-underline-opacity-0 text-center" id="perorangan">
                            <div class="card-body">
                                <i class="bi bi-bank" style="font-size: 30px;"></i> <br>
                                <h5>Prodi</h5>
                            </div>
                        </a>
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
                </tr>
            </thead>
            <tbody>
                @foreach ($di as $i => $d)
                    <tr>
                        <th scope="row">{{ $i + 1 }}</th>
                        <td>{{ $d->nama_lengkap }}</td>
                        <td>{{ $d->jenis_di }}</td>
                        <td>{{ $d->judul_di }}</td>
                        <td>{{ \Carbon\Carbon::parse($d->tanggal_permohonan)->format('d-m-Y') }}</td>
                        <td>{{ $d->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $di->links() }}
        <div class="row mt-5">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Diagram Per-tahun Desain Industri</h3>
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Filter</button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <input type="hidden" id="gabungKi2024" value="{{ $gabungKi2024 }}">
                        <input type="hidden" id="gabungKi2025" value="{{ $gabungKi2025 }}">
                        <input type="hidden" id="gabungKi2026" value="{{ $gabungKi2026 }}">
                        <input type="hidden" id="gabungKi2027" value="{{ $gabungKi2027 }}">
                        <input type="hidden" id="di2024" value="{{ $di2024 }}">
                        <input type="hidden" id="di2025" value="{{ $di2025 }}">
                        <input type="hidden" id="di2026" value="{{ $di2026 }}">
                        <input type="hidden" id="di2027" value="{{ $di2027 }}">
                        <canvas id="di-chart" style="height:30vh; width:68vw"></canvas>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    @include('layout.footer')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const gabungKi2024 = document.getElementById('gabungKi2024').value;
        const gabungKi2025 = document.getElementById('gabungKi2025').value;
        const gabungKi2026 = document.getElementById('gabungKi2026').value;
        const gabungKi2027 = document.getElementById('gabungKi2027').value;

        const di2024 = document.getElementById('di2024').value;
        const di2025 = document.getElementById('di2025').value;
        const di2026 = document.getElementById('di2026').value;
        const di2027 = document.getElementById('di2027').value;
        const diChart = document.getElementById('di-chart').getContext('2d');
        const di = new Chart(diChart, {
            type: 'bar',
            data: {
                labels: ['2024', '2025', '2026', '2027'],
                datasets: [{
                    label: 'Jumlah Keseluruhan KI',
                    data: [gabungKi2024,gabungKi2025,gabungKi2026,gabungKi2027],
                    backgroundColor:
                    'rgba(255, 159, 64, 0.2)',
                    borderColor:
                    'rgba(255, 206, 86, 1)',
                    borderWidth: 2
                },{
                    type:'line',
                    label: 'Desain Industri',
                    data: [di2024, di2025, di2026,di2027],
                    borderColor: [
                        'rgba(255, 206, 86, 1)',
                    ],
                    borderWidth: 5
                }
                ]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    }
                },
                elements:{
                    line:{
                        tension:0.5
                    }
                },
                scales: {
                    y: {
                        suggestedMin: 0,
                        ticks: {
                            precision: 0
                        }
                    }
                },
                categoryPercentage: 0.5,
                transitions: {
                    show: {
                        animations: {
                            x: {
                                from: 1
                            },
                            y: {
                                from: 1
                            }
                        }
                    },
                    hide: {
                        animations: {
                            x: {
                                to: 10
                            },
                            y: {
                                to: 10
                            }
                        }
                    }
                }
            },
        });
    </script>
</body>

</html>
