<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pasien</title>

    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

   <head>
...
<style>

/* GANTI SEMUA CSS LAMA DENGAN INI */

body{
    background:linear-gradient(135deg,#fff0f6,#ffe4ec,#fff8fb);
    font-family:'Segoe UI',sans-serif;
}

/* HEADER */
.hero{
    background:linear-gradient(135deg,#ff8fab,#ffc2d1);
    color:white;
    border-radius:25px;
    padding:40px;
    margin-bottom:30px;
    box-shadow:0 10px 30px rgba(255,143,171,.35);
}

.hero h2{
    font-weight:bold;
}

/* JAM */
.clock-box{
    background:rgba(255,255,255,.25);
    backdrop-filter:blur(10px);
    padding:15px;
    border-radius:15px;
    text-align:center;
    border:1px solid rgba(255,255,255,.3);
}

#clock{
    font-size:32px;
    font-weight:bold;
}

#date{
    font-size:15px;
}

.profile-icon{
    font-size:120px;
    margin-top:10px;
    color:white;
}

/* CARD STATISTIK */
.stat-card{
    border:none;
    border-radius:20px;
    color:white;
    overflow:hidden;
    transition:.3s;
}

.stat-card:hover{
    transform:translateY(-8px);
}

.bg-stat-1{
    background:linear-gradient(135deg,#ff758f,#ffb3c6);
}

.bg-stat-2{
    background:linear-gradient(135deg,#ff8fab,#ffc2d1);
}

.bg-stat-3{
    background:linear-gradient(135deg,#fb6f92,#ffb3c6);
}

/* MENU */
.card-menu{
    border:none;
    border-radius:20px;
    transition:.3s;
    background:white;
}

.card-menu:hover{
    transform:translateY(-10px);
    box-shadow:0 15px 30px rgba(255,182,193,.35);
}

.icon-box{
    font-size:60px;
    margin-bottom:15px;
}

/* CARD INFO */
.welcome-card{
    background:white;
    border-radius:20px;
    padding:25px;
    margin-bottom:25px;
    box-shadow:0 10px 30px rgba(255,192,203,.25);
}

/* BUTTON */
.btn{
    border-radius:10px;
}

.btn-primary{
    background:#ff5d8f;
    border:none;
}

.btn-primary:hover{
    background:#ff477e;
}

.btn-success{
    background:#ff8fab;
    border:none;
}

.btn-success:hover{
    background:#ff7096;
}

.btn-danger{
    background:#e63973;
    border:none;
}

.btn-danger:hover{
    background:#d62862;
}

/* WARNA TEXT */
.text-primary{
    color:#ff5d8f !important;
}

.shadow{
    box-shadow:0 10px 30px rgba(255,192,203,.25)!important;
}

hr{
    border-top:1px solid #ffd6e0;
}

</style>
</head>

<div class="container mt-4">

    <!-- HEADER -->
    <div class="hero">

        <div class="row align-items-center">

            <div class="col-md-8">

                <h2>
                    <i class="fas fa-hospital-alt"></i>
                    Rumah Sakit GreenLife Hospitally
                </h2>

                <h4 class="mt-3">
                    <span id="greeting"></span>,
                    <?= $this->session->userdata('username'); ?>
                </h4>

                <p>
                    Sistem Informasi Pendaftaran Pasien Online
                </p>

            </div>

            <div class="col-md-4 text-center">

                <div class="clock-box">

                    <div id="clock"></div>

                    <div id="date"></div>

                </div>

                <i class="fas fa-user-circle profile-icon"></i>

            </div>

        </div>

    </div>

    <!-- INFO -->
    <div class="welcome-card shadow">

        <h4 class="text-primary">
            <i class="fas fa-user"></i>
            Dashboard Pasien
        </h4>

        <hr>

        <p>
            Selamat datang di Sistem Informasi Rumah Sakit.
            Anda dapat melakukan pendaftaran online,
            mengecek status pendaftaran, dan melihat informasi dokter.
        </p>

    </div>

   <!-- STATISTIK -->
<div class="row mb-4">

    <div class="col-md-4 mb-3">

        <div class="card stat-card bg-stat-1 shadow">

            <div class="card-body text-center">

                <i class="fas fa-notes-medical fa-3x"></i>

                <h5 class="mt-3">
                    Riwayat Pendaftaran
                </h5>

                <h2>1</h2>

            </div>

        </div>

    </div>

    <div class="col-md-4 mb-3">

        <div class="card stat-card bg-stat-2 shadow">

            <div class="card-body text-center">

                <i class="fas fa-user-md fa-3x"></i>

                <h5 class="mt-3">
                    Pelayanan Dokter
                </h5>

                <h2>Aktif & Tersedia</h2>

                <small>
                    Siap melayani pasien
                </small>

            </div>

        </div>

    </div>

    <div class="col-md-4 mb-3">

        <div class="card stat-card bg-stat-3 shadow">

            <div class="card-body text-center">

                <i class="fas fa-shield-heart fa-3x"></i>

                <h5 class="mt-3">
                    Akun Terverifikasi
                </h5>

                <h2>✓</h2>

            </div>

        </div>

    </div>

</div>
    <!-- MENU -->
    <div class="row">

        <div class="col-md-4 mb-4">

            <div class="card card-menu shadow">

                <div class="card-body text-center">

                    <div class="icon-box text-primary">
                        <i class="fas fa-notes-medical"></i>
                    </div>

                    <h5>Daftar Berobat</h5>

                    <p>
                        Lakukan pendaftaran berobat secara online.
                    </p>

                    <a href="<?= site_url('frontend/daftar'); ?>"
                       class="btn btn-primary">

                        Daftar Sekarang

                    </a>

                </div>

            </div>

        </div>

        <div class="col-md-4 mb-4">

            <div class="card card-menu shadow">

                <div class="card-body text-center">

                    <div class="icon-box text-success">
                        <i class="fas fa-search"></i>
                    </div>

                    <h5>Cek Status</h5>

                    <p>
                        Lihat status pendaftaran Anda.
                    </p>

                    <a href="<?= site_url('frontend/cek_status'); ?>"
                       class="btn btn-success">

                        Cek Status

                    </a>

                </div>

            </div>

        </div>

        <div class="col-md-4 mb-4">

            <div class="card card-menu shadow">

                <div class="card-body text-center">

                    <div class="icon-box text-danger">
                        <i class="fas fa-sign-out-alt"></i>
                    </div>

                    <h5>Logout</h5>

                    <p>
                        Keluar dari sistem aplikasi.
                    </p>

                    <a href="<?= site_url('auth/logout'); ?>"
                       class="btn btn-danger">

                        Logout

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

<script>

function updateClock(){

    const now = new Date();

    const time = now.toLocaleTimeString('id-ID');

    const date = now.toLocaleDateString('id-ID',{
        weekday:'long',
        day:'numeric',
        month:'long',
        year:'numeric'
    });

    document.getElementById('clock').innerHTML = time;
    document.getElementById('date').innerHTML = date;

    let greeting = "Selamat Malam";

    const hour = now.getHours();

    if(hour >= 5 && hour < 12){
        greeting = "Selamat Pagi";
    }else if(hour >= 12 && hour < 15){
        greeting = "Selamat Siang";
    }else if(hour >= 15 && hour < 18){
        greeting = "Selamat Sore";
    }

    document.getElementById('greeting').innerHTML = greeting;
}

setInterval(updateClock,1000);
updateClock();

</script>

</body>
</html>