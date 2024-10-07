<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous"> --}}
    <link href={{ asset('assets/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="shortcut icon" href={{ asset('assets/polindra21.png') }}>
    <title>SIKI POLINDRA | Hak-Cipta</title>
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
                        <form action="/hak-cipta/cari/data" method="POST">
                            @csrf
                            <div class="mb-1 row">
                                <label for="" class="col-sm-2 col-form-label fw-normal font-family-Kokoro">Judul
                                    Hak Cipta</label>
                                <div class="col-xxl-10">
                                    <input type="search"
                                        class="form-control form-control-sm fw-normal font-family-Kokoro"
                                        name="cari_hc">
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
                    <a href="/hak-cipta/keterangan-belum-lengkap"
                        class="link-dark link-underline link-underline-opacity-0">
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
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card shadow-sm" style="width: 18rem;">
                    <a href="/hak-cipta/menunggu-verifikasi" class="link-dark link-underline link-underline-opacity-0">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="align-self-center ">
                                    <i class="bi bi-question-square float-start pe-2" style="font-size: 50px;"></i>
                                </div>
                                <div class="align-self-center">
                                    <h3 class="ms-4 d-flex justify-content-end pe-2">{{ $mvdov }}
                                    </h3>
                                    <span class="ms-4 d-flex justify-content-end">Menunggu Verifikasi Data oleh
                                        Verifikator</span>
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
                        <a href="/hak-cipta/list/pegawai/"
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
                        <a href="/hak-cipta/list/jurusan/"
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
                        <a href="/hak-cipta/list/prodi"
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
                </tr>
            </thead>
            <tbody>
                @foreach ($hc as $i => $p)
                    <tr>
                        <th scope="row">{{ ($hc->currentPage() - 1) * $hc->perPage() + $loop->iteration }}</th>
                        <td>{{ $p->nama_lengkap }}</td>
                        <td>{{ $p->jenis_ciptaan }}</td>
                        <td>{{ $p->judul_ciptaan }}</td>
                        <td>{{ \Carbon\Carbon::parse($p->tanggal_permohonan)->format('d-m-Y') }}</td>
                        <td>{{ $p->status }}</td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <span class="d-flex justify-content-end mb-3 me-3">
            {{ $hc->links() }}
        </span>
        <div class="row mt-5">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Diagram per-tahun Hak Cipta</h3>
                        {{-- <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Filter</button> --}}
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        {{-- <input type="hidden" id="hcTolak" value="{{ $hcTolak }}">
                        <input type="hidden" id="hcTerima" value="{{ $hcTerima }}">
                        <input type="hidden" id="hcKet" value="{{ $hcKet }}">
                        <canvas id="hc-chart" style="height:30vh; width:68vw"></canvas> --}}
                        <input type="hidden" id="hc2020" value="{{ $hc2020 }}">
                        <input type="hidden" id="hc2021" value="{{ $hc2021 }}">
                        <input type="hidden" id="hc2022" value="{{ $hc2022 }}">
                        <input type="hidden" id="hc2023" value="{{ $hc2023 }}">
                        <input type="hidden" id="hc2024" value="{{ $hc2024 }}">
                        <input type="hidden" id="gabungKi2020" value="{{ $gabungKi2020 }}">
                        <input type="hidden" id="gabungKi2021" value="{{ $gabungKi2021 }}">
                        <input type="hidden" id="gabungKi2022" value="{{ $gabungKi2022 }}">
                        <input type="hidden" id="gabungKi2023" value="{{ $gabungKi2023 }}">
                        <input type="hidden" id="gabungKi2024" value="{{ $gabungKi2024 }}">
                        <canvas id="gabungHc" style="height:30vh; width:68vw"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- footer --}}
    @include('layout.footer')
    {{-- end of footer --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // hak cipta per-tahun
        const hc2020 = document.getElementById("hc2020").value;
        const hc2021 = document.getElementById("hc2021").value;
        const hc2022 = document.getElementById("hc2022").value;
        const hc2023 = document.getElementById("hc2023").value;
        const hc2024 = document.getElementById("hc2024").value;
        const gabungKi2020 = document.getElementById('gabungKi2020').value;
        const gabungKi2021 = document.getElementById('gabungKi2021').value;
        const gabungKi2022 = document.getElementById('gabungKi2022').value;
        const gabungKi2023 = document.getElementById('gabungKi2023').value;
        const gabungKi2024 = document.getElementById('gabungKi2024').value;
        const chartgabung = document.getElementById('gabungHc').getContext('2d');

        const h = new Chart(chartgabung, {
            type: 'bar',
            data: {
                labels: ['2020', '2021', '2022', '2023', '2024'],
                datasets: [{
                    label: 'Jumlah KI',
                    data: [gabungKi2020, gabungKi2021, gabungKi2022, gabungKi2023, gabungKi2024],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                    ],
                    borderWidth: 2
                }, {
                    type: 'line',
                    label: 'Hak Cipta',
                    data: [hc2020, hc2021, hc2022, hc2023, hc2024],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                    ],
                    borderWidth: 5
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    }
                },
                elements: {
                    line: {
                        tension: 0.5
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
    </script>

</body>

</html>
