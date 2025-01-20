<x-layout>

  <section class="product-detail mt-5">
    <div class="container">
      <div class="row">
        <!-- Gambar Produk -->
        <div class="col-md-6">
          <div class="product-image">
            <img src="/storage/images/{{$product->images }}" class="img-fluid" alt="{{ $product->name }}">
          </div>
        </div>
        <!-- Informasi Produk -->
        <div class="col-md-6">
          <div class="product-info">
            <h1 class="product-title">{{ $product->name }}</h1>
            <p class="sku text-muted">Category: {{  $product->categories }}</p>
            <div class="price-section">
              <span class="sale-price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
            </div>
            <p class="product-description">
              {{ $product->description }}
            </p>
            <p class="product-stock">
              Stock: {{ $product->stock }}
            </p>
            
            <form action="{{ route('checkout') }}" method="POST">
              @csrf
              <div class="quantity-section d-flex align-items-center mt-4">
                <input type="hidden" name="name" value="{{$product->name}}">
                <input type="hidden" name="price" value="{{$product->price}}">
                <input type="hidden" name="description" value="{{$product->description}}">
                <input type="number" name="quantity" class="form-control quantity-input me-3" value="1" min="1" max="{{ $product->stock }}">
                <button class="btn btn-success add-to-cart-btn">
                  <i class="bi bi-arrow-right-circle-fill"></i> Checkout
                </button>
              </div>
            </form>
            <!-- <div class="social-share mt-4">
              <p>Bagikan:</p>
              <a href="#" class="btn btn-outline-secondary me-2"><i class="bi bi-facebook"></i></a>
              <a href="#" class="btn btn-outline-secondary me-2"><i class="bi bi-twitter"></i></a>
              <a href="#" class="btn btn-outline-secondary"><i class="bi bi-whatsapp"></i></a>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>

</x-layout>
