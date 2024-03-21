<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href={{ URL('storage/polindra21.png') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>SIKI POLINDRA | Beranda</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow  mb-5 bg-body-tertiary bg-white">
        <div class="container">
            <img class="navbar-brand" src={{ URL('storage/polindra2.jpg') }}>
            <span class="position-absolute border border-start border-1 border-black"></span>
            <a class="navbar-brand fs-6 fw-normal font-family-Kokoro" href="#">Sistem Informasi Kekayaan Intelektual<br>Politeknik Negeri Indramayu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2" href="/paten">Paten</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2" href="/hak-cipta">Hak Cipta</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2" href="/desain-industri">Desain Industri</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Pengajuan KI
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2" href="/pengajuan-paten">Paten</a></li>
                          <li><a class="dropdown-item fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2" href="/pengajuan-hak-cipta">Hak Cipta</a></li>
                          <li><a class="dropdown-item fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2" href="/pengajuan-desain-industri">Desain Industri</a></li>
                        </ul>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2" href="/disclaimer">Disclaimer</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> 
    <div class="container">
        <img class="img-fluid" src={{ URL('storage/gedung.jpg') }}>
        <p class="fs-6 fw-normal font-family-Kokoro mt-3">
            <b>Sistem Informasi Kekayaan Intelektual POLINDRA (Sistem Informasi KI POLINDRA)</b> merupakan media informasi perkembangan permohonan KI yang dikelola oleh POLINDRA. Para pemangku kepentingan di POLINDRA, inventor, dan masyarakat luas dapat mengakses dan melihat perkembangan permohonan KI POLINDRA melalui Sistem Informasi KI POLINDRA, baik dalam bentuk grafik, tabel, dan informasi tertulis lainnya. Sistem Informasi KI POLINDRA menyediakan fitur-fitur perkembangan proses permohonan pelindungan KI POLINDRA, abstrak atau deskripsi singkat setiap KI, unduh berkas KI, dan formulir pengajuan KI online melalui unit pengelola KI POLINDRA.
        </p>
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
</body>
</html>