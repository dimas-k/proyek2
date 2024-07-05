<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Desain Industri</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)"></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Desain Industri</li>
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
                                Industri
                            </h3>
                        </div>
                        <div class="card-body">
                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @elseif (session()->has('warning'))
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    {{ session('warning') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="d-flex justify-content-end mb-5">
                                <form action="/verifikator/cek/desain-industri/cari" method="GET">
                                    <div class="row g-2 align-items-center">
                                        <div class="col-auto">
                                            <label for="" class="col-form-label">Cari Desain Industri</label>
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
                                            <th scope="col">Jenis Desain</th>
                                            <th scope="col">Judul Desain</th>
                                            <th scope="col">Tanggal pengajuan</th>
                                            <th scope="col">Status Desain Industri</th>
                                            <th scope="col">Status Cek Data</th>
                                            <th scope="col">Keterangan</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($di as $i => $p)
                                            <tr>
                                                <th scope="row">{{ $i + 1 }}</th>
                                                <td>{{ $p->nama_lengkap }}</td>
                                                <td>{{ $p->jenis_di }}</td>
                                                <td>{{ $p->judul_di }}</td>
                                                <td>{{ \Carbon\Carbon::parse($p->tanggal_permohonan)->format('d-m-Y ') }}
                                                </td>
                                                <td>{{ $p->status }}</td>
                                                <td>
                                                    @if ($p->cekDi?->cek_data == 'Valid')
                                                        <i class="fa fa-check-circle" style="color: green"
                                                            data-bs-toggle="tooltip"></i>
                                                    @elseif($p->cekDi?->cek_data == 'Tidak Valid')
                                                        <i class="fa fa-times-circle" style="color: red"
                                                            data-bs-toggle="tooltip"></i>
                                                    @else
                                                        <i class="fa fa-minus-circle" style="color: yellow"
                                                            data-bs-toggle="tooltip"></i>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($p->cekDi?->keterangan == null)
                                                        Data Desain Industri Belum Diverifikasi
                                                    @else
                                                        {{ $p->cekDi?->keterangan }}
                                                    @endif
                                                </td>
                                                <td><a href={{ Route('lihat.desain', $p->id) }}
                                                        class="btn btn-info">Lihat</a>
                                                    {{-- <a href={{ Route('dsn.edit.paten', $p->id) }}
                                                        class="btn btn-warning"><i class="fa fa-pencil"
                                                            data-bs-toggle="tooltip"></i></a> --}}
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
                <!-- COL END -->
                {{-- <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body pb-0 bg-recentorder">
                            <h3 class="card-title text-white">Recent Orders</h3>
                            <div class="chartjs-wrapper-demo">
                                <canvas id="recentorders" class="chart-dropshadow"></canvas>
                            </div>
                        </div>
                        <div id="flotback-chart" class="flot-background"></div>
                        <div class="card-body">
                            <div class="d-flex mb-4 mt-3">
                                <div
                                    class="avatar avatar-md bg-secondary-transparent text-secondary bradius me-3">
                                    <i class="fe fe-check"></i>
                                </div>
                                <div class="">
                                    <h6 class="mb-1 fw-semibold">Delivered Orders</h6>
                                    <p class="fw-normal fs-12"> <span class="text-success">3.5%</span>
                                        increased </p>
                                </div>
                                <div class=" ms-auto my-auto">
                                    <p class="fw-bold fs-20"> 1,768 </p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="avatar  avatar-md bg-pink-transparent text-pink bradius me-3">
                                    <i class="fe fe-x"></i>
                                </div>
                                <div class="">
                                    <h6 class="mb-1 fw-semibold">Cancelled Orders</h6>
                                    <p class="fw-normal fs-12"> <span class="text-success">1.2%</span>
                                        increased </p>
                                </div>
                                <div class=" ms-auto my-auto">
                                    <p class="fw-bold fs-20 mb-0"> 3,675 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- COL END -->
            </div>
            <!-- ROW-2 END -->

            <!-- ROW-4 -->
            {{-- <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title mb-0">Product Sales</h3>
                        </div>
                        <div class="card-body pt-4">
                            <div class="grid-margin">
                                <div class="">
                                    <div class="panel panel-primary">
                                        <div class="tab-menu-heading border-0 p-0">
                                            <div class="tabs-menu1">
                                                <!-- Tabs -->
                                                <ul class="nav panel-tabs product-sale">
                                                    <li><a href="#tab5" class="active"
                                                            data-bs-toggle="tab">All products</a></li>
                                                    <li><a href="#tab6" data-bs-toggle="tab"
                                                            class="text-dark">Shipped</a></li>
                                                    <li><a href="#tab7" data-bs-toggle="tab"
                                                            class="text-dark">Pending</a></li>
                                                    <li><a href="#tab8" data-bs-toggle="tab"
                                                            class="text-dark">Cancelled</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="panel-body tabs-menu-body border-0 pt-0">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab5">
                                                    <div class="table-responsive">
                                                        <table id="data-table"
                                                            class="table table-bordered text-nowrap mb-0">
                                                            <thead class="border-top">
                                                                <tr>
                                                                    <th class="bg-transparent border-bottom-0"
                                                                        style="width: 5%;">Tracking Id</th>
                                                                    <th
                                                                        class="bg-transparent border-bottom-0">
                                                                        Product</th>
                                                                    <th
                                                                        class="bg-transparent border-bottom-0">
                                                                        Customer</th>
                                                                    <th
                                                                        class="bg-transparent border-bottom-0">
                                                                        Date</th>
                                                                    <th
                                                                        class="bg-transparent border-bottom-0">
                                                                        Amount</th>
                                                                    <th
                                                                        class="bg-transparent border-bottom-0">
                                                                        Payment Mode</th>
                                                                    <th class="bg-transparent border-bottom-0"
                                                                        style="width: 10%;">Status</th>
                                                                    <th class="bg-transparent border-bottom-0"
                                                                        style="width: 5%;">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #98765490</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar bradius"
                                                                                style="background-image: url(../assets/images/orders/10.jpg)"></span>
                                                                            <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Headsets</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Cherry Blossom</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="mt-sm-2 d-block">30 Aug
                                                                            2021</span></td>
                                                                    <td><span
                                                                            class="fw-semibold mt-sm-2 d-block">$6.721.5</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Online Payment</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="mt-sm-1 d-block">
                                                                            <span
                                                                                class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="g-2">
                                                                            <a class="btn text-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Edit"><span
                                                                                    class="fe fe-edit fs-14"></span></a>
                                                                            <a class="btn text-danger btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Delete"><span
                                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #76348798</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar bradius"
                                                                                style="background-image: url(../assets/images/orders/12.jpg)"></span>
                                                                            <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Flower Pot</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Simon Sais</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="mt-sm-2 d-block">15 Nov
                                                                            2021</span></td>
                                                                    <td><span
                                                                            class="fw-semibold mt-sm-2 d-block">$35,7863</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Online Payment</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="mt-sm-1 d-block">
                                                                            <span
                                                                                class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="g-2">
                                                                            <a class="btn text-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Edit"><span
                                                                                    class="fe fe-edit fs-14"></span></a>
                                                                            <a class="btn text-danger btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Delete"><span
                                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #23986456</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar bradius"
                                                                                style="background-image: url(../assets/images/orders/4.jpg)"></span>
                                                                            <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Pen Drive</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Manny Jah</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="mt-sm-2 d-block">27 Jan
                                                                            2021</span></td>
                                                                    <td><span
                                                                            class="fw-semibold mt-sm-2 d-block">$5,89,6437</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Cash on Delivery</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="mt-sm-1 d-block">
                                                                            <span
                                                                                class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="g-2">
                                                                            <a class="btn text-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Edit"><span
                                                                                    class="fe fe-edit fs-14"></span></a>
                                                                            <a class="btn text-danger btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Delete"><span
                                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #87456325</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar bradius"
                                                                                style="background-image: url(../assets/images/orders/8.jpg)"></span>
                                                                            <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    New Bowl</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Florinda Carasco</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="mt-sm-2 d-block">19 Sep
                                                                            2021</span></td>
                                                                    <td><span
                                                                            class="fw-semibold mt-sm-2 d-block">$17.98</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Online Payment</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="mt-sm-1 d-block">
                                                                            <span
                                                                                class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="g-2">
                                                                            <a class="btn text-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Edit"><span
                                                                                    class="fe fe-edit fs-14"></span></a>
                                                                            <a class="btn text-danger btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Delete"><span
                                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #65783926</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar bradius"
                                                                                style="background-image: url(../assets/images/orders/6.jpg)"></span>
                                                                            <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Leather Watch</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Ivan Notheridiya</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="mt-sm-2 d-block">06 Oct
                                                                            2021</span></td>
                                                                    <td><span
                                                                            class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Cash on Delivery</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="mt-sm-1 d-block">
                                                                            <span
                                                                                class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="g-2">
                                                                            <a class="btn text-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Edit"><span
                                                                                    class="fe fe-edit fs-14"></span></a>
                                                                            <a class="btn text-danger btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Delete"><span
                                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #34654895</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar bradius"
                                                                                style="background-image: url(../assets/images/orders/1.jpg)"></span>
                                                                            <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Digital Camera</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Willie Findit</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="mt-sm-2 d-block">10 Jul
                                                                            2021</span></td>
                                                                    <td><span
                                                                            class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Cash on Delivery</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="mt-sm-1 d-block">
                                                                            <span
                                                                                class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="g-2">
                                                                            <a class="btn text-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Edit"><span
                                                                                    class="fe fe-edit fs-14"></span></a>
                                                                            <a class="btn text-danger btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Delete"><span
                                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #98765345</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar bradius"
                                                                                style="background-image: url(../assets/images/orders/11.jpg)"></span>
                                                                            <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Earphones</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Addie Minstra</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="mt-sm-2 d-block">25 Jun
                                                                            2021</span></td>
                                                                    <td><span
                                                                            class="fw-semibold mt-sm-2 d-block">$7,34,9768</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Online Payment</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="mt-sm-1 d-block">
                                                                            <span
                                                                                class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="g-2">
                                                                            <a class="btn text-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Edit"><span
                                                                                    class="fe fe-edit fs-14"></span></a>
                                                                            <a class="btn text-danger btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Delete"><span
                                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #67546577</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar bradius"
                                                                                style="background-image: url(../assets/images/orders/2.jpg)"></span>
                                                                            <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Shoes</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Laura Biding</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="mt-sm-2 d-block">22 Feb
                                                                            2021</span></td>
                                                                    <td><span
                                                                            class="fw-semibold mt-sm-2 d-block">$7.76.654</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Cash on Delivery</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="mt-sm-1 d-block">
                                                                            <span
                                                                                class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="g-2">
                                                                            <a class="btn text-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Edit"><span
                                                                                    class="fe fe-edit fs-14"></span></a>
                                                                            <a class="btn text-danger btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Delete"><span
                                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab6">
                                                    <div class="table-responsive">
                                                        <table
                                                            class="table table-bordered text-nowrap mb-0">
                                                            <thead class="border-top">
                                                                <tr>
                                                                    <th class="bg-transparent border-bottom-0"
                                                                        style="width: 5%;">Tracking Id</th>
                                                                    <th
                                                                        class="bg-transparent border-bottom-0">
                                                                        Product</th>
                                                                    <th
                                                                        class="bg-transparent border-bottom-0">
                                                                        Customer</th>
                                                                    <th
                                                                        class="bg-transparent border-bottom-0">
                                                                        Date</th>
                                                                    <th
                                                                        class="bg-transparent border-bottom-0">
                                                                        Amount</th>
                                                                    <th
                                                                        class="bg-transparent border-bottom-0">
                                                                        Payment Mode</th>
                                                                    <th class="bg-transparent border-bottom-0"
                                                                        style="width: 10%;">Status</th>
                                                                    <th class="bg-transparent border-bottom-0"
                                                                        style="width: 5%;">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #98765490</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar bradius"
                                                                                style="background-image: url(../assets/images/orders/10.jpg)"></span>
                                                                            <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Headsets</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Cherry Blossom</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="mt-sm-2 d-block">30 Aug
                                                                            2021</span></td>
                                                                    <td><span
                                                                            class="fw-semibold mt-sm-2 d-block">$6.721.5</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Online Payment</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="mt-sm-1 d-block">
                                                                            <span
                                                                                class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="g-2">
                                                                            <a class="btn text-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Edit"><span
                                                                                    class="fe fe-edit fs-14"></span></a>
                                                                            <a class="btn text-danger btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Delete"><span
                                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #76348798</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar bradius"
                                                                                style="background-image: url(../assets/images/orders/12.jpg)"></span>
                                                                            <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Flower Pot</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Simon Sais</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="mt-sm-2 d-block">15 Nov
                                                                            2021</span></td>
                                                                    <td><span
                                                                            class="fw-semibold mt-sm-2 d-block">$35,7863</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Online Payment</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="mt-sm-1 d-block">
                                                                            <span
                                                                                class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="g-2">
                                                                            <a class="btn text-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Edit"><span
                                                                                    class="fe fe-edit fs-14"></span></a>
                                                                            <a class="btn text-danger btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Delete"><span
                                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #23986456</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar bradius"
                                                                                style="background-image: url(../assets/images/orders/4.jpg)"></span>
                                                                            <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Pen Drive</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Manny Jah</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="mt-sm-2 d-block">27 Jan
                                                                            2021</span></td>
                                                                    <td><span
                                                                            class="fw-semibold mt-sm-2 d-block">$5,89,6437</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Cash on Delivery</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="mt-sm-1 d-block">
                                                                            <span
                                                                                class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="g-2">
                                                                            <a class="btn text-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Edit"><span
                                                                                    class="fe fe-edit fs-14"></span></a>
                                                                            <a class="btn text-danger btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Delete"><span
                                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #87456325</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar bradius"
                                                                                style="background-image: url(../assets/images/orders/8.jpg)"></span>
                                                                            <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    New Bowl</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Florinda Carasco</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="mt-sm-2 d-block">19 Sep
                                                                            2021</span></td>
                                                                    <td><span
                                                                            class="fw-semibold mt-sm-2 d-block">$17.98</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Online Payment</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="mt-sm-1 d-block">
                                                                            <span
                                                                                class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="g-2">
                                                                            <a class="btn text-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Edit"><span
                                                                                    class="fe fe-edit fs-14"></span></a>
                                                                            <a class="btn text-danger btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Delete"><span
                                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #65783926</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar bradius"
                                                                                style="background-image: url(../assets/images/orders/6.jpg)"></span>
                                                                            <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Leather Watch</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Ivan Notheridiya</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="mt-sm-2 d-block">06 Oct
                                                                            2021</span></td>
                                                                    <td><span
                                                                            class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Cash on Delivery</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="mt-sm-1 d-block">
                                                                            <span
                                                                                class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="g-2">
                                                                            <a class="btn text-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Edit"><span
                                                                                    class="fe fe-edit fs-14"></span></a>
                                                                            <a class="btn text-danger btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Delete"><span
                                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #34654895</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar bradius"
                                                                                style="background-image: url(../assets/images/orders/1.jpg)"></span>
                                                                            <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Digital Camera</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Willie Findit</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="mt-sm-2 d-block">10 Jul
                                                                            2021</span></td>
                                                                    <td><span
                                                                            class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Cash on Delivery</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="mt-sm-1 d-block">
                                                                            <span
                                                                                class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="g-2">
                                                                            <a class="btn text-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Edit"><span
                                                                                    class="fe fe-edit fs-14"></span></a>
                                                                            <a class="btn text-danger btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Delete"><span
                                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #98765345</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar bradius"
                                                                                style="background-image: url(../assets/images/orders/11.jpg)"></span>
                                                                            <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Earphones</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Addie Minstra</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="mt-sm-2 d-block">25 Jun
                                                                            2021</span></td>
                                                                    <td><span
                                                                            class="fw-semibold mt-sm-2 d-block">$7,34,9768</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Online Payment</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="mt-sm-1 d-block">
                                                                            <span
                                                                                class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="g-2">
                                                                            <a class="btn text-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Edit"><span
                                                                                    class="fe fe-edit fs-14"></span></a>
                                                                            <a class="btn text-danger btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Delete"><span
                                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #67546577</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar bradius"
                                                                                style="background-image: url(../assets/images/orders/2.jpg)"></span>
                                                                            <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Shoes</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Laura Biding</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="mt-sm-2 d-block">22 Feb
                                                                            2021</span></td>
                                                                    <td><span
                                                                            class="fw-semibold mt-sm-2 d-block">$7.76.654</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Cash on Delivery</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="mt-sm-1 d-block">
                                                                            <span
                                                                                class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="g-2">
                                                                            <a class="btn text-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Edit"><span
                                                                                    class="fe fe-edit fs-14"></span></a>
                                                                            <a class="btn text-danger btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Delete"><span
                                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab7">
                                                    <div class="table-responsive">
                                                        <table
                                                            class="table table-bordered text-nowrap mb-0">
                                                            <thead class="border-top">
                                                                <tr>
                                                                    <th class="bg-transparent border-bottom-0"
                                                                        style="width: 5%;">Tracking Id</th>
                                                                    <th
                                                                        class="bg-transparent border-bottom-0">
                                                                        Product</th>
                                                                    <th
                                                                        class="bg-transparent border-bottom-0">
                                                                        Customer</th>
                                                                    <th
                                                                        class="bg-transparent border-bottom-0">
                                                                        Date</th>
                                                                    <th
                                                                        class="bg-transparent border-bottom-0">
                                                                        Amount</th>
                                                                    <th
                                                                        class="bg-transparent border-bottom-0">
                                                                        Payment Mode</th>
                                                                    <th class="bg-transparent border-bottom-0"
                                                                        style="width: 10%;">Status</th>
                                                                    <th class="bg-transparent border-bottom-0"
                                                                        style="width: 5%;">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #98765490</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar bradius"
                                                                                style="background-image: url(../assets/images/orders/10.jpg)"></span>
                                                                            <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Headsets</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Cherry Blossom</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="mt-sm-2 d-block">30 Aug
                                                                            2021</span></td>
                                                                    <td><span
                                                                            class="fw-semibold mt-sm-2 d-block">$6.721.5</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Online Payment</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="mt-sm-1 d-block">
                                                                            <span
                                                                                class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="g-2">
                                                                            <a class="btn text-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Edit"><span
                                                                                    class="fe fe-edit fs-14"></span></a>
                                                                            <a class="btn text-danger btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Delete"><span
                                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #23986456</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar bradius"
                                                                                style="background-image: url(../assets/images/orders/4.jpg)"></span>
                                                                            <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Pen Drive</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Manny Jah</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="mt-sm-2 d-block">27 Jan
                                                                            2021</span></td>
                                                                    <td><span
                                                                            class="fw-semibold mt-sm-2 d-block">$5,89,6437</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Cash on Delivery</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="mt-sm-1 d-block">
                                                                            <span
                                                                                class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="g-2">
                                                                            <a class="btn text-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Edit"><span
                                                                                    class="fe fe-edit fs-14"></span></a>
                                                                            <a class="btn text-danger btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Delete"><span
                                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #87456325</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar bradius"
                                                                                style="background-image: url(../assets/images/orders/8.jpg)"></span>
                                                                            <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    New Bowl</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Florinda Carasco</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="mt-sm-2 d-block">19 Sep
                                                                            2021</span></td>
                                                                    <td><span
                                                                            class="fw-semibold mt-sm-2 d-block">$17.98</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Online Payment</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="mt-sm-1 d-block">
                                                                            <span
                                                                                class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="g-2">
                                                                            <a class="btn text-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Edit"><span
                                                                                    class="fe fe-edit fs-14"></span></a>
                                                                            <a class="btn text-danger btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Delete"><span
                                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #65783926</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar bradius"
                                                                                style="background-image: url(../assets/images/orders/6.jpg)"></span>
                                                                            <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Leather Watch</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Ivan Notheridiya</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="mt-sm-2 d-block">06 Oct
                                                                            2021</span></td>
                                                                    <td><span
                                                                            class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Cash on Delivery</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="mt-sm-1 d-block">
                                                                            <span
                                                                                class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="g-2">
                                                                            <a class="btn text-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Edit"><span
                                                                                    class="fe fe-edit fs-14"></span></a>
                                                                            <a class="btn text-danger btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Delete"><span
                                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #34654895</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar bradius"
                                                                                style="background-image: url(../assets/images/orders/1.jpg)"></span>
                                                                            <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Digital Camera</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Willie Findit</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="mt-sm-2 d-block">10 Jul
                                                                            2021</span></td>
                                                                    <td><span
                                                                            class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Cash on Delivery</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="mt-sm-1 d-block">
                                                                            <span
                                                                                class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="g-2">
                                                                            <a class="btn text-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Edit"><span
                                                                                    class="fe fe-edit fs-14"></span></a>
                                                                            <a class="btn text-danger btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Delete"><span
                                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #98765345</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar bradius"
                                                                                style="background-image: url(../assets/images/orders/11.jpg)"></span>
                                                                            <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Earphones</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Addie Minstra</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="mt-sm-2 d-block">25 Jun
                                                                            2021</span></td>
                                                                    <td><span
                                                                            class="fw-semibold mt-sm-2 d-block">$7,34,9768</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Online Payment</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="mt-sm-1 d-block">
                                                                            <span
                                                                                class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="g-2">
                                                                            <a class="btn text-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Edit"><span
                                                                                    class="fe fe-edit fs-14"></span></a>
                                                                            <a class="btn text-danger btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Delete"><span
                                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #67546577</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar bradius"
                                                                                style="background-image: url(../assets/images/orders/2.jpg)"></span>
                                                                            <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Shoes</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Laura Biding</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="mt-sm-2 d-block">22 Feb
                                                                            2021</span></td>
                                                                    <td><span
                                                                            class="fw-semibold mt-sm-2 d-block">$7.76.654</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Cash on Delivery</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="mt-sm-1 d-block">
                                                                            <span
                                                                                class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="g-2">
                                                                            <a class="btn text-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Edit"><span
                                                                                    class="fe fe-edit fs-14"></span></a>
                                                                            <a class="btn text-danger btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Delete"><span
                                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab8">
                                                    <div class="table-responsive">
                                                        <table
                                                            class="table table-bordered text-nowrap mb-0">
                                                            <thead class="border-top">
                                                                <tr>
                                                                    <th class="bg-transparent border-bottom-0"
                                                                        style="width: 5%;">Tracking Id</th>
                                                                    <th
                                                                        class="bg-transparent border-bottom-0">
                                                                        Product</th>
                                                                    <th
                                                                        class="bg-transparent border-bottom-0">
                                                                        Customer</th>
                                                                    <th
                                                                        class="bg-transparent border-bottom-0">
                                                                        Date</th>
                                                                    <th
                                                                        class="bg-transparent border-bottom-0">
                                                                        Amount</th>
                                                                    <th
                                                                        class="bg-transparent border-bottom-0">
                                                                        Payment Mode</th>
                                                                    <th class="bg-transparent border-bottom-0"
                                                                        style="width: 10%;">Status</th>
                                                                    <th class="bg-transparent border-bottom-0"
                                                                        style="width: 5%;">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #98765490</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar bradius"
                                                                                style="background-image: url(../assets/images/orders/10.jpg)"></span>
                                                                            <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Headsets</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Cherry Blossom</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="mt-sm-2 d-block">30 Aug
                                                                            2021</span></td>
                                                                    <td><span
                                                                            class="fw-semibold mt-sm-2 d-block">$6.721.5</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Online Payment</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="mt-sm-1 d-block">
                                                                            <span
                                                                                class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="g-2">
                                                                            <a class="btn text-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Edit"><span
                                                                                    class="fe fe-edit fs-14"></span></a>
                                                                            <a class="btn text-danger btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Delete"><span
                                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #76348798</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar bradius"
                                                                                style="background-image: url(../assets/images/orders/12.jpg)"></span>
                                                                            <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Flower Pot</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Simon Sais</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="mt-sm-2 d-block">15 Nov
                                                                            2021</span></td>
                                                                    <td><span
                                                                            class="fw-semibold mt-sm-2 d-block">$35,7863</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Online Payment</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="mt-sm-1 d-block">
                                                                            <span
                                                                                class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="g-2">
                                                                            <a class="btn text-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Edit"><span
                                                                                    class="fe fe-edit fs-14"></span></a>
                                                                            <a class="btn text-danger btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Delete"><span
                                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #23986456</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar bradius"
                                                                                style="background-image: url(../assets/images/orders/4.jpg)"></span>
                                                                            <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Pen Drive</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Manny Jah</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="mt-sm-2 d-block">27 Jan
                                                                            2021</span></td>
                                                                    <td><span
                                                                            class="fw-semibold mt-sm-2 d-block">$5,89,6437</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Cash on Delivery</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="mt-sm-1 d-block">
                                                                            <span
                                                                                class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="g-2">
                                                                            <a class="btn text-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Edit"><span
                                                                                    class="fe fe-edit fs-14"></span></a>
                                                                            <a class="btn text-danger btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Delete"><span
                                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #87456325</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar bradius"
                                                                                style="background-image: url(../assets/images/orders/8.jpg)"></span>
                                                                            <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    New Bowl</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Florinda Carasco</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="mt-sm-2 d-block">19 Sep
                                                                            2021</span></td>
                                                                    <td><span
                                                                            class="fw-semibold mt-sm-2 d-block">$17.98</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Online Payment</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="mt-sm-1 d-block">
                                                                            <span
                                                                                class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="g-2">
                                                                            <a class="btn text-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Edit"><span
                                                                                    class="fe fe-edit fs-14"></span></a>
                                                                            <a class="btn text-danger btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Delete"><span
                                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #65783926</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar bradius"
                                                                                style="background-image: url(../assets/images/orders/6.jpg)"></span>
                                                                            <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Leather Watch</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Ivan Notheridiya</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="mt-sm-2 d-block">06 Oct
                                                                            2021</span></td>
                                                                    <td><span
                                                                            class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Cash on Delivery</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="mt-sm-1 d-block">
                                                                            <span
                                                                                class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="g-2">
                                                                            <a class="btn text-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Edit"><span
                                                                                    class="fe fe-edit fs-14"></span></a>
                                                                            <a class="btn text-danger btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Delete"><span
                                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border-bottom">
                                                                    <td class="text-center">
                                                                        <div class="mt-0 mt-sm-2 d-block">
                                                                            <h6
                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                #34654895</h6>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar bradius"
                                                                                style="background-image: url(../assets/images/orders/1.jpg)"></span>
                                                                            <div
                                                                                class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Digital Camera</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Willie Findit</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="mt-sm-2 d-block">10 Jul
                                                                            2021</span></td>
                                                                    <td><span
                                                                            class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <div
                                                                                class="mt-0 mt-sm-3 d-block">
                                                                                <h6
                                                                                    class="mb-0 fs-14 fw-semibold">
                                                                                    Cash on Delivery</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="mt-sm-1 d-block">
                                                                            <span
                                                                                class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="g-2">
                                                                            <a class="btn text-primary btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Edit"><span
                                                                                    class="fe fe-edit fs-14"></span></a>
                                                                            <a class="btn text-danger btn-sm"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-original-title="Delete"><span
                                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- ROW-4 END -->
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
