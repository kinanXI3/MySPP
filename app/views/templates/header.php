<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB SPP - <?= getTitle(); ?> </title>
</head>
<body>
    <a href="<?= urlTo('/') ?>">Home</a>
    <a href="<?= urlTo('spp') ?>">SPP</a>
    <a href="<?= urlTo('kelas') ?>">Kelas</a>
    <a href="<?= urlTo('petugas') ?>">Petugas</a>
    <a href="<?= urlTo('pembayaran') ?>">Pembayaran</a>
    <a href="<?= urlTo('login/logout') ?>">Logout</a>