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
    <a href="<?= urlTo('kelas/tambah') ?>" class="btn btn-primary">Tambah Data</a>
    </div>

    <!-- Tabel Data Kelas -->
    <table class="table table-bordered table-striped">
      <thead class="table-success">
        <tr>
          <th>No</th>
          <th>Nama Kelas</th>
          <th>Kompetensi Keahlian</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data as $kelas) : ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $kelas['nama_kelas']; ?></td>
            <td><?= $kelas['kompetensi_keahlian']; ?></td>
            <td>
            <a href="<?= urlTo('kelas/edit/' . $kelas['id_kelas']) ?>" class="btn btn-warning">Edit</a>
            <a href="<?= urlTo('kelas/delete/' . $kelas['id_kelas']) ?>" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
          <?php endforeach; ?>
      </tbody>
    </table>
  </div>
<?php include "../app/views/templates/footer.php"; ?>

