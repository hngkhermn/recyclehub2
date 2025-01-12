<x-layout>

<section class="checkout-section mt-5">
  <div class="container">
    <h1 class="text-center mb-4">Checkout</h1>
    <form>
      <div class="row">
        <!-- Informasi Pelanggan -->
        <div class="col-md-6">
          <h4>Informasi Pelanggan</h4>
          <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" placeholder="Nama Anda" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email Anda" required>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Nomor Telepon</label>
            <input type="tel" class="form-control" id="phone" placeholder="Nomor Telepon Anda" required>
          </div>
        </div>

        <!-- Informasi Pengiriman -->
        <div class="col-md-6">
          <h4>Informasi Pengiriman</h4>
          <div class="mb-3">
            <label for="address" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="address" placeholder="Alamat Lengkap" required>
          </div>
          <div class="mb-3">
            <label for="city" class="form-label">Kota</label>
            <input type="text" class="form-control" id="city" placeholder="Kota" required>
          </div>
          <div class="mb-3">
            <label for="postal" class="form-label">Kode Pos</label>
            <input type="text" class="form-control" id="postal" placeholder="Kode Pos" required>
          </div>
        </div>
      </div>

      <div class="row mt-4">
        <!-- Metode Pembayaran -->
        <div class="col-md-6">
          <h4>Metode Pembayaran</h4>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="paymentMethod" id="transfer" value="transfer" checked>
            <label class="form-check-label" for="transfer">Transfer Bank</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="paymentMethod" id="cod" value="cod">
            <label class="form-check-label" for="cod">Cash on Delivery (COD)</label>
          </div>
        </div>

        <!-- Ringkasan Pesanan -->
        <div class="col-md-6">
          <h4>Ringkasan Pesanan</h4>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Bahan Baku Plastik
              <span>Rp 25.000</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Biaya Pengiriman
              <span>Rp 10.000</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <strong>Total</strong>
              <strong>Rp 35.000</strong>
            </li>
          </ul>
        </div>
      </div>

      <div class="text-center mt-4">
        <button type="submit" class="btn btn-success">Konfirmasi Pesanan</button>
      </div>
    </form>
  </div>
</section>

</x-layout>