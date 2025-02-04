<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo e(asset('assets/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/logo-polindra.png')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets-login-user/login.css')); ?>">
    <title>SIKI POLINDRA || Register</title>
    <style>
        body {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .card {
            border-radius: 1rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-select {
            font-size: 1.1rem;
            padding: 10px;
        }

        .logo-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .logo-container img {
            height: 50px;
        }
    </style>
</head>

<body>
    <div class="container text-center mt-4">
        <img class="navbar-brand" src="<?php echo e(asset('assets/logo-polindra.png')); ?>" style="height: 50px;">
        <h5 class="text-white mt-2">Sistem Informasi Kekayaan Intelektual <br> Politeknik Negeri Indramayu</h5>
    </div>
    <div class="container d-flex justify-content-center" style="min-height: 80vh;">
        <div class="col-12 col-md-8 col-lg-5 mt-5">
            <div class="card bg-light p-4 text-center">
                <h2 class="fw-bold">Pilih Sesuai Diri Anda</h2>
                <br>
                <select class="form-select" onchange="location = this.value;">
                    <option selected>Anda Siapa</option>
                    <option value="register/dosen/">Dosen/Tendik POLINDRA</option>
                    <option value="register/umum/">Umum</option>
                </select>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php /**PATH D:\coolyeah\proyek_ki_polindra\proyek2\resources\views/login-user/regist/index.blade.php ENDPATH**/ ?>