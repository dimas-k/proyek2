<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href=<?php echo e(asset('assets/polindra21.png')); ?>>
    <title>SIKI POLINDRA-Admin | Paten</title>
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
                            Rincian Data Paten
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <a href="/admin/paten/pemeriksaan-formalitas"
                                        class="link-dark link-underline link-underline-opacity-0">
                                        <div class="card shadow-sm" style="width: 18rem;">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center me-5">
                                                        <i class="bi bi-search float-start me-4"
                                                            style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end"><?php echo e($pf); ?>

                                                        </h3>
                                                        <span class="ms-4 d-flex justify-content-end">Pemeriksaan
                                                            Formalitas</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm" style="width: 18rem;">
                                        <a href="/admin/paten/menunggu-tanggapan-formalitas"
                                            class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center ">
                                                        <i class="bi bi-recycle float-start me-3"
                                                            style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end"><?php echo e($mt); ?>

                                                        </h3>
                                                        <span class="ms-3 d-flex justify-content-end">Menunggu Tanggapan
                                                            Formalitas</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm p-2" style="width: 18rem;">
                                        <a href="/admin/paten/masa-pengumuman"
                                            class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-exclamation-circle float-start me-3"
                                                            style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end"><?php echo e($mp); ?>

                                                        </h3>
                                                        <span class="ms-4 d-flex justify-content-end">Masa
                                                            Pengumuman</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm" style="width: 18rem;">
                                        <a href="/admin/paten/menunggu-pembayaran-substansif"
                                            class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-question-square float-start me-2"
                                                            style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end"><?php echo e($mps); ?>

                                                        </h3>
                                                        <span class="ms-3 d-flex justify-content-end">Menunggu
                                                            Pembayaran Substansif</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-3">
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm" style="width: 18rem;">
                                        <a href="/admin/paten/substansif-tahap-awal"
                                            class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-clipboard-data float-start me-5"
                                                            style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end"><?php echo e($staw); ?>

                                                        </h3>
                                                        <span class="ms-3 d-flex justify-content-end">Substansif Tahap
                                                            Awal</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm" style="width: 18rem;">
                                        <a href="/admin/paten/substansif-tahap-lanjut"
                                            class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-clipboard-data float-start me-5"
                                                            style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end"><?php echo e($stl); ?>

                                                        </h3>
                                                        <span class="ms-3 d-flex justify-content-end">Substansif Tahap
                                                            Lanjut</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm" style="width: 18rem;">
                                        <a href="/admin/paten/substansif-tahap-akhir"
                                            class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-clipboard-data float-start me-5"
                                                            style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end">
                                                            <?php echo e($stak); ?>

                                                        </h3>
                                                        <span class="ms-3 d-flex justify-content-end">Substansif Tahap
                                                            Akhir</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm" style="width: 18rem;">
                                        <a href="/admin/paten/menunggu-tanggapan-substansif"
                                            class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-question-square float-start me-2"
                                                            style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end">
                                                            <?php echo e($mts); ?>

                                                        </h3>
                                                        <span class="ms-3 d-flex justify-content-end">Menunggu
                                                            Tanggapan Substansif</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex flex-row mt-3">
                                <div class="col-xl-4 col-sm-6 col-12">
                                    <div class="card shadow-sm p-1" style="width: 23rem;">
                                        <a href="/admin/paten/mvdov"
                                            class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-question-square float-start me-2"
                                                        style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class=" d-flex justify-content-end">
                                                            <?php echo e($mvdov); ?>

                                                        </h3>
                                                        <span class="ms-4 d-flex justify-content-end">Menunggu Verifikasi Data Oleh Verifikator</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm p-1" style="width: 18rem;">
                                        <a href="/admin/paten/diberi"
                                            class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-check-square float-start pe-5 me-5"
                                                            style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end">
                                                            <?php echo e($beri); ?>

                                                        </h3>
                                                        <span class="ms-5 d-flex justify-content-end">Diberi</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="card shadow-sm p-1" style="width: 18rem;">
                                        <a href="/admin/paten/ditolak"
                                            class="link-dark link-underline link-underline-opacity-0">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="align-self-center">
                                                        <i class="bi bi-x-square float-start pe-5 me-5"
                                                            style="font-size: 50px;"></i>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <h3 class="ms-5 d-flex justify-content-end">
                                                            <?php echo e($tolak); ?>

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
                    <h3 class="fw-normal font-family-Kokoro mb-3"><i class="bi bi-table me-3"></i>Daftar Paten</h3>
                    <div class="d-flex justify-content-start">
                        <a class="btn btn-success mb-2" href="/admin/paten/tambah/dosen/"><i class="bi bi-plus-circle me-2"></i>Tambah Paten Dosen</a>
                    </div>
                    <div class="d-flex justify-content-start">
                        <a class="btn btn-outline-secondary" href="/admin/paten/tambah/umum/"><i class="bi bi-plus-circle me-2"></i>Tambah Paten Umum</a>
                    </div>
                    <div class="d-flex justify-content-end mb-3">
                        <form action="/admin/paten/cari" method="GET">
                            <div class="row g-2 align-items-center">
                                <div class="col-auto">
                                    <label for="" class="col-form-label">Cari Paten</label>
                                </div>
                                <div class="col-auto">
                                    <input type="text" id="" class="form-control" aria-describedby=""
                                        name="cari" value="<?php echo e(old('cari')); ?>">
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary ">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive">
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
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $paten; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row"><?php echo e(($paten->currentPage() - 1) * $paten->perPage() + $loop->iteration); ?></th>
                                        <td><?php echo e($p->nama_lengkap); ?></td>
                                        <td><?php echo e($p->jenis_paten); ?></td>
                                        <td><?php echo e($p->judul_paten); ?></td>
                                        <td><?php echo e(\Carbon\Carbon::parse($p->tanggal_permohonan)->format('d-m-Y ')); ?></td>
                                        <td><?php echo e($p->institusi); ?></td>
                                        <td><?php echo e($p->status); ?></td>
                                        <td>
                                            <?php if($p->cek?->cek_data == 'Valid'): ?>
                                                <i class="bi bi-check-circle-fill" style="color: green"></i>
                                            <?php elseif($p->cek?->cek_data == 'Tidak Valid'): ?>
                                                <i class="bi bi-times-circle" style="color: red"></i>
                                            <?php else: ?>
                                                <i class="bi bi-dash-circle-fill"
                                                    style="color: yellow"></i><?php echo e($p->cek?->cek_data); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if($p->cek?->keterangan == ''): ?>
                                                Data Paten Belum Dicek
                                            <?php else: ?>
                                                <?php echo e($p->cek?->keterangan); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td><a href=<?php echo e(Route('admin_paten.show', $p->id)); ?> class="btn btn-info"><i
                                                    class="bi bi-eye me-1"></i>Lihat</a>
                                            <a href=<?php echo e(Route('admin_paten.edit', $p->id)); ?> class="btn btn-outline-warning"><i
                                                    class="bi bi-pencil me-1"></i>Edit Paten</a>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal<?php echo e($p->id); ?>">
                                                <i class="bi bi-pencil me-1"></i>Edit Status
                                            </button>
                                            <div class="modal fade" id="exampleModal<?php echo e($p->id); ?>"
                                                tabindex="-1" data-bs-backdrop="static"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable">
                                                    <div class="modal-content p-2">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel"> Edit
                                                                status paten <?php echo e($p->nama_lengkap); ?></h1>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="<?php echo e(Route('admin_paten.update', $p->id)); ?>"
                                                                enctype="multipart/form-data" method="POST">
                                                                <?php echo csrf_field(); ?>
                                                                <div class="mb-3">
                                                                    <label for=""
                                                                        class="form-label">Status
                                                                        Paten</label>
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
                                                                    <label for=""
                                                                        class="form-label">Serifikat
                                                                        Paten</label>
                                                                    <input type="file"
                                                                        class="form-control <?php $__errorArgs = ['sertifikat_paten'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                                        id="" placeholder=""
                                                                        name="sertifikat_paten">
                                                                    <?php $__errorArgs = ['sertifikat_paten'];
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
                                                data-bs-target="#staticBackdrop<?php echo e($p->id); ?>">
                                                <i class="bi bi-trash3 me-1"></i>Hapus
                                            </button>
                                            <div class="modal fade" id="staticBackdrop<?php echo e($p->id); ?>"
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
                                                            <?php echo e($p->nama_lengkap); ?>,
                                                            dengan judul paten "<?php echo e($p->judul_paten); ?>" ?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline-secondary"
                                                                data-bs-dismiss="modal">Batal</button>
                                                            <a href=<?php echo e(Route('admin_paten.delete', $p->id)); ?>

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
                            <?php echo e($paten->links()); ?>

                        </span>
                    </div>
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
<?php /**PATH D:\POLITEKNIK NEGERI INDRAMAYU\proyek2\resources\views/admin/adminpaten/index.blade.php ENDPATH**/ ?>