<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href={{ asset('assets/polindra21.png') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        <b>Sistem Informasi Kekayaan Intelektual POLINDRA (Sistem Informasi KI POLINDRA)</b> merupakan media informasi perkembangan permohonan KI yang dikelola oleh POLINDRA. Para pemangku kepentingan di POLINDRA, inventor, dan masyarakat luas dapat mengakses dan melihat perkembangan permohonan KI POLINDRA melalui Sistem Informasi KI POLINDRA, baik dalam bentuk grafik, tabel, dan informasi tertulis lainnya. Sistem Informasi KI POLINDRA menyediakan fitur-fitur perkembangan proses permohonan pelindungan KI POLINDRA, abstrak atau deskripsi singkat setiap KI, unduh berkas KI, dan formulir pengajuan KI online melalui unit pengelola KI POLINDRA.
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
                
                <input type="hidden" id="paten" value="{{ $paten }}">
                <input type="hidden" id="di" value="{{ $di }}">
                <input type="hidden" id="hc" value="{{ $hc }}">
                <canvas class="canvas-chart" id="chart" style="height:40vh; width:50vw"></canvas>
              </div>
              <div class="card-body">
                <input type="hidden" id="gabungKi2024" value="{{ $gabungKi2024 }}">
                <canvas class="canvas-chart" id="gabung2024" style="height:40vh; width:50vw"></canvas>
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
        <a class="text-body link-underline link-underline-opacity-0" href="https://polindra.ac.id/">Politeknik Negeri Indramayu</a>
      </div>
        <!-- Copyright -->
    </footer>
    <script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.2/firebase-app.js";
        import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.7.2/firebase-analytics.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries
      
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
          apiKey: "AIzaSyC3wH4mELxEbZ5OdDMs6f1Z2oSZaY20tA8",
          authDomain: "proyek1-bd7f1.firebaseapp.com",
          projectId: "proyek1-bd7f1",
          storageBucket: "proyek1-bd7f1.appspot.com",
          messagingSenderId: "557110588868",
          appId: "1:557110588868:web:869a162dba1ea352a02091",
          measurementId: "G-S8VDEWQJ8H"
        };
      
        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
      </script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>            
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <Script>
      const paten = document.getElementById('paten').value;   
      const hc = document.getElementById('hc').value;   
      const di = document.getElementById('di').value;   
      const chart = document.getElementById('chart').getContext('2d');
      const chartHKI = new Chart(chart, {
        type: 'bar',
        data: {
          labels:['Jumlah Pengajuan HKI'],
          datasets: [
              {
              label: 'Paten',
              data: [paten],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',

              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',

              ],
              borderWidth: 1
          },
              {
              label: 'Hak Cipta',
              data: [hc],
              backgroundColor: [
              'rgba(54, 162, 235, 0.2)',

              ],
              borderColor: [
              'rgba(54, 162, 235, 1)',

              ],
              borderWidth: 1
          },
              {
              label: 'Desain Industri',
              data: [di],
              backgroundColor: [
              'rgba(255, 206, 86, 0.2)',

              ],
              borderColor: [
              'rgba(255, 206, 86, 1)',

              ],
              borderWidth: 1
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
          }
      });
    </script>
    <script>
      const gabungKi2024 = document.getElementById('gabungKi2024').value;
      console.log(gabungKi2024);
      
      const chartgabung = document.getElementById('gabung2024').getContext('2d');

      const p = new Chart(chartgabung, {
        type: 'bar',
        data: {
          labels: ['2024','2025','2026','2027'],
          datasets: [
            {
            label:'',
            data: [gabungKi2024],
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
            ],
            borderColor: [
              'rgba(255, 99, 132, 1)',
            ],
            borderWidth: 1
          },
        ]
        },
        options: {
          plugins:{
            legend:{
              display:false
              }
            },
            scales: {
              y: {
                suggestedMin: 0,
                ticks: {
                  precision: 0
                }
              }
            },
            categoryPercentage: 0.5
          }
      });
    </script>
  </Script>
</body>
</html>
