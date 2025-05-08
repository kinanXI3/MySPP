<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <style>
    body {
      background-color: #f8f9fa;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .login-card {
      display: flex;
      max-width: 800px;
      width: 100%;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .card-left {
      background-color: #1abc9c;
      color: white;
      padding: 40px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      flex: 1;
    }

    .card-right {
      background-color: #fff;
      padding: 55px;
      flex: 1;
    }

    .form-control:focus {
      border-color: #1abc9c;
      box-shadow: none;
    }

    .btn-login {
      background-color: #1abc9c;
      border: none;
      color: white;
    }

    .btn-login:hover {
      background-color: #16a085;
    }
  </style>
</head>
<body> 

 <div class="login-card">
  <!-- Kiri -->
  <div class="card-left">
    <h2 class="text-center fw-bold">Selamat datang di<br>MySPP!</h2>
    <img src="public/img/blue.png" alt="" class="img-fluid mt-4" style="max-height: 255px;">
  </div> 

   <!-- Kanan -->
  <div class="card-right">
    <h4 class="fw-bold mb-4" align="center">Login</h4>
    <?php if (isset($_SESSION['error'])): ?>
      <div class="alert alert-danger" role="alert">
        <?= $_SESSION['error']; ?>
      </div>
    <?php endif; ?>
    <form action="<?= urlTo('login/login'); ?>" method="POST">
      <div class="mb-3">
        <label for="username" class="form-label">Username / NISN</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username / NISN" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
      </div>
      <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" name="remember" id="remember">
        <label class="form-check-label" for="remember">Remember me</label>
      </div>
      <button type="submit" class="btn btn-login w-100 fw-bold">Login</button>
    </form>
  </div>
</div> 

 <!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html> 