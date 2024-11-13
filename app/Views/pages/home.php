<?= $this->extend('layouts/template') ?>

<?= $this->section('title') ?>
Main
<?= $this->endSection() ?>

<?= $this->section('navbar') ?>
    <?= view('partials/nav') ?> <!-- Navbar Dosyasını Dahil Etme -->
<?= $this->endSection() ?>

<?= $this->section('content') ?>
   

<?= $this->endSection() ?>
