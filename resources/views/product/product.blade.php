<x-layout>
  
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

<section class="products-section mt-4">
  <div class="container">
    <div class="row products-container">
    @foreach($products as $product)
      <div class="col-md-4 product-card" data-category="Plastik">
        <div class="card">
          <img src="{{ asset('images/1plastik/plastik (10).jpg') }}" class="card-img-top" alt="Plastik">
          <div class="card-body text-center">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">Rp {{ $product->price }}</p>
          </div>
        </div>
      </div>
    @endforeach
    </div>
  </div>
</section>

</x-layout>