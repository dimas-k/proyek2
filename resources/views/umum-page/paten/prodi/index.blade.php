<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="shortcut icon" href={{ asset('assets/polindra21.png') }}>
    <title>SIKI POLINDRA || Paten Prodi</title>
</head>

<body>
    @include('layout.nav')
    <div class="container">
        <a href="/paten" class="link-dark link-underline link-underline-opacity-0 mb-5 "><i
                class="bi bi-arrow-left-circle mb-5" style="font-size: 35px;"></i></a>
        <div class="rounded border shadow-sm p-4 mb-5 mt-4">
            <form action="{{ route('cari.paten.prodi') }}" method="GET" class="ms-2">
                <label for="" class="form-label me-4">Cari Prodi</label>
                <select class="form-select-sm" aria-label="Default select example" name="prodi"
                    style="width: 1050px">
                    <option>-</option>
                    <option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
                    <option value="D4 Rekayasa Perangkat Lunak">D4 Rekayasa Perangkat Lunak</option>
                    <option value="D4 Sistem Informasi Kota Cerdas">D4 Sistem Informasi Kota Cerdas</option>
                    <option value="D3 Teknik Mesin">D3 Teknik Mesin</option>
                    <option value="D4 Perancangan Manufaktur">D4 Perancangan Manufaktur</option>
                    <option value="D3 Teknik Pendingin dan Tata Udara">D3 Teknik Pendingin dan Tata Udara</option>
                    <option value="D4 Teknik instrumentasi Kontrol">D4 Teknik instrumentasi Kontrol</option>
                    <option value="D3 Keperawatan">D3 Keperawatan</option>
                </select>
                <button type="submit" class="btn btn-sm btn-primary ms-3">Cari</button>
            </form>
        </div>
    </div>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-secondary-subtle text-muted shadow-inner fixed-bottom">
        <!-- Section: Social media -->
        {{-- <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
            <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-google"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-github"></i>
            </a>
        </div>
        <!-- Right -->
    </section> --}}
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="pt-1 mt-5">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            POLITEKNIK NEGERI INDRAMAYU
                        </h6>
                        <p>
                            <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.8880908169504!2d108.27887677495575!3d-6.408414693582335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6eb87d1fcaf97d%3A0x4fc15b3c8407ada4!2sPoliteknik%20Negeri%20Indramayu!5e0!3m2!1sid!2sid!4v1728365465003!5m2!1sid!2sid"
                            width="280" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Link terkait
                        </h6>
                        <p>
                            <a href="https://p3m.polindra.ac.id/" class="text-reset" target="_blank">P3M POLINDRA</a>
                        </p>
                        <p>
                            <a href="https://www.dgip.go.id/" class="text-reset" target="_blank">DJKI</a>
                        </p>
                        <p>
                            <a href="https://worldwide.espacenet.com/" class="text-reset" target="_blank">Espacenet</a>
                        </p>
                        <p>
                            <a href="https://patents.google.com/" class="text-reset" target="_blank">Google Patent</a>
                        </p>
                        <p>
                            <a href="https://pdki-indonesia.dgip.go.id/" class="text-reset" target="_blank">Penelusuran PDKI</a>
                        </p>
                        
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Kontak</h6>
                        <p><i class="bi bi-house-door me-2"></i>Jl. Raya Lohbener Lama No. 08 Indramayu 45252
                        </p>
                        <p><i class="bi bi-telephone me-1"></i>(0234)5746464</p>
                        <p><i class="bi bi-envelope me-1"></i> <a class="link-dark link-underline link-underline-opacity-0" href="mailto:sentra_ki@polindra.ac.id">sentra_ki@polindra.ac.id</a>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2024 Copyright:
            <a class="text-reset fw-bold" href="https://polindra.ac.id/">Politeknik Negeri Indramayu</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
