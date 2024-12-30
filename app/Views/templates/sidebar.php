<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-10">
        <i class="fas fa-user"></i>
    </div>
    <div class="sidebar-brand-text mx-3">User</div>
</a>

<?php if(in_groups('admin')) : ?>
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    User Management
</div>

<li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin/laporan'); ?>">
        <i class="fas fa-fw fa-table"></i>
        <span>Laporan</span></a>
</li>

<!-- Nav Item - Dashboard (untuk penggajian)-->

<li class="nav-item">
    <a class="nav-link" href="<?= base_url('pegawai')?>">
        <i class="fas fa-users"></i>
        <span>Pegawai</span></a>
</li>

<?php endif; ?>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Payroll
</div>

<!-- Nav Item - Charts -->

<li class="nav-item">
    <a class="nav-link" href="<?= base_url('penggajian')?>">
        <i class="fas fa-money-check-alt"></i>
        <span>Penggajian</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?= base_url('tunjangan')?>">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Tunjangan</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('potongan')?>">
        <i class="fas fa-fw fa-table"></i>
        <span>Potongan</span></a>
</li>

<!-- Nav Item - Logout -->
<hr class="sidebar-divider">
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('logout'); ?>">
        <i class="fas fa-sign-out-alt"></i>
        <span>Logout</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>