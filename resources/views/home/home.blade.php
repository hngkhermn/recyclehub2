<x-layout>

  <section class="hero-section">
    <div class="hero-overlay">
      <div class="container text-center text-white">
        <h1>RECYCLE HUB WHERE WASTE TRANSFORMS INTO VALUE</h1>
        <p>RecycleHub adalah marketplace yang mengubah limbah menjadi barang berguna seperti hiasan, alat rumah tangga, dan dekorasi unik. Kami mendukung daur ulang untuk masa depan yang lebih berkelanjutan.</p>
      </div>
    </div>
  </section>

  <section class="product-section">
    <h2 class="section-title">PRODUCTS</h2>
    <div class="product-container">
      @foreach($products as $product)
      <div class="product-card">
        <img src="{{ asset('images/1plastik/plastik (10).jpg') }}" alt="Waste Recycling Machine">
        <div class="product-name">{{ $product->name }}</div>
      </div>
      @endforeach
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
  </section>

  <section class="features-section">
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

</x-layout>