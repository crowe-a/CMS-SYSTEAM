<?= $this->extend('layouts/template') ?>

<?= $this->section('title') ?>
Anasayfa
<?= $this->endSection() ?>

<?= $this->section('navbar') ?>
    <?= view('partials/nav') ?> <!-- Navbar Dosyasını Dahil Etme -->
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <?= view('partials/register_layout') ?>

<?= $this->endSection() ?>
