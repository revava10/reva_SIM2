<style>
/* =====================================
   SIDEBAR PINK PASTEL
===================================== */

#accordionSidebar{
    background: linear-gradient(
        180deg,
        #ffe5f1 0%,
        #ffd6eb 50%,
        #ffc2df 100%
    ) !important;

    background-image:none !important;
}

/* Brand */
#accordionSidebar .sidebar-brand{
    color:#c2185b !important;
    font-weight:700;
}

#accordionSidebar .sidebar-brand i{
    color:#c2185b !important;
}

/* Menu */
#accordionSidebar .nav-link{
    color:#c2185b !important;
    font-weight:500;
}

#accordionSidebar .nav-link i{
    color:#c2185b !important;
}

/* Hover */
#accordionSidebar .nav-item:hover{
    background:rgba(255,255,255,.45);
    border-radius:10px;
    margin:0 10px;
}

/* Active */
#accordionSidebar .nav-item.active{
    background:rgba(255,255,255,.55);
    border-radius:10px;
    margin:0 10px;
}

/* Divider */
#accordionSidebar .sidebar-divider{
    border-top:1px solid rgba(194,24,91,.2);
}

/* Topbar */
.topbar{
    background:#fff0f7 !important;
}

/* Dashboard Cards */
.border-left-primary{
    border-left:5px solid #ffb3d9 !important;
}

.border-left-success{
    border-left:5px solid #ff8fc7 !important;
}

.border-left-danger{
    border-left:5px solid #ff69b4 !important;
}

/* Dashboard Text */
.text-primary{
    color:#d63384 !important;
}

.text-success{
    color:#e91e63 !important;
}

.text-danger{
    color:#c2185b !important;
}

.text-gray-800{
    color:#c2185b !important;
}
</style>

<ul class="navbar-nav sidebar accordion" id="accordionSidebar">

    <!-- Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-hospital"></i>
        </div>
        <div class="sidebar-brand-text mx-3">
            Hospitally
        </div>
    </a>

    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('admin'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <!-- Data Pendaftaran -->
    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('admin/pendaftaran'); ?>">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Data Pendaftaran</span>
        </a>
    </li>

    <!-- Data Pasien -->
    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('admin/pasien'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Data Pasien</span>
        </a>
    </li>

    <!-- Data Dokter -->
    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('admin/dokter'); ?>">
            <i class="fas fa-fw fa-user-md"></i>
            <span>Data Dokter</span>
        </a>
    </li>

    <!-- Cetak Laporan -->
    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('laporan/cetak_dokter'); ?>">
            <i class="fas fa-fw fa-print"></i>
            <span>Laporan dokter</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('laporan/cetak_pasien'); ?>">
            <i class="fas fa-fw fa-print"></i>
            <span>Laporan pasien</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('laporan/cetak_pendaftaran'); ?>">
            <i class="fas fa-fw fa-print"></i>
            <span>Laporan pendaftaran</span>
        </a>
    </li>



    <hr class="sidebar-divider">

    <!-- Logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('auth/logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </li>

</ul>

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">