<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('font/bootstrap-icons.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title>Home</title>
</head>

<body>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="images/logo.png" alt="Recycle Hub" style="height: 60px;"> <!-- Ganti dengan logo Anda -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">PRODUCTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">NEWS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">CONTACT US</a>
        </li>
      </ul>
      <div class="d-flex align-items-center">
        <a href="#" class="btn btn-success me-2">
          <i class="bi bi-basket"></i>
        </a>
        <a href="#" class="text-success">
          <i class="bi bi-search"></i>
        </a>
      </div>
    </div>
  </div>
</nav>
<section class="hero-section">
  <div class="hero-overlay">
    <div class="container text-center text-white">
      <h1>RECYCLE HUB: WHERE WASTE TRANSFORMS INTO VALUE</h1>
      <a href="#" class="btn btn-success mt-3">CONSULT NOW</a>
    </div>
  </div>
</section>
  <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>