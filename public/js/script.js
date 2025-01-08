document.addEventListener('DOMContentLoaded', function () {
    const filterButtons = document.querySelectorAll('.filter-section .btn');
    const productCards = document.querySelectorAll('.product-card');
    const viewButtons = document.querySelectorAll('.view-btn');
    const productContainer = document.querySelector('.product-container');
  
    // Filter produk berdasarkan kategori
    filterButtons.forEach(button => {
      button.addEventListener('click', function () {
        const category = this.getAttribute('data-category');
  
        // Remove 'active' class from all buttons
        filterButtons.forEach(btn => btn.classList.remove('active'));
        this.classList.add('active');
  
        // Filter produk
        productCards.forEach(card => {
          if (category === 'all' || card.getAttribute('data-category') === category) {
            card.style.display = 'block';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });
  
    // Ubah tampilan antara grid dan list view
    viewButtons.forEach(button => {
      button.addEventListener('click', function () {
        const view = this.getAttribute('data-view');
  
        // Remove 'active' class from all view buttons
        viewButtons.forEach(btn => btn.classList.remove('active'));
        this.classList.add('active');
  
        // Change product container layout
        if (view === 'grid') {
          productContainer.classList.remove('list-view');
          productContainer.classList.add('grid-view');
        } else {
          productContainer.classList.remove('grid-view');
          productContainer.classList.add('list-view');
        }
      });
    });
  });
  