<?php include "../app/views/templates/header.php"; ?>

<div class="mb-4 w-50 mx-auto">
      <h3 class="fw-bold mb-4">Edit Data Kelas</h3>
  <form action="<?= urlTo('kelas/update/' . $data['kelas']['id_kelas']); ?>" method="POST" class="border rounded p-4 bg-light shadow-sm">

    <div class="mb-3">
      <label for="no" class="form-label">ID</label>
      <input type="number" class="form-control" id="id_kelas" name="id_kelas" 
    value="<?= $data['kelas']['id_kelas']; ?>" readonly>
    </div>
    
    <div class="mb-3">
      <label for="nama_kelas" class="form-label">Nama Kelas</label>
      <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" 
      value="<?= $data['kelas']['nama_kelas']; ?>" required>
    </div>

    <div class="mb-3">
      <label for="kompetensi_keahlian" class="form-label">Kompetensi Keahlian</label>
      <input type="text" class="form-control" id="kompetensi_keahlian" name="kompetensi_keahlian" 
      value="<?= $data['kelas']['kompetensi_keahlian']; ?>" required>
    </div>

    <div class="d-flex justify-content-between">
      <a href="<?= urlTo('kelas') ?>" class="btn btn-danger">Batal</a>
      <button type="submit" class="btn btn-primary">Edit</button>
    </div>

  </form>
</div>

<?php include "../app/views/templates/footer.php"; ?>
