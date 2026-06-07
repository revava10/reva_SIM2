<h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-hospital"></i> Dashboard Rumah Sakit
</h1>

<!-- ================= WELCOME + CLOCK ================= -->
<div class="card shadow mb-4 border-left-primary">
    <div class="card-body py-3">
        <div class="row align-items-center">

            <div class="col-md-8">
                <h4 class="font-weight-bold text-dark mb-1">
                    Welcome Back, Admin 👋
                </h4>

                <p class="text-muted mb-0">
                    Selamat datang kembali di Sistem Informasi Rumah Sakit.
                </p>
            </div>

            <!-- JAM DIPINDAH KE SINI -->
            <div class="col-md-4 text-right">
                <div id="clock" class="font-weight-bold text-primary" style="font-size:16px;"></div>
                <small class="text-muted">Sistem Rumah Sakit</small>
            </div>

        </div>
    </div>
</div>

<!-- ================= STATISTIK ================= -->
<div class="row">

    <div class="col-xl-4 col-md-6 mb-3">
        <div class="card border-left-info shadow h-100">
            <div class="card-body py-3">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                    Total Pendaftaran
                </div>
                <div class="h5 mb-0 font-weight-bold">
                    <?= $total_pendaftar; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-3">
        <div class="card border-left-success shadow h-100">
            <div class="card-body py-3">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                    Disetujui
                </div>
                <div class="h5 mb-0 font-weight-bold">
                    <?= $diterima; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-3">
        <div class="card border-left-danger shadow h-100">
            <div class="card-body py-3">
                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                    Ditolak
                </div>
                <div class="h5 mb-0 font-weight-bold">
                    <?= $ditolak; ?>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- ================= GRAFIK FULL WIDTH ================= -->
<div class="card shadow mb-4">

    <div class="card-header py-2">
        <strong>Statistik Pendaftaran Pasien</strong>
    </div>

    <div class="card-body">
        <div style="height:220px;">
            <canvas id="chartDashboard"></canvas>
        </div>
    </div>

</div>

<!-- ================= 3 KOLOM ================= -->
<div class="row">

    <!-- DIAGRAM -->
    <div class="col-lg-4 mb-3">
        <div class="card shadow h-100">

            <div class="card-header bg-success text-white py-2">
                Diagram Status
            </div>

            <div class="card-body text-center">
                <div style="width:140px;height:140px;margin:auto;">
                    <canvas id="pieChart"></canvas>
                </div>
            </div>

        </div>
    </div>

    <!-- INFORMASI -->
    <div class="col-lg-4 mb-3">
        <div class="card shadow h-100">

            <div class="card-header bg-primary text-white py-2">
                Informasi Sistem
            </div>

            <div class="card-body py-2">

                <div class="d-flex justify-content-between border-bottom py-2">
                    <span>Total</span>
                    <strong><?= $total_pendaftar; ?></strong>
                </div>

                <div class="d-flex justify-content-between border-bottom py-2">
                    <span>Disetujui</span>
                    <strong class="text-success"><?= $diterima; ?></strong>
                </div>

                <div class="d-flex justify-content-between py-2">
                    <span>Ditolak</span>
                    <strong class="text-danger"><?= $ditolak; ?></strong>
                </div>

            </div>

        </div>
    </div>

    <!-- STATUS -->
    <div class="col-lg-4 mb-3">
        <div class="card shadow h-100">

            <div class="card-header bg-success text-white py-2">
                Status Sistem
            </div>

            <div class="card-body">

                <div class="alert alert-success py-2 mb-2">
                    Sistem berjalan normal
                </div>

                <div class="progress mb-2" style="height:15px;">
                    <div class="progress-bar bg-success" style="width:100%">
                        Online
                    </div>
                </div>

                <small class="text-muted">
                    Semua modul aktif
                </small>

            </div>

        </div>
    </div>

</div>

<!-- ================= MENU CEPAT ================= -->
<div class="card shadow mb-4">

    <div class="card-header bg-info text-white py-2">
        Menu Cepat
    </div>

    <div class="card-body">

        <div class="row text-center">

            <!-- Pendaftaran Baru -->
            <div class="col-md-4 mb-2">
                <a href="<?= site_url('admin/pendaftaran'); ?>" class="btn btn-primary btn-block py-3">
                    <i class="fas fa-notes-medical fa-2x"></i><br>
                    Pendaftaran Baru
                </a>
            </div>

            <!-- Data Pasien -->
            <div class="col-md-4 mb-2">
                <a href="<?= site_url('admin/pasien'); ?>" class="btn btn-success btn-block py-3">
                    <i class="fas fa-user-injured fa-2x"></i><br>
                    Data Pasien
                </a>
            </div>

            <!-- Data Dokter -->
            <div class="col-md-4 mb-2">
                <a href="<?= site_url('dokter'); ?>" class="btn btn-warning btn-block py-3">
                    <i class="fas fa-user-md fa-2x"></i><br>
                    Data Dokter
                </a>
            </div>

</style>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

// BAR CHART
new Chart(document.getElementById('chartDashboard'), {
    type:'bar',
    data:{
        labels:['Disetujui','Ditolak'],
        datasets:[{
            data:[
                <?= $diterima; ?>,
                <?= $ditolak; ?>
            ],
            backgroundColor:['#1cc88a','#e74a3b']
        }]
    },
    options:{
        responsive:true,
        maintainAspectRatio:false,
        plugins:{legend:{display:false}}
    }
});

// PIE CHART
new Chart(document.getElementById('pieChart'), {
    type:'doughnut',
    data:{
        labels:['Disetujui','Ditolak','Proses'],
        datasets:[{
            data:[
                <?= $diterima; ?>,
                <?= $ditolak; ?>,
                <?= $total_pendaftar - ($diterima + $ditolak); ?>
            ],
            backgroundColor:['#1cc88a','#e74a3b','#36b9cc']
        }]
    }
});

// CLOCK (di Welcome)
function updateClock(){
    const now = new Date();
    document.getElementById('clock').innerHTML =
        now.toLocaleString('id-ID',{
            weekday:'long',
            year:'numeric',
            month:'long',
            day:'numeric',
            hour:'2-digit',
            minute:'2-digit',
            second:'2-digit'
        });
}

updateClock();
setInterval(updateClock,1000);

</script>