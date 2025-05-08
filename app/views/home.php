<?php include "../app/views/templates/header.php"; ?>
<h3 class="fw-bold mb-4">Dashboard Administrator</h3>
      <div class="row g-4">
        <!-- Card Jumlah Siswa -->
        <div class="col-md-4">
          <div class="card text-white bg-success h-100">
            <div class="card-body d-flex align-items-center justify-content-between">
              <div>
                <div class="card-icon mb-2"><i class="bi bi-person-lines-fill"></i></div>
                <h5 class="card-title">Jumlah Siswa</h5>
                <h3>1,470</h3>
              </div>
            </div>
          </div>
        </div>
        <!-- Card Jumlah Petugas -->
        <div class="col-md-4">
          <div class="card text-white bg-primary h-100">
            <div class="card-body d-flex align-items-center justify-content-between">
              <div>
                <div class="card-icon mb-2"><i class="bi bi-person-gear"></i></div>
                <h5 class="card-title">Jumlah Petugas</h5>
                <h3>30</h3>
              </div>
            </div>
          </div>
        </div>
        <!-- Card Total Pembayaran -->
        <div class="col-md-4">
          <div class="card bg-warning h-100">
            <div class="card-body text-dark d-flex align-items-center justify-content-between">
              <div>
                <div class="card-icon mb-2"><i class="bi bi-wallet2"></i></div>
                <h5 class="card-title">Total Pembayaran Bulan ini</h5>
                <h3>Rp 15.000.000</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 
<?php include "../app/views/templates/footer.php"; ?>