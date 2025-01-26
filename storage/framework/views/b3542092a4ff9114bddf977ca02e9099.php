<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href=<?php echo e(asset('assets/bootstrap/css/bootstrap.min.css')); ?> rel="stylesheet">
    <link rel="shortcut icon" href=<?php echo e(asset('assets/polindra21.png')); ?>>
    
    <title>SIKI POLINDRA || Login</title>
</head>
<body>
    <div class="container mt-4">
        <img class="float-start mt-2 me-1" src=<?php echo e(asset('assets/polindra21.png')); ?> alt="">
        <p class="fs-6 fw-normal font-family-Kokoro">Sistem Informasi Kekayaan Intelektual<br>Politeknik Negeri Indramayu</p>
    </div>
    <br>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <?php if(session()->has('success')): ?>
            <div class="alert alert-success alert-dismissible fade show rounded" role="alert">
              <?php echo e(session('success')); ?>

              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php endif; ?>

          <?php if(session()->has('loginError')): ?>
            <div class="alert alert-danger alert-dismissible fade show rounded" role="alert">
              <?php echo e(session('loginError')); ?>

              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php endif; ?>

          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-light text-black" style="border-radius: 1rem;">
              <div class="card-body p-5">
                <form class="mb-md-5 mt-md-4 pb-5" method="post" action=<?php echo e(route('autentikasi.user')); ?>>
                  <?php echo csrf_field(); ?>
                  <h2 class="fw-bold mb-2 text-uppercase text-center">Login<br>SIKI POLINDRA</h2>
                  <p class="text-black-50 mb-5">Masukkan Username dan password Anda!</p>
    
                  <div class="form-outline form-white mb-4">
                    <label class="form-label" for="username">username</label>
                    <input type="text" id="username" name="username" class="form-control form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required value=<?php echo e(old('username')); ?>>
                    <?php $__errorArgs = ['username'];
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
    
                  <div class="form-outline form-white mb-4">
                    <label class="form-label" for="pass">Password</label>
                    <input type="password" id="pass" name="password" class="form-control form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                    <?php $__errorArgs = ['password'];
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
                  <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <button class="btn btn-dark px-3 text-white" type="submit" id="submit">Login</button>
                  </div>
                </form>
                <div>
                  <p class="mb-0 text-center">Belum Punya Akun? <a href="/register" class="fw-bold">Registrasi</a>
                  </p>
                  <br>
                  <p class="mb-0 text-center"><a href="<?php echo e(route("forget.password")); ?>" class="fw-bold">Lupa password?</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html><?php /**PATH D:\coolyeah\proyek_ki_polindra\proyek2\resources\views/login-user/login/index.blade.php ENDPATH**/ ?>