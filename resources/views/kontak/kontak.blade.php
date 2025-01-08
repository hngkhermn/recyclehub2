<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('font/bootstrap-icons.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>Tentang - Recycle Hub</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
      <img src="{{ asset('images/logo.png') }}" alt="Recycle Hub" style="height: 60px;">
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

<!-- Contact Section -->
<link rel="stylesheet" href="/css/contact.css">
<div class="contact-box">
  <h1 class="contact-title">Recycle Hub</h1>
  <h2 class="contact-description">Platform Recycle Hub adalah solusi inovatif untuk pengelolaan limbah dengan mengubahnya menjadi produk bernilai tinggi. Hubungi kami untuk informasi lebih lanjut atau konsultasi mengenai layanan kami.</h2>
  <div class="contact-info">
    <div class="contact-item">
      <i class="bi bi-geo-alt"></i>
      <span>2248 US-9, Howell Township, NJ 07731, United States</span>
    </div>
    <div class="contact-item">
      <i class="bi bi-telephone"></i>
      <span>0968737293</span>
    </div>
    <div class="contact-item">
      <i class="bi bi-envelope"></i>
      <span>info@recyclehub.com</span>
    </div>
    <div class="contact-item">
      <i class="bi bi-whatsapp"></i>
      <span>+628112045777</span>
    </div>
  </div>
</div>

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
</body>
</html>
