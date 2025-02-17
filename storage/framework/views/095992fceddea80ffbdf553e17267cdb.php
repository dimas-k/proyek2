<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" href=<?php echo e(asset('assets/polindra21.png')); ?>>
    <title>SIKI POLINDRA | Disclaimer</title>
</head>

<body>
    <?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <p class="fs-3 fw-bold font-family-Khula col-xxl-1 m-0 px-3 py-2">Disclaimer</p>
        <br>
        <ul>
            <li class="fs-6 fw-normal font-family-Kokoro mb-2">Disclaimer atau sangkalan ini berguna bagi kami sebagai
                perlindungan terhadap tuntutan hukum dari pihak-pihak yang kurang bertanggung jawab.</li>
            <li class="fs-6 fw-normal font-family-Kokoro mb-2">Semua informasi yang dimuat dalam Sistem Informasi Kekayaan
                Intelektual Politeknik Negeri Indramayu (Sistem Informasi KI POLINDRA) sudah diusahakan seakurat
                mungkin. Walau demikian, tidak menutup kemungkinan adanya kesalahan yang tidak disengaja baik oleh
                administrator maupun karena kesalahan sistem.</li>
            <li class="fs-6 fw-normal font-family-Kokoro mb-2">Susunan (urutan) nama-nama inventor pada Sistem Informasi KI
                POLINDRA kemungkinan tidak sesuai karena kendala teknis pada sistem. Susunan (urutan) nama-nama inventor
                yang benar terdapat pada Formulir Permohonan Pendaftaran Paten yang jika diperlukan dapat menghubungi
                Direktorat Inovasi dan Kekayaan Intelektual POLINDRA.</li>
            <li class="fs-6 fw-normal font-family-Kokoro mb-2">Gunakan situs ini sebagai referensi pengetahuan, bukan sebagai
                rujukan absolut/mutlak.</li>
            <li class="fs-6 fw-normal font-family-Kokoro mb-2">Dengan menggunakan situs ini, Anda mengakui dan menyetujui
                bahwa POLINDRA tidak bertanggung jawab dan tidak dapat disalahkan ataupun dituntut atas hasil apapun
                yang terjadi sebagai akibat dari penggunaan situs ini.</li>
        </ul>
        <br><br>
        <span class="d-flex justify-content-center">
            <img src=<?php echo e(asset('assets/imgdis.png')); ?> class="mb-5 mt-5">
        </span>
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
<?php /**PATH D:\POLITEKNIK NEGERI INDRAMAYU\proyek2\resources\views/umum-page/disclaimer/index.blade.php ENDPATH**/ ?>