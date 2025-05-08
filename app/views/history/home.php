<?php include "../app/views/templates/header.php"; ?>
<div class="container mt-2">
  <h3 class="fw-bold mb-4">History Pembayaran</h3>

  <!-- Pencarian Nama Siswa -->
  <form method="GET" action="" class="mb-4">
    <div class="input-group">
      <input type="text" name="cari" class="form-control" placeholder="Cari Nama Siswa..." value="<?= isset($_GET['cari']) ? htmlspecialchars($_GET['cari']) : '' ?>">
      <button type="submit" class="btn btn-primary">Cari</button>
    </div>
  </form>

  <!-- Tabel History -->
  <div class="table-responsive">
    <table class="table table-bordered table-hover">
      <thead class="table-success">
        <tr>
          <th>No</th>
          <th>NIS</th>
          <th>Nama Siswa</th>
          <th>Tanggal Bayar</th>
          <th>Nominal</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
     
      </tbody>
    </table>
  </div>
</div>
<?php include "../app/views/templates/footer.php"; ?>