<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="jumbotron text-center" style="height: 500px">
    <h1 class="mt-5">Halaman ini di buat untuk menyelesaikan Tugas Kuliah</h1>
    <center><img src="https://scontent-sin6-1.xx.fbcdn.net/v/t39.30808-6/261989988_4731322866954998_1889812753755498551_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=174925&_nc_eui2=AeFQZlkEfvEegIJrQ19iCzyubD-piaZOVLtsP6mJpk5Uu5kAfLr3hvQCDCHF0TTV8wxYHMpEjahltxTfaOxcF2Xe&_nc_ohc=TSSoWEEqDo0AX_XkCns&_nc_ht=scontent-sin6-1.xx&oh=00_AT-V3lLvDOV_TwFkHCxgz9s-yuTzA_zIpcZwgioncCLnYw&oe=62D89061" width="150" height="150" alt="Sawah"/></center>
    <p class="lead text-muted">
        Nama : Nur Fazri Irawan
    </p>
    <p class="lead text-muted">
        NIM : 30819029
    </p>
    <a href="<?php echo base_url('login'); ?>" class="btn btn-outline-primary my-2">Login</a>
    <a href="<?php echo base_url('register'); ?>" class="btn btn-success my-2">Register</a>
</section>

<?= $this->endSection() ?>