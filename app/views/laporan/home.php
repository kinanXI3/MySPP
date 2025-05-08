<?php include "../app/views/templates/header.php"; ?>
<script>
    function filterTable() {
      const input = document.getElementById("searchInput").value.toLowerCase();
      const rows = document.querySelectorAll("#laporanTable tbody tr");
      rows.forEach(row => {
        const nama = row.querySelector("td:nth-child(2)").textContent.toLowerCase();
        row.style.display = nama.includes(input) ? "" : "none";
      });
    }
  </script>
  
  <div class="container mt-2">
  <h3 class="fw-bold mb-4">Generate Laporan Pembayaran</h3>

  <!-- Filter Form -->
  <form action="<?= urlTo('laporan') ?>" method="GET" class="mb-4">
    <div class="row">
      <div class="col-md-3">
        <input type="month" name="month_year" class="form-control" value="<?= isset($_GET['month_year']) ? $_GET['month_year'] : '' ?>">
      </div>
      <div class="col-md-2">
        <button type="submit" class="btn btn-primary">Filter</button>
      </div>
      <div class="col-md-7 text-end">
        <button type="button" class="btn btn-success" onclick="printReport()">Cetak Laporan</button>
      </div>
    </div>
  </form>

  <div class="table-responsive">
    <table class="table table-bordered" id="laporanTable">
      <thead class="table-success">
        <tr>
          <th>No</th>
          <th>Nama Siswa</th>
          <th>NISN</th>
          <th>Kelas</th>
          <th>Tanggal Bayar</th>
          <th>Bulan - Tahun</th>
          <th>Nominal</th>
          <th>Petugas</th>
        </tr>
      </thead>
      <tbody>
    
      </tbody>
    
    </table>
  </div>
</div>
  <?php include "../app/views/templates/footer.php"; ?>