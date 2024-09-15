<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href={{ asset('assets/polindra21.png') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href={{ asset('assets/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>SIKI POLINDRA | Beranda</title>
</head>

<body>
    <style>
        .counter {
            color: #fff;
            font-family: 'Poppins', sans-serif;
            text-align: center;
            width: 210px;
            min-height: 246px;
            padding: 25px 0 0;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .counter:after {
            content: '';
            background: linear-gradient(to right, #eff0f2, #fefefe);
            height: 152px;
            width: 152px;
            border-radius: 15px;
            border: 3px solid #fff;
            box-shadow: 5px 0 8px rgba(0, 0, 0, 0.2);
            transform: translateX(-50%) rotate(45deg);
            position: absolute;
            top: 25px;
            left: 50%;
            z-index: -1;
        }

        .counter .counter-value {
            background: #fe8c00;
            font-size: 25px;
            font-weight: 600;
            letter-spacing: 2px;
            width: 100%;
            padding: 10px 0 6px;
            border-radius: 10px;
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.6), 0 0 0 2px #fff;
            position: absolute;
            left: 0;
            bottom: 0;
            z-index: -1;
        }

        .counter .counter-icon {
            background: linear-gradient(to right, rgb(255, 99, 132), #f83600);
            font-size: 30px;
            line-height: 60px;
            width: 60px;
            height: 60px;
            margin: 0 auto 20px;
            border-radius: 50%;
            border: 2px solid #fff;
            box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.4);
        }

        .counter h3 {
            color: rgb(255, 99, 132);
            font-size: 22px;
            font-weight: 500;
            text-transform: capitalize;
            line-height: 22px;
            padding: 0 30px;
            margin: 0 0 15px;
        }

        .counter.green .counter-value {
            background: rgba(54, 162, 235, 1);
        }

        .counter.green .counter-icon {
            background: linear-gradient(to right, rgba(54, 162, 235, 1),rgba(54, 182, 235, 1));
        }

        .counter.green h3 {
            color: rgba(54, 162, 235, 1);
        }

        .counter.blue .counter-value {
            background:rgba(255, 206, 86, 1);
        }

        .counter.blue .counter-icon {
            background: linear-gradient(to right, rgba(255, 206, 86, 1),rgba(255, 181, 86, 1));
        }

        .counter.blue h3 {
            color: rgba(255, 180, 86, 1);
        }

        .counter.gray .counter-value {
            background: #36474f;
        }

        .counter.gray .counter-icon {
            background: linear-gradient(to right, #36474f, #0d0e10);
        }

        .counter.gray h3 {
            color: #0d0e10;
        }

        @media screen and (max-width:990px) {
            .counter {
                margin-bottom: 40px;
            }
        }
    </style>
    {{-- nav --}}
    @include('layout.nav')
    {{-- end nav --}}

    <div class="container">
        <img class="img-fluid rounded" src={{ asset('assets/gedung.jpg') }}>
        <p class="fs-6 fw-normal font-family-Kokoro mt-3">
            <b>Sistem Informasi Kekayaan Intelektual POLINDRA (SIKI POLINDRA)</b> merupakan media
            informasi perkembangan permohonan KI yang dikelola oleh POLINDRA. Para pemangku kepentingan di POLINDRA,
            inventor, dan masyarakat luas dapat mengakses dan melihat perkembangan permohonan KI POLINDRA melalui Sistem
            Informasi KI POLINDRA, baik dalam bentuk grafik, tabel, dan informasi tertulis lainnya. Sistem Informasi KI
            POLINDRA menyediakan fitur-fitur perkembangan proses permohonan pelindungan KI POLINDRA, abstrak atau
            deskripsi singkat setiap KI, unduh berkas KI, dan formulir pengajuan KI online melalui unit pengelola KI
            POLINDRA.
        </p>
        {{-- <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <input type="hidden" id="paten2024" value="{{ $paten2024 }}">
                        <input type="hidden" id="paten2025" value="{{ $paten2025 }}">
                        <input type="hidden" id="paten2026" value="{{ $paten2026 }}">
                        <input type="hidden" id="paten2027" value="{{ $paten2027 }}">
                        <input type="hidden" id="hc2024" value="{{ $hc2024 }}">
                        <input type="hidden" id="hc2025" value="{{ $hc2025 }}">
                        <input type="hidden" id="hc2026" value="{{ $hc2026 }}">
                        <input type="hidden" id="hc2027" value="{{ $hc2027 }}">
                        <input type="hidden" id="di2024" value="{{ $di2024 }}">
                        <input type="hidden" id="di2025" value="{{ $di2025 }}">
                        <input type="hidden" id="di2026" value="{{ $di2026 }}">
                        <input type="hidden" id="di2027" value="{{ $di2027 }}">
                        <canvas class="canvas-chart" id="chart" style="height:30vh; width:68vw"></canvas>
                    </div>
                    <div class="card-body">
                        <input type="hidden" id="gabungKi2024" value="{{ $gabungKi2024 }}">
                        <input type="hidden" id="gabungKi2025" value="{{ $gabungKi2025 }}">
                        <input type="hidden" id="gabungKi2026" value="{{ $gabungKi2026 }}">
                        <input type="hidden" id="gabungKi2027" value="{{ $gabungKi2027 }}">
                        <canvas class="canvas-chart" id="gabung2024" style="height:30vh; width:68vw"></canvas>
                    </div>
                </div>
            </div>
        </div> --}}
        <br> <br>
        <div class="row justify-content-center">
            <div class="col-md-3 col-sm-6">
                <div class="counter">
                    <div class="counter-content">
                        <div class="counter-icon">
                            {{ $contohPaten }}
                            {{-- <i class="bi bi-r-circle"></i> --}}
                        </div>
                        <a href="/paten" style="text-decoration:none;">
                            <h3 >Paten</h3>
                        </a>

                    </div>
                    {{-- <span class="counter-value">{{ $contohPaten }}</span> --}}
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="counter green">
                    <div class="counter-content">
                        <div class="counter-icon">
                            {{ $contohHc }}
                            {{-- <i class="bi bi-c-circle"></i> --}}
                        </div>
                        <a href="/hak-cipta" style="text-decoration:none;">
                            <h3>Hak Cipta</h3>
                        </a>
                    </div>
                    {{-- <span class="counter-value">{{ $contohHc }}</span> --}}
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="counter blue">
                    <div class="counter-content">
                        <div class="counter-icon">
                            {{ $contohDi }}
                            {{-- <i class="bi bi-gear-wide-connected"></i> --}}
                        </div>
                        <a href="/desain-industri" style="text-decoration:none;">
                            <h3>Desain Industri</h3>
                        </a>
                        
                    </div>
                    {{-- <span class="counter-value">{{ $contohDi }}</span> --}}
                </div>
            </div>

        </div>
        {{-- <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header text-center">
                        KI yang sudah terverifikasi DJKI
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-center">
                            <div class="col-xl-3 col-sm-6 col-12">
                                <div class="card shadow-sm" style="width: 14rem;">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="align-self-center">
                                                <i class="bi bi-check-square float-start me-5"
                                                    style="font-size: 50px;"></i>
                                            </div>
                                            <div class="align-self-center">
                                                <h3 class="ms-4 d-flex justify-content-center">{{ $contohPaten }}</h3>
                                                <span class="ms-4 d-flex justify-content-center">Paten</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-12">
                                <div class="card shadow-sm" style="width: 14rem;">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="align-self-center">
                                                <i class="bi bi-check-square float-start me-3"
                                                    style="font-size: 50px;"></i>
                                            </div>
                                            <div class="align-self-center">
                                                <h3 class="ms-4 d-flex justify-content-center">{{ $contohHc }}</h3>
                                                <span class="ms-4 d-flex justify-content-center">Hak Cipta</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-12">
                                <div class="card shadow-sm" style="width: 14rem;">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="align-self-center">
                                                <i class="bi bi-check-square float-start me-1"
                                                    style="font-size: 50px;"></i>
                                            </div>
                                            <div class="align-self-center">
                                                <h3 class="ms-4 d-flex justify-content-center">{{ $contohDi }}</h3>
                                                <span class="ms-3 d-flex justify-content-center">Desain Industri</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    @include('layout.footer')
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.counter-value').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 3500,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    </Script>
</body>

</html>
