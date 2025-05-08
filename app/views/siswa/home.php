<?php include "../app/views/templates/header.php"; ?>
<script>
    function toggleForm() {
      const form = document.getElementById('formTambah');
      form.style.display = form.style.display === 'none' ? 'block' : 'none';
    }
  </script>
  <div class="container mt-2">
    <h3 class="fw-bold mb-4">Data Siswa</h3>

    <!-- Tombol dan Search Bar -->
    <div class="d-flex justify-content-between align-items-center mb-3">
      <button class="btn btn-success" onclick="toggleForm()">Tambah Data Siswa</button>
      <form class="d-flex" method="GET" action="">
        <input class="form-control me-2" type="search" name="cari" placeholder="Cari NIS/Nama" value="<?= $_GET['cari'] ?? '' ?>">
        <button class="btn btn-outline-primary" type="submit">Cari</button>
      </form>
    </div>

     <!-- Form Tambah Data (hidden by default) -->
  <div id="formTambah" style="display: none;" class="mb-4">
      <form action="<?= urlTo('siswa/simpan') ?>" method="POST" class="border rounded p-4">
        <div class="mb-3">
          <label for="nis" class="form-label">NISN</label>
          <input type="text" class="form-control" id="nisn" name="nisn" required>
        </div>
        <div class="mb-3">
          <label for="nis" class="form-label">NIS</label>
          <input type="text" class="form-control" id="nis" name="nis" required>
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" required>
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
          <label for="alamat" class="form-label">Alamat</label>
          <textarea class="form-control" id="alamat" name="alamat" rows="2" required></textarea>
        </div>
        <div class="mb-3">
          <label for="telepon" class="form-label">No. Telepon</label>
          <input type="text" class="form-control" id="telepon" name="telepon" required>
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
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>

    <!-- Tabel Data Siswa -->
    <table class="table table-bordered table-striped">
      <thead class="table-success">
        <tr>
          <th>NISN</th>
          <th>NIS</th>
          <th>Nama</th>
          <th>Kelas</th>
          <th>Alamat</th>
          <th>No. Telepon</th>
          <th>Nominal SPP</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
<?php include "../app/views/templates/footer.php"; ?>