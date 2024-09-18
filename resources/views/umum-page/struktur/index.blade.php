<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('assets/css/index.css') }}>
    <link rel="shortcut icon" href={{ asset('assets/polindra21.png') }}>
    <link href={{ asset('assets/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
    <title>SIKI POLINDRA || Struktur SIKI POLINDRA</title>
</head>

<body>
    {{-- nav --}}
    @include('layout.nav')
    <br>
    <br>
    <br>
    <br>
    {{-- end of nav --}}

    <div class="container text-center">
        <span class="">Struktur Organisasi</span>
        <h2 class="mb-2">SIKI POLINDRA</h2>
        <br>
        <img class="img-fluid" src="{{ asset('assets/struktur.png') }}" alt="" width="800px" style="align-self: center">
    </div>

    {{-- footer --}}
    @include('layout.footer')
    {{-- end of footer --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
