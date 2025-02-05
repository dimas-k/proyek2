<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Data user</h1>
                <div>
                    <ol class="breadcrumb">
                        
                        <li class="breadcrumb-item active" aria-current="page">Data User</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-2 -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fa fa-table me-1" data-bs-toggle="tooltip"></i>Data
                                <?php echo e(auth()->user()->nama_lengkap); ?>

                            </h3>
                        </div>
                        <div class="card-body">
                            <?php if(session()->has('success')): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?php echo e(session('success')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            <?php endif; ?>
                            <div class="table-responsive">
                                <table class="table table-borderless p-1">

                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <td>: <?php echo e(auth()->user()->nama_lengkap); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nip</th>
                                        <td>: <?php echo e(auth()->user()->nip); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jabatan</th>
                                        <td>: <?php echo e(auth()->user()->jabatan); ?></td>
                                    </tr>
                                    <tr>
                                        <th>No Telepon</th>
                                        <td>: <?php echo e(auth()->user()->no_telepon); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>: <?php echo e(auth()->user()->email); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td>: <?php echo e(auth()->user()->alamat); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Username</th>
                                        <td>: <?php echo e(auth()->user()->username); ?></td>
                                    </tr>
                                </table>
                                <a href=<?php echo e(route('dsn.profil.edit', auth()->user()->id)); ?> class="btn btn-primary">Edit Profil</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- ROW-4 END -->
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
<?php /**PATH D:\POLITEKNIK NEGERI INDRAMAYU\proyek2\resources\views/dosen/profil/content.blade.php ENDPATH**/ ?>