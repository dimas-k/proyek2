<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href={{ asset('assets/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
    <link rel="shortcut icon" href={{ asset('assets/polindra21.png') }}>
    <link rel="stylesheet" href={{ asset('assets-login-user/login.css') }}>
    <title>SIKI POLINDRA || Register Dosen</title>
</head>
<body>
    <div class="container mt-4">
        <img class="float-start mt-2 me-1" src={{ asset('assets/polindra2.jpg') }} alt="">
        <p class="fs-6 fw-normal font-family-Kokoro">Sistem Informasi Kekayaan Intelektual<br>Politeknik Negeri Indramayu</p>
    </div>
    <br>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show rounded" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
          @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show rounded" role="alert">
              {{ session('loginError') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-light text-black" style="border-radius: 1rem;">
              <div class="card-body p-5">
                <form class="mb-md-5 mt-md-4 pb-5" enctype="multipart/form-data" method="post" action="/simpan/akun">
                  @csrf
                  <h2 class="fw-bold mb-2 text-uppercase text-center">Registrasi Dosen</h2>
                  <p class="text-black-50 mb-5">Masukkan data anda dengan benar!</p>
    
                  <div class="form-outline form-white mb-4">
                    <label class="form-label" for="username">Nama Lengkap</label>
                    <input type="text" id="username" name="nama_lengkap" class="form-control form-control @error('nama_lengkap') is-invalid @enderror"  value="{{ old('nama_lengkap') }}">
                    @error('nama_lengkap')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
    
                  <div class="form-outline form-white mb-4">
                    <label class="form-label" for="pass">No telepon</label>
                    <input type="number" id="pass" name="no_telepon" class="form-control form-control @error('no_telepon') is-invalid @enderror"  value="{{ old('no_telepon') }}">
                    @error('no_telepon')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-outline form-white mb-4">
                    <label class="form-label" for="pass">Email</label>
                    <input type="email" id="" name="email" class="form-control form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-outline form-white mb-4">
                    <label class="form-label" for="pass">Alamat</label>
                    <input type="text" id="pass" name="alamat" class="form-control form-control @error('alamat') is-invalid @enderror"  value="{{ old('alamat') }}">
                    @error('alamat')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-outline form-white mb-4">
                    <label class="form-label" for="pass">Jabatan</label>
                    <input type="text" id="pass" name="jabatan" class="form-control form-control @error('jabatan') is-invalid @enderror" value="{{ old('jabatan') }}" required>
                    @error('jabatan')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-outline form-white mb-4">
                    <label class="form-label" for="nip">NIP</label>
                    <input type="number" id="nip" name="nip" class="form-control form-control @error('nip') is-invalid @enderror"  value="{{ old('nip') }}">
                    @error('nip')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-outline form-white mb-4">
                    <label class="form-label" for="pass">Username</label>
                    <input type="text" id="pass" name="username" class="form-control form-control @error('username') is-invalid @enderror"  value="{{ old('username') }}">
                    @error('username')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-outline form-white mb-4">
                    <label class="form-label" for="pass">password</label>
                    <input type="password" id="pass" name="password" class="form-control form-control @error('password') is-invalid @enderror" >
                    @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <input type="text" value="Dosen" name="role" class="form-control form-control" hidden>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <button class="btn btn-dark btn-lg px-5 text-white" type="submit" id="submit" name="submit">Register</button>
                  </div>
                </form>
                <div>
                  <p class="mb-0 text-center">Ingin login? <a href="/login" class="fw-bold">login</a>
                  </p>
                </div>
    
              </div>
            </div>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>