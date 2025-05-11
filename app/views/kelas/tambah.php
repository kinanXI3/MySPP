<?php include "../app/views/templates/header.php"; ?>

<div class="mb-4 w-50 mx-auto">
        <h3 class="fw-bold mb-4">Tambah Data Kelas</h3>
  <form action="<?= urlTo('kelas/store') ?>" method="POST" class="border rounded p-4 bg-light shadow-sm">

    <div class="mb-3">
      <label for="no" class="form-label">No</label>
      <input type="number" class="form-control" id="no" name="no" required>
    </div>
    
    <div class="mb-3">
      <label for="nama_kelas" class="form-label">Nama Kelas</label>
      <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" required>
    </div>

    <div class="mb-3">
      <label for="kompetensi_keahlian" class="form-label">Kompetensi Keahlian</label>
      <input type="text" class="form-control" id="kompetensi_keahlian" name="kompetensi_keahlian" required>
    </div>

    <div class="d-flex justify-content-between">
      <a href="<?= urlTo('kelas') ?>" class="btn btn-danger">Batal</a>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>

  </form>
</div>

<?php include "../app/views/templates/footer.php"; ?>
