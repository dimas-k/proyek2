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
    <div class="container py-10 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            @if($errors->any())
                <div class="col-12">
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                </div>
            @endif
            @if(sesion()->has('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            @if(session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif    
        </div>    
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-light text-black" style="border-radius: 1rem;">
                <main>
                    <div class="ms-auto me-auto mt-5" style="width:500px" >
                        <p>we will send a link to yur email</p>
                        <form action="{{ route('reset.password.post') }}" method="POST" class="ms-auto me-auto mt-auto" style="">
                            @csrf
                            <input type="text" name="token" hidden value="{{$token}}"> 
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Enter new password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
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