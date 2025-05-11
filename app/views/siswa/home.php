<?php include "../app/views/templates/header.php"; ?>

  <div class="container mt-2">
    <h3 class="fw-bold mb-4">Data Siswa</h3>

    <!-- Tombol dan Search Bar -->
    <div class="d-flex justify-content-between align-items-center mb-3">
    <a href="<?= urlTo('siswa/tambah') ?>" class="btn btn-primary">Tambah Data</a>
      <form class="d-flex" method="GET" action="">
        <input class="form-control me-2" type="search" name="cari" placeholder="Cari NIS/Nama" value="<?= $_GET['cari'] ?? '' ?>">
        <button class="btn btn-outline-primary" type="submit">Cari</button>
      </form>
    </div>

    

    <!-- Tabel Data Siswa -->
    <table class="table table-bordered table-striped">
      <thead class="table-success">
        <tr>
          <th>NISN</th>
          <th>NIS</th>
          <th>Nama</th>
          <th>Kelas</th>
          <th>Alamat</th>
          <th>No. Telepon</th>
          <th>Nominal SPP</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
<?php include "../app/views/templates/footer.php"; ?>