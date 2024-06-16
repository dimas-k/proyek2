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
    <title>SIKI POLINDRA | Beranda</title>
</head>

<body>
    {{-- nav --}}
    @include('layout.nav')
    {{-- end nav --}}

    <div class="container">
        <img class="img-fluid" src={{ asset('assets/gedung.jpg') }}>
        <p class="fs-6 fw-normal font-family-Kokoro mt-3">
            <b>Sistem Informasi Kekayaan Intelektual POLINDRA (Sistem Informasi KI POLINDRA)</b> merupakan media
            informasi perkembangan permohonan KI yang dikelola oleh POLINDRA. Para pemangku kepentingan di POLINDRA,
            inventor, dan masyarakat luas dapat mengakses dan melihat perkembangan permohonan KI POLINDRA melalui Sistem
            Informasi KI POLINDRA, baik dalam bentuk grafik, tabel, dan informasi tertulis lainnya. Sistem Informasi KI
            POLINDRA menyediakan fitur-fitur perkembangan proses permohonan pelindungan KI POLINDRA, abstrak atau
            deskripsi singkat setiap KI, unduh berkas KI, dan formulir pengajuan KI online melalui unit pengelola KI
            POLINDRA.
        </p>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    {{-- <div class="card-header">
              <div class="input-group mb-3">
                <select id="filter-chart" value="chart-paten" name="" id="">
                  <option id="chart-paten" value="paten-chart">Jumlah Pengajuan KI</option>
                  <option id="chart-hc" value="hc-chart">Hak Cipta</option>
                  <option id="chart-di" value="di-chart">Desain Industri</option>
                </select>
              </div>
            </div> --}}
                    <div class="card-body">
                        {{-- Paten --}}
                        <input type="hidden" id="paten2024" value="{{ $paten2024 }}">
                        <input type="hidden" id="paten2025" value="{{ $paten2025 }}">
                        <input type="hidden" id="paten2026" value="{{ $paten2026 }}">
                        <input type="hidden" id="paten2027" value="{{ $paten2027 }}">
                        {{-- Hak Cipta --}}
                        <input type="hidden" id="hc2024" value="{{ $hc2024 }}">
                        <input type="hidden" id="hc2025" value="{{ $hc2025 }}">
                        <input type="hidden" id="hc2026" value="{{ $hc2026 }}">
                        <input type="hidden" id="hc2027" value="{{ $hc2027 }}">
                        {{-- Desain Industri --}}
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
        </div>
    </div>
    </div>
    <footer class="text-center text-lg-star bg-body-white shadow-lg mt-5">
        <!-- Copyright -->
        <div class="text-center p-3">
            © 2023 Copyright:
            <a class="text-body link-underline link-underline-opacity-0" href="https://polindra.ac.id/">Politeknik
                Negeri Indramayu</a>
        </div>
        <!-- Copyright -->
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <Script>
        // Paten
        const paten2024 = document.getElementById('paten2024').value;
        const paten2025 = document.getElementById('paten2025').value;
        const paten2026 = document.getElementById('paten2026').value;
        const paten2027 = document.getElementById('paten2027').value;
        // Hak Cipta
        const hc2024 = document.getElementById('hc2024').value;
        const hc2025 = document.getElementById('hc2025').value;
        const hc2026 = document.getElementById('hc2026').value;
        const hc2027 = document.getElementById('hc2027').value;
        // Desain Industri
        const di2024 = document.getElementById('di2024').value;
        const di2025 = document.getElementById('di2025').value;
        const di2026 = document.getElementById('di2026').value;
        const di2027 = document.getElementById('di2027').value;
        //gabungan
        const gabungKi2024 = document.getElementById('gabungKi2024').value;
        const gabungKi2025 = document.getElementById('gabungKi2025').value;
        const gabungKi2026 = document.getElementById('gabungKi2026').value;
        const gabungKi2027 = document.getElementById('gabungKi2027').value;
        const chartgabung = document.getElementById('gabung2024').getContext('2d');

        const chart = document.getElementById('chart').getContext('2d');
        const chartHKI = new Chart(chart, {
            type: 'bar',
            data: {
                labels: ['2024','2025','2026','2027'],
                datasets: [{
                        label: 'Paten',
                        data: [paten2024,paten2025,paten2026,paten2027],
                        backgroundColor: [
                            'rgba(255, 99, 132, 1)',

                        ],
                        borderWidth: 2
                    },
                    {
                        label: 'Hak Cipta',
                        data: [hc2024, hc2025, hc2026, hc2027],
                        backgroundColor: [
                            'rgba(54, 162, 235, 1)',

                        ],
                        borderWidth: 2
                    },
                    {
                        label: 'Desain Industri',
                        data: [di2024, di2025, di2026, di2027],
                        backgroundColor: [
                            'rgba(255, 206, 86, 1)',

                        ],

                        borderWidth: 2
                    },
                ]
            },
            options: {
                scales: {
                    y: {
                        suggestedMin: 0,
                        ticks: {
                            precision: 0
                        }
                    }
                },
                categoryPercentage: 0.5
            },
            
        });
        //---
            const p = new Chart(chartgabung, {
            type: 'line',
            data: {
                labels: ['2024', '2025', '2026', '2027'],
                datasets: [{
                    label: '',
                    data: [gabungKi2024,gabungKi2025,gabungKi2026,gabungKi2027],
                    borderColor:
                    'rgba(54, 162, 235, 1)',
                    borderWidth: 2
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    }
                },
                elements:{
                    line:{
                        tension:0.5
                    }
                },
                scales:{
                    yAxes:[{
                        ticks:{
                            beginAtZero:true
                        }
                    }]
                },
                transitions: {
                    show: {
                        animations: {
                            x: {
                                from: 1
                            },
                            y: {
                                from: 1
                            }
                        }
                    },
                    hide: {
                        animations: {
                            x: {
                                to: 10
                            },
                            y: {
                                to: 10
                            }
                        }
                    }
                }
            },
        });
    </script>
    <script>

    </script>
    </Script>
</body>

</html>

