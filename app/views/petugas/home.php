<?php include "../app/views/templates/header.php"; ?>

 <!-- Main Content -->
 <div class="container mt-2">
    <h3 class="fw-bold mb-4">Data Petugas</h3>

    <div class="d-flex justify-content-between align-items-center mb-3">
    <a href="<?= urlTo('petugas/tambah') ?>" class="btn btn-primary">Tambah Data</a>
    </div>

    <!-- Tabel Data Kelas -->
    <table class="table table-bordered table-striped">
      <thead class="table-success">
        <tr>
          <th>ID</th>
          <th>Nama Petugas</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
<?php include "../app/views/templates/footer.php"; ?>