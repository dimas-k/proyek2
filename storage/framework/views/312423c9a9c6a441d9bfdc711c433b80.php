<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Update Nilai Hak Cipta</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/checker/cek/hak-cipta">Cek Hak Cipta</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Update</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-2 -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fa fa-table me-1" data-bs-toggle="tooltip"></i>Upate Nilai Hak Cipta
                                
                            </h3>
                        </div>
                        <div class="card-body">

                            <form action=<?php echo e(route('hc.update.cek', ['id'=>request()->segment(6)])); ?> enctype="multipart/form-data"
                                method="post">
                                <?php echo csrf_field(); ?>
                                <div class="table-responsive">
                                    <table class="table table-borderless p-1">

                                        <tr>
                                            <th>Nilai Desain INdustri</th>
                                            <td>
                                                <select class="form-select <?php $__errorArgs = ['cek_data'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="cek_data" required>
                                                    <option value="">Pilih Status Paten</option>
                                                    <option value="Valid" <?php if((old('cek_data') ?? $check->cek_data ?? '') == 'Valid'): ?> selected <?php endif; ?>>Valid</option>
                                                    <option value="Tidak valid" <?php if((old('cek_data') ?? $check->cek_data ?? '') == 'Tidak Valid'): ?> selected <?php endif; ?>>Tidak Valid</option>
                                                    <option value="Menunggu Pemeriksaan" <?php if((old('cek_data') ?? $check->cek_data ?? '') == 'Menunggu Pemeriksaan'): ?> selected <?php endif; ?>>Menunggu Pemeriksaan</option>
                                                </select>  
                                                <?php $__errorArgs = ['cek_data'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($message); ?>

                                                    </div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </td>
                                            <tr>
                                                <th>Keterangan</th>
                                                <td><input type="text"
                                                    class="form-control <?php $__errorArgs = ['keterangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    id="" name="keterangan" value="<?php echo e($check->keterangan); ?>">
                                                <?php $__errorArgs = ['keterangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($message); ?>

                                                    </div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></td>
                                            </tr>
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
                <!-- COL END -->
                <!-- COL END -->
            </div>
            <!-- ROW-2 END -->

            <!-- ROW-4 -->
            <!-- ROW-4 END -->
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
<?php /**PATH D:\POLITEKNIK NEGERI INDRAMAYU\proyek2\resources\views/checker/cekhc/update/content.blade.php ENDPATH**/ ?>