<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="shortcut icon" href={{ URL('storage/polindra21.png') }}>
    <title>SIKI POLINDRA-Admin | Edit Paten</title>
</head>

<body>
    <div class="container">
        <a href="/admin/paten" class="link-dark link-underline link-underline-opacity-0 mb-3 "><i class="bi bi-arrow-left-circle mb-3" style="font-size: 35px;"></i></a>
        <form method="post" enctype="multipart/form-data" action={{ Route('admin_paten.update', $p->id) }}>
            @csrf
            <p class="fs-4 fw-normal font-family-Kokoro">I. IDENTITAS</p>
            <div class="container">
                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror"
                        id="" placeholder="Masukkan Nama"name="nama_lengkap" value="{{ $p->nama_lengkap }}">
                    @error('nama_lengkap')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id=""
                        placeholder="Masukkan Alamat" name="alamat" value="{{ $p->alamat }}">
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">No telepon</label>
                    <input type="text" class="form-control @error('no_telepon') is-invalid @enderror" id=""
                        placeholder="Masukkan No telepon" name="no_telepon" value={{ $p->no_telepon }}>
                    @error('no_telepon')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id=""
                        class="form-control @error('tanggal_lahir') is-invalid @enderror" value={{ $p->tanggal_lahir }}>
                    @error('tanggal_lahir')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">KTP Inventor</label>
                    <input type="file" class="form-control @error('ktp_inventor') is-invalid @enderror"
                        id="" name="ktp_inventor">
                    @error('ktp_inventor')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id=""
                        placeholder="Masukkan Email" name="email" value={{ $p->email }}>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kewarganegaraan</label>
                    <input type="text" class="form-control @error('kewarganegaraan') is-invalid @enderror"
                        id="" placeholder="Masukkan Kewarganegaraan" name="kewarganegaraan" value={{ $p->kewarganegaraan }}>
                    @error('kewarganegaraan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kode Pos</label>
                    <input type="number" class="form-control @error('kode_pos') is-invalid @enderror" id=""
                        placeholder="Masukkan Kode Pos" name="kode_pos" value={{ $p->kode_pos }}>
                    @error('kode_pos')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <p class="fs-4 fw-normal font-family-Kokoro mt-5">II. FORMULIR PATEN</p>
            <div class="container">
                <label for="" class="form-label">Jenis Paten</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_paten" id=""
                        value="Paten">
                    <label class="form-check-label" for="Paten">
                        Paten
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_paten" id=""
                        value="Paten sederhana">
                    <label class="form-check-label" for="Paten sederhana">
                        Paten Sederhana
                    </label>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Judul Paten</label>
                    <input type="text" class="form-control @error('judul_paten') is-invalid @enderror"
                        id="" placeholder="Masukkan Judul Paten" name="judul_paten" value="{{ $p->judul_paten }}">
                    @error('judul_paten')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Abstrak Paten</label>
                    <input type="file" class="form-control @error('abstrak_paten') is-invalid @enderror"
                        id="" placeholder="" name="abstrak_paten" >
                    @error('abstrak_paten')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Deskripsi Paten</label>
                    <input type="file" class="form-control @error('deskripsi_paten') is-invalid @enderror"
                        id="" placeholder="" name="deskripsi_paten">
                    @error('deskripsi_paten')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Pengalihan Hak Invensi</label>
                    <input type="file" class="form-control @error('pengalihan_hak') is-invalid @enderror"
                        id="" placeholder="" name="pengalihan_hak">
                    @error('pengalihan_hak')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Klaim</label>
                    <input type="file" class="form-control @error('abstrak_paten') is-invalid @enderror"
                        id="" placeholder="" name="klaim" >
                    @error('klaim')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Pernyataan kepemikikan Inventor</label>
                    <input type="file" class="form-control @error('pernyataan_kepemilikan') is-invalid @enderror"
                        id="" placeholder="" name="pernyataan_kepemilikan" >
                    @error('pernyataan_kepemilikan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Surat kuasa</label>
                    <input type="file" class="form-control @error('surat_kuasa') is-invalid @enderror"
                        id="" placeholder="" name="surat_kuasa" >
                    @error('surat_kuasa')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">gambar Paten</label>
                    <input type="file" class="form-control @error('gambar_paten') is-invalid @enderror"
                        id="" placeholder="" name="gambar_paten">
                    @error('surat_kuasa')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">gambar Tampilan</label>
                    <input type="file" class="form-control @error('gambar_tampilan') is-invalid @enderror"
                        id="" placeholder="" name="gambar_tampilan">
                    @error('gambar_tampilan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tanggal Pengajuan</label>
                    <input type="date" name="tanggal_permohonan" id="tanggalpengajuan"
                        class="form-control @error('tanggal_permohonan') is-invalid @enderror" value={{ $p->tanggal_permohonan }}>
                    @error('tanggal_permohonan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Status Paten</label>
                    <select class="form-select @error('status') is-invalid @enderror" aria-label="Default select example" name="status">
                        <option selected>Pilih Status Paten</option>
                        <option value="Pemeriksaan Formalitas">Pemeriksaan Formalitas</option>
                        <option value="Menunggu Tanggapan Formalitas">Menunggu Tanggapan Formalitas</option>
                        <option value="Masa pengumuman">Masa pengumuman</option>
                        <option value="Menunggu Pembayaran Substasif">Menunggu Pembayaran Substasif</option>
                        <option value="Substansif Tahap Awal">Substansif Tahap Awal</option>
                        <option value="Substansif Tahap Lanjut">Substansif Tahap Lanjut</option>
                        <option value="Substansif Tahap Akhir">Substansif Tahap Akhir</option>
                        <option value="Menunggu Tanggapan Substansif">Menunggu Tanggapan Substansif</option>
                        <option value="Diberi">Diberi</option>
                        <option value="Ditolak">Ditolak</option>
                      </select>
                      @error('status')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Serifikat Paten</label>
                    <input type="file" class="form-control @error('sertifikat_paten') is-invalid @enderror"
                        id="" placeholder="" name="sertifikat_paten">
                    @error('sertifikat_paten')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-3 mb-5">Update</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>