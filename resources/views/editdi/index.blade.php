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
    <title>SIKI POLINDRA-Admin | Edit Desain Industri</title>
</head>

<body>
    <div class="container">
        <a href="/admin/desain-industri" class="link-dark link-underline link-underline-opacity-0 mb-3 "><i class="bi bi-arrow-left-circle mb-3" style="font-size: 35px;"></i></a>
        <form enctype="multipart/form-data" method="post" action={{ Route('admin_desainindustri.update', $di->id) }}>
            @csrf
            <p class="fs-4 fw-normal font-family-Kokoro">I. IDENTITAS</p>
            <div class="container">
                <div class="mb-3">
                    <label for="" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="" placeholder="Masukkan Nama"
                        name="nama_lengkap" value="{{ $di->nama_lengkap }}">
                        @error('kewarganegaraan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="" placeholder="Masukkan Alamat"
                        name="alamat" value="{{ $di->alamat }}">
                        @error('kewarganegaraan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">No telepon</label>
                    <input type="text" class="form-control @error('no_telepon') is-invalid @enderror" id="" placeholder="Masukkan No telepon"
                        name="no_telepon" value="{{ $di->no_telepon }}">
                        @error('no_telepon')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id=""
                        placeholder="" name="tanggal_lahir" value="{{ $di->tanggal_lahir }}">
                        @error('tanggal_lahir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="Ktp" class="form-label">KTP Inventor</label>
                    <input type="file" class="form-control @error('ktp_inventor') is-invalid @enderror" id="" name="ktp_inventor"
                        value="{{ $di->ktp_inventor }}">
                        @error('ktp_inventor')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="" placeholder="Masukkan Email"
                        name="email" value="{{ $di->email }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kewarganegaraan</label>
                    <input type="text" class="form-control @error('kewarganegaraan') is-invalid @enderror" id="" placeholder="Masukkan Kewarganegaraan"
                        name="kewarganegaraan" value="{{ $di->kewarganegaraan }}">
                        @error('kewarganegaraan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kode Pos</label>
                    <input type="text" class="form-control @error('kode_pos') is-invalid @enderror" id="" placeholder="Masukkan Kode Pos"
                        name="kode_pos" value="{{ $di->kode_pos }}">
                        @error('kode_pos')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
            </div>

            <p class="fs-4 fw-normal font-family-Kokoro mt-5">II. FORMULIR DESAIN INDUSTRI</p>
            <div class="container">
                <label for="" class="form-label">Jenis Desain</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_di" id="" value="Satu desain">
                    <label class="form-check-label" for="Satu desain">
                      Satu Desain
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_di" id="" value="Pecahan satu desain">
                    <label class="form-check-label" for="Pecahan satu desain">
                      Pecahan Satu Desain
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_di" id="" value="Satu kesatuan desain">
                    <label class="form-check-label" for="Satu kesatuan desain">
                      Satu Kesatuan Desain
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_di" id="" value="Kesatuan pecahan satu desain">
                    <label class="form-check-label" for="Kesatuan pecahan satu desain">
                      Kesatuan Pecahan Satu Desain
                    </label>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Judul Desain Industri</label>
                    <input type="text" class="form-control @error('judul_di') is-invalid @enderror" id="" placeholder="Masukkan Judul Paten"
                        name="judul_di" value="{{ $di->judul_di }}">
                        @error('judul_di')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Gambar Desain Industri</label>
                    <input type="file" class="form-control @error('gambar_di') is-invalid @enderror" placeholder="" name="gambar_di"
                        value="{{ $di->gambar_di }}">
                        @error('gambar_di')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Uraian Desain Industri</label>
                    <input type="file" class="form-control @error('uraian_di') is-invalid @enderror" placeholder="" name="uraian_di"
                        value="{{ $di->uraian_di }}">
                        @error('uraian_di')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Surat Pernyataan Kepemilikan</label>
                    <input type="file" class="form-control @error('surat_kepemilikan') is-invalid @enderror"  placeholder="" name="surat_kepemilikan" value="{{ $di->surat_kepemilikan }}">
                    @error('surat_kepemilikan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Surat Pengalihan Hak</label>
                    <input type="file" class="form-control @error('surat_pengalihan') is-invalid @enderror" placeholder="" name="surat_pengalihan"
                        value="{{ $di->surat_pengalihan }}">
                        @error('surat_pengalihan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tanggal Pengajuan</label>
                    <input type="date" name="tanggal_permohonan" id="tanggalpengajuan" class="form-control  @error('tanggal_permohonan') is-invalid @enderror"
                        value="{{ $di->tanggal_permohonan }}">
                        @error('tanggal_permohonan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Status Desain Industri</label>
                    <select class="form-select @error('status') is-invalid @enderror" aria-label="Default select example" name="status">
                        <option selected>Pilih Status Paten</option>
                        <option value="Dalam Proses Usulan">Dalam Proses Usulan</option>
                        <option value="Pemeriksaan">Pemeriksaan</option>
                        <option value="Diberi">Diberi</option>
                        <option value="Ditolak">Ditolak</option>
                        <option value="Keterangam Belum Lengkap">Keterangam Belum Lengkap</option>
                      </select>
                      @error('status')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Serifikat Desain Industri</label>
                    <input type="file" class="form-control @error('sertifikat_desain') is-invalid @enderror"
                        id="" placeholder="" name="sertifikat_desain">
                    @error('sertifikat_desain')
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
