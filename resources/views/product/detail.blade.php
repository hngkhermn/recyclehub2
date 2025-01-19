<x-layout>

<section class="product-detail mt-5">
  <div class="container">
    <div class="row">
      <!-- Gambar Produk -->
      <div class="col-md-6">
        <div class="product-image">
          <img src="{{ asset('images/1plastik/plastik (1).jpg') }}" class="img-fluid" alt="{{ $product->name }}">
        </div>
      </div>
      <!-- Informasi Produk -->
      <div class="col-md-6">
        <div class="product-info">
          <h1 class="product-title">{{ $product->name }}</h1>
          <p class="sku text-muted">SKU: {{ 'PROD-' . $product->id_products }}</p>
          <div class="price-section">
            <span class="original-price text-muted">Rp {{ number_format($product->price * 1.2, 0, ',', '.') }}</span>
            <span class="sale-price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
          </div>
          <p class="product-description">
            {{ $product->description }}
          </p>
          <div class="quantity-section d-flex align-items-center mt-4">
            <input type="number" class="form-control quantity-input me-3" value="1" min="1">
            <button class="btn btn-success add-to-cart-btn">
              <i class="bi bi-cart"></i> Tambah ke Keranjang
            </button>
          </div>
          <div class="social-share mt-4">
            <p>Bagikan:</p>
            <a href="#" class="btn btn-outline-secondary me-2"><i class="bi bi-facebook"></i></a>
            <a href="#" class="btn btn-outline-secondary me-2"><i class="bi bi-twitter"></i></a>
            <a href="#" class="btn btn-outline-secondary"><i class="bi bi-whatsapp"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</x-layout>
