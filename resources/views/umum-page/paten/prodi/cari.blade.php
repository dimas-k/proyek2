<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link rel="shortcut icon" href={{ asset('assets/logo-polindra.png') }}>
    <title>SIKI POLINDRA || Paten Prodi</title>
</head>

<body>
    <style>
        @media (max-width: 768px) {
            .search-form {
                flex-direction: column;
                /* Elemen menjadi vertikal */
                align-items: stretch;
                /* Elemen memenuhi lebar kontainer */
            }

            .select2-container {
                width: 100% !important;
                /* Pastikan Select2 penuh lebar */
            }

            .select2-dropdown {
                width: auto !important;
                /* Pastikan dropdown menyesuaikan dengan kontainer */
                max-width: 100% !important;

            }

            .search-form>button {
                width: 80%;
                margin-left: 0;
                margin-top: 20px;
            }
        }
    </style>
    @include('layout.nav')
    <br>
    <br>
    <br>
    <br>
    <div class="container search-container">
        <a href="/paten" class="link-dark link-underline link-underline-opacity-0 mb-3">
            <i class="bi bi-arrow-left-circle" style="font-size: 2rem;"></i>
        </a>
        <div class="rounded border shadow-sm p-3 mb-4 mt-3">
            <form action="/paten/list/prodi/cari" method="POST" class="search-form d-flex align-items-center">
                @csrf
                <label for="prodi" class="form-label me-3">Prodi</label>
                <select id="prodi" class="form-select form-select-sm select2 flex-grow-1" name="prodi"
                    style="width: 100%;" title="Pilih Prodi">
                    <option></option>
                    <option value="D3 Teknik Informatika">D3 Teknik Informatika
                    </option>
                    <option value="D4 Rekayasa Perangkat Lunak">D4 Rekayasa Perangkat Lunak</option>
                    <option value="D4 Sistem Informasi Kota Cerdas">D4 Sistem Informasi Kota Cerdas</option>
                    <option value="D3 Teknik Mesin">D3 Teknik Mesin</option>
                    <option value="D4 Perancangan Manufaktur">D4 Perancangan Manufaktur</option>
                    <option value="D3 Teknik Pendingin dan Tata Udara">D3 Teknik Pendingin dan Tata Udara</option>
                    <option value="D4 Teknik instrumentasi Kontrol">D4 Teknik instrumentasi Kontrol</option>
                    <option value="D3 Keperawatan">D3 Keperawatan</option>
                </select>
                <span class="ms-3"></span>
                <button type="submit" class="btn btn-sm btn-primary">Cari</button>
            </form>
        </div>
        <div class="rounded border shadow-sm p-3 mb-5">
            <h3 class="fw-normal font-family-Kokoro mb-3"><i class="bi bi-table me-2"></i>Daftar Paten Prodi <b>
                @foreach ($prodi as $pro)
                    {{ $pro->prodi }}
                    @break
                @endforeach
                </b>
            </h3>
            <table class="table table-hover font-family-Kokoro">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama lengkap</th>
                        <th scope="col">Jenis Paten</th>
                        <th scope="col">Judul paten</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Prodi</th>
                        <th scope="col">Tanggal pengajuan</th>
                        <th scope="col">Status paten</th>
                        {{-- <th scope="col">Detail Pengajuan</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prodi as $i => $p)
                        <tr>
                            <th scope="row">{{ ($prodi->currentPage() - 1) * $prodi->perPage() + $loop->iteration }}</th>
                            <td>{{ $p->nama_lengkap }}</td>
                            <td>{{ $p->jenis_paten }}</td>
                            <td>{{ $p->judul_paten }}</td>
                            <td>{{ $p->jurusan }}</td>
                            <td>{{ $p->prodi }}</td>
                            <td>{{ \Carbon\Carbon::parse($p->tanggal_permohonan)->format('d-m-Y') }}</td>
                            <td>{{ $p->status }}</td>
                            {{-- <td><a class="btn btn-primary" href={{ Route('paten.show', $p->id) }}>Selengkapnya</a></td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $prodi->links() }}
        </div>
    </div>

    <!-- Footer -->
    @include('layout.footer')
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            // Inisialisasi Select2
            $('#prodi').select2({
                placeholder: "Pilih Nama",
                allowClear: true
            });
        });
    </script>
</body>

</html>
