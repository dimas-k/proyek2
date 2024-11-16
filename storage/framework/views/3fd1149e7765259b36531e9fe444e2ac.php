<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href=<?php echo e(asset('assets/polindra21.png')); ?>>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href=<?php echo e(asset('assets/bootstrap/css/bootstrap.min.css')); ?> rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>SIKI POLINDRA | Beranda</title>
</head>

<body>
    <style>
        .counter {
            color: #fff;
            font-family: 'Poppins', sans-serif;
            text-align: center;
            width: 210px;
            min-height: 246px;
            padding: 25px 0 0;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .counter:after {
            content: '';
            background: linear-gradient(to right, #eff0f2, #fefefe);
            height: 152px;
            width: 152px;
            border-radius: 15px;
            border: 3px solid #fff;
            box-shadow: 5px 0 8px rgba(0, 0, 0, 0.2);
            transform: translateX(-50%) rotate(45deg);
            position: absolute;
            top: 25px;
            left: 50%;
            z-index: -1;
        }

        .counter .counter-value {
            background: #fe8c00;
            font-size: 25px;
            font-weight: 600;
            letter-spacing: 2px;
            width: 100%;
            padding: 10px 0 6px;
            border-radius: 10px;
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.6), 0 0 0 2px #fff;
            position: absolute;
            left: 0;
            bottom: 0;
            z-index: -1;
        }

        .counter .counter-icon {
            background: linear-gradient(to right, rgb(255, 99, 132), #f83600);
            font-size: 30px;
            line-height: 60px;
            width: 60px;
            height: 60px;
            margin: 0 auto 20px;
            border-radius: 50%;
            border: 2px solid #fff;
            box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.4);
        }

        .counter h3 {
            color: rgb(255, 99, 132);
            font-size: 22px;
            font-weight: 500;
            text-transform: capitalize;
            line-height: 22px;
            padding: 0 30px;
            margin: 0 0 15px;
        }

        .counter.green .counter-value {
            background: rgba(54, 162, 235, 1);
        }

        .counter.green .counter-icon {
            background: linear-gradient(to right, rgba(54, 162, 235, 1),rgba(54, 182, 235, 1));
        }

        .counter.green h3 {
            color: rgba(54, 162, 235, 1);
        }

        .counter.blue .counter-value {
            background:rgba(255, 206, 86, 1);
        }

        .counter.blue .counter-icon {
            background: linear-gradient(to right, rgba(255, 206, 86, 1),rgba(255, 181, 86, 1));
        }

        .counter.blue h3 {
            color: rgba(255, 180, 86, 1);
        }

        .counter.gray .counter-value {
            background: #36474f;
        }

        .counter.gray .counter-icon {
            background: linear-gradient(to right, #36474f, #0d0e10);
        }

        .counter.gray h3 {
            color: #0d0e10;
        }

        @media screen and (max-width:990px) {
            .counter {
                margin-bottom: 40px;
            }
        }
    </style>
    
    <?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br>
    <br>
    <br>
    <br>
    

    <div class="container">
        <img class="img-fluid rounded" src=<?php echo e(asset('assets/gedung.jpg')); ?>>
        <p class="fs-6 fw-normal font-family-Kokoro mt-3">
            <b>Sistem Informasi Kekayaan Intelektual POLINDRA (SIKI POLINDRA)</b> merupakan media
            informasi perkembangan permohonan KI yang dikelola oleh POLINDRA. Para pemangku kepentingan di POLINDRA,
            inventor, dan masyarakat luas dapat mengakses dan melihat perkembangan permohonan KI POLINDRA melalui Sistem
            Informasi KI POLINDRA, baik dalam bentuk grafik, tabel, dan informasi tertulis lainnya. Sistem Informasi KI
            POLINDRA menyediakan fitur-fitur perkembangan proses permohonan pelindungan KI POLINDRA, abstrak atau
            deskripsi singkat setiap KI, unduh berkas KI, dan formulir pengajuan KI online melalui unit pengelola KI
            POLINDRA.
        </p>
        
        <br> <br>
        <div class="row justify-content-center">
            <div class="col-md-3 col-sm-6">
                <div class="counter">
                    <div class="counter-content">
                        <div class="counter-icon">
                            <?php echo e($contohPaten); ?>

                            
                        </div>
                        <a href="/paten" style="text-decoration:none;">
                            <h3 >Paten</h3>
                        </a>

                    </div>
                    
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="counter green">
                    <div class="counter-content">
                        <div class="counter-icon">
                            <?php echo e($contohHc); ?>

                            
                        </div>
                        <a href="/hak-cipta" style="text-decoration:none;">
                            <h3>Hak Cipta</h3>
                        </a>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="counter blue">
                    <div class="counter-content">
                        <div class="counter-icon">
                            <?php echo e($contohDi); ?>

                            
                        </div>
                        <a href="/desain-industri" style="text-decoration:none;">
                            <h3>Desain Industri</h3>
                        </a>
                        
                    </div>
                    
                </div>
            </div>

        </div>
        
    </div>
    <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.counter-value').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 3500,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    </Script>
</body>

</html>
<?php /**PATH D:\POLITEKNIK NEGERI INDRAMAYU\proyek2\resources\views/umum-page/landing-page/index.blade.php ENDPATH**/ ?>