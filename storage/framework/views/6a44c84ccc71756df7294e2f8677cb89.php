<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/polindra21.png')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets-login-user/login.css')); ?>">
    <title>SIKI POLINDRA || Login</title>
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
    </style>
</head>
<body>
    <div class="container text-center mt-4">
        <img class="navbar-brand" src="<?php echo e(asset('assets/logo-polindra.png')); ?>" style="height: 50px;">
        <h5 class="text-white mt-2">Sistem Informasi Kekayaan Intelektual <br> Politeknik Negeri Indramayu</h5>
    </div>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="col-12 col-md-8 col-lg-5">
            <div class="card bg-light p-4">
                <h4 class="text-center">Lupa Password</h4>
                <p class="text-center text-muted">Kami akan mengirimkan email ke alamat yang Anda daftarkan.</p>
                <?php if($errors->any()): ?>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="alert alert-danger"><?php echo e($error); ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <?php if(session()->has('error')): ?>
                    <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
                <?php endif; ?>
                <?php if(session()->has('success')): ?>
                    <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                <?php endif; ?>
                <form action="<?php echo e(route('forget.password.post')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label class="form-label">Alamat Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Masukkan email yang terdaftar" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Kirim</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH D:\coolyeah\proyek_ki_polindra\proyek2\resources\views/forget-password.blade.php ENDPATH**/ ?>