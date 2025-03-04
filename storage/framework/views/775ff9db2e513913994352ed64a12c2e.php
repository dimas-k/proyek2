<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="shortcut icon" href=<?php echo e(asset('assets/polindra21.png')); ?>>
    <title>SIKI POLINDRA | Data Desain Industri</title>
</head>

<body>
    <div class="container-fluid">
        <div class="p-4 mt-3">
            <a href="/desain-industri" class="link-dark link-underline link-underline-opacity-0 mb-3 "><i class="bi bi-arrow-left-circle mb-3" style="font-size: 30px;"></i></a>
            <h3 class=""><i class="bi bi-clipboard2-data me-2 mt-3"></i>Data Desain Industri</h3>

            <div class="border border-2 border-dark rounded"></div>
            <div class="table-responsive">
                <table class="table table-borderless p-1">

                    <tr>
                        <th>Nama Lengkap</th>
                        <td>: <?php echo e($di->nama_lengkap); ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>: <a href="mailto:<?php echo e($di->email); ?>"><?php echo e($di->email); ?></a></td>
                    </tr>
                    <tr>
                        <th>Jenis Disain Industri</th>
                        <td>: <?php echo e($di->jenis_di); ?></td>
                    </tr>
                    <tr>
                        <th>Judul Desain Industri</th>
                        <td>: <?php echo e($di->judul_di); ?></td>
                    </tr>
                    <tr>
                        <th>Gambar desain Industri</th>
                        <td >: <a href=<?php echo e(asset('storage/' . $di->gambar_di)); ?> class=""
                            target="_blank">Lihat Dokumen Invensi</a></td>
                    </tr>
                    <tr>
                        <th>Uraian Desain Industri</th>
                        <td>: <a href=<?php echo e(asset('storage/' . $di->uraian_di)); ?> class=""
                                target="_blank">Lihat Dokumen Invensi</a></td>
                    </tr>
                    
                    <tr>
                        <th>Tanggal pengajuan</th>
                        <td>: <?php echo e($di->tanggal_permohonan); ?></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>: <?php echo e($di->status); ?></td>
                    </tr>
                   
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
</body>

</html>
<?php /**PATH D:\POLITEKNIK NEGERI INDRAMAYU\proyek2\resources\views/di-show/index.blade.php ENDPATH**/ ?>