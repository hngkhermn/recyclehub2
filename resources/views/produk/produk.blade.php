<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('font/bootstrap-icons.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>Produk - Recycle Hub</title>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="images/logo.png" alt="Recycle Hub" style="height: 60px;"> 
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('tentang') }}">TENTANG</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('produk') }}">PRODUK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">NEWS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('kontak') }}">CONTACT US</a>
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

<!-- Filter Section -->
<!-- Filter Header Section -->
<div class="filter-header d-flex justify-content-between align-items-center mb-4">
  <div class="view-options d-flex align-items-center">
    <button class="btn btn-light view-btn active" data-view="grid">
      <i class="bi bi-grid"></i>
    </button>
    <button class="btn btn-light view-btn ms-2" data-view="list">
      <i class="bi bi-list"></i>
    </button>
    <span class="ms-3 text-muted">60 Produk</span>
  </div>
  <div class="sort-filter">
    <button class="btn btn-outline-success">
      <i class="bi bi-funnel"></i> Urutan & Filter
    </button>
  </div>
</div>

<section class="filter-section text-center mt-4">
  <div class="container">
    <button class="btn btn-outline-success active" data-category="all">All</button>
    <button class="btn btn-outline-success" data-category="plastik">Plastik</button>
    <button class="btn btn-outline-success" data-category="kain">Kain</button>
    <button class="btn btn-outline-success" data-category="kayu">Kayu</button>
    <button class="btn btn-outline-success" data-category="kaca">Kaca</button>
    <button class="btn btn-outline-success" data-category="kertas">Kertas</button>
    <button class="btn btn-outline-success" data-category="besi">Besi</button>
  </div>
</section>

<section class="product-section mt-4">
  <div class="container">
    <div class="row product-container">
      <!-- Produk Plastik -->
      <div class="col-md-4 product-card" data-category="plastik">
        <div class="card">
          <img src="{{ asset('images/1plastik/plastik (10).jpg') }}" class="card-img-top" alt="Plastik">
          <div class="card-body text-center">
            <h5 class="card-title">Bahan Baku Plastik</h5>
            <p class="card-text">Rp 25.000</p>
          </div>
        </div>
      </div>
      <!-- Produk Kain -->
      <div class="col-md-4 product-card" data-category="kain">
        <div class="card">
          <img src="{{ asset('images/2kain/kain (2).jpg') }}" class="card-img-top" alt="Kain">
          <div class="card-body text-center">
            <h5 class="card-title">Bahan Baku Kain</h5>
            <p class="card-text">Rp 35.000</p>
          </div>
        </div>
      </div>
      <!-- Produk Kayu -->
      <div class="col-md-4 product-card" data-category="kayu">
        <div class="card">
          <img src="{{ asset('images/3kayu/kayu (12).jpg') }}" class="card-img-top" alt="Kayu">
          <div class="card-body text-center">
            <h5 class="card-title">Bahan Baku Kayu</h5>
            <p class="card-text">Rp 50.000</p>
          </div>
        </div>
      </div>
      <!-- Produk Kaca -->
      <div class="col-md-4 product-card" data-category="kaca">
        <div class="card">
          <img src="{{ asset('images/4kaca/kaca (1).jpg') }}" class="card-img-top" alt="Kaca">
          <div class="card-body text-center">
            <h5 class="card-title">Bahan Baku Kaca</h5>
            <p class="card-text">Rp 35.000</p>
          </div>
        </div>
      </div>
      <!-- Produk Kertas -->
      <div class="col-md-4 product-card" data-category="kertas">
        <div class="card">
          <img src="{{ asset('images/5kertas/kertas (3).jpg') }}" class="card-img-top" alt="Kertas">
          <div class="card-body text-center">
            <h5 class="card-title">Bahan Baku Kertas</h5>
            <p class="card-text">Rp 25.000</p>
          </div>
        </div>
      </div>
      <!-- Produk Besi -->
      <div class="col-md-4 product-card" data-category="besi">
        <div class="card">
          <img src="{{ asset('images/6besi/besi (7).jpg') }}" class="card-img-top" alt="Besi">
          <div class="card-body text-center">
            <h5 class="card-title">Bahan Baku Besi</h5>
            <p class="card-text">Rp 25.000</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4 footer-section">
        <h3>Contact Information</h3>
        <p>Address: 2248 US-9, Howell Township, NJ 07731, United States</p>
        <p>Phone: 0968737293</p>
      </div>
      <div class="col-md-4 footer-section">
        <h3>Tentang Kami</h3>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="#">Tentang</a></li>
          <li><a href="#">Produk</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">News</a></li>
        </ul>
      </div>
      <div class="col-md-4 footer-section">
        <h3>Products and Services</h3>
        <ul>
          <li><a href="#">Waste treatment machines</a></li>
          <li><a href="#">Coconut charcoal</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom text-center mt-4">
      <p>&copy; 2025 Recycle Hub. All rights reserved.</p>
    </div>
  </div>
</footer>

<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>