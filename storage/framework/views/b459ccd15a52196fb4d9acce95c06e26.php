<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title"> Paten</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)"></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Paten</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            <!-- ROW-2 -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fa fa-table me-1" data-bs-toggle="tooltip"></i>Data Paten Dosen
                            </h3>
                        </div>
                        <div class="card-body">
                            <?php if(session()->has('success')): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?php echo e(session('success')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            <?php elseif(session()->has('warning')): ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?php echo e(session('warning')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            <?php endif; ?>
                            <div class="d-flex justify-content-end mb-5">
                                <form action="/verifikator/cek/paten/cari" method="GET">
                                    <div class="row g-2 align-items-center">
                                        <div class="col-auto">
                                            <label for="" class="col-form-label">Cari Paten</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" id="" class="form-control"
                                                aria-describedby="" name="cari">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-primary ">Cari</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover p-1">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama lengkap</th>
                                            <th scope="col">Jenis Paten</th>
                                            <th scope="col">Judul paten</th>
                                            <th scope="col">Tanggal pengajuan</th>
                                            <th scope="col">Status paten</th>
                                            <th scope="col">Status Cek Data</th>
                                            <th scope="col">Keterangan</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $paten_dosen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <th scope="row"><?php echo e($i + 1); ?></th>
                                                <td><?php echo e($p->nama_lengkap); ?></td>
                                                <td><?php echo e($p->jenis_paten); ?></td>
                                                <td><?php echo e($p->judul_paten); ?></td>
                                                <td><?php echo e(\Carbon\Carbon::parse($p->tanggal_permohonan)->format('d-m-Y ')); ?>

                                                </td>
                                                <td><?php echo e($p->status); ?></td>
                                                <td>
                                                    <?php if($p->cek?->cek_data == 'Valid'): ?>
                                                        <i class="fa fa-check-circle" style="color: green"
                                                            data-bs-toggle="tooltip"></i>
                                                    <?php elseif($p->cek?->cek_data == 'Tidak Valid'): ?>
                                                        <i class="fa fa-times-circle" style="color: red"
                                                            data-bs-toggle="tooltip"></i>
                                                    <?php else: ?>
                                                        <i class="fa fa-minus-circle" style="color: yellow"
                                                            data-bs-toggle="tooltip"></i><?php echo e($p->cek?->cek_data); ?>

                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if($p->cek?->keterangan == null): ?>
                                                        Data Paten Belum Diverifikasi
                                                    <?php else: ?>
                                                        <?php echo e($p->cek?->keterangan); ?>

                                                    <?php endif; ?>
                                                </td>
                                                <td><a href=<?php echo e(Route('patencek.lihat', $p->id)); ?>

                                                        class="btn btn-info">Lihat</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <?php echo e($paten_dosen->links()); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fa fa-table me-1" data-bs-toggle="tooltip"></i>Data Paten Umum
                            </h3>
                        </div>
                        <div class="card-body">
                            <?php if(session()->has('success')): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?php echo e(session('success')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            <?php elseif(session()->has('warning')): ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?php echo e(session('warning')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            <?php endif; ?>
                            <div class="d-flex justify-content-end mb-5">
                                <form action="/verifikator/cek/paten/cari" method="GET">
                                    <div class="row g-2 align-items-center">
                                        <div class="col-auto">
                                            <label for="" class="col-form-label">Cari Paten</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" id="" class="form-control"
                                                aria-describedby="" name="cari">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-primary ">Cari</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover p-1">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama lengkap</th>
                                            <th scope="col">Jenis Paten</th>
                                            <th scope="col">Judul paten</th>
                                            <th scope="col">Tanggal pengajuan</th>
                                            <th scope="col">Status paten</th>
                                            <th scope="col">Status Cek Data</th>
                                            <th scope="col">Keterangan</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $paten_umum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <th scope="row"><?php echo e($i + 1); ?></th>
                                                <td><?php echo e($p->nama_lengkap); ?></td>
                                                <td><?php echo e($p->jenis_paten); ?></td>
                                                <td><?php echo e($p->judul_paten); ?></td>
                                                <td><?php echo e(\Carbon\Carbon::parse($p->tanggal_permohonan)->format('d-m-Y ')); ?>

                                                </td>
                                                <td><?php echo e($p->status); ?></td>
                                                <td>
                                                    <?php if($p->cek?->cek_data == 'Valid'): ?>
                                                        <i class="fa fa-check-circle" style="color: green"
                                                            data-bs-toggle="tooltip"></i>
                                                    <?php elseif($p->cek?->cek_data == 'Tidak Valid'): ?>
                                                        <i class="fa fa-times-circle" style="color: red"
                                                            data-bs-toggle="tooltip"></i>
                                                    <?php else: ?>
                                                        <i class="fa fa-minus-circle" style="color: yellow"
                                                            data-bs-toggle="tooltip"></i><?php echo e($p->cek?->cek_data); ?>

                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if($p->cek?->keterangan == null): ?>
                                                        Data Paten Belum Diverifikasi
                                                    <?php else: ?>
                                                        <?php echo e($p->cek?->keterangan); ?>

                                                    <?php endif; ?>
                                                </td>
                                                <td><a href=<?php echo e(Route('patencek.lihat', $p->id)); ?>

                                                        class="btn btn-info">Lihat</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <?php echo e($paten_umum->links()); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
</div>
<?php /**PATH D:\POLITEKNIK NEGERI INDRAMAYU\proyek2\resources\views/checker/cekpaten/content.blade.php ENDPATH**/ ?>