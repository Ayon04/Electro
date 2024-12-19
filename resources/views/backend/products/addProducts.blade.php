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
<form>
    <div class="mb-3">
     
      <input placeholder="Title" type="text" class="form-control" id="title">
    </div>
    
    <div class="mb-3">
       
        <input placeholder="SKU" type="text" class="form-control" id="title">
      </div>
      <div class="mb-3">
       
        <input placeholder="Slug" type="text" class="form-control" id="title">
      </div>

      <div class="mb-6">        
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option selected>select a type</option>
            <option value="1">Laptop</option>
            <option value="2">Desktop</option>
            
          </select>
      </div>

      <div class="mb-3">
        <input placeholder="Description" type="text-area" class="form-control" id="title">
      </div>

      <div class="mb-3" aria-placeholder="Image">
        <input placeholder="Image" type="file" class="form-control" id="image">
      </div>



      <div class="mb-3">
        <input placeholder="Brand" type="text" class="form-control" id="brand">
      </div>



      
      <div class="mb-3">
        <input placeholder="Price($)" type="text" class="form-control" id="price">
      </div>


      
      <div class="mb-3">
        <input placeholder="Unit in Stock" type="text" class="form-control" id="stock_count">
      </div>


      <div class="mb-3">
        <label for="stock_status" class="form-label">Status</label>
        <input type="" class="form-control" id="stock_status">
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection