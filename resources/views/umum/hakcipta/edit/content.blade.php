<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Hak Cipta</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/umum/hak-cipta">Hak Cipta</a></li>
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
                            <h3 class="card-title"><i class="fa fa-table me-1" data-bs-toggle="tooltip"></i>Data Hak Cipta
                                {{ $hc->nama_lengkap }}
                            </h3>
                        </div>
                        <div class="card-body">

                            <form action={{ Route('umum.hc.update', $hc->id) }} enctype="multipart/form-data"
                                method="post">
                                @csrf
                                <div class="table-responsive">
                                    <table class="table table-borderless p-1">

                                        <tr>
                                            <th>Nama Lengkap</th>
                                            <td><input type="text"
                                                    class="form-control @error('nama_lengkap') is-invalid @enderror"
                                                    id="nama_lengkap" name="nama_lengkap" value="{{ $hc->nama_lengkap }}">
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <td>
                                                <input type="text" id="alamat"
                                                    class="form-control @error('alamat') is-invalid @enderror"
                                                     name="alamat" value="{{ $hc->alamat }}">
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>No Telepon</th>
                                            <td>
                                                <input type="number" id="no_telepon"
                                                    class="form-control @error('no_telepon') is-invalid @enderror"
                                                     name="no_telepon" value="{{ $hc->no_telepon }}">
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal lahir</th>
                                            <td>
                                                <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                                    class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                                    value="{{ $hc->tanggal_lahir }}">
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>KTP</th>
                                            <td>
                                                <input type="file" id="ktp"
                                                    class="form-control @error('ktp_inventor') is-invalid @enderror"
                                                     name="ktp_inventor" value="{{ $hc->ktp_inventor }}">
                                                <span class="text-danger"><i class="fa fa-warning me-2" data-bs-toggle="tooltip"></i>Harus memasukkan kembali file yang sama atau yang sudah di perbarui</span>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>
                                                <input type="email" id="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                     name="email" value="{{ $hc->email }}">
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Kewarganegaraan</th>
                                            <td>
                                                <input type="text" id="warga"
                                                    class="form-control @error('kewarganegaraan') is-invalid @enderror"
                                                     value="{{ $hc->kewarganegaraan }}"
                                                    name="kewarganegaraan">
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Kode Pos</th>
                                            <td><input type="number" id="pos"
                                                    class="form-control @error('kode_pos') is-invalid @enderror"
                                                     name="kode_pos" value="{{ $hc->kode_pos }}">
                                                
                                                <input type="text"
                                                    class="form-control @error('institusi') is-invalid @enderror"
                                                     value="{{ $hc->institusi }}" name="institusi"
                                                    hidden>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Ciptaan</th>
                                            <td>
                                                @include('umum.layout.jenis-ciptaan-edit')
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Judul Ciptaan</th>
                                            <td>
                                                <input type="text" id="judul_ciptaan"
                                                    class="form-control @error('judul_ciptaan') is-invalid @enderror"
                                                    placeholder="Masukkan Judul Ciptaan" name="judul_ciptaan"
                                                    value="{{ $hc->judul_ciptaan }}">
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Uraian Singkat Ciptaan</th>
                                            <td>
                                                <textarea class="form-control @error('uraian_singkat') is-invalid @enderror" placeholder="Masukkan Uraian Siangkat"
                                                id="uraian" name="uraian_singkat" id="floatingTextarea2" style="height: 150px">{{ $hc->uraian_singkat }}</textarea>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Dokumen Invensi (Manual Book/Buku/Dll)</th>
                                            <td>
                                                <input type="file" id="invensi"
                                                    class="form-control @error('dokumen_invensi') is-invalid @enderror"
                                                    placeholder="" name="dokumen_invensi"
                                                    value="{{ $hc->dokumen_invensi }}">
                                                    <span class="text-danger"><i class="fa fa-warning me-2" data-bs-toggle="tooltip"></i>Harus memasukkan kembali file yang sama atau yang sudah di perbarui</span>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Surat Pengalihan Hak Cipta</th>
                                            <td>
                                                <input type="file" id="surat_pengalihan"
                                                    class="form-control @error('surat_pengalihan') is-invalid @enderror"
                                                    placeholder="" name="surat_pengalihan"
                                                    value="{{ $hc->surat_pengalihan }}">
                                                    <span class="text-danger"><i class="fa fa-warning me-2" data-bs-toggle="tooltip"></i>Harus memasukkan kembali file yang sama atau yang sudah di perbarui</span>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Surat Pernyataan</th>
                                            <td>
                                                <input type="file" id="pernyataan"
                                                    class="form-control @error('surat_pernyataan') is-invalid @enderror"
                                                    placeholder="" name="surat_pernyataan"
                                                    value="{{ $hc->surat_pernyataan }}">
                                                    <span class="text-danger"><i class="fa fa-warning me-2" data-bs-toggle="tooltip"></i>Harus memasukkan kembali file yang sama atau yang sudah di perbarui</span>
                                                
                                            </td>
                                        </tr>
                                        <th>Tanggal pengajuan</th>
                                        <td>
                                            <input type="date" name="tanggal_permohonan" id="tanggalpengajuan" id="tanggalpengajuan"
                                                class="form-control @error('tanggal_permohonan') is-invalid @enderror"
                                                value="{{ $hc->tanggal_permohonan }}">
                                            
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
