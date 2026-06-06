<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-15">
            <i class="fas fa-hospital"></i>
        </div>    
        <div class="sidebar-brand-text mx-3">Hospitally</div>
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

    <!-- Pendaftaran -->
    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('admin/pendaftaran'); ?>">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Data Pendaftaran</span>
        </a>
    </li>

    <!-- Pasien -->
    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('admin/pasien'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Data Pasien</span>
        </a>
    </li>

    <!-- Dokter -->
    <li class="nav-item">
         <a class="nav-link" href="<?= site_url('admin/dokter'); ?>">
        <i class="fas fa-fw fa-user-md"></i>
        <span>Data Dokter</span>
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

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">