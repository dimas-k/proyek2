<div class="main-content app-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Desain Industri</h1>
                <div>
                    <ol class="breadcrumb">
                        {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li> --}}
                        <li class="breadcrumb-item active" aria-current="page">Desain Industri</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <h6 class="">Diterima</h6>
                                        <h2 class="mb-0 number-font">{{ $desainDi }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <h6 class="">Ditolak</h6>
                                        <h2 class="mb-0 number-font">{{ $desainDK }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <h6 class="">Pemeriksaan Formalitas</h6>
                                        <h2 class="mb-0 number-font">{{ $desainP }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <h6 class="">Menunggu Verifikasi Data Oleh Verifikator</h6>
                                        <h2 class="mb-0 number-font">{{ $mvdov }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ROW-2 -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fa fa-table me-1" data-bs-toggle="tooltip"></i>Data Desain Industri</h3>
                        </div>
                        <div class="card-body">
                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-hover p-1">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama lengkap</th>
                                            <th scope="col">Jenis ciptaan</th>
                                            <th scope="col">Judul ciptaan</th>
                                            <th scope="col">Tanggal pengajuan</th>
                                            <th scope="col">Status Desain Industri</th>
                                            <th scope="col">Status Data Desain Industri</th>
                                            <th scope="col">keterangan</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($di as $i => $d)
                                            <tr>
                                                <th scope="row">{{ ($di->currentPage() - 1) * $di->perPage() + $loop->iteration }}</th>
                                                <td>{{ $d->nama_lengkap }}</td>
                                                <td>{{ $d->jenis_di }}</td>
                                                <td>{{ $d->judul_di }}</td>
                                                <td>{{ \Carbon\Carbon::parse($d->tanggal_permohonan)->format('d-m-Y ') }}</td>
                                                <td>{{ $d->status }}</td>
                                                <td>
                                                    @if ($d->cekDi?->cek_data == 'Valid')
                                                        <i class="fa fa-check-circle" style="color: green"
                                                            data-bs-toggle="tooltip"></i>
                                                    @elseif($d->cekDi?->cek_data == 'Tidak Valid')
                                                        <i class="fa fa-times-circle" style="color: red"
                                                            data-bs-toggle="tooltip"></i>
                                                    @else
                                                        <i class="fa fa-minus-circle" style="color: yellow"
                                                            data-bs-toggle="tooltip"></i>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($d->cekDi?->keterangan == '')
                                                        Data Desain Industri Belum Diverifikasi
                                                    @else
                                                        {{ $d->cekDi?->keterangan }}
                                                    @endif
                                                </td>
                                                <td><a href={{ Route('dsn.di.lihat', $d->id) }}
                                                        class="btn btn-info"><i class="fa fa-eye" data-bs-toggle="tooltip"></i></a>
                                                    <a href={{ Route('dsn.edit.di', $d->id) }}
                                                        class="btn btn-warning"><i class="fa fa-pencil" data-bs-toggle="tooltip"></i></a>
                                                    {{-- <a href={{ Route('admin_paten.delete', $d->id) }}
                                                        class="btn btn-danger"
                                                        onclick="return confirm('Apakah Kamu Yakin?')"><i class="fa fa-trash" data-bs-toggle="tooltip"></i></a> --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $di->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
