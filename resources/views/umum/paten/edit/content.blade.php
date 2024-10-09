<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Paten</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/umum/paten">Paten</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Lihat</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-2 -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fa fa-table me-1" data-bs-toggle="tooltip"></i>Data Paten
                                {{ $paten->nama_lengkap }}
                            </h3>
                        </div>
                        <div class="card-body">

                            <form action="{{ Route('umum.paten.update', $paten->id) }}" enctype="multipart/form-data"
                                method="post">
                                @csrf
                                <div class="table-responsive">
                                    <table class="table table-borderless p-1">

                                        <tr>
                                            <th>Nama Lengkap</th>
                                            <td><input type="text" id="nama_lengkap"
                                                    class="form-control @error('nama_lengkap') is-invalid @enderror"
                                                    name="nama_lengkap"
                                                    value="{{ $paten->nama_lengkap }}">
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <td>
                                                <input type="text" id="alamat"
                                                    class="form-control @error('alamat') is-invalid @enderror"
                                                     name="alamat" value="{{ $paten->alamat }}">
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>No Telepon</th>
                                            <td>
                                                <input type="number" id="no_telepon"
                                                    class="form-control @error('no_telepon') is-invalid @enderror"
                                                     name="no_telepon" value="{{ $paten->no_telepon }}">
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal lahir</th>
                                            <td>
                                                <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                                    class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                                    value="{{ $paten->tanggal_lahir }}">
                                               
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>KTP</th>
                                            <td>
                                                <input type="file" id="ktp"
                                                    class="form-control @error('ktp_inventor') is-invalid @enderror"
                                                     name="ktp_inventor"
                                                    value="{{ $paten->ktp_inventor }}">
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>Harus memasukkan kembali file yang
                                                    sama atau yang sudah di perbarui</span>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>
                                                <input type="email" id="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                     name="email" value="{{ $paten->email }}">
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Kewarganegaraan</th>
                                            <td>
                                                <input type="text" id="warga"
                                                    class="form-control @error('kewarganegaraan') is-invalid @enderror"
                                                     value="{{ $paten->kewarganegaraan }}"
                                                    name="kewarganegaraan">
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Kode Pos</th>
                                            <td><input type="number" id="pos"
                                                    class="form-control @error('kode_pos') is-invalid @enderror"
                                                     name="kode_pos" value="{{ $paten->kode_pos }}">
                                               
                                                <input type="text"
                                                    class="form-control @error('institusi') is-invalid @enderror"
                                                     value="{{ $paten->institusi }}" name="institusi"
                                                    hidden>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Paten</th>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jenis_paten"
                                                        id="paten" value="Paten">
                                                    <label class="form-check-label" for="Paten">
                                                        Paten
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jenis_paten"
                                                        id="paten_s" value="Paten sederhana">
                                                    <label class="form-check-label" for="Paten sederhana" for="paten_s">
                                                        Paten Sederhana
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Judul Paten</th>
                                            <td>
                                                <input type="text" id="judul_paten"
                                                    class="form-control @error('judul_paten') is-invalid @enderror"
                                                     name="judul_paten"
                                                    value="{{ $paten->judul_paten }}">
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Abstrak Paten</th>
                                            <td>
                                                <input type="file" id="abstrak"
                                                    class="form-control @error('abstrak_paten') is-invalid @enderror"
                                                     placeholder="" name="abstrak_paten">
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>Harus memasukkan kembali file yang
                                                    sama atau yang sudah di perbarui</span>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Deskripsi Paten</th>
                                            <td>
                                                <input type="file" id="deskripsi"
                                                    class="form-control @error('deskripsi_paten') is-invalid @enderror"
                                                     placeholder="" name="deskripsi_paten">
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>Harus memasukkan kembali file yang
                                                    sama atau yang sudah di perbarui</span>
                                               
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Pengalihan hak invensi</th>
                                            <td>
                                                <input type="file" id="pengalihan_hak"
                                                    class="form-control @error('pengalihan_hak') is-invalid @enderror"
                                                     placeholder="" name="pengalihan_hak">
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>Harus memasukkan kembali file yang
                                                    sama atau yang sudah di perbarui</span>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Klaim</th>
                                            <td>
                                                <input type="file" id="klaim"
                                                    class="form-control @error('abstrak_paten') is-invalid @enderror"
                                                     placeholder="" name="klaim">
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>Harus memasukkan kembali file yang
                                                    sama atau yang sudah di perbarui</span>
                                               
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Pernyataan Kepemilikan</th>
                                            <td>
                                                <input type="file" id="kepemilikan"
                                                    class="form-control @error('pernyataan_kepemilikan') is-invalid @enderror"
                                                     placeholder="" name="pernyataan_kepemilikan">
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>Harus memasukkan kembali file yang
                                                    sama atau yang sudah di perbarui</span>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Surat Kuasa</th>
                                            <td>
                                                <input type="file" id="kuasa"
                                                    class="form-control @error('surat_kuasa') is-invalid @enderror"
                                                     placeholder="" name="surat_kuasa">
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>Harus memasukkan kembali file yang
                                                    sama atau yang sudah di perbarui</span>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Gambar Paten</th>
                                            <td>
                                                <input type="file" id="g_paten"
                                                    class="form-control @error('gambar_paten') is-invalid @enderror"
                                                     placeholder="" name="gambar_paten">
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>Harus memasukkan kembali file yang
                                                    sama atau yang sudah di perbarui</span>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Gambar Tampilan</th>
                                            <td>
                                                <input type="file" id="g_tampilan"
                                                    class="form-control @error('gambar_tampilan') is-invalid @enderror"
                                                     placeholder="" name="gambar_tampilan">
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>Harus memasukkan kembali file yang
                                                    sama atau yang sudah di perbarui</span>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal pengajuan</th>
                                            <td>
                                                <input type="date" name="tanggal_permohonan" id="tanggalpengajuan"
                                                    class="form-control @error('tanggal_permohonan') is-invalid @enderror"
                                                    value="{{ $paten->tanggal_permohonan }}">
                                                
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
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
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
