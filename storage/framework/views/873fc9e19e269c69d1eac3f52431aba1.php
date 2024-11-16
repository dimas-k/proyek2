<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href=<?php echo e(asset('assets/bootstrap/css/bootstrap.min.css')); ?> rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href=<?php echo e(asset('assets/css/index.css')); ?>>
    <link rel="shortcut icon" href=<?php echo e(asset('assets/polindra21.png')); ?>>
    <title>SIKI POLINDRA | Paten</title>
</head>

<body>
    
    <?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br>
    <br>
    <br>
    <br>
    
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-sm-7 col-13">
                <div class="card shadow-sm p-3" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-3 mt-3 fw-normal font-family-Kokoro p-3">Total Permohonan
                            Paten</h5>
                        <p class="card-text text-center fs-1 mt-2 mb-3 fw-normal font-family-Kokoro p-1 fs-1">
                            <?php echo e($hitung); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-sm-8 col-10">
                <div class="card shadow-sm " style="width: 46rem;">
                    <div class="card-body">
                        <h5 class="card-title mb-3 mt-3 fw-normal font-family-Kokoro ">Cari Paten</h5>

                        <form action="/cari" method="POST">
                            <?php echo csrf_field(); ?>
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
                                    <h3 class="ms-5 d-flex justify-content-end"><?php echo e($pf); ?>

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
                                    <h3 class="ms-5 d-flex justify-content-end"><?php echo e($mt); ?>

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
                                    <h3 class="ms-5 d-flex justify-content-end"><?php echo e($mp); ?>

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
                                    <h3 class="ms-5 d-flex justify-content-end"><?php echo e($mps); ?>

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
                                    <h3 class="ms-5 d-flex justify-content-end"><?php echo e($staw); ?>

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
                                    <h3 class="ms-5 d-flex justify-content-end"><?php echo e($stl); ?>

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
                                    <h3 class="ms-5 d-flex justify-content-end"><?php echo e($stak); ?>

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
                                    <h3 class="ms-5 d-flex justify-content-end"><?php echo e($mts); ?>

                                    </h3>
                                    <span class="ms-3 d-flex justify-content-end">Menunggu Tanggapan Substansif</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mt-4">
                <div class="card shadow-sm" style="width: 18rem;">
                    <a href="/paten/menunggu-verifikasi" class="link-dark link-underline link-underline-opacity-0">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="align-self-center">
                                    <i class="bi bi-question-square float-start me-2 pe-5"
                                        style="font-size: 50px;"></i>
                                </div>
                                <div class="align-self-center">
                                    <h3 class=" d-flex justify-content-end"><?php echo e($mvdov); ?>

                                    </h3>
                                    <span class=" d-flex justify-content-end">Menunggu Verifikasi Data Oleh
                                        Verifikator</span>
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
                                    <h3 class="ms-5 d-flex justify-content-end"><?php echo e($catat); ?>

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
                                    <h3 class="ms-5 d-flex justify-content-end"><?php echo e($tolak); ?>

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
                        <a href="/paten/list/perorangan/"
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
                        <a href="/paten/list/jurusan/"
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
                        <a href="/paten/list/prodi/"
                            class="link-dark link-underline link-underline-opacity-0 text-center">
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
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $paten1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e(($paten1->currentPage() - 1) * $paten1->perPage() + $loop->iteration); ?></th>
                        <td><?php echo e($p->nama_lengkap); ?></td>
                        <td><?php echo e($p->jenis_paten); ?></td>
                        <td><?php echo e($p->judul_paten); ?></td>
                        <td><?php echo e(\Carbon\Carbon::parse($p->tanggal_permohonan)->format('d-m-Y')); ?></td>
                        <td><?php echo e($p->status); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo e($paten1->links()); ?>

        <div class="row mt-5">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Diagram per-tahun Paten</h3>
                    </div>
                    <div class="card-body">
                        <input type="hidden" id="gabungKi2020" value="<?php echo e($gabungKi2020); ?>">
                        <input type="hidden" id="gabungKi2021" value="<?php echo e($gabungKi2021); ?>">
                        <input type="hidden" id="gabungKi2022" value="<?php echo e($gabungKi2022); ?>">
                        <input type="hidden" id="gabungKi2023" value="<?php echo e($gabungKi2023); ?>">
                        <input type="hidden" id="gabungKi2024" value="<?php echo e($gabungKi2024); ?>">
                        <input type="hidden" id="paten2020" value="<?php echo e($paten2020); ?>">
                        <input type="hidden" id="paten2021" value="<?php echo e($paten2021); ?>">
                        <input type="hidden" id="paten2022" value="<?php echo e($paten2022); ?>">
                        <input type="hidden" id="paten2023" value="<?php echo e($paten2023); ?>">
                        <input type="hidden" id="paten2024" value="<?php echo e($paten2024); ?>">
                        <canvas id="paten-chart" style="height:30vh; width:68vw"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
        const paten2020 = document.getElementById('paten2020').value;
        const paten2021 = document.getElementById('paten2021').value;
        const paten2022 = document.getElementById('paten2022').value;
        const paten2023 = document.getElementById('paten2023').value;
        const paten2024 = document.getElementById('paten2024').value;

        const gabungKi2020 = document.getElementById('gabungKi2020').value;
        const gabungKi2021 = document.getElementById('gabungKi2021').value;
        const gabungKi2022 = document.getElementById('gabungKi2022').value;
        const gabungKi2023 = document.getElementById('gabungKi2023').value;
        const gabungKi2024 = document.getElementById('gabungKi2024').value;

        const paten = document.getElementById('paten-chart').getContext('2d');

        const p = new Chart(paten, {
            type: 'bar',
            data: {
                labels: ['2020', '2021', '2022', '2023','2024'],
                datasets: [{
                    label: 'Jumlah Keseluruhan KI',
                    data: [gabungKi2020, gabungKi2021, gabungKi2022, gabungKi2023, gabungKi2024],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgb(255, 99, 132)',
                    borderWidth: 2
                }, {
                    type: 'line',
                    label: 'Paten',
                    data: [paten2020, paten2021, paten2022, paten2023, paten2024],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',

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


</body>

</html>
<?php /**PATH D:\POLITEKNIK NEGERI INDRAMAYU\proyek2\resources\views/umum-page/paten/index.blade.php ENDPATH**/ ?>