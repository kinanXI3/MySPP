<?php include "../app/views/templates/header.php"; ?>
<!-- Form Tambah Transaksi -->
<div class="container py-5 d-flex justify-content-center">
    <form action="<?= urlTo('pembayaran/tambah') ?>" method="POST" class="border rounded p-4 bg-light shadow w-75">

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
       <div class="d-flex justify-content-between">
      <a href="<?= urlTo('pembayaran') ?>" class="btn btn-danger">Batal</a>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    </form>
  </div>

<?php include "../app/views/templates/footer.php"; ?>

