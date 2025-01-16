@extends("backend.layouts.admin")

@section("page_header")
    Admin Dashboard
@endsection
@section("page_li")
<li class="breadcrumb-item active">
    <a href="#">
        Products Management
    </a>
</li>
@endsection

@section("content")

<a href="/productsList" class="link-info">View Products List</a>



<form action="{{ url('update-product/' . $products->id) }}" method="POST" enctype="multipart/form-data">

   @csrf
  <!-- Title Input -->
  <div class="mb-3">
      <input placeholder="Title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $products->title }}">
      @error('title')
          <div class="invalid-feedback">{{ $message }}</div>
      @enderror
  </div>

  <!-- SKU Input -->
  <div class="mb-3">
      <input placeholder="SKU" type="text" class="form-control @error('sku') is-invalid @enderror" id="sku" name="sku" value="{{ $products->sku }}">
      @error('sku')
          <div class="invalid-feedback">{{ $message }}</div>
      @enderror
  </div>


  <!-- Product Type Dropdown -->
  <div class="mb-3">
      <select class="form-select @error('type') is-invalid @enderror" id="product_type" name="type" >
          <option value="{{ $products->type}}" selected>{{$products->type}}</option>
          <option value="Laptop" {{ old('type') == 'Laptop' ? 'selected' : '' }}>Laptop</option>
          <option value="Smartphone" {{ old('type') == 'Smartphone' ? 'selected' : '' }}>Smartphone</option>
      </select>
      @error('type')
          <div class="invalid-feedback">{{ $message }}</div>
      @enderror
  </div>

  <!-- Description Input -->
  <div class="mb-3">
      <textarea placeholder="Description" class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4">{{ $products->description }}</textarea>
      @error('description')
          <div class="invalid-feedback">{{ $message }}</div>
      @enderror
  </div>

  <!-- Image Input -->
  <div class="mb-3">
    <img src="{{ asset('storage/' . $products->image) }}" height="70" width="70" />

      <input placeholder="Image" type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image"  >
      @error('image')
          <div class="invalid-feedback">{{ $message }}</div>
      @enderror
  </div>

  <div class="mb-3">
    <select class="form-select @error('brand') is-invalid @enderror" id="product_type" name="brand"  >
        <option value="{{ $products->brand }}" selected>{{$products->brand}}</option>
        <option value="Xiaomi" {{ old('brand') == 'Xiaomi' ? 'selected' : '' }}>Xiaomi</option>
        <option value="Samsung" {{ old('brand') == 'Samsung' ? 'selected' : '' }}>Samsung</option>
        <option value="Asus" {{ old('brand') == 'Asus' ? 'selected' : '' }}>Asus</option>
        <option value="HP" {{ old('brand') == 'HP' ? 'selected' : '' }}>HP</option>
    </select>
    @error('type')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

  <!-- Price Input -->
  <div class="mb-3">
      <input placeholder="Price (৳)" type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ $products->price }}">
      @error('price')
          <div class="invalid-feedback">{{ $message }}</div>
      @enderror
  </div>

  <!-- Stock Count Input -->
  <div class="mb-3">
      <input placeholder="Units in Stock" type="text" class="form-control @error('stock_count') is-invalid @enderror" id="stock_count" name="stock_count" value="{{ $products->stock_count  }}">
      @error('stock_count')
          <div class="invalid-feedback">{{ $message }}</div>
      @enderror
  </div>

  <!-- Stock Status Dropdown -->
  <div class="mb-3">
      <select name="stock_status" class="form-select @error('stock_status') is-invalid @enderror" aria-label=".form-select-lg example" id="stock_status" >
          <option value="{{ $products->stock_status }}" selected>{{ $products->stock_status }}</option>
          <option value="in_stock" {{ old('stock_status') == 'in_stock' ? 'selected' : '' }}>In Stock</option>
          <option value="out_of_stock" {{ old('stock_status') == 'out_of_stock' ? 'selected' : '' }}>Out of Stock</option>
          <option value="pre_order" {{ old('stock_status') == 'pre_order' ? 'selected' : '' }}>Pre Order</option>
      </select>
      @error('stock_status')
          <div class="invalid-feedback">{{ $message }}</div>
      @enderror
  </div>

  <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">Update Product List</button>

</form>



@endsection