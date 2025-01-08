<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('font/bootstrap-icons.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title>RECYCLEHUB</title>
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

<section class="hero-section">
  <div class="hero-overlay">
    <div class="container text-center text-white">
      <h1>RECYCLE HUB WHERE WASTE TRANSFORMS INTO VALUE</h1>
      <p>RecycleHub adalah marketplace yang mengubah limbah menjadi barang berguna seperti hiasan, alat rumah tangga, dan dekorasi unik. Kami mendukung daur ulang untuk masa depan yang lebih berkelanjutan.</p>
    </div>
  </div>
</section>
  <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

<section class="best-seller-section">
  <h2 class="section-title">PRODUCTS</h2>
  <div class="product-container">
    <div class="product-card">
      <img src="{{ asset('images/1plastik/plastik (10).jpg') }}" alt="Waste Recycling Machine">
      <div class="product-name">Bahan Baku Plastik</div>
    </div>
    <div class="product-card">
      <img src="{{ asset('images/2kain/kain (2).jpg') }}" alt="Activated Carbon Deodorizer">
      <div class="product-name">Bahan Baku Kain</div>
    </div>
    <div class="product-card">
      <img src="{{ asset('images/3kayu/kayu (12).jpg') }}" alt="Waste Recycling Machine">
      <div class="product-name">Bahan Baku Kayu</div>
    </div>
    <div class="product-card">
      <img src="{{ asset('images/4kaca/kaca (1).jpg') }}" alt="Activated Carbon Deodorizer">
      <div class="product-name">Bahan Baku Kaca</div>
    </div>
  </div>
</section>

<section class="news-section">
  <h2 class="section-title text-center">NEWS</h2>
  <div class="container">
    <div class="row">
      <!-- News Card 1 -->
      <div class="col-md-4">
        <div class="card">
          <div class="date-badge">
            <span>05</span>
            <span>Dec</span>
          </div>
          <img src="images/3kayu/kayu (13).jpg" class="card-img-top" alt="Organic Waste Recycling Machine">
          <div class="card-body">
            <h5 class="card-title">How an Organic Waste Recycling Machine Works</h5>
            <p class="card-text">
              Organic waste management is becoming increasingly important as more individuals and businesses recognize the need...
            </p>
          </div>
        </div>
      </div>
      <!-- News Card 2 -->
      <div class="col-md-4">
        <div class="card">
          <div class="date-badge">
            <span>05</span>
            <span>Dec</span>
          </div>
          <img src="images/3kayu/kayu (13).jpg" class="card-img-top" alt="Why an Organic Waste Recycling Machine is Essential for Families">
          <div class="card-body">
            <h5 class="card-title">Why is an Organic Waste Recycling Machine Extremely Essential for Families?</h5>
            <p class="card-text">
              As environmental issues grow more pressing, families are seeking effective ways to reduce their carbon...
            </p>
          </div>
        </div>
      </div>
      <!-- News Card 3 -->
      <div class="col-md-4">
        <div class="card">
          <div class="date-badge">
            <span>22</span>
            <span>Nov</span>
          </div>
          <img src="images/3kayu/kayu (13).jpg" class="card-img-top" alt="Household Waste Management Machine">
          <div class="card-body">
            <h5 class="card-title">Household Waste Management Machine – A Green Solution for the Modern Home</h5>
            <p class="card-text">
              As household waste continues to increase, managing and processing waste has become a significant concern...
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Features Section -->
  <div class="container features mt-5">
    <div class="row text-center">
      <div class="col-md-3">
        <div class="feature-item">
          <i class="bi bi-truck fs-1 text-success"></i>
          <h5>Fast delivery</h5>
          <p>Quick and efficient</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-item">
          <i class="bi bi-arrow-repeat fs-1 text-success"></i>
          <h5>Easy return</h5>
          <p>Simple return process</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-item">
          <i class="bi bi-headset fs-1 text-success"></i>
          <h5>Continuous support</h5>
          <p>24/7 customer care</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-item">
          <i class="bi bi-credit-card fs-1 text-success"></i>
          <h5>Flexible payment</h5>
          <p>Various payment options</p>
        </div>
      </div>
    </div>
  </div>
</section>

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


</html>