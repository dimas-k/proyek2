<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href={{ asset('assets/polindra21.png') }}>
    <title>SIKI POLINDRA-Admin | Desain Industri | Pengajuan</title>
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
                        <i class="bi bi-file-earmark-plus me-2"></i>Pengajuan Desain Industri Dosen
                    </h3>
                    <hr class="border border-black border-2 opacity-75">
                    <form enctype="multipart/form-data" method="post"
                        action="/admin/desain-industri/tambah/dosen/store" id="uploadForm">
                        @csrf
                        <p class="fs-4 fw-normal font-family-Kokoro">I. IDENTITAS</p>
                        <div class="container">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="user_id">Pilih Pemilik Desain Industri</label>
                                    <select name="user_id" id="user_id" class="form-control" onchange="updateNamaLengkap()">
                                        <option value="" selected disabled>Pilih Nama</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}" data-nama="{{ $user->nama_lengkap }}">
                                                {{ $user->nama_lengkap }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama akan terisi otomatis" readonly>
                                </div>
                                {{-- @error('nama_lengkap')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat"
                                    name="alamat">
                                {{-- @error('alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="no_telepon" class="form-label">No telepon</label>
                                <input type="number" class="form-control " id="no_telepon"
                                    placeholder="Masukkan No telepon" name="no_telepon">
                                {{-- @error('no_telepon')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
                                {{-- @error('tanggal_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="ktp" class="form-label">KTP Inventor</label>
                                <input type="file" class="form-control" id="ktp" name="ktp_inventor">
                                <span class="text-danger"><i class="bi bi-exclamation-triangle-fill me-2"
                                        data-bs-toggle="tooltip"></i>File harus bertipe .pdf dan tidak lebih
                                    dari 10mb</span>
                                {{-- @error('ktp_inventor')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control " id="email" placeholder="Masukkan Email"
                                    name="email">
                                {{-- @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="warga" class="form-label">Kewarganegaraan</label>
                                <input type="text" class="form-control" id="warga"
                                    placeholder="Masukkan Kewarganegaraan" name="kewarganegaraan"
                                    >
                                {{-- @error('kewarganegaraan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="pos" class="form-label">Kode Pos</label>
                                <input type="number" class="form-control" id="pos"
                                    placeholder="Masukkan Kode Pos" name="kode_pos">
                                {{-- @error('kode_pos')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <input type="text" class="form-control @error('institusi') is-invalid @enderror"
                                id="" value="Dosen" name="institusi" hidden>
                            <div class="mb-3">
                                <label for="data_pengaju2" class="form-label">Data Mahasiswa / Dosen <span
                                        class="text-danger">(Jika Bersama Dosen Yang Lain dan atau Bersama
                                        Mahasiswa Harap diisi)</span></label>
                                <input type="file" class="form-control " name="data_pengaju2" id="data_pengaju2">
                                <span class="text-danger"><i class="bi bi-exclamation-triangle-fill me-2"
                                        data-bs-toggle="tooltip"></i>File harus bertipe .xlsx</span>
                                {{-- @error('data_pengaju2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                @include('admin.layout.jurusan')
                                {{-- @error('jurusan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                @include('admin.layout.prodi')
                                {{-- @error('prodi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                        </div>

                        <p class="fs-4 fw-normal font-family-Kokoro mt-5">II. FORMULIR DESAIN INDUSTRI</p>
                        <div class="container">
                            <label for="" class="form-label">Jenis Desain</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_di" id="satu_desain"
                                    value="Satu Desain">
                                <label class="form-check-label" for="Satu desain" id="satu_desain">
                                    Satu Desain
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_di" id="p_satu_desain"
                                    value="Pecahan Satu Desain">
                                <label class="form-check-label" for="Pecahan satu desain" id="p_satu_desain">
                                    Pecahan Satu Desain
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_di" id="satu_kesatuan"
                                    value="Satu Kesatuan Desain">
                                <label class="form-check-label" for="Satu kesatuan desain" id="satu_kesatuan">
                                    Satu Kesatuan Desain
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_di" id="kesatuan_pecahan"
                                    value="Kesatuan Pecahan Satu Desain">
                                <label class="form-check-label" for="Kesatuan pecahan satu desain"
                                    id="kesatuan_pecahan">
                                    Kesatuan Pecahan Satu Desain
                                </label>
                            </div>
                            <div class="mb-3">
                                <label for="judul_desain" class="form-label">Judul Desain Industri</label>
                                <input type="text" class="form-control"
                                    placeholder="Masukkan Judul Desain Industri" name="judul_di"
                                    value="{{ old('judul_di') }}" id="judul_desain">
                                {{-- @error('judul_di')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="gambar_desain" class="form-label">Gambar Desain Industri</label>
                                <input type="file" class="form-control" placeholder="" name="gambar_di"
                                    id="gambar_desain">
                                <span class="text-danger"><i class="bi bi-exclamation-triangle-fill me-2"
                                        data-bs-toggle="tooltip"></i>File harus bertipe .pdf dan tidak lebih dari
                                    10mb</span>
                                {{-- @error('gambar_di')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="uraian_desain" class="form-label">Uraian Desain Industri</label>
                                <input type="file" class="form-control" placeholder="" name="uraian_di"
                                    id="uraian_desain">
                                <span class="text-danger"><i class="bi bi-exclamation-triangle-fill me-2"
                                        data-bs-toggle="tooltip"></i>File harus bertipe .pdf dan tidak lebih dari
                                    10mb</span>
                                {{-- @error('uraian_di')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="pernyataan_kepemilikan" class="form-label">Surat Pernyataan
                                    Kepemilikan</label>
                                <input type="file" class="form-control" placeholder="" name="surat_kepemilikan"
                                    id="pernyataan_kepemilikan">
                                <span class="text-danger"><i class="bi bi-exclamation-triangle-fill me-2"
                                        data-bs-toggle="tooltip"></i>File harus bertipe .pdf dan tidak lebih dari
                                    10mb</span>
                                {{-- @error('surat_kepemilikan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="pengalihan" class="form-label">Surat Pengalihan Hak</label>
                                <input type="file" class="form-control" placeholder="" name="surat_pengalihan"
                                    id="pengalihan">
                                <span class="text-danger"><i class="bi bi-exclamation-triangle-fill me-2"
                                        data-bs-toggle="tooltip"></i>File harus bertipe .pdf dan tidak lebih dari
                                    10mb</span>
                                {{-- @error('surat_pengalihan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                            </div>
                            <div class="mb-3">
                                <label for="tanggalpengajuan" class="form-label">Tanggal Pengajuan</label>
                                <input type="date" name="tanggal_permohonan" id="tanggalpengajuan"
                                    class="form-control" value="{{ old('tanggal_permohonan') }}">
                                @error('tanggal_permohonan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <p class="text-danger"><i class="bi bi-exclamation-triangle-fill me-2"></i>Harap
                                Isi semua Form Dengan Benar</p>
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
            function updateNamaLengkap() {
                var select = document.getElementById("user_id");
                var selectedOption = select.options[select.selectedIndex];
                var namaLengkap = selectedOption.getAttribute("data-nama");
        
                document.getElementById("nama_lengkap").value = namaLengkap;
            }
        </script>
        <script>
            $(document).ready(function() {
                $('#uploadForm').submit(function(e) {
                    e.preventDefault(); // Prevent automatic form submission
        
                    // Non-file inputs
                    const fields = {
                        nama: $('#nama_lengkap').val(),
                        alamat: $('#alamat').val(),
                        telepon: $('#no_telepon').val(),
                        tl: $('#tanggal_lahir').val(),
                        email: $('#email').val(),
                        warga: $('#warga').val(),
                        pos: $('#pos').val(),
                        judul_desain: $('#judul_desain').val(),
                        tanggal_pengajuan: $('#tanggalpengajuan').val(),
                        jenis_desain: $('input[name="jenis_di"]:checked').val()
                    };
        
                    // File inputs
                    const files = {
                        ktp: $('#ktp')[0].files[0],
                        anggota_inventor: $('#data_pengaju2')[0].files[0],
                        gambar_desain: $('#gambar_desain')[0].files[0],
                        uraian_desain: $('#uraian_desain')[0].files[0],
                        pernyataan_kepemilikan: $('#pernyataan_kepemilikan')[0].files[0],
                        pengalihan: $('#pengalihan')[0].files[0]
                    };
        
                    const maxSize = 10 * 1024 * 1024; // Max size: 10MB
                    const allowedExtensionPDF = /(\.pdf)$/i;
                    const allowedExtensionExcel = /(\.xlsx)$/i;
        
                    // Validation function
                    function showError(message) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops... Ada yang salah...",
                            text: message,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 2500
                        });
                    }
        
                    // Validate non-file inputs
                    for (var field in fields) {
                        if (!fields[field]) {
                            showError("Tolong Masukkan " + field.replace('_', ' ').toUpperCase() + " Anda!");
                            return false;
                        }
                    }
        
                    // List of mandatory file fields
                    const mandatoryFiles = ['ktp', 'abstrak', 'deskripsi', 'pengalihan_hak', 'klaim', 'kepemilikan', 'kuasa', 'g_paten', 'g_tampilan'];
        
                    // Validate file inputs
                    for (var file in files) {
                        // Check mandatory files that are empty
                        if (mandatoryFiles.includes(file) && !files[file]) {
                            showError("File " + file.replace('_', ' ').toUpperCase() + " Wajib Diisi!");
                            return false;
                        }
        
                        // Check file type for anggota inventor only
                        if (file === 'anggota_inventor' && files[file]) {
                            if (!allowedExtensionExcel.exec(files[file].name)) {
                                showError("Tolong Masukkan Data anggota inventor Dengan Ekstensi .xlsx!");
                                return false;
                            }
                        } else if (files[file]) {
                            // Validate other files
                            if (!allowedExtensionPDF.exec(files[file].name)) {
                                showError("Tolong Masukkan " + file.replace('_', ' ').toUpperCase() + " Dengan Ekstensi .pdf!");
                                return false;
                            }
        
                            // Validate file size
                            if (files[file].size > maxSize) {
                                showError("Ukuran File " + file.replace('_', ' ').toUpperCase() + " Lebih Dari 10 MB!");
                                return false;
                            }
                        }
                    }
        
                    // If all validations pass, submit the form
                    this.submit();
                });
            });
        </script>
    </div>
        
</body>

</html>
