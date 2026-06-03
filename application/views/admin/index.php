<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Dashboard Klinik</h1>

    <!-- ================= CARD STATISTIK ================= -->
    <div class="row">

        <!-- Total Pendaftar -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <h6 class="text-primary">Total Pendaftar</h6>
                    <h3><?= $total_pendaftar; ?></h3>
                </div>
            </div>
        </div>

        <!-- Disetujui -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <h6 class="text-success">Pasien Disetujui</h6>
                    <h3><?= $diterima; ?></h3>
                </div>
            </div>
        </div>

        <!-- Ditolak -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <h6 class="text-danger">Pasien Ditolak</h6>
                    <h3><?= $ditolak; ?></h3>
                </div>
            </div>
        </div>

    </div>

            </div>
        </div>
    </div>

</div>