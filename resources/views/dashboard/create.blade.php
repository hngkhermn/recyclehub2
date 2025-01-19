<x-header></x-header>
<div class="container">
    <h1>{{ isset($product) ? 'Edit Product' : 'Add Product' }}</h1>
    <form action="{{ isset($product) ? route('dashboard.update', $product) : route('dashboard.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if (isset($product))
            @method('PUT')
        @endif
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name ?? old('name') }}" required>
        </div>
        <div class="form-group">
            <label for="images">Images</label>
            <input type="file" name="images" class="form-control" value="{{ $product->images ?? old('images') }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required>{{ $product->description ?? old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" class="form-control" value="{{ $product->price ?? old('price') }}" required>
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" name="stock" class="form-control" value="{{ $product->stock ?? old('stock') }}" required>
        </div>
        <div class="form-group">
            <label for="name">Categories</label>
            <input type="text" name="categories" class="form-control" value="{{ $product->categories ?? old('categories') }}" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
</body>
</html>