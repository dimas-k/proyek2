<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href={{ asset('assets/polindra21.png') }}>
    <link rel="stylesheet" href={{ asset('assets-login-user/login.css') }}>
    <title>SIKI POLINDRA || Register</title>
</head>
<body>
    <div class="container mt-4">
        <img class="float-start mt-2 me-1" src={{ asset('assets/polindra2.jpg') }} alt="">
        <p class="fs-6 fw-normal font-family-Kokoro">Sistem Informasi Kekayaan Intelektual<br>Politeknik Negeri Indramayu</p>
    </div>
    <br>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-light text-black" style="border-radius: 1rem;">
              <div class="card-body p-5">
                
                  <h2 class="fw-bold mb-2 text-uppercase text-center">Pilih sesuai diri anda</h2>
                  <br>
                  <select class="form-select" aria-label="Default select example" onchange="location = this.value;">
                    <option selected>Anda Siapa</option>
                    <option value="register/dosen/">Dosen/tendik POLINDRA</option>
                    <option value="register/umum/">Umum</option>

                {{-- <div>
                  <p class="mb-0 text-center">Belum Punya Akun? <a href="/register" class="fw-bold">Registrasi</a>
                  </p>
                </div> --}}
    
              </div>
            </div>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>