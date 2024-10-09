<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Desain Industri</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/umum/desain-industri">Desain Industri</a></li>
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
                            <h3 class="card-title"><i class="fa fa-table me-1" data-bs-toggle="tooltip"></i>Data Desain
                                Indstri
                                {{ $di->nama_lengkap }}
                            </h3>
                        </div>
                        <div class="card-body">

                            <form action="{{ Route('umum.di.update', $di->id) }}" enctype="multipart/form-data"
                                method="post">
                                @csrf
                                <div class="table-responsive">
                                    <table class="table table-borderless p-1">

                                        <tr>
                                            <th>Nama Lengkap</th>
                                            <td><input type="text" id="nama_lengkap"
                                                    class="form-control @error('nama_lengkap') is-invalid @enderror"
                                                    name="nama_lengkap" value="{{ $di->nama_lengkap }}">
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <td>
                                                <input type="text" id="alamat"
                                                    class="form-control @error('alamat') is-invalid @enderror"
                                                     name="alamat" value="{{ $di->alamat }}">
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>No Telepon</th>
                                            <td>
                                                <input type="number" id="no_telepon"
                                                    class="form-control @error('no_telepon') is-invalid @enderror"
                                                     name="no_telepon" value="{{ $di->no_telepon }}">
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal lahir</th>
                                            <td>
                                                <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                                    class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                                    value="{{ $di->tanggal_lahir }}">
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>KTP Inventor</th>
                                            <td>
                                                <input type="file" id="ktp"
                                                    class="form-control @error('ktp_inventor') is-invalid @enderror"
                                                     name="ktp_inventor" value="{{ $di->ktp_inventor }}">
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
                                                     name="email" value="{{ $di->email }}">
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Kewarganegaraan</th>
                                            <td>
                                                <input type="text" id="warga"
                                                    class="form-control @error('kewarganegaraan') is-invalid @enderror"
                                                     value="{{ $di->kewarganegaraan }}"
                                                    name="kewarganegaraan">
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Kode Pos</th>
                                            <td><input type="number" id="pos"
                                                    class="form-control @error('kode_pos') is-invalid @enderror"
                                                     name="kode_pos" value="{{ $di->kode_pos }}">
                                            
                                                <input type="text"
                                                    class="form-control @error('institusi') is-invalid @enderror"
                                                     value="{{ $di->institusi }}" name="institusi"
                                                    hidden>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Desain Industri</th>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jenis_di"
                                                        id="satu_desain" value="Satu desain">
                                                    <label class="form-check-label" for="Satu desain" id="satu_desain">
                                                        Satu Desain
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jenis_di"
                                                        id="p_satu_desain" value="Pecahan satu desain">
                                                    <label class="form-check-label" for="Pecahan satu desain" id="p_satu_desain">
                                                        Pecahan Satu Desain
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jenis_di"
                                                        id="satu_kesatuan" value="Satu kesatuan desain">
                                                    <label class="form-check-label" for="Satu kesatuan desain"
                                                        id="satu_kesatuan">
                                                        Satu Kesatuan Desain
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jenis_di"
                                                        id="kesatuan_pecahan" value="Kesatuan pecahan satu desain">
                                                    <label class="form-check-label" for="Kesatuan pecahan satu desain"
                                                        id="kesatuan_pecahan">
                                                        Kesatuan Pecahan Satu Desain
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Judul Desain Industri</th>
                                            <td>
                                                <input type="text" name="judul_di"
                                                    class="form-control @error('judul_di') is-invalid @enderror"
                                                    value="{{ $di->judul_di }}" name="judul_di">
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Uraian desain industri</th>
                                            <td>
                                                <input type="file" 
                                                    class="form-control @error('uraian_di') is-invalid @enderror"
                                                    placeholder="" name="uraian_di" value="{{ $di->uraian_di }}" id="uraian_desain">
                                            
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>Harus memasukkan kembali file yang
                                                    sama atau yang sudah di perbarui</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Gambar Desain Industri</th>
                                            <td>
                                                <input type="file" id="gambar_desain"
                                                    class="form-control @error('gambar_di') is-invalid @enderror"
                                                    placeholder="" name="gambar_di" value="{{ $di->gambar_di }}">
                                            
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>Harus memasukkan kembali file yang
                                                    sama atau yang sudah di perbarui</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Surat Pernyataan Kepemilikan</th>
                                            <td>
                                                <input type="file"
                                                    class="form-control @error('surat_pengalihan') is-invalid @enderror"
                                                    placeholder="" name="surat_kepemilikan" id="pernyataan_kepemilikan"
                                                    value="{{ $di->surat_kepemilikan }}">
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>Harus memasukkan kembali file yang
                                                    sama atau yang sudah di perbarui</span>
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Surat Pengalihan Hak</th>
                                            <td>
                                                <input type="file" id="pengalihan"
                                                    class="form-control @error('surat_pengalihan') is-invalid @enderror"
                                                    placeholder="" name="surat_pengalihan"
                                                    value="{{ $di->surat_pengalihan }}">
                                            
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>Harus memasukkan kembali file yang
                                                    sama atau yang sudah di perbarui</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal pengajuan</th>
                                            <td>
                                                <input type="date" name="tanggal_permohonan" id="tanggalpengajuan" id="tanggalpengajuan"
                                                    class="form-control @error('tanggal_permohonan') is-invalid @enderror"
                                                    value="{{ $di->tanggal_permohonan }}">
                                            
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
