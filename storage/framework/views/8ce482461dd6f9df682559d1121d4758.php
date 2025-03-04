<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Desain Industri</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dosen/desain-industri">Desain Industri</a></li>
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
                            <h3 class="card-title"><i class="fa fa-table me-1" data-bs-toggle="tooltip"></i>Data Desain
                                Indstri
                                <?php echo e($di->nama_lengkap); ?>

                            </h3>
                        </div>
                        <div class="card-body">

                            <form action="<?php echo e(Route('dsn.update.di', $di->id)); ?>" enctype="multipart/form-data"
                                method="post" id="uploadForm">
                                <?php echo csrf_field(); ?>
                                <div class="table-responsive">
                                    <table class="table table-borderless p-1">

                                        <tr>
                                            <th>Nama Lengkap</th>
                                            <td><input type="text" class="form-control" id="nama_lengkap"
                                                    name="nama_lengkap" value="<?php echo e($di->nama_lengkap); ?>">

                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <td>
                                                <input type="text" class="form-control" id="alamat" name="alamat"
                                                    value="<?php echo e($di->alamat); ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>No Telepon</th>
                                            <td>
                                                <input type="number" class="form-control" id="no_telepon"
                                                    name="no_telepon" value="<?php echo e($di->no_telepon); ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal lahir</th>
                                            <td>
                                                <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                                    class="form-control" value="<?php echo e($di->tanggal_lahir); ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>KTP</th>
                                            <td>
                                                <?php if(!empty($di->ktp_inventor)): ?>
                                                    File : <?php echo e(basename($di->ktp_inventor)); ?>

                                                <?php else: ?>
                                                    File : Tidak ada
                                                <?php endif; ?>
                                                <input type="file" class="form-control" id="ktp"
                                                    name="ktp_inventor" value="<?php echo e($di->ktp_inventor); ?>">
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>Harus memasukkan kembali file yang
                                                    sama atau yang sudah di perbarui</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    value="<?php echo e($di->email); ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Kewarganegaraan</th>
                                            <td>
                                                <input type="text" class="form-control" id="warga"
                                                    value="<?php echo e($di->kewarganegaraan); ?>" name="kewarganegaraan">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Kode Pos</th>
                                            <td><input type="number" class="form-control" id="pos"
                                                    name="kode_pos" value="<?php echo e($di->kode_pos); ?>">
                                                <input type="text" class="form-control" value="<?php echo e($di->institusi); ?>"
                                                    name="institusi" id="institusi" hidden>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Data Mahasiswa / Dosen
                                            </th>
                                            <td>
                                                <?php if(!empty($di->data_pengaju2)): ?>
                                                    File : <?php echo e(basename($di->data_pengaju2)); ?>

                                                <?php else: ?>
                                                    File : Tidak ada
                                                <?php endif; ?>
                                                <input type="file" class="form-control" name="data_pengaju2"
                                                    id="pengaju2">
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>Harus memasukkan kembali file yang
                                                    sama atau yang sudah di perbarui dan harus berekstensi xlsx
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>jurusan</th>
                                            <td>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="jurusan" id="jurusan">
                                                    <option value="">Pilih Jurusan</option>
                                                    <option value="Teknik Informatika"
                                                        <?php echo e(old('jurusan', $di->jurusan) == 'Teknik Informatika' ? 'selected' : ''); ?>>
                                                        Teknik Informatika</option>
                                                    <option value="Teknik"
                                                        <?php echo e(old('jurusan', $di->jurusan) == 'Teknik' ? 'selected' : ''); ?>>
                                                        Teknik</option>
                                                    <option value="Kesehatan"
                                                        <?php echo e(old('jurusan', $di->jurusan) == 'Kesehatan' ? 'selected' : ''); ?>>
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
                                                        <?php echo e(old('prodi', $di->prodi) == 'D3 Teknik Informatika' ? 'selected' : ''); ?>>
                                                        D3 Teknik Informatika</option>
                                                    <option value="D4 Rekayasa Perangkat Lunak"
                                                        <?php echo e(old('prodi', $di->prodi) == 'D4 Rekayasa Perangkat Lunak' ? 'selected' : ''); ?>>
                                                        D4 Rekayasa Perangkat Lunak</option>
                                                    <option value="D4 Sistem Informasi Kota Cerdas"
                                                        <?php echo e(old('prodi', $di->prodi) == 'D4 Sistem Informasi Kota Cerdas' ? 'selected' : ''); ?>>
                                                        D4 Sistem Informasi Kota Cerdas</option>
                                                    <option value="D3 Teknik Mesin"
                                                        <?php echo e(old('prodi', $di->prodi) == 'D3 Teknik Mesin' ? 'selected' : ''); ?>>
                                                        D3 Teknik Mesin</option>
                                                    <option value="D4 Perancangan Manufaktur"
                                                        <?php echo e(old('prodi', $di->prodi) == 'D4 Perancangan Manufaktur' ? 'selected' : ''); ?>>
                                                        D4 Perancangan Manufaktur</option>
                                                    <option value="D3 Teknik Pendingin dan Tata Udara"
                                                        <?php echo e(old('prodi', $di->prodi) == 'D3 Teknik Pendingin dan Tata Udara' ? 'selected' : ''); ?>>
                                                        D3 Teknik Pendingin dan Tata Udara</option>
                                                    <option value="D4 Teknologi Rekayasa Instrumentasi dan Kontrol"
                                                        <?php echo e(old('prodi', $di->prodi) == 'D4 Teknologi Rekayasa Instrumentasi dan Kontrol' ? 'selected' : ''); ?>>
                                                        D4 Teknologi Rekayasa Instrumentasi dan Kontrol</option>
                                                    <option value="D3 Keperawatan"
                                                        <?php echo e(old('prodi', $di->prodi) == 'D3 Keperawatan' ? 'selected' : ''); ?>>
                                                        D3 Keperawatan</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Desain Industri</th>
                                            <td colspan="4">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="jenis_di" value="Satu Desain" id="satu_desain"
                                                                <?php echo e(old('jenis_di', $di->jenis_di) == 'Satu Desain' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label" for="satu_desain">Satu
                                                                Desain</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="jenis_di" value="Pecahan Satu Desain"
                                                                id="pecahan_satu_desain"
                                                                <?php echo e(old('jenis_di', $di->jenis_di) == 'Pecahan Satu Desain' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="pecahan_satu_desain">Pecahan Satu Desain</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="jenis_di" value="Satu Kesatuan Desain"
                                                                id="satu_kesatuan_desain"
                                                                <?php echo e(old('jenis_di', $di->jenis_di) == 'Satu Kesatuan Desain' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="satu_kesatuan_desain">Satu Kesatuan Desain</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="jenis_di" value="Kesatuan Pecahan Satu Desain"
                                                                id="kesatuan_pecahan_satu_desain"
                                                                <?php echo e(old('jenis_di', $di->jenis_di) == 'Kesatuan Pecahan Satu Desain' ? 'checked' : ''); ?>>
                                                            <label class="form-check-label"
                                                                for="kesatuan_pecahan_satu_desain">Kesatuan Pecahan
                                                                Satu Desain</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Judul Desain Industri</th>
                                            <td>

                                                <input type="text" class="form-control"
                                                    value="<?php echo e($di->judul_di); ?>" name="judul_di" id="judul_desain">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>gambar desain</th>
                                            <td>
                                                <?php if(!empty($di->gambar_di)): ?>
                                                    File : <?php echo e(basename($di->gambar_di)); ?>

                                                <?php else: ?>
                                                    File : Tidak ada
                                                <?php endif; ?>
                                                <input type="file" class="form-control" placeholder=""
                                                    name="gambar_di" id="gambar_desain">
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>Harus memasukkan kembali file yang
                                                    sama atau yang sudah di perbarui</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Uraian desain industri</th>
                                            <td>
                                                <?php if(!empty($di->uraian_di)): ?>
                                                    File : <?php echo e(basename($di->uraian_di)); ?>

                                                <?php else: ?>
                                                    File : Tidak ada
                                                <?php endif; ?>
                                                <input type="file" class="form-control" placeholder=""
                                                    name="uraian_di"
                                                    id="uraian_desain">

                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>Harus memasukkan kembali file yang
                                                    sama atau yang sudah di perbarui</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Surat Pernyataan Kepemilikan</th>
                                            <td>
                                                <?php if(!empty($di->surat_kepemilikan)): ?>
                                                    File : <?php echo e(basename($di->surat_kepemilikan)); ?>

                                                <?php else: ?>
                                                    File : Tidak ada
                                                <?php endif; ?>
                                                <input type="file" class="form-control" placeholder=""
                                                    name="surat_kepemilikan" id="pernyataan_kepemilikan">
                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>Harus memasukkan kembali file yang
                                                    sama atau yang sudah di perbarui</span>

                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Surat Pengalihan Hak</th>
                                            <td>
                                                <?php if(!empty($di->surat_pengalihan)): ?>
                                                    File : <?php echo e(basename($di->surat_pengalihan)); ?>

                                                <?php else: ?>
                                                    File : Tidak ada
                                                <?php endif; ?>
                                                <input type="file" class="form-control" placeholder=""
                                                    name="surat_pengalihan" value="<?php echo e($di->surat_pengalihan); ?>"
                                                    id="pengalihan">

                                                <span class="text-danger"><i class="fa fa-warning me-2"
                                                        data-bs-toggle="tooltip"></i>Harus memasukkan kembali file yang
                                                    sama atau yang sudah di perbarui</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal pengajuan</th>
                                            <td>
                                                <input type="date" name="tanggal_permohonan" id="tanggalpengajuan"
                                                    id="tanggalpengajuan" class="form-control"
                                                    value="<?php echo e($di->tanggal_permohonan); ?>">

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
<?php /**PATH D:\POLITEKNIK NEGERI INDRAMAYU\proyek2\resources\views/dosen/desainindustri/edit/content.blade.php ENDPATH**/ ?>