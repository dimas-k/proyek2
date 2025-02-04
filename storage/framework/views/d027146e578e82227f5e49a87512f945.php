<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href=<?php echo e(asset('assets/bootstrap/css/bootstrap.min.css')); ?> rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="shortcut icon" href=<?php echo e(asset('assets/polindra21.png')); ?>>
    <title>SIKI POLINDRA | desain-industri</title>
</head>

<body>
    
    <?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br>
    <br>
    <br>
    <br>
    
    <div class="container">
        <div class="row g-3">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow-sm h-auto" style="min-height: 150px;">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <h5 class="card-title text-center mb-2 fw-normal">Total Permohonan
                            Desain Industri</h5>
                        <p class="card-text text-center fs-1 fw-normal m-0">
                            <?php echo e($di->count()); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-8 mx-auto">
                <div class="card shadow-sm h-auto w-80 mx-auto">
                    <div class="card-body">
                        <h5 class="card-title mb-3 mt-3 fw-normal text-center">Cari Desain industri</h5>
                        <form action="/desain-industri/cari/data" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3 row align-items-center">
                                <label for="" class="col-md-4 col-form-label">Judul
                                    Desain Industri</label>
                                <div class="col-md-8">
                                    <input type="search" class="form-control form-control-sm" name="cari_di">
                                </div>
                            </div>

                            <div class="mb-3 row align-items-center">
                                <label for="" class="col-md-4 col-form-label">Nama
                                    Invensi</label>
                                <div class="col-md-8">
                                    <input type="search" class="form-control form-control-sm" id=""
                                        name="cari_nama">
                                </div>
                            </div>
                            <div class="text-end me-3">
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row g-3">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card shadow-sm h-100">
                    <a href="/desain-industri/diberi" class="text-decoration-none text-dark">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-check-square me-3" style="font-size: 2.5rem;"></i>

                                <div class="">
                                    <h3 class="mb-1"><?php echo e($beri); ?>

                                    </h3>
                                    <span class="">Diberi</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card shadow-sm h-100">
                    <a href="/desain-industri/dalam-proses-usulan" class="text-decoration-none text-dark">
                        <div class="card-body">
                            <div class="d-flex align-self-center">

                                <i class="bi bi-recycle me-3" style="font-size: 2.5rem;"></i>

                                <div class="">
                                    <h3 class="mb-1"><?php echo e($proses); ?>

                                    </h3>
                                    <span class="">Dalam Proses Usulan</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card shadow-sm h-100">
                    <a href="/desain-industri/pemeriksaan" class="text-decoration-none text-dark">
                        <div class="card-body">
                            <div class="d-flex align-self-center">

                                <i class="bi bi-search float-start me-4" style="font-size: 2.5rem;"></i>

                                <div class="">
                                    <h3 class="mb-1"><?php echo e($priksa); ?>

                                    </h3>
                                    <span class="">Pemeriksaan</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card shadow-sm h-100">
                    <a href="/desain-industri/keterangan-belum-lengkap" class="text-decoration-none text-dark">
                        <div class="card-body">
                            <div class="d-flex align-self-center">

                                <i class="bi bi-question-square me-3" style="font-size: 2.5rem;"></i>

                                <div class="">
                                    <h3 class="mb-1"><?php echo e($null); ?>

                                    </h3>
                                    <span class="">Keterangan belum Lengkap</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card shadow-sm h-100">
                    <a href="/desain-industri/menunggu-verifikasi" class="text-decoration-none text-dark">
                        <div class="card-body">
                            <div class="d-flex align-self-center">

                                <i class="bi bi-question-square  me-3" style="font-size: 2.5rem;"></i>

                                <div class="">
                                    <h3 class="mb-1"><?php echo e($mvdov); ?>

                                    </h3>
                                    <span class="">Menunggu Verifikasi Data Oleh
                                        Verifikator</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card shadow-sm h-100">
                    <a href="/desain-industri/ditolak" class="text-decoration-none text-dark">
                        <div class="card-body">
                            <div class="d-flex align-self-center mt-2">

                                <i class="bi bi-x-square me-3" style="font-size: 2.5rem;"></i>

                                <div class="">
                                    <h3 class="mb-1"><?php echo e($tolak); ?>

                                    </h3>
                                    <span class="">Ditolak</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <hr class="border border-black border-2 opacity-75 rounded my-4">
        <div class="row g-3 justify-content-center">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card shadow-sm text-center h-100">
                    <a href="/desain-industri/list/pegawai" class="text-decoration-none text-dark">
                        <div class="card-body">
                            <i class="bi bi-person-circle mb-2" style="font-size: 2rem;"></i>
                            <h5 class="card-title mb-0">Pegawai</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card shadow-sm text-center h-100">
                    <a href="/desain-industri/list/jurusan" class="text-decoration-none text-dark">
                        <div class="card-body">
                            <i class="bi bi-bank mb-2" style="font-size: 2rem;"></i>
                            <h5 class="card-title mb-0">Jurusan</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card shadow-sm text-center h-100">
                    <a href="/desain-industri/list/prodi" class="text-decoration-none text-dark">
                        <div class="card-body">
                            <i class="bi bi-bank mb-2" style="font-size: 2rem;"></i>
                            <h5 class="card-title mb-0">Prodi</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <h3 class="fw-normal mb-3"><i class="bi bi-table me-2"></i>Daftar Desain Industri</h3>
        <div class="table-responsive">
            <table class="table table-hover font-family-Kokoro">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama lengkap</th>
                        <th scope="col">Jenis Desain</th>
                        <th scope="col">Judul Desain</th>
                        <th scope="col">Tanggal pengajuan</th>
                        <th scope="col">Status Desain Industri</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $di; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <th scope="row"><?php echo e(($di->currentPage() - 1) * $di->perPage() + $loop->iteration); ?></th>
                            <td><?php echo e($d->nama_lengkap); ?></td>
                            <td><?php echo e($d->jenis_di); ?></td>
                            <td><?php echo e($d->judul_di); ?></td>
                            <td><?php echo e(\Carbon\Carbon::parse($d->tanggal_permohonan)->format('d-m-Y')); ?></td>
                            <td><?php echo e($d->status); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <td colspan="10" class="text-center">
                                <img src="<?php echo e(asset('assets/no-data.png')); ?>" style="width:30%; height:auto">
                            </td>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <span class="d-flex justify-content-end mb-3 me-3">
            <?php echo e($di->links()); ?>

        </span>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div id="areaChart"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var options = {
                chart: {
                    type: 'area',
                    height: 350,
                    responsive: [{
                        breakpoint: 576,
                        options: {
                            chart: {
                                height: 300
                            },
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }]
                },
                series: [{
                    name: 'Jumlah Desain Industri',
                    data: <?php echo json_encode($jumlah, 15, 512) ?>
                }],
                xaxis: {
                    categories: <?php echo json_encode($tahun, 15, 512) ?>,
                    title: {
                        text: 'Tahun'
                    }
                },
                yaxis: {
                    title: {
                        text: 'Jumlah Desain Industri'
                    }
                },
                title: {
                    text: 'Jumlah Desain Industri Berdasarkan Tahun',
                    align: 'center'
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth'
                }
            };

            var chart = new ApexCharts(document.querySelector("#areaChart"), options);
            chart.render();
        });
    </script>
</body>

</html>
<?php /**PATH D:\coolyeah\proyek_ki_polindra\proyek2\resources\views/umum-page/Desainindustri/index.blade.php ENDPATH**/ ?>