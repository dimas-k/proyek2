<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="shortcut icon" href=<?php echo e(asset('assets/logo-polindra.png')); ?>>
    <title>SIKI POLINDRA | desain-industri</title>
</head>

<body>
    <?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br><br><br>
    <div class="container p-4">
        <a href="/desain-industri" class="link-dark link-underline link-underline-opacity-0 mb-3 "><i
                class="bi bi-arrow-left-circle mb-3" style="font-size: 35px;"></i></a>
        <h3 class="fw-normal font-family-Kokoro mb-3 mt-2"><i class="bi bi-table me-2"></i>Daftar Desain Industri</h3>
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
                    <?php $__empty_1 = true; $__currentLoopData = $mvdov; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <th scope="row"><?php echo e($i + 1); ?></th>
                            <td><?php echo e($d->nama_lengkap); ?></td>
                            <td><?php echo e($d->jenis_di); ?></td>
                            <td><?php echo e($d->judul_di); ?></td>
                            <td><?php echo e($d->tanggal_permohonan); ?></td>
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
    </div>
    <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH D:\coolyeah\proyek_ki_polindra\proyek2\resources\views/di-mvdov/index.blade.php ENDPATH**/ ?>