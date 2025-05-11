<?php include "../app/views/templates/header.php"; ?>
 <!-- Form Tambah Kelas -->
<div class="mb-4 w-50 mx-auto">
    <form action="<?= urlTo('petugas/tambah') ?>" method="POST" class="border rounded p-4 bg-light shadow-sm"">
      <div class="row g-3 align-items-end">
        <div class="mb-3">
          <label for="no" class="form-label">ID</label>
          <input type="number" class="form-control" id="no" name="no" required>
        </div>
        <div class="mb-3">
          <label for="nama_petugas" class="form-label">Nama Petugas</label>
          <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" required>
        </div>
        <div class="d-flex justify-content-between">
      <a href="<?= urlTo('petugas') ?>" class="btn btn-danger">Batal</a>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
      </div>
    </form>
  </div>
<?php include "../app/views/templates/footer.php"; ?>