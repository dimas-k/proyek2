<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href=<?php echo e(asset('assets/css/index.css')); ?>>
    <link rel="shortcut icon" href=<?php echo e(asset('assets/polindra21.png')); ?>>
    <link href=<?php echo e(asset('assets/bootstrap/css/bootstrap.min.css')); ?> rel="stylesheet">
    <title>SIKI POLINDRA || Struktur SIKI POLINDRA</title>
</head>

<body>
    
    <?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    

    <div class="container text-center">
        <span class="">Struktur Organisasi</span>
        <h2 class="mb-2">SIKI POLINDRA</h2>
        <br>
        <img class="img-fluid" src="<?php echo e(asset('assets/struktur.png')); ?>" alt="" width="800px" style="align-self: center">
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
<?php /**PATH D:\POLITEKNIK NEGERI INDRAMAYU\proyek2\resources\views/umum-page/struktur/index.blade.php ENDPATH**/ ?>