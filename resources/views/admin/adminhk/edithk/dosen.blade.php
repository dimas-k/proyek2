<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href={{ asset('assets/polindra21.png') }}>
    <title>SIKI POLINDRA-Admin | Paten | Edit</title>
    <link href={{ asset('assets/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

<body>
    {{-- Top nav bar --}}
    <div class="container-fluid border">
        <nav class="navbar navbar-expand bg-body-tertiary">
            <div class="container-fluid">
                <img class="navbar-brand" src={{ asset('assets/polindra2.jpg') }}>
                <a class="navbar-brand fs-6 fw-normal font-family-Kokoro" href="#">Sistem Informasi Kekayaan
                    Intelektual<br>Politeknik Negeri Indramayu</a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Selamat datang, {{ auth()->user()->nama_lengkap }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="/logout"><i class="bi bi-arrow-bar-left me-2"></i>Log
                                        Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    {{-- end of top naavbar --}}
    <div class="container-fluid">
        <div class="row">
            {{-- Side bar --}}
            @include('admin.layout.sidenav')
            {{-- end of sidebar --}}
            <div class="col-lg-10 mt-2">
                <div class="container bg-light rounded border pt-3">
                    <h3 class="fw-normal font-family-Kokoro mb-3">
                        <i class="bi bi-file-earmark me-2"></i>Data Hak Cipta {{ $hk->nama_lengkap }}
                    </h3>
                    <hr class="border border-black border-2 opacity-75">
                    <form enctype="multipart/form-data" method="post" action={{ route('admin_hakcipta.update_dosen',$hk->id) }}
                        id="uploadForm">
                        @csrf
                        <p class="fs-4 fw-normal font-family-Kokoro">I. IDENTITAS</p>
                        <div class="container">
                            <div class="mb-3">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control " id="nama_lengkap"
                                    placeholder="Masukkan Nama"name="nama_lengkap" value="{{ $hk->nama_lengkap }}">
                                {{-- @error('nama_lengkap')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control " id="alamat" placeholder="Masukkan Alamat"
                                    name="alamat" value="{{ $hk->alamat }}">
                                {{-- @error('alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="no_telepon" class="form-label">No telepon</label>
                                <input type="number" class="form-control" id="no_telepon"
                                    placeholder="Masukkan No telepon" name="no_telepon" value="{{ $hk->no_telepon }}">
                                {{-- @error('no_telepon')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control " value="{{ $hk->tanggal_lahir }}">
                                {{-- @error('tanggal_lahir')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="ktp" class="form-label">KTP Inventor</label>
                                <input type="file" class="form-control " id="ktp" name="ktp_inventor" value="{{ $hk->ktp_inventor }}">
                                <span class="text-danger"><i class="fa fa-warning me-2"
                                        data-bs-toggle="tooltip"></i>File harus bertipe .pdf dan tidak lebih dari
                                    2mb</span>
                                {{-- @error('ktp_inventor')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control " id="email" placeholder="Masukkan Email"
                                    name="email" value="{{ $hk->email }}">
                                {{-- @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="warga" class="form-label">Kewarganegaraan</label>
                                <input type="text" class="form-control " id="warga"
                                    placeholder="Masukkan Kewarganegaraan" name="kewarganegaraan" value="{{ $hk->kewarganegaraan }}">
                                {{-- @error('kewarganegaraan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="pos" class="form-label">Kode Pos</label>
                                <input type="number" class="form-control " id="pos"
                                    placeholder="Masukkan Kode Pos" name="kode_pos" value="{{ $hk->kode_pos }}">
                                {{-- @error('kode_pos')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <input type="text" class="form-control " id="" value="Dosen"
                                name="institusi" hidden>
                            <div class="mb-3">
                                <label for="pengaju2" class="form-label">Data Mahasiswa / Dosen <span
                                        class="text-danger">(Jika Bersama Dosen Yang Lain dan atau Bersama
                                        Mahasiswa Harap diisi)</span></label>
                                <input type="file"
                                    class="form-control @error('data_pengaju2') is-invalid @enderror"
                                    name="data_pengaju2" id="pengaju2">
                                <span class="text-danger"><i class="fa fa-warning me-2"
                                        data-bs-toggle="tooltip"></i>File harus bertipe .xlsx</span>
                                {{-- @error('data_pengaju2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="jurusan" class="form-label">Jurusan</label>
                                <select class="form-select " aria-label="Default select example" name="jurusan"
                                    id="jurusan">
                                    <option value="">Pilih Jurusan</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Teknik Mesin">Teknik Mesin
                                    </option>
                                    <option value="Teknik Pendingin dan Tata Udara">Teknik Pendingin dan Tata
                                        Udara</option>
                                    <option value="Keperawatan">Keperawatan
                                    </option>
                                </select>
                                {{-- @error('jurusan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="prodi" class="form-label">Prodi</label>
                                <select class="form-select" aria-label="Default select example" name="prodi"
                                    id="prodi">
                                    <option value="">Pilih Prodi</option>
                                    <option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
                                    <option value="D4 Rekayasa Perangkat Lunak">D4 Rekayasa Perangkat Lunak
                                    </option>
                                    <option value="D4 Sistem Informasi Kota Cerdas">D4 Sistem Informasi Kota
                                        Cerdas
                                    </option>
                                    <option value="D3 Teknik Mesin">D3 Teknik Mesin</option>
                                    <option value="D4 Perancangan Manufaktur">D4 Perancangan Manufaktur
                                    </option>
                                    <option value="D3 Teknik Pendingin dan Tata Udara">D3 Teknik Pendingin dan
                                        Tata Udara</option>
                                    <option value="D4 Teknik Instrimentasi Kontrol">D4 Teknik Instrimentasi
                                        Kontrol</option>
                                    <option value="D3 Keperawatan">D3 Keperawan</option>
                                </select>
                                {{-- @error('prodi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                        </div>

                        <p class="fs-4 fw-normal font-family-Kokoro mt-5">II. FORMULIR HAK CIPTA</p>
                        <div class="container">
                            <div class="mb-3">
                                <label for="jenis_ciptaan" class="form-label">Jenis Ciptaan
                                    <select class="form-select" aria-label="Default select example"
                                        name="jenis_ciptaan" id="jenis_ciptaan">
                                        <option selected>Pilih Jenis Hak Cipta anda</option>
                                        <option value="Karya Tulis">Karya Tulis
                                        </option>
                                        <option value="Karya Seni">Karya Seni
                                        </option>
                                        <option value="Komposisi Musik">Komposisi Musik
                                        </option>
                                        <option value="Karya Audio Visual">Karya Audio Visual
                                        </option>
                                        <option value="Karya Fotografi">Karya Fotografi
                                        </option>
                                        <option value="Karya Drama dan Koreografi">Karya Drama dan Koreografi
                                        </option>
                                        <option value="Karya Rekaman">Karya Rekaman
                                        </option>
                                        <option value="Karya Lainnya">Karya Lainnya
                                        </option>
                                        <option value="Seni Batik">Seni Batik
                                        </option>
                                    </select>
                                </label>
                                {{-- @error('jenis_ciptaan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="judul_ciptaan" class="form-label">Judul Ciptaan</label>
                                <input type="text"
                                    class="form-control @error('judul_ciptaan') is-invalid @enderror"
                                    placeholder="Masukkan Judul Ciptaan" name="judul_ciptaan" id="judul_ciptaan" value="{{ $hk->judul_ciptaan }}">
                                {{-- @error('judul_ciptaan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="uraian" class="form-label">Uraian Singkat Ciptaan</label>
                                <textarea class="form-control " placeholder="Masukkan Uraian Siangkat" name="uraian_singkat" id="uraian"
                                    style="height: 150px">{{ $hk->uraian_singkat }}</textarea>
                                {{-- @error('uarian_singkat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="invensi" class="form-label">Dokumen Invensi (Manual
                                    Book/Buku/Dll)</label>
                                <input type="file" class="form-control " placeholder="" name="dokumen_invensi"
                                    id="invensi">
                                <span class="text-danger"><i class="fa fa-warning me-2"
                                        data-bs-toggle="tooltip"></i>File harus bertipe .pdf dan tidak lebih dari
                                    2mb</span>
                                {{-- @error('dokumen_invensi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="surat_pengalihan">Surat Pengalihan Hak Cipta</label>
                                <input type="file" class="form-control " placeholder="" name="surat_pengalihan"
                                    id="surat_pengalihan">
                                <span class="text-danger"><i class="fa fa-warning me-2"
                                        data-bs-toggle="tooltip"></i>File harus bertipe .pdf dan tidak lebih dari
                                    2mb</span>
                                {{-- @error('surat_pengalihan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="pernyataan" class="form-label">Surat Pernyataan</label>
                                <input type="file" id="pernyataan" class="form-control " placeholder=""
                                    name="surat_pernyataan">
                                <span class="text-danger"><i class="fa fa-warning me-2"
                                        data-bs-toggle="tooltip"></i>File harus bertipe .pdf dan tidak lebih dari
                                    2mb</span>
                                {{-- @error('surat_pernyataan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="tanggalpengajuan" class="form-label">Tanggal Pengajuan</label>
                                <input type="date" name="tanggal_permohonan" id="tanggalpengajuan"
                                    class="form-control" value="{{ $hk->tanggal_permohonan }}">
                                {{-- @error('tanggal_permohonan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <p class="text-danger"><i class="bi bi-exclamation-triangle-fill me-2"></i>Harap
                                Isi semua Form Dengan
                                Benar</p>
                            <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Simpan
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Perhatian
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah anda yakin dengan data yang di inputkan ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-danger"
                                                data-bs-dismiss="modal">Tidak</button>
                                            <button type="submit" class="btn btn-primary">Yakin</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js"
            integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous">
        </script>
        <script src="{{ asset('assets-user/js/jquery.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $(document).ready(function() {
                $('#uploadForm').submit(function(e) {
                    e.preventDefault(); // Mencegah form terkirim secara otomatis

                    // non file
                    var nama = $('#nama_lengkap').val();
                    var alamat = $('#alamat').val();
                    var telepon = $('#no_telepon').val();
                    var tl = $('#tanggal_lahir').val();
                    var email = $('#email').val();
                    var warga = $('#warga').val();
                    var pos = $('#pos').val();
                    var jurusan = $('#jurusan').val();
                    var prodi = $('#prodi').val();
                    var jenis_ciptaan = $('#jenis_ciptaan').val();
                    var judul_ciptaan = $('#judul_ciptaan').val();
                    var uraian = $('#uraian').val();
                    var tanggal_pengajuan = $('#tanggalpengajuan').val();

                    //file
                    var ktp = $('#ktp')[0].files[0];
                    var pengaju = $('#pengaju2')[0].files[0];
                    var invensi = $('#invensi')[0].files[0];
                    var surat_pengalihan = $('#surat_pengalihan')[0].files[0];
                    var pernyataan = $('#pernyataan')[0].files[0];

                    // var errorMessage = ''; // Variabel untuk menyimpan pesan error

                    // Validasi Nama Lengkap
                    if (!nama) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops... Ada yang salah...",
                            text: "Tolong Masukkan Nama Anda!",
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 2500
                        });
                        return false;
                    }

                    // Validasi Tanggal Lahir
                    if (!alamat) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops... Ada yang salah...",
                            text: "Tolong Masukkan Alamat Anda!",
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 2500
                        });
                        return false;
                    }
                    if (!telepon) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops... Ada yang salah...",
                            text: "Tolong Masukkan No Telepon Anda!",
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 2500
                        });
                        return false;
                    }
                    if (!tl) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops... Ada yang salah...",
                            text: "Tolong Masukkan Tangal Lahir Anda!",
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 2500
                        });
                        return false;
                    }
                    if (!email) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops... Ada yang salah...",
                            text: "Tolong Masukkan Tangal Lahir Anda!",
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 2500
                        });
                        return false;
                    }
                    if (!warga) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops... Ada yang salah...",
                            text: "Tolong Masukkan Kewarganegaraan Anda!",
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 2500
                        });
                        return false;
                    }
                    if (!pos) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops... Ada yang salah...",
                            text: "Tolong Masukkan Kode Pos Anda!",
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 2500
                        });
                        return false;
                    }
                    if (jurusan === "") {
                        Swal.fire({
                            icon: "error",
                            title: "Oops... Ada yang salah...",
                            text: "Tolong Masukkan Jurusan Anda!",
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 2500
                        });
                        return false;
                    }
                    if (prodi === "") {
                        Swal.fire({
                            icon: "error",
                            title: "Oops... Ada yang salah...",
                            text: "Tolong Masukkan Prodi Anda!",
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 2500
                        });
                        return false;
                    }
                    if (!jenis_ciptaan) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops... Ada yang salah...",
                            text: "Tolong Masukkan Jenis Ciptaan Anda!",
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 2500
                        });
                        return false;
                    }
                    if (!judul_ciptaan) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops... Ada yang salah...",
                            text: "Tolong Masukkan Judul Ciptaan Anda!",
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 2500
                        });
                        return false;
                    }
                    if (!tanggal_pengajuan) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops... Ada yang salah...",
                            text: "Tolong Masukkan Tanggal Pengajuan!",
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 2500
                        });
                        return false;
                    }
                    if (!uraian) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops... Ada yang salah...",
                            text: "Tolong Masukkan Uraian Anda!",
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 2500
                        });
                        return false;
                    }

                    // Validasi File
                    if (!ktp) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops... Ada yang salah...",
                            text: "Tolong Masukkan KTP Anda!",
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 2500
                        });
                        return false;
                    }
                    if (!invensi) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops... Ada yang salah...",
                            text: "Tolong Masukkan Dokumen Invensi Anda!",
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 2500
                        });
                        return false;
                    }
                    if (!surat_pengalihan) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops... Ada yang salah...",
                            text: "Tolong Masukkan Surat Pengalihan Anda!",
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 2500
                        });
                        return false;
                    }
                    if (!pernyataan) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops... Ada yang salah...",
                            text: "Tolong Masukkan Surat Pernyataan Anda!",
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 2500
                        });
                        return false;
                    } else {
                        var allowedExtension = /(\.pdf)$/i; // Hanya memperbolehkan file berformat PDF
                        var allowedExtensionExel = /(\.xlsx)$/i; // Hanya memperbolehkan file berformat exel
                        var maxSize = 2 * 1024 * 1024; // Maksimal ukuran file adalah 2 MB

                        // Validasi ekstensi file
                        if (pengaju) {
                            // Jika file ada, cek apakah ekstensi sesuai
                            if (!allowedExtensionExel.exec(pengaju.name)) {
                                Swal.fire({
                                    icon: "error",
                                    title: "Oops... Ada yang salah...",
                                    text: "Tolong Masukkan Data Mahasiswa Dan Atau Dosen Dengan Ekstensi .xlsx",
                                    position: "top-end",
                                    showConfirmButton: false,
                                    timer: 2500
                                });
                                return false; // Gagal, form tidak dikirim
                            }
                        }
                        if (!allowedExtension.exec(ktp.name)) {
                            Swal.fire({
                                icon: "error",
                                title: "Oops... Ada yang salah...",
                                text: "Tolong Masukkan KTP Dengan Ekstensi .pdf!",
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 2500
                            });
                            return false;
                        }
                        if (!allowedExtension.exec(invensi.name)) {
                            Swal.fire({
                                icon: "error",
                                title: "Oops... Ada yang salah...",
                                text: "Tolong Masukkan Dokumen Invensi Dengan Ekstensi .pdf!",
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 2500
                            });
                            return false;
                        }
                        if (!allowedExtension.exec(surat_pengalihan.name)) {
                            Swal.fire({
                                icon: "error",
                                title: "Oops... Ada yang salah...",
                                text: "Tolong Masukkan Surat Pengalihan Dengan Ekstensi .pdf!",
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 2500
                            });
                            return false;
                        }
                        if (!allowedExtension.exec(pernyataan.name)) {
                            Swal.fire({
                                icon: "error",
                                title: "Oops... Ada yang salah...",
                                text: "Tolong Masukkan Surat pernyataan Dengan Ekstensi .pdf!",
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 2500
                            });
                            return false;
                        }

                        // Validasi ukuran file
                        if (ktp.size > maxSize) {
                            Swal.fire({
                                icon: "error",
                                title: "Oops... Ada yang salah...",
                                text: "Ukuran File KTP Lebih Dari 2mb!",
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 2500
                            });
                            return false;
                        }
                        if (invensi.size > maxSize) {
                            Swal.fire({
                                icon: "error",
                                title: "Oops... Ada yang salah...",
                                text: "Ukuran File Dokumen Invensi Lebih Dari 2mb!",
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 2500
                            });
                            return false;
                        }
                        if (surat_pengalihan.size > maxSize) {
                            Swal.fire({
                                icon: "error",
                                title: "Oops... Ada yang salah...",
                                text: "Ukuran File Surat Pengalihan Lebih Dari 2mb!",
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 2500
                            });
                            return false;
                        }
                        if (pernyataan.size > maxSize) {
                            Swal.fire({
                                icon: "error",
                                title: "Oops... Ada yang salah...",
                                text: "Ukuran File Surat Pernyataan Lebih Dari 2mb!",
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 2500
                            });
                            return false;
                        }
                    }

                    // // Jika ada error, tampilkan pesan melalui alert dan cegah pengiriman form
                    // if (errorMessage !== '') {
                    //     alert(errorMessage);
                    //     return false; // Mencegah pengiriman form
                    // }

                    // Jika validasi berhasil, submit form
                    this.submit();
                });
            });
        </script>
</body>

</html>