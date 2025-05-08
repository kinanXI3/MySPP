<?php include "../app/views/templates/header.php"; ?>
<script>
    function toggleForm() {
      const form = document.getElementById("formTransaksi");
      form.style.display = form.style.display === "none" ? "block" : "none";
    }
  </script>

<div class="container mt-2">
  <h3 class="fw-bold mb-4">Entri Transaksi</h3>

  <button class="btn btn-success mb-3" onclick="toggleForm()">Tambah Transaksi</button>

  <!-- Form Tambah Transaksi -->
  <div id="formTransaksi" class="border p-4 mb-4 rounded" style="display: none;">
    <form action="<?= urlTo('pembayaran/simpan') ?>" method="POST">
      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Nama Petugas</label>
          <select name="id_petugas" class="form-control" required>
            <option value="">-- Pilih Petugas --</option>
            <?php foreach ($petugasList as $petugas): ?>
              <option value="<?= $petugas['id_petugas'] ?>"><?= $petugas['nama_petugas'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="col-md-6">
          <label class="form-label">Kode Transaksi</label>
          <input type="text" name="id_pembayaran" class="form-control" placeholder="Otomatis/manual" required>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">NISN Siswa</label>
          <input type="text" name="nisn" class="form-control" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">Tanggal Pembayaran</label>
          <input type="date" name="tgl_bayar" class="form-control" required>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Bulan Pembayaran</label>
          <input type="text" name="bulan_dibayar" class="form-control" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">Tahun Pembayaran</label>
          <input type="text" name="tahun_dibayar" class="form-control" required>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Tahun & Nominal SPP</label>
          <select name="id_spp" class="form-control" required>
            <option value="">-- Pilih SPP --</option>
            <?php foreach ($sppList as $spp): ?>
              <option value="<?= $spp['id_spp'] ?>"><?= $spp['tahun'] ?> - Rp<?= number_format($spp['nominal']) ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="col-md-6">
          <label class="form-label">Jumlah Bayar</label>
          <input type="number" name="jumlah_bayar" class="form-control" required>
        </div>
      </div>
      <div class="text-end">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>

  <!-- Tabel Transaksi -->
  <div class="table-responsive">
    <table class="table table-bordered table-hover">
      <thead class="table-success">
        <tr>
          <th>No</th>
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