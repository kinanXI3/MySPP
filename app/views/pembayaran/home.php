<?php include "../app/views/templates/header.php"; ?>

<div class="container mt-2">
  <h3 class="fw-bold mb-4">Entri Transaksi</h3>

<div class="d-flex justify-content-between align-items-center mb-3">
    <a href="<?= urlTo('pembayaran/tambah') ?>" class="btn btn-primary">Tambah Transaksi</a>
  </div>
  
  <!-- Tabel Transaksi -->
  <div class="table-responsive">
    <table class="table table-bordered table-hover">
      <thead class="table-success">
        <tr>
          <th>ID</th>
          <th>Petugas</th>
          <th>NISN</th>
          <th>Tanggal</th>
          <th>Bulan</th>
          <th>Tahun</th>
          <th>SPP</th>
          <th>Jumlah Bayar</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
      
      </tbody>
    </table>
  </div>
</div>

<?php include "../app/views/templates/footer.php"; ?>