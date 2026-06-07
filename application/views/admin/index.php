<h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-hospital"></i> Dashboard Rumah Sakit
</h1>

<!-- Welcome Card -->
<div class="card shadow mb-4 border-left-primary">
    <div class="card-body">
        <div class="row align-items-center">

            <div class="col-md-8">
                <h2 class="font-weight-bold text-dark">
                    Welcome Back, Admin 👋
                </h2>

                <p class="text-muted mb-0">
                    Selamat datang kembali di Sistem Informasi Rumah Sakit.
                </p>
            </div>

            <div class="col-md-4 text-right">
                <i class="fas fa-hospital-alt fa-4x text-primary"></i>
            </div>

        </div>
    </div>
</div>

<div class="row">

    <!-- Total Pendaftaran -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                    Total Pendaftaran
                </div>

                <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <?= $total_pendaftar; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Disetujui -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                    Pendaftaran Disetujui
                </div>

                <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <?= $diterima; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Ditolak -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                    Pendaftaran Ditolak
                </div>

                <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <?= $ditolak; ?>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Grafik Statistik -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Statistik Pendaftaran Pasien
        </h6>
    </div>

    <div class="card-body">
        <canvas id="chartDashboard" height="100"></canvas>
    </div>
</div>

<div class="row">

    <!-- Diagram -->
    <div class="col-lg-6">
        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-success">
                    Diagram Status Pendaftaran
                </h6>
            </div>

            <div class="card-body text-center">

                <div style="width:250px; height:250px; margin:auto;">
                    <canvas id="pieChart"></canvas>
                </div>

            </div>

        </div>
    </div>

    <!-- Informasi Sistem -->
    <div class="col-lg-6">
        <div class="card shadow mb-4">

            <div class="card-header bg-primary text-white">
                Informasi Sistem
            </div>

            <div class="card-body">

                <ul>
                    <li>Total Pendaftaran : <?= $total_pendaftar; ?></li>
                    <li>Disetujui : <?= $diterima; ?></li>
                    <li>Ditolak : <?= $ditolak; ?></li>
                </ul>

            </div>

        </div>
    </div>

</div>

<!-- Status Sistem + Menu Cepat -->
<div class="row">

    <div class="col-lg-6">

        <div class="card shadow mb-4">

            <div class="card-header bg-success text-white">
                Status Sistem
            </div>

            <div class="card-body">

                <div class="alert alert-success mb-0">
                    Sistem berjalan dengan baik.
                </div>

            </div>

        </div>

    </div>

    <div class="col-lg-6">

        <div class="card shadow mb-4">

            <div class="card-header bg-info text-white">
                Menu Cepat
            </div>

            <div class="card-body text-center">

                <a href="<?= site_url('admin/pendaftaran'); ?>"
                   class="btn btn-primary m-1">
                    <i class="fas fa-notes-medical"></i>
                    Pendaftaran
                </a>

                <a href="<?= site_url('admin/pasien'); ?>"
                   class="btn btn-success m-1">
                    <i class="fas fa-user-injured"></i>
                    Pasien
                </a>

                <a href="<?= site_url('dokter'); ?>"
                   class="btn btn-warning m-1">
                    <i class="fas fa-user-md"></i>
                    Dokter
                </a>

            </div>

        </div>

    </div>

</div>

<!-- Jam Real Time -->
<div class="card shadow mb-4">

    <div class="card-header bg-dark text-white">
        <i class="fas fa-clock"></i>
        Tanggal & Jam
    </div>

    <div class="card-body text-center">

        <h4 id="clock" class="font-weight-bold"></h4>

        <p class="text-muted mb-0">
            Sistem Informasi Rumah Sakit
        </p>

    </div>

</div>

<style>

.card{
    border-radius:12px;
}

.btn{
    border-radius:10px;
}

</style>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

// Grafik Batang
const ctx = document.getElementById('chartDashboard');

new Chart(ctx, {

    type: 'bar',

    data: {

        labels: ['Disetujui', 'Ditolak'],

        datasets: [{

            label: 'Jumlah Pendaftaran',

            data: [
                <?= $diterima; ?>,
                <?= $ditolak; ?>
            ],

            backgroundColor: [
                '#1cc88a',
                '#e74a3b'
            ]

        }]
    },

    options: {
        responsive: true,
        maintainAspectRatio: false
    }

});

// Diagram Lingkaran
const pieCtx = document.getElementById('pieChart');

new Chart(pieCtx, {

    type: 'pie',

    data: {

        labels: [
            'Disetujui',
            'Ditolak',
            'Masih Proses'
        ],

        datasets: [{

            data: [
                <?= $diterima; ?>,
                <?= $ditolak; ?>,
                <?= $total_pendaftar - ($diterima + $ditolak); ?>
            ],

            backgroundColor: [
                '#1cc88a',
                '#e74a3b',
                '#36b9cc'
            ]

        }]
    },

    options: {
        responsive: true
    }

});

// Jam Real Time
function updateClock(){

    let now = new Date();

    let waktu = now.toLocaleString('id-ID', {

        weekday:'long',
        year:'numeric',
        month:'long',
        day:'numeric',
        hour:'2-digit',
        minute:'2-digit',
        second:'2-digit'

    });

    document.getElementById('clock').innerHTML = waktu;
}

setInterval(updateClock,1000);
updateClock();

</script>