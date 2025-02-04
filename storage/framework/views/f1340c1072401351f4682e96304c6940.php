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
    <title>SIKI POLINDRA || Visi Misi SIKI POLINDRA</title>
</head>

<body>
    
    <?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    

    <div class="container text-center">
        <span class="">Visi, Misi, dan Tujuan</span>
        <h2 class="mb-2">P3M</h2>
    </div>
    <img src="<?php echo e(asset('assets/orang1.png')); ?>" alt="" class="float-end" width="550px">
    <div class="container">
        <h2>Visi</h2>
        <p class="ms-2">Pusat Penelitian dan Pengabdian Masyarakat terdepan dalam penelitian terapan dan pengabdian masyarakat di tingkat nasional</p>
        <br>
        <br>
        <h2>Misi</h2>
        <p class="ms-2">Memandu pelaksanaan penelitian terapan dan pengabdian masyarakat di Polindra guna menyelesaikan persoalan industri dan masyarakat pada tingkat lokal dan nasional</p>
        <br>
        <br>
        <h2>Tujuan</h2>
        <ol>
            <li>Mewujudkan tata kelola pusat penelitian dan pengabdian masyarakat yang bermutu</li>
            <li>Meningkatkan kualitas dan kuantitas penelitian terapan dan pengabdian masyarakat para dosen</li>
            <li>Bersama-sama industri dan masyarakat dalam menyelesaikan persoalan bidang ketahanan pangan, kemaritiman, ketahanan energi, teknologi industri, serta teknologi informasi dan komunikasi pada tingkat lokal dan nasional sesuai dengan kepakaran para dosen.</li>
            <li>Mendorong dan memfasilitasi publikasi ilmiah para dosen di tingkat nasional dan internasional.</li>
        </ol>

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
<?php /**PATH D:\coolyeah\proyek_ki_polindra\proyek2\resources\views/umum-page/visi-misi/index.blade.php ENDPATH**/ ?>