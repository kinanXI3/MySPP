<?php include "../app/views/templates/header.php"; ?>

 <!-- Main Content -->
 <div class="container mt-2">
    <h3 class="fw-bold mb-4">Data SPP</h3>

    <!-- Form Tambah Kelas -->
    <div class="mb-4">
      <form action="<?= urlTo('spp/simpan') ?>" method="POST" class="border rounded p-4">
        <div class="mb-3">
          <label for="no" class="form-label">No</label>
          <input type="number" class="form-control" id="no" name="no" required>
        </div>
        <div class="mb-3">
          <label for="nama_kelas" class="form-label">Tahun</label>
          <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" required>
        </div>
        <div class="mb-3">
          <label for="kompetensi_keahlian" class="form-label">Nominal</label>
          <input type="text" class="form-control" id="kompetensi_keahlian" name="kompetensi_keahlian" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>

    <!-- Tabel Data Kelas -->
    <table class="table table-bordered table-striped">
      <thead class="table-success">
        <tr>
          <th>No</th>
          <th>Tahun</th>
          <th>Nominal</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
<?php include "../app/views/templates/footer.php"; ?>