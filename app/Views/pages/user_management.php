<?= $this->extend('layouts/template') ?>

<?= $this->section('title') ?>
User Management
<?= $this->endSection() ?>

<?= $this->section('navbar') ?>
    <?= view('partials/nav') ?> <!-- Navbar Dosyasını Dahil Etme -->
<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <?= view('partials/user_management_form') ?> 

<?= $this->endSection() ?>
