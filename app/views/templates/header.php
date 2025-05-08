<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?= getTitle(); ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .sidebar {
      min-height: 100vh;
      background-color: #1abc9c;
      color: white;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding-top: 20px;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
      width: 100%;
      padding: 10px 15px;
      display: block;
    }
    .sidebar a:hover {
      background-color: #16a085;
      border-radius: 5px;
    }
    .sidebar .nav-link.active {
      background-color: #16a085;
      border-radius: 5px;
    }
    .sidebar .nav-link{
      color: white;
    }
    .card-icon {
      font-size: 2.5rem;
    }
    .logo {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 2rem;
    }
  </style>
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-md-2 sidebar">
      <div class="logo">
        <i class="bi bi-cash-coin fs-3 me-2"></i>
        <span class="fs-4 fw-bold">MySPP</span>
      </div>
      <nav class="nav flex-column w-100 px-1">
        <a class="nav-link mb-2 <?= menuActive(['home']) ?>" href="<?= urlTo('/')?>">Dashboard</a>
        <a class="nav-link mb-2 <?= menuActive(['siswa']) ?>" href="<?= urlTo('siswa') ?>">Data Siswa</a>
        <a class="nav-link mb-2 <?= menuActive(['kelas']) ?>" href="<?= urlTo('kelas') ?>">Data Kelas</a>
        <a class="nav-link mb-2 <?= menuActive(['petugas']) ?>" href="<?= urlTo('petugas') ?>">Data Petugas</a> 
        <a class="nav-link mb-2 <?= menuActive(['spp']) ?>" href="<?= urlTo('spp') ?>">Data SPP</a>
        <a class="nav-link mb-2 <?= menuActive(['pembayaran']) ?>" href="<?= urlTo('pembayaran') ?>">Entri Transaksi</a>
        <a class="nav-link mb-2 <?= menuActive(['history']) ?>" href="<?= urlTo('history') ?>">History Pembayaran</a>
        <a class="nav-link mb-2 <?= menuActive(['laporan']) ?>" href="<?= urlTo('laporan') ?>">Generate Laporan</a>
        <a class="nav-link mt-4 <?= menuActive(['login/logout']) ?>" href="<?= urlTo('login/logout') ?>"><i class="bi bi-box-arrow-left me-2"></i>Logout</a>
      </nav>
    </div>

    <!-- Main Content -->
    <div class="col-md-10 p-4">

