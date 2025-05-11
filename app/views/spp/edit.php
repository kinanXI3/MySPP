<?php include "../app/views/templates/header.php"; ?>

<div class="mb-4 w-50 mx-auto">
      <h3 class="fw-bold mb-4">Edit Data SPP</h3>
  <form action="<?= urlTo('spp/update/' . $data['spp']['id_spp']); ?>" method="POST" class="border rounded p-4 bg-light shadow-sm">

    <div class="mb-3">
      <label for="no" class="form-label">ID</label>
      <input type="number" class="form-control" id="id_spp" name="id_spp" 
    value="<?= $data['spp']['id_spp']; ?>" readonly>
    </div>
    
    <div class="mb-3">
      <label for="tahun" class="form-label">Tahun</label>
      <input type="text" class="form-control" id="tahun" name="tahun" 
      value="<?= $data['spp']['tahun']; ?>" required>
    </div>

    <div class="mb-3">
      <label for="nominal" class="form-label">Nominal</label>
      <input type="text" class="form-control" id="nominal" name="nominal" 
      value="<?= $data['spp']['nominal']; ?>" required>
    </div>

    <div class="d-flex justify-content-between">
      <a href="<?= urlTo('spp') ?>" class="btn btn-danger">Batal</a>
      <button type="submit" class="btn btn-primary">Edit</button>
    </div>

  </form>
</div>

<?php include "../app/views/templates/footer.php"; ?>
