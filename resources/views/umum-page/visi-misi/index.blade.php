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
    <title>SIKI POLINDRA || Visi Misi SIKI POLINDRA</title>
</head>

<body>
    {{-- nav --}}
    @include('layout.nav')
    {{-- end of nav --}}

    <img src="{{ asset('assets/orang1.png') }}" alt="" class="float-end" width="550px">
    <div class="container">
        <h2>Visi</h2>
        <ol>
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi rerum neque cumque. Facilis illo corporis voluptates inventore vel, dolorem culpa magnam pariatur consequuntur! Rerum omnis esse quibusdam debitis, alias et.</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, harum itaque. Officia ut tempore accusantium ducimus cupiditate adipisci, nemo inventore autem voluptatum esse quasi sapiente quod quas accusamus laborum aperiam!</li>
        </ol>
        <br>
        <br>
        <h2>Misi</h2>
        <ol>
            <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam incidunt voluptate magnam, architecto necessitatibus accusamus quae ut nisi optio minus? Accusamus nihil quibusdam eos necessitatibus illo delectus vitae consectetur repellendus!</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate asperiores soluta dolores? Ut fuga quibusdam sapiente commodi? Perspiciatis odio numquam alias, dolore deleniti quam? Tempore temporibus explicabo rem atque repellendus.</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae porro voluptates veniam explicabo, rerum debitis tenetur rem earum illum totam, odit fuga, enim laborum repellendus omnis corrupti maxime ipsam soluta!</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae porro voluptates veniam explicabo, rerum debitis tenetur rem earum illum totam, odit fuga, enim laborum repellendus omnis corrupti maxime ipsam soluta!</li>
        </ol>

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
