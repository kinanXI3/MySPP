<?php include "../app/views/templates/header.php"; $no = 1; ?>

 <!-- Main Content -->
 <div class="container mt-2">
    <h3 class="fw-bold mb-4">Data SPP</h3>
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $_SESSION['success']; ?>
        <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php unset($_SESSION['success']); ?>
      <?php endif; ?>

    <div class="d-flex justify-content-between align-items-center mb-3">
    <a href="<?= urlTo('spp/tambah') ?>" class="btn btn-primary">Tambah Data</a>
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
        <?php foreach ($data as $spp) : ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $spp['tahun']; ?></td>
            <td><?= $spp['nominal']; ?></td>
            <td>
            <a href="<?= urlTo('spp/edit/' . $spp['id_spp']) ?>" class="btn btn-warning btn-sm">Edit</a>
            <a href="<?= urlTo('spp/delete/' . $spp['id_spp']) ?>" class="btn btn-danger btn-sm">Hapus</a>
            </td>
          </tr>
          <?php endforeach; ?>
      </tbody>
    </table>
  </div>
<?php include "../app/views/templates/footer.php"; ?>