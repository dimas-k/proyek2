<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Hak Cipta</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dosen/hak-cipta">Hak Cipta</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-2 -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fa fa-table me-1" data-bs-toggle="tooltip"></i>Data Hak
                                Cipta
                                <?php echo e($hc->nama_lengkap); ?>

                            </h3>
                        </div>
                        <div class="card-body">
                            <form action=<?php echo e(Route('dsn.update.hc', $hc->id)); ?> enctype="multipart/form-data"
                                method="post" id="uploadForm">
                                <?php echo csrf_field(); ?>
                                <div class="table-responsive">
                                    <table class="table table-borderless p-1">

                                        <tr>
                                            <th>Nama Lengkap</th>
                                            <td><input type="text" class="form-control" id="nama_lengkap"
                                                    name="nama_lengkap" value="<?php echo e($hc->nama_lengkap); ?>">

                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <td>
                                                <input type="text" id="alamat" class="form-control "
                                                    name="alamat" value="<?php echo e($hc->alamat); ?>">

                                            </td>
                                        </tr>
                                        <tr>
                                            <th>No Telepon</th>
                                            <td>
                                                <input type="number" id="no_telepon" class="form-control "
                                                    name="no_telepon" value="<?php echo e($hc->no_telepon); ?>">

                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal lahir</th>
                                            <td>
                                                <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                                    class="form-control " value="<?php echo e($hc->tanggal_lahir); ?>">

                                            </td>
                                        </tr>
                                        <tr>
                                            <th>KTP</th>
                                            <td>
                                                <input type="file" class="form-control " id="ktp"
                                                    name="ktp_inventor" value="<?php echo e($hc->ktp_inventor); ?>">
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>Harus memasukkan kembali file yang
                                                    sama atau yang sudah di perbarui</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>
                                                <input type="email" id="email" class="form-control" name="email"
                                                    value="<?php echo e($hc->email); ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Kewarganegaraan</th>
                                            <td>
                                                <input type="text" id="warga" class="form-control"
                                                    value="<?php echo e($hc->kewarganegaraan); ?>" name="kewarganegaraan">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Kode Pos</th>
                                            <td><input type="number" id="pos" class="form-control "
                                                    name="kode_pos" value="<?php echo e($hc->kode_pos); ?>">

                                                <input type="text" class="form-control "
                                                    value="<?php echo e($hc->institusi); ?>" name="institusi" hidden>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Data Mahasiswa / Dosen <span class="text-danger">(Jika Bersama Dosen
                                                    Yang Lain dan atau Bersama
                                                    Mahasiswa Harap diisi)</span>
                                            </th>
                                            <td>
                                                <input type="file" class="form-control " name="data_pengaju2"
                                                    id="data_pengaju2">
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>File harus bertipe .xlsx</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>jurusan</th>
                                            <td>
                                                <select class="form-select" aria-label="Default select example" name="jurusan" id="jurusan">
                                                    <option value="">Pilih Jurusan</option>
                                                    <option value="Teknik Informatika" <?php echo e(old('jurusan',$hc->jurusan) == 'Teknik Informatika' ? 'selected' : ''); ?>>Teknik Informatika</option>
                                                    <option value="Teknik" <?php echo e(old('jurusan', $hc->jurusan) == 'Teknik' ? 'selected' : ''); ?>>Teknik</option>
                                                    <option value="Kesehatan" <?php echo e(old('jurusan', $hc->jurusan) == 'Kesehatan' ? 'selected' : ''); ?>>Kesehatan</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>prodi</th>
                                            <td>
                                                <select class="form-select" aria-label="Default select example" name="prodi" id="prodi">
                                                    <option value="">Pilih Prodi</option>
                                                    <option value="D3 Teknik Informatika" <?php echo e(old('prodi', $hc->prodi) == 'D3 Teknik Informatika' ? 'selected' : ''); ?>>D3 Teknik Informatika</option>
                                                    <option value="D4 Rekayasa Perangkat Lunak" <?php echo e(old('prodi', $hc->prodi) == 'D4 Rekayasa Perangkat Lunak' ? 'selected' : ''); ?>>D4 Rekayasa Perangkat Lunak</option>
                                                    <option value="D4 Sistem Informasi Kota Cerdas" <?php echo e(old('prodi', $hc->prodi) == 'D4 Sistem Informasi Kota Cerdas' ? 'selected' : ''); ?>>D4 Sistem Informasi Kota Cerdas</option>
                                                    <option value="D3 Teknik Mesin" <?php echo e(old('prodi', $hc->prodi) == 'D3 Teknik Mesin' ? 'selected' : ''); ?>>D3 Teknik Mesin</option>
                                                    <option value="D4 Perancangan Manufaktur" <?php echo e(old('prodi', $hc->prodi) == 'D4 Perancangan Manufaktur' ? 'selected' : ''); ?>>D4 Perancangan Manufaktur</option>
                                                    <option value="D3 Teknik Pendingin dan Tata Udara" <?php echo e(old('prodi', $hc->prodi) == 'D3 Teknik Pendingin dan Tata Udara' ? 'selected' : ''); ?>>D3 Teknik Pendingin dan Tata Udara</option>
                                                    <option value="D4 Teknologi Rekayasa Instrumentasi dan Kontrol" <?php echo e(old('prodi', $hc->prodi) == 'D4 Teknologi Rekayasa Instrumentasi dan Kontrol' ? 'selected' : ''); ?>>D4 Teknologi Rekayasa Instrumentasi dan Kontrol</option>
                                                    <option value="D3 Keperawatan" <?php echo e(old('prodi', $hc->prodi) == 'D3 Keperawatan' ? 'selected' : ''); ?>>D3 Keperawatan</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Ciptaan</th>
                                            <td>
                                                <label for="jenis_ciptaan" class="form-label">Jenis Ciptaan</label>
                                                <select class="form-select" aria-label="Default select example" name="jenis_ciptaan" id="jenis_ciptaan">
                                                    <option value="">Pilih Jenis Hak Cipta</option>
                                                    <option value="Karya Tulis" <?php echo e(old('jenis_ciptaan', $hc->jenis_ciptaan) == 'Karya Tulis' ? 'selected' : ''); ?>>Karya Tulis</option>
                                                    <option value="Program Komputer" <?php echo e(old('jenis_ciptaan', $hc->jenis_ciptaan) == 'Program Komputer' ? 'selected' : ''); ?>>Program Komputer</option>
                                                    <option value="Karya Lainnya" <?php echo e(old('jenis_ciptaan', $hc->jenis_ciptaan) == 'Karya Lainnya' ? 'selected' : ''); ?>>Karya Lainnya</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Judul Ciptaan</th>
                                            <td>
                                                <input type="text" class="form-control " id="judul_ciptaan"
                                                    placeholder="Masukkan Judul Ciptaan" name="judul_ciptaan"
                                                    value="<?php echo e($hc->judul_ciptaan); ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Uraian Singkat Ciptaan</th>
                                            <td>
                                                <textarea class="form-control " placeholder="Masukkan Uraian Siangkat" id="uraian" name="uraian_singkat"
                                                    id="floatingTextarea2" style="height: 150px"><?php echo e($hc->uraian_singkat); ?></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Dokumen Invensi (Manual Book/Buku/Dll)</th>
                                            <td>
                                                <input type="file" class="form-control " placeholder=""
                                                    name="dokumen_invensi" id="invensi"
                                                    value="<?php echo e($hc->dokumen_invensi); ?>">
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>Harus memasukkan kembali file yang
                                                    sama atau yang sudah di perbarui</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Surat Pengalihan Hak Cipta</th>
                                            <td>
                                                <input type="file" class="form-control " placeholder=""
                                                    name="surat_pengalihan" id="surat_pengalihan"
                                                    value="<?php echo e($hc->surat_pengalihan); ?>">
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>Harus memasukkan kembali file yang
                                                    sama atau yang sudah di perbarui</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Surat Pernyataan</th>
                                            <td>
                                                <input type="file" class="form-control " id="pernyataan"
                                                    placeholder="" name="surat_pernyataan"
                                                    value="<?php echo e($hc->surat_pernyataan); ?>">
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>Harus memasukkan kembali file yang
                                                    sama atau yang sudah di perbarui</span>
                                            </td>
                                        </tr>
                                        <th>Tanggal pengajuan</th>
                                        <td>
                                            <input type="date" name="tanggal_permohonan" id="tanggalpengajuan"
                                                class="form-control " id="tanggalpengajuan"
                                                value="<?php echo e($hc->tanggal_permohonan); ?>">
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
<?php /**PATH D:\POLITEKNIK NEGERI INDRAMAYU\proyek2\resources\views/dosen/hakcipta/edit/content.blade.php ENDPATH**/ ?>