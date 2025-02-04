<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/logo-polindra.png') }}">
    <link rel="stylesheet" href="{{ asset('assets-login-user/login.css') }}">
    <title>SIKI POLINDRA || Register Umum</title>
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
        .password-wrapper {
            position: relative;
        }
    </style>
</head>

<body>
    <div class="container text-center mt-4">
        <img class="navbar-brand" src="{{ asset('assets/logo-polindra.png') }}" style="height: 50px;">
        <h5 class="text-white mt-2">Sistem Informasi Kekayaan Intelektual <br> Politeknik Negeri Indramayu</h5>
    </div>
    <div class="container d-flex justify-content-center align-items-center mt-5 mb-5" style="min-height: 80vh;">
        <div class="col-12 col-md-8 col-lg-5">
            <div class="card bg-light p-4">
                <h2 class="fw-bold text-uppercase text-center">Registrasi Umum</h2>
                <p class="text-center text-black-50">Masukkan data anda dengan benar!</p>
                <form method="post" action="{{ route('simpan.akun') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control"
                            value="{{ old('nama_lengkap') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="{{ old('alamat') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No Telepon</label>
                        <input type="number" name="no_telepon" class="form-control" value="{{ old('no_telepon') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Bekerja Sebagai</label>
                        <input type="text" name="kerjaan" class="form-control" value="{{ old('kerjaan') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" value="{{ old('username') }}">
                    </div>
                    <div class="mb-3 password-wrapper">
                        <label class="form-label" for="pass">Password</label>
                        <div class="input-group">
                            <input type="password" id="pass" name="password" class="form-control" required>
                            <span class="input-group-text toggle-password" onclick="togglePassword()">
                                <i class="bi bi-eye-slash" id="toggle-icon"></i>
                            </span>
                        </div>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-dark btn-lg text-white" type="submit">Register</button>
                    </div>
                </form>
                <p class="text-center mt-3">Ingin login? <a href="/login" class="fw-bold">Login</a></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function togglePassword() {
            const passwordField = document.getElementById('pass');
            const toggleIcon = document.getElementById('toggle-icon');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.classList.remove('bi-eye-slash');
                toggleIcon.classList.add('bi-eye');
            } else {
                passwordField.type = 'password';
                toggleIcon.classList.remove('bi-eye');
                toggleIcon.classList.add('bi-eye-slash');
            }
        }
    </script>
</body>

</html>
