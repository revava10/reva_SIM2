<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hospitally - Sistem Pendaftaran Pasien Online</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>

        body{
            background:#f8f9fa;
        }

        .hero{
            min-height:75vh;
            display:flex;
            align-items:center;
        }

        .hero-title{
            font-size:60px;
            font-weight:bold;
        }

        .hero-subtitle{
            font-size:22px;
            color:#6c757d;
        }

        .feature-card{
            transition:.3s;
            border:none;
            border-radius:15px;
        }

        .feature-card:hover{
            transform:translateY(-10px);
        }

        .navbar-custom{
            background:linear-gradient(90deg,#0d6efd,#0044cc);
        }

    </style>

</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow">

    <div class="container">

        <a class="navbar-brand fw-bold" href="<?= site_url('frontend'); ?>">

            <i class="fas fa-hospital-alt"></i>
            Hospitally

        </a>

        <div>

            <a href="<?= site_url('frontend/daftar'); ?>"
               class="btn btn-light me-2">

                <i class="fas fa-notes-medical"></i>
                Daftar Berobat

            </a>

            <a href="<?= site_url('frontend/cek_status'); ?>"
               class="btn btn-outline-light me-2">

                <i class="fas fa-search"></i>
                Cek Status

            </a>

            <?php if($this->session->userdata('login')): ?>

                <a href="<?= site_url('auth/logout'); ?>"
                   class="btn btn-danger">

                    <i class="fas fa-sign-out-alt"></i>
                    Logout

                </a>

            <?php else: ?>

                <a href="<?= site_url('auth'); ?>"
                   class="btn btn-success">

                    <i class="fas fa-sign-in-alt"></i>
                    Login

                </a>

            <?php endif; ?>

        </div>

    </div>

</nav>

<!-- HERO -->
<section class="hero">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6">

                <h1 class="hero-title">
                    Sistem Pendaftaran Pasien Online
                </h1>

                <p class="hero-subtitle mt-3">
                    Daftarkan diri Anda secara online tanpa harus mengantri di rumah sakit.
                </p>

                <div class="mt-4">

                    <a href="<?= site_url('frontend/daftar'); ?>"
                       class="btn btn-primary btn-lg me-2">

                        <i class="fas fa-notes-medical"></i>
                        Daftar Berobat

                    </a>

                    <a href="<?= site_url('frontend/cek_status'); ?>"
                       class="btn btn-outline-primary btn-lg">

                        <i class="fas fa-search"></i>
                        Cek Status

                    </a>

                </div>

            </div>

            <div class="col-md-6 text-center">

                <img src="https://cdn-icons-png.flaticon.com/512/2785/2785482.png"
                     class="img-fluid"
                     style="max-height:450px;">

            </div>

        </div>

    </div>

</section>

<!-- FITUR -->
<section class="pb-5">

    <div class="container">

        <div class="row">

            <div class="col-md-4 mb-3">

                <div class="card shadow feature-card h-100">

                    <div class="card-body text-center">

                        <i class="fas fa-user-md fa-4x text-primary mb-3"></i>

                        <h4>Dokter Profesional</h4>

                        <p>
                            Ditangani oleh dokter yang profesional dan berpengalaman.
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-4 mb-3">

                <div class="card shadow feature-card h-100">

                    <div class="card-body text-center">

                        <i class="fas fa-clock fa-4x text-success mb-3"></i>

                        <h4>Hemat Waktu</h4>

                        <p>
                            Tidak perlu antre panjang saat melakukan pendaftaran.
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-4 mb-3">

                <div class="card shadow feature-card h-100">

                    <div class="card-body text-center">

                        <i class="fas fa-laptop-medical fa-4x text-danger mb-3"></i>

                        <h4>Pendaftaran Online</h4>

                        <p>
                            Daftar berobat kapan saja dan dimana saja.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- FOOTER -->
<footer class="bg-primary text-white text-center py-4">

    <h5>Hospitally</h5>

    <p class="mb-0">
        © <?= date('Y'); ?> Sistem Pendaftaran Pasien Online
    </p>

</footer>

</body>
</html>