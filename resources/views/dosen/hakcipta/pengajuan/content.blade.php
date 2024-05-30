<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Pengajuan Hak Cipta</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dosen/hak-cipta">Hak Cipta</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pengajuan</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-2 -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fa fa-wpforms me-2" data-bs-toggle="tooltip"></i>Formulir
                                Pengajuan Hak Cipta
                            </h3>
                        </div>
                        <div class="card-body">
                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <span class="d-flex justify-content-end">
                                <a href="https://drive.google.com/drive/folders/1-7Cop9aiCcB8FOl93FAluVu4FpSXONNl?usp=drive_link"
                                    target="_blank" class="link-dark link-underline link-underline-opacity-0"><b><i
                                            class="bi bi-download"></i></b>
                                    <img src={{ asset('assets/downloadicon.png') }} alt="">Berkas Yang Di
                                    Perlukan
                                </a>
                            </span>
                            <form method="post" enctype="multipart/form-data"
                                action="/dosen/hak-cipta/pengajuan/simpan">
                                @csrf
                                <p class="fs-4 fw-normal font-family-Kokoro">I. IDENTITAS</p>
                                <div class="container">
                                    <div class="mb-3">
                                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                        <input type="text"
                                            class="form-control @error('nama_lengkap') is-invalid @enderror"
                                            id="nama_lengkap" placeholder="Masukkan Nama"name="nama_lengkap">
                                        @error('nama_lengkap')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                            id="alamat" placeholder="Masukkan Alamat" name="alamat">
                                        @error('alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="no_telepon" class="form-label">No telepon</label>
                                        <input type="number"
                                            class="form-control @error('no_telepon') is-invalid @enderror"
                                            id="no_telepon" placeholder="Masukkan No telepon" name="no_telepon">
                                        @error('no_telepon')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                            class="form-control @error('tanggal_lahir') is-invalid @enderror">
                                        @error('tanggal_lahir')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="ktp" class="form-label">KTP Inventor</label>
                                        <input type="file"
                                            class="form-control @error('ktp_inventor') is-invalid @enderror"
                                            id="ktp" name="ktp_inventor">
                                        @error('ktp_inventor')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" placeholder="Masukkan Email" name="email">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="warga" class="form-label">Kewarganegaraan</label>
                                        <input type="text"
                                            class="form-control @error('kewarganegaraan') is-invalid @enderror"
                                            id="warga" placeholder="Masukkan Kewarganegaraan"
                                            name="kewarganegaraan">
                                        @error('kewarganegaraan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="kode_pos" class="form-label">Kode Pos</label>
                                        <input type="number"
                                            class="form-control @error('kode_pos') is-invalid @enderror" id="kode_pos"
                                            placeholder="Masukkan Kode Pos" name="kode_pos">
                                        @error('kode_pos')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <label for="jurusan" class="form-label">Jurusan
                                        <input type="text"
                                        class="form-control @error('institusi') is-invalid @enderror" id="jurusan"
                                        value="Dosen" name="institusi" hidden>
                                    </label>
                                    <div class="mb-3">
                                        <select class="form-select @error('jurusan') is-invalid @enderror"
                                            aria-label="Default select example" name="jurusan">
                                            <option selected>Pilih Jurusan</option>
                                            <option value="Teknik Informatika">Teknik Informatika</option>
                                            <option value="Teknik Mesin">Teknik Mesin
                                            </option>
                                            <option value="Teknik Pendingin dan Tata Udara">Teknik Pendingin dan Tata
                                                Udara</option>
                                            <option value="Keperawatan">Keperawatan
                                            </option>
                                        </select>
                                        @error('jurusan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="prodi" class="form-label">Prodi
                                            <input type="text"
                                            class="form-control @error('prodi') is-invalid @enderror" id="prodi"
                                            value="Dosen" name="prodi" hidden>
                                        </label>
                                        <select class="form-select @error('prodi') is-invalid @enderror"
                                            aria-label="Default select example" name="prodi">
                                            <option selected>Pilih Prodi</option>
                                            <option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
                                            <option value="D4 Rekayasa Perangkat Lunak">D4 Rekayasa Perangkat Lunak
                                            </option>
                                            <option value="D4 Sistem Informasi Kota Cerdas">D4 Sistem Informasi Kota Cerdas
                                            </option>
                                            <option value="D3 Tenknik Mesin">D3 Tenknik Mesin
                                            </option>
                                            <option value="D4 Perancangan Manufaktur">D4 Perancangan Manufaktur
                                            </option>
                                            <option value="D3 Teknik Pendingin dan Tata Udara">D3 Teknik Pendingin dan Tata Udara
                                            </option>
                                            <option value="D4 Teknik Instrimentasi Kontrol">D4 Teknik Instrimentasi Kontrol
                                            </option>
                                            <option value="D3 Keperawatan">D3 Keperawatan
                                            </option>
                                        </select>
                                        @error('prodi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <p class="fs-4 fw-normal font-family-Kokoro mt-5">II. FORMULIR HAK CIPTA</p>
                                <div class="container">
                                    <div class="mb-3">
                                        <label for="jenis_ciptaan" class="form-label">Jenis Ciptaan
                                            <select class="form-select @error('jenis_ciptaan') is-invalid @enderror" aria-label="Default select example" name="jenis_ciptaan" id="jenis_ciptaan">
                                                <option selected>Pilih Jenis Hak Cipta anda</option>
                                                <option value="Buku, program komputer, pamflet, perwajahan (layout) karya tulis yang diterbitkan, dan semua hasil karya tulis lain">Buku, program komputer, pamflet, perwajahan (layout) karya tulis yang diterbitkan, dan semua hasil karya tulis lain;
                                                </option>
                                                <option value="Ceramah, kuliah, pidato, dan ciptaan lain yang sejenis dengan itu">Ceramah, kuliah, pidato, dan ciptaan lain yang sejenis dengan itu;
                                                </option>
                                                <option value="Alat peraga yang dibuat untuk kepentingan pendidikan dan ilmu pengetahuan">Alat peraga yang dibuat untuk kepentingan pendidikan dan ilmu pengetahuan;
                                                </option>
                                                <option value="Lagu atau musik dengan atau tanpa teks">Lagu atau musik dengan atau tanpa teks;
                                                </option>
                                                <option value="Drama atau drama musikal, tari, koreografi, pewayangan, dan pantomim">Drama atau drama musikal, tari, koreografi, pewayangan, dan pantomim;
                                                </option>
                                                <option value="Seni rupa dalam segala bentuk seperti seni lukis, gambar, seni ukir, seni kaligrafi, seni pahat, seni patung, kolase, dan seni terapan">Seni rupa dalam segala bentuk seperti seni lukis, gambar, seni ukir, seni kaligrafi, seni pahat, seni patung, kolase, dan seni terapan;
                                                </option>
                                                <option value="Arsitektur">Arsitektur;
                                                </option>
                                                <option value="Peta">Peta;
                                                </option>
                                                <option value="Seni Batik">Seni Batik;
                                                </option>
                                                <option value="Fotografi">Fotografi;
                                                </option>
                                                <option value="Terjemahan, tafsir, saduran, bunga rampai, dan karya lain dari hasil pengalihwujudan">Terjemahan, tafsir, saduran, bunga rampai, dan karya lain dari hasil pengalihwujudan.
                                                </option>
                                            </select>
                                        </label>
                                        @error('jenis_ciptaan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="judul_ciptaan" class="form-label">Judul Ciptaan</label>
                                        <input type="text"
                                            class="form-control @error('judul_ciptaan') is-invalid @enderror"
                                            placeholder="Masukkan Judul Ciptaan" name="judul_ciptaan" id="judul_ciptaan">
                                        @error('judul_ciptaan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="uraian" class="form-label">Uraian Singkat Ciptaan</label>
                                        <textarea class="form-control @error('uraian_singkat') is-invalid @enderror" placeholder="Masukkan Uraian Siangkat"
                                            name="uraian_singkat" id="uraian" style="height: 150px"></textarea>
                                        @error('uarian_singkat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="pdf" class="form-label">Dokumen Invensi (Manual
                                            Book/Buku/Dll)</label>
                                        <input type="file"
                                            class="form-control @error('dokumen_invensi') is-invalid @enderror"
                                            placeholder="" name="dokumen_invensi" id="pdf">
                                        @error('dokumen_invensi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="pdf" class="form-label">Surat Pengalihan Hak Cipta</label>
                                        <input type="file"
                                            class="form-control @error('surat_pengalihan') is-invalid @enderror"
                                            placeholder="" name="surat_pengalihan" id="pdf">
                                        @error('surat_pengalihan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="pdf" class="form-label">Surat Pernyataan</label>
                                        <input type="file"
                                            class="form-control @error('surat_pernyataan') is-invalid @enderror"
                                            placeholder="" name="surat_pernyataan" id="pdf">
                                        @error('surat_pernyataan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggalpengajuan" class="form-label">Tanggal Pengajuan</label>
                                        <input type="date" name="tanggal_permohonan" id="tanggalpengajuan"
                                            class="form-control @error('tanggal_permohonan') is-invalid @enderror">
                                        @error('tanggal_permohonan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <p class="text-danger"><i class="bi bi-exclamation-triangle-fill me-2"></i>Harap
                                        Isi semua Form Dengan
                                        Benar</p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Simpan
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" data-bs-backdrop="static"
                                        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <!-- ROW-4 END -->
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
