<?php include "../app/views/templates/header.php"; ?>

<!-- Form Dua Kolom -->
<div class="container py-5 d-flex justify-content-center">
  <form action="<?= urlTo('siswa/tambah') ?>" method="POST" class="border rounded p-4 bg-light shadow w-75">

    <div class="row">
      <div class="col-md-6">
        <div class="mb-3">
          <label for="nisn" class="form-label">NISN</label>
          <input type="text" class="form-control" id="nisn" name="nisn" required>
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <textarea class="form-control" id="alamat" name="alamat" rows="2" required></textarea>
        </div>
        <div class="mb-3">
          <label for="id_spp" class="form-label">Nominal SPP</label>
          <select class="form-select" id="id_spp" name="id_spp" required>
            <option value="">Pilih Nominal</option>
            <?php foreach ($sppList as $spp): ?>
              <option value="<?= $spp['id_spp'] ?>">Rp <?= number_format($spp['nominal'], 0, ',', '.') ?> - Tahun <?= $spp['tahun'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>

      <div class="col-md-6">
        <div class="mb-3">
          <label for="nis" class="form-label">NIS</label>
          <input type="text" class="form-control" id="nis" name="nis" required>
        </div>
        <div class="mb-3">
          <label for="id_kelas" class="form-label">Kelas</label>
          <select class="form-select" id="id_kelas" name="id_kelas" required>
            <option value="">Pilih Kelas</option>
            <?php foreach ($kelasList as $kelas): ?>
              <option value="<?= $kelas['id_kelas'] ?>"><?= $kelas['nama_kelas'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="mb-3">
          <label for="telepon" class="form-label">No. Telepon</label>
          <input type="text" class="form-control" id="telepon" name="telepon" required>
        </div>
      </div>
    </div>

     <div class="d-flex justify-content-between">
      <a href="<?= urlTo('siswa') ?>" class="btn btn-danger">Batal</a>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>

  </form>
</div>

<?php include "../app/views/templates/footer.php"; ?>
