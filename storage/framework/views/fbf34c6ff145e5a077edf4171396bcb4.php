<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Paten</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dosen/paten">Paten</a></li>
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
                            <h3 class="card-title"><i class="fa fa-table me-1" data-bs-toggle="tooltip"></i>Update Data
                                Paten
                                <?php echo e($p->nama_lengkap); ?>

                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo e(Route('dsn.update.paten', $p->id)); ?>" enctype="multipart/form-data"
                                method="POST" id="uploadForm">
                                <?php echo csrf_field(); ?>
                                <div class="table-responsive">
                                    <table class="table table-borderless p-1">
                                        <tr>
                                            <th>nama lengkap</th>
                                            <td>
                                                <input type="text" id="nama_lengkap" class="form-control"
                                                    placeholder="Masukkan Nama"name="nama_lengkap"
                                                    value="<?php echo e($p->nama_lengkap); ?>">

                                            </td>
                                        </tr>
                                        <tr>
                                            <th>alamat</th>
                                            <td>
                                                <input type="text" class="form-control" id="alamat"
                                                    placeholder="Masukkan Alamat" name="alamat"
                                                    value="<?php echo e($p->alamat); ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>no telepon</th>
                                            <td>
                                                <input type="text" class="form-control" id="no_telepon"
                                                    placeholder="Masukkan No telepon" name="no_telepon"
                                                    value=<?php echo e($p->no_telepon); ?>>

                                            </td>
                                        </tr>
                                        <tr>
                                            <th>tanggal lahir</th>
                                            <td>
                                                <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                                    class="form-control" value=<?php echo e($p->tanggal_lahir); ?>>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>ktp inventor</th>
                                            <td>
                                                <?php if(!empty($p->ktp_inventor)): ?>
                                                    File : <?php echo e(basename($p->ktp_inventor)); ?>

                                                <?php else: ?>
                                                    File : Tidak ada
                                                <?php endif; ?>
                                                <input type="file" class="form-control" name="ktp_inventor"
                                                    id="ktp">
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip">
                                                    </i>masukan file jika ada perubahan</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>email</th>
                                            <td>
                                                <input type="email" id="email" class="form-control"
                                                    placeholder="Masukkan Email" name="email"
                                                    value=<?php echo e($p->email); ?>>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>kewarganegaraan</th>
                                            <td>
                                                <input type="text" class="form-control"
                                                    placeholder="Masukkan Kewarganegaraan" id="warga"
                                                    name="kewarganegaraan" value=<?php echo e($p->kewarganegaraan); ?>>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>kode pos</th>
                                            <td>
                                                <input type="number" class="form-control" id="pos"
                                                    placeholder="Masukkan Kode Pos" name="kode_pos"
                                                    value=<?php echo e($p->kode_pos); ?>>
                                                <input type="text" class="form-control" value="Dosen"
                                                    name="institusi" hidden>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Data Mahasiswa / Dosen<br>
                                                
                                                <span class="text-danger">(masukan file jika ada perubahan)
                                            </th>
                                            <td>
                                                <?php if(!empty($p->data_pengaju2)): ?>
                                                    File : <?php echo e(basename($p->data_pengaju2)); ?>

                                                <?php else: ?>
                                                    File : Tidak ada
                                                <?php endif; ?>
                                                <input type="file" class="form-control" id="data_pengaju2"
                                                    name="data_pengaju2">
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>File harus bertipe .xlsx</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>jurusan</th>
                                            <td>
                                                
                                                <select class="form-select" aria-label="Default select example"
                                                    name="jurusan" id="jurusan">
                                                    <option value="">Pilih Jurusan</option>
                                                    <option value="Teknik Informatika"
                                                        <?php echo e(old('jurusan', $p->jurusan) == 'Teknik Informatika' ? 'selected' : ''); ?>>
                                                        Teknik Informatika</option>
                                                    <option value="Teknik"
                                                        <?php echo e(old('jurusan', $p->jurusan) == 'Teknik' ? 'selected' : ''); ?>>
                                                        Teknik</option>
                                                    <option value="Kesehatan"
                                                        <?php echo e(old('jurusan', $p->jurusan) == 'Kesehatan' ? 'selected' : ''); ?>>
                                                        Kesehatan</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>prodi</th>
                                            <td>
                                                
                                                <select class="form-select" aria-label="Default select example"
                                                    name="prodi" id="prodi">
                                                    <option value="">Pilih Prodi</option>
                                                    <option value="D3 Teknik Informatika"
                                                        <?php echo e(old('prodi', $p->prodi) == 'D3 Teknik Informatika' ? 'selected' : ''); ?>>
                                                        D3 Teknik Informatika</option>
                                                    <option value="D4 Rekayasa Perangkat Lunak"
                                                        <?php echo e(old('prodi', $p->prodi) == 'D4 Rekayasa Perangkat Lunak' ? 'selected' : ''); ?>>
                                                        D4 Rekayasa Perangkat Lunak</option>
                                                    <option value="D4 Sistem Informasi Kota Cerdas"
                                                        <?php echo e(old('prodi', $p->prodi) == 'D4 Sistem Informasi Kota Cerdas' ? 'selected' : ''); ?>>
                                                        D4 Sistem Informasi Kota Cerdas</option>
                                                    <option value="D3 Teknik Mesin"
                                                        <?php echo e(old('prodi', $p->prodi) == 'D3 Teknik Mesin' ? 'selected' : ''); ?>>
                                                        D3 Teknik Mesin</option>
                                                    <option value="D4 Perancangan Manufaktur"
                                                        <?php echo e(old('prodi', $p->prodi) == 'D4 Perancangan Manufaktur' ? 'selected' : ''); ?>>
                                                        D4 Perancangan Manufaktur</option>
                                                    <option value="D3 Teknik Pendingin dan Tata Udara"
                                                        <?php echo e(old('prodi', $p->prodi) == 'D3 Teknik Pendingin dan Tata Udara' ? 'selected' : ''); ?>>
                                                        D3 Teknik Pendingin dan Tata Udara</option>
                                                    <option value="D4 Teknologi Rekayasa Instrumentasi dan Kontrol"
                                                        <?php echo e(old('prodi', $p->prodi) == 'D4 Teknologi Rekayasa Instrumentasi dan Kontrol' ? 'selected' : ''); ?>>
                                                        D4 Teknologi Rekayasa Instrumentasi dan Kontrol</option>
                                                    <option value="D3 Keperawatan"
                                                        <?php echo e(old('prodi', $p->prodi) == 'D3 Keperawatan' ? 'selected' : ''); ?>>
                                                        D3 Keperawatan</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Paten</th>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jenis_paten"
                                                        value="Paten" id="paten"
                                                        <?php echo e(old('jenis_paten', $p->jenis_paten) == 'Paten' ? 'checked' : ''); ?>>
                                                    <label class="form-check-label" for="paten">Paten</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jenis_paten"
                                                        value="Paten Sederhana" id="paten_s"
                                                        <?php echo e(old('jenis_paten', $p->jenis_paten) == 'Paten Sederhana' ? 'checked' : ''); ?>>
                                                    <label class="form-check-label" for="paten_s">Paten
                                                        Sederhana</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>judul paten</th>
                                            <td>
                                                <input type="text" class="form-control" id="judul_paten"
                                                    placeholder="Masukkan Judul Paten" name="judul_paten"
                                                    value="<?php echo e($p->judul_paten); ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>abstrak paten</th>
                                            <td>
                                                <?php if(!empty($p->abstrak_paten)): ?>
                                                File : <?php echo e(basename($p->abstrak_paten)); ?>

                                            <?php else: ?>
                                                File : Tidak ada
                                            <?php endif; ?>
                                                <input type="file" class="form-control" id="abstrak"
                                                    placeholder="" name="abstrak_paten">
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>masukan file jika ada
                                                    perubahan</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>deskripsi paten</th>
                                            <td>
                                                <?php if(!empty($p->deskripsi_paten)): ?>
                                                File : <?php echo e(basename($p->deskripsi_paten)); ?>

                                            <?php else: ?>
                                                File : Tidak ada
                                            <?php endif; ?>
                                                <input type="file" class="form-control" id="deskripsi"
                                                    placeholder="" name="deskripsi_paten">
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>masukan file jika ada
                                                    perubahan</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Pengalihan Hak
                                                Invensi</th>
                                            <td>
                                                <?php if(!empty($p->pengalihan_hak)): ?>
                                                File : <?php echo e(basename($p->pengalihan_hak)); ?>

                                            <?php else: ?>
                                                File : Tidak ada
                                            <?php endif; ?>
                                                <input type="file" class="form-control" id="pengalihan_hak"
                                                    placeholder="" name="pengalihan_hak">
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>masukan file jika ada
                                                    perubahan</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>klaim</th>
                                            <td>
                                                <?php if(!empty($p->klaim)): ?>
                                                File : <?php echo e(basename($p->klaim)); ?>

                                            <?php else: ?>
                                                File : Tidak ada
                                            <?php endif; ?>
                                                <input type="file" class="form-control" id="klaim"
                                                    placeholder="" name="klaim">
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>masukan file jika ada
                                                    perubahan</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Pernyataan kepemikikan
                                                Inventor</th>
                                            <td>
                                                <?php if(!empty($p->pernyataan_kepemilikan)): ?>
                                                File : <?php echo e(basename($p->pernyataan_kepemilikan)); ?>

                                            <?php else: ?>
                                                File : Tidak ada
                                            <?php endif; ?>
                                                <input type="file" class="form-control" id="kepemilikan"
                                                    placeholder="" name="pernyataan_kepemilikan">
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>masukan file jika ada
                                                    perubahan</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>surat kuasa</th>
                                            <td>
                                                <?php if(!empty($p->surat_kuasa)): ?>
                                                File : <?php echo e(basename($p->surat_kuasa)); ?>

                                            <?php else: ?>
                                                File : Tidak ada
                                            <?php endif; ?>
                                                <input type="file" class="form-control" id="kuasa"
                                                    placeholder="" name="surat_kuasa">
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>masukan file jika ada
                                                    perubahan</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>gambar paten</th>
                                            <td>
                                                <?php if(!empty($p->gambar_paten)): ?>
                                                File : <?php echo e(basename($p->gambar_paten)); ?>

                                            <?php else: ?>
                                                File : Tidak ada
                                            <?php endif; ?>
                                                <input type="file" class="form-control" id="g_paten"
                                                    placeholder="" name="gambar_paten">
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>masukan file jika ada
                                                    perubahan</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>gambar tampilan</th>
                                            <td>
                                                <?php if(!empty($p->gambar_tampilan)): ?>
                                                File : <?php echo e(basename($p->gambar_tampilan)); ?>

                                            <?php else: ?>
                                                File : Tidak ada
                                            <?php endif; ?>
                                                <input type="file" class="form-control" id="g_tampilan"
                                                    placeholder="" name="gambar_tampilan">
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>masukan file jika ada
                                                    perubahan</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>tanggal pengajuan</th>
                                            <td>
                                                <input type="date" name="tanggal_permohonan" id="tanggalpengajuan"
                                                    class="form-control" id="tanggalpengajuan"
                                                    value=<?php echo e($p->tanggal_permohonan); ?>>
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
            <!-- ROW-4 END -->
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
<?php /**PATH D:\POLITEKNIK NEGERI INDRAMAYU\proyek2\resources\views/dosen/paten/edit/content.blade.php ENDPATH**/ ?>