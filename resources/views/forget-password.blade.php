{{-- @extends("layout/nav")
@section("content") --}}

{{-- @endsection --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href={{ asset('assets/polindra21.png') }}>
    <link rel="stylesheet" href={{ asset('assets-login-user/login.css') }}>
    <title>SIKI POLINDRA || Login</title>
</head>
<body>
    <div class="container mt-4">
        <img class="float-start mt-2 me-1" src={{ asset('assets/polindra2.jpg') }} alt="">
        <p class="fs-6 fw-normal font-family-Kokoro">Sistem Informasi Kekayaan Intelektual<br>Politeknik Negeri Indramayu</p>
    </div>
    <br>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            @if($errors->any())
                <div class="col-12">
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                </div>
            @endif
            @if(session()->has('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            @if(session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif    
        </div>    
        <div class="col-12 col-md-5 col-lg-6 col-xl-7">
            <div class="card bg-light text-black" style="border-radius: 2rem;">
                <main>
                    <div class="ms-auto me-auto mt-5" style="width:500px" >
                        <p>Kami akan mengirim kan email ke alamat email anda</p>
                        <form action="{{ route('forget.password.post') }}" method="POST" class="ms-auto me-auto mt-auto" style="">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Alamat email</label>
                                <input type="email" class="form-control" name="email" placeholder="Masukkan email yang terdaftar">
                            </div>
                            <button type="submit" class="btn btn-primary mb-4">Submit</button>
                        </form>
                    </div>
                </main>
            </div>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>