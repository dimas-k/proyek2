<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Dashboard</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                    <div class="row">
                        <div class="d-flex justify-content-center">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="mt-2">
                                                <h6 class="">Paten</h6>
                                                <h2 class="mb-0 number-font">{{ $paten }}</h2>
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
                                                <h6 class="">Hak Cipta</h6>
                                                <h2 class="mb-0 number-font">{{ $hc }}</h2>
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
                                                <h6 class="">Desain Industri</h6>
                                                <h2 class="mb-0 number-font">{{ $di }}</h2>
                                            </div>
                                            {{-- <div class="ms-auto">
                                            <div class="chart-wrapper mt-1">
                                                <canvas id="profitchart"
                                                    class="h-8 w-9 chart-dropshadow"></canvas>
                                            </div>
                                        </div> --}}
                                        </div>
                                        {{-- <span class="text-muted fs-12"><span class="text-green"><i
                                                class="fe fe-arrow-up-circle text-green"></i> 0.9%</span>
                                        Last 9 days</span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ROW-1 END -->

            <!-- ROW-2 -->
            
            <!-- ROW-2 END -->

            <!-- ROW-4 -->
        </div>
    </div>
</div>