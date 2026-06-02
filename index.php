<?php include 'config/database.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VET Profissional</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <?php include 'includes/navbar.php'; ?>

  <div class="container mt-5">
    <div class="text-center mb-5">
      <h1 class="display-4 fw-bold text-success">🐾 VET Profissional</h1>
      <p class="lead">Sistema Completo de Gestão Veterinária</p>
    </div>

    <div class="row g-4 text-center">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <i class="fas fa-users fa-3x text-success mb-3"></i>
            <h5>Clientes</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <i class="fas fa-calendar-alt fa-3x text-success mb-3"></i>
            <h5>Agendamentos</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <i class="fas fa-cash-register fa-3x text-success mb-3"></i>
            <h5>Vendas</h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>
