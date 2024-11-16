<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href=<?php echo e(asset('assets/polindra21.png')); ?>>
    <title>SIKI POLINDRA-Admin | Hak Cipta</title>
    <link href=<?php echo e(asset('assets/bootstrap/css/bootstrap.min.css')); ?> rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

<body>
    
    <div class="container-fluid border">
        <nav class="navbar navbar-expand bg-body-tertiary">
            <div class="container-fluid">
                <img class="navbar-brand" src=<?php echo e(asset('assets/polindra2.jpg')); ?>>
                <a class="navbar-brand fs-6 fw-normal font-family-Kokoro" href="#">Sistem Informasi Kekayaan
                    Intelektual<br>Politeknik Negeri Indramayu</a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Selamat datang, <?php echo e(auth()->user()->nama_lengkap); ?>

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
    
    <div class="container-fluid">
        <div class="row">
            
            <?php echo $__env->make('admin.layout.sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            <div class="col-lg-10 mt-2">
                <div class="container bg-light rounded border pt-3">
                    <div class="card mb-3">
                        <div class="card-header text-center">
                            Rincian Hak Cipta
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm p-2" style="width: 18rem;">
                                        <a href="/admin/hak-cipta/tercatat"
                                            class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-check-square float-start pe-5 me-5"
                                                            style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-4 d-flex justify-content-end"><?php echo e($tercatat); ?>

                                                        </h3>
                                                        <span class="ms-5  d-flex justify-content-end">Dicatat</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm p-2" style="width: 18rem;">
                                        <a href="/admin/hak-cipta/ditolak"
                                            class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-x-square float-start pe-5 me-5"
                                                            style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class=" d-flex justify-content-end ms-5">
                                                            <?php echo e($tolak); ?></h3>
                                                        <span class=" d-flex justify-content-end ms-5">Ditolak</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm" style="width: 18rem;">
                                        <a href="/admin/hak-cipta/keterangan-belum-lengkap"
                                            class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-question-square float-start me-2"
                                                            style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="d-flex justify-content-end ms-5">
                                                            <?php echo e($null); ?></h3>
                                                        <span class=" d-flex justify-content-end ms-5">Keterarangan
                                                            Belum lengkap</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm" style="width: 18rem;">
                                        <a href="/admin/hak-cipta/mvdov"
                                            class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-question-square float-start me-2"
                                                            style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="d-flex justify-content-end ms-5">
                                                            <?php echo e($mvdov); ?></h3>
                                                        <span class=" d-flex justify-content-end ms-5">Menunggu
                                                            Verifikasi Data Oleh Verifikator</span>
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
                    <?php if(session()->has('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show rounded" role="alert">
                            <?php echo e(session('success')); ?>

                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    <h3 class="fw-normal font-family-Kokoro mb-3"><i class="bi bi-table me-3"></i>Daftar Hak Cipta
                    </h3>
                    <div class="d-flex justify-content-start">
                        <a class="btn btn-success mb-2" href="/admin/hak-cipta/tambah/dosen/"><i
                                class="bi bi-plus-circle me-2"></i>Tambah Hak Cipta Dosen</a>
                    </div>
                    <div class="d-flex justify-content-start">
                        <a class="btn btn-outline-secondary" href="/admin/hak-cipta/tambah/umum/"><i
                                class="bi bi-plus-circle me-2"></i>Tambah Hak Cipta Umum</a>
                    </div>
                    <div class="d-flex justify-content-end mb-3">
                        <form action="/admin/hak-cipta/cari" method="GET">
                            <div class="row g-2 align-items-center">
                                <div class="col-auto">
                                    <label for="" class="col-form-label">Cari Hak Cipta</label>
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
                    <table class="table table-hover font-family-Kokoro">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama lengkap</th>
                                <th scope="col">Jenis Ciptaan</th>
                                <th scope="col">Judul Ciptaan</th>
                                <th scope="col">Tanggal pengajuan</th>
                                <th scope="col">Hak Cipta Milik</th>
                                <th scope="col">Status Hak Cipta</th>
                                <th scope="col">Status Cek Data</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $hak_cipta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $hk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo e(($hak_cipta->currentPage() - 1) * $hak_cipta->perPage() + $loop->iteration); ?>

                                    </th>
                                    <td><?php echo e($hk->nama_lengkap); ?></td>
                                    <td><?php echo e($hk->jenis_ciptaan); ?></td>
                                    <td><?php echo e($hk->judul_ciptaan); ?></td>
                                    <td><?php echo e(\Carbon\Carbon::parse($hk->tanggal_permohonan)->format('d-m-Y ')); ?></td>
                                    <td><?php echo e($hk->institusi); ?></td>
                                    <td><?php echo e($hk->status); ?></td>
                                    <td>
                                        <?php if($hk->cekhc?->cek_data == 'Valid'): ?>
                                            <i class="bi bi-check-circle-fill" style="color: green"></i>
                                        <?php elseif($hk->cekhc?->cek_data == 'Tidak Valid'): ?>
                                            <i class="bi bi-times-circle" style="color: red"></i>
                                        <?php else: ?>
                                            <i class="bi bi-dash-circle-fill"
                                                style="color: yellow"></i><?php echo e($hk->cekhc?->cek_data); ?>

                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if($hk->cekhc?->keterangan == ''): ?>
                                            Data Hak Cipta Belum Dicek
                                        <?php else: ?>
                                            <?php echo e($hk->cekhc?->keterangan); ?>

                                        <?php endif; ?>
                                    </td>
                                    <td><a href=<?php echo e(Route('admin_hakcipta.show', $hk->id)); ?> class="btn btn-info"><i
                                                class="bi bi-eye me-1"></i>Lihat</a>
                                        <a href=<?php echo e(Route('admin_hakcipta.edit', $hk->id)); ?>

                                            class="btn btn-outline-warning"><i class="bi bi-pencil me-1"></i>Edit
                                            Hak Cipta</a>
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal<?php echo e($hk->id); ?>">
                                            <i class="bi bi-pencil me-1"></i> Edit Status
                                        </button>
                                        <div class="modal fade" id="exampleModal<?php echo e($hk->id); ?>" tabindex="-1"
                                            data-bs-backdrop="static" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content p-2">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel"> Edit
                                                            status
                                                            Hak Cipta <?php echo e($hk->nama_lengkap); ?></h1>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form enctype="multipart/form-data" method="post"
                                                            action=<?php echo e(Route('admin_hakcipta.update', $hk->id)); ?>>
                                                            <?php echo csrf_field(); ?>
                                                            <div class="mb-3">
                                                                <label for="" class="form-label">Status
                                                                    Hak Cipta</label>
                                                                <select
                                                                    class="form-select <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                                    aria-label="Default select example"
                                                                    name="status">
                                                                    <option selected>Pilih Status Hak Cipta</option>
                                                                    <option value="Tercatat">Tercatat</option>
                                                                    <option value="Ditolak">Ditolak</option>
                                                                    <option value="Keterangan Belum Lengkap">
                                                                        Keterangan Belum Lengkap</option>
                                                                </select>
                                                                <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <div class="invalid-feedback">
                                                                        <?php echo e($message); ?>

                                                                    </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="" class="form-label">Sertifikat
                                                                    Hak Cipta</label>
                                                                <input type="file"
                                                                    class="form-control <?php $__errorArgs = ['sertifikat_hakcipta'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                                    placeholder="Masukkan sertifikat"
                                                                    name="sertifikat_hakcipta"
                                                                    value="<?php echo e($hk->sertifikat_hakcipta); ?>">
                                                                <?php $__errorArgs = ['sertifikat_hakcipta'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <div class="invalid-feedback">
                                                                        <?php echo e($message); ?>

                                                                    </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                                            data-bs-target="#staticBackdrop<?php echo e($hk->id); ?>">
                                            <i class="bi bi-trash3 me-1"></i>Hapus
                                        </button>
                                        <div class="modal fade" id="staticBackdrop<?php echo e($hk->id); ?>"
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
                                                        Anda yakin akan menghapus hak cipta milik
                                                        <?php echo e($hk->nama_lengkap); ?>,
                                                        dengan judul ciptaan "<?php echo e($hk->judul_ciptaan); ?>" ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <a href=<?php echo e(Route('admin_hakcipta.delete', $hk->id)); ?>

                                                            class="btn btn-danger">Hapus</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <span class="d-flex justify-content-end mb-3 me-3">
                        <?php echo e($hak_cipta->links()); ?>

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
<?php /**PATH D:\POLITEKNIK NEGERI INDRAMAYU\proyek2\resources\views/admin/adminhk/index.blade.php ENDPATH**/ ?>