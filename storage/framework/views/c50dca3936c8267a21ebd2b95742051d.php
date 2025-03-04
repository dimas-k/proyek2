<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href=<?php echo e(URL('storage/polindra21.png')); ?>>
    <title>SIKI POLINDRA-Admin | Paten</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

<body>
    
    <div class="container-fluid border">
        <nav class="navbar navbar-expand bg-body-tertiary">
            <div class="container-fluid">
                <img class="navbar-brand" src=<?php echo e(URL('storage/polindra2.jpg')); ?>>
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
            <div class="col-lg-2 bg-light border mt-2 rounded">
                
                <nav class="navbar navbar-expand-lg bg-light">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                            aria-labelledby="offcanvasNavbarLabel" style="width: 245px">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav flex-column justify-content-end flex-grow-1">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="/admin/dashboard"><i
                                                class="bi bi-house me-4"></i>Dasboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/admin/listadmin"><i
                                                class="bi bi-person me-4"></i>Admin</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/admin/paten"><i
                                                class="bi bi-table me-4"></i></i>Paten</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/admin/desain-industri"><i
                                                class="bi bi-table me-4"></i>DesainIndustri</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/admin/hak-cipta"><i
                                                class="bi bi-table me-4"></i></i>Hak Cipta</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            
            <div class="col-lg-10">
                <div class="container bg-light rounded border pt-3 mt-2">
                    <a href="/admin/paten" class="link-dark link-underline link-underline-opacity-0 mb-3 "><i class="bi bi-arrow-left-circle mb-3" style="font-size: 30px;"></i></a>
                    <?php if(session()->has('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show rounded" role="alert">
                            <?php echo e(session('success')); ?>

                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    <h3 class="fw-normal font-family-Kokoro mb-3 mt-1"><i class="bi bi-table me-3"></i>Daftar Paten</h3>
                    <table class="table table-hover font-family-Kokoro border rounded">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama lengkap</th>
                                <th scope="col">Jenis Paten</th>
                                <th scope="col">Judul paten</th>
                                <th scope="col">Tanggal pengajuan</th>
                                <th scope="col">Status paten</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $cek; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e($i + 1); ?></th>
                                    <td><?php echo e($p->nama_lengkap); ?></td>
                                    <td><?php echo e($p->jenis_paten); ?></td>
                                    <td><?php echo e($p->judul_paten); ?></td>
                                    <td><?php echo e($p->tanggal_permohonan); ?></td>
                                    <td><?php echo e($p->status); ?></td>
                                    <td><a href=<?php echo e(Route('admin_paten.show', $p->id)); ?> class="btn btn-info"><i
                                                class="bi bi-eye"></i></a>
                                        <a href=<?php echo e(Route('admin_paten.edit', $p->id)); ?> class="btn btn-warning"><i
                                                class="bi bi-pencil"></i></a>
                                        <a href=<?php echo e(Route('admin_paten.delete', $p->id)); ?> class="btn btn-danger"
                                            onclick="return confirm('Apakah Kamu Yakin?')"><i
                                                class="bi bi-trash3"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
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
<?php /**PATH D:\POLITEKNIK NEGERI INDRAMAYU\proyek2\resources\views/admin/adminpaten/admin-paten-mp/index.blade.php ENDPATH**/ ?>