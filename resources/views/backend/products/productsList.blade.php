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

<div class="bg-light text-right ">
    <button class="btn btn-success"> +  Add Product</button>
</div>

<div class="">
    
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">SKU</th>
        <th scope="col">Slug</th>
        <th scope="col">Type</th>
        <th scope="col">Description</th>
        <th scope="col">image</th>
        <th scope="col">Brand</th>   
        <th scope="col">Price </th>
        <th scope="col">stock_count</th>
        <th scope="col">stock_status</th>

        <th scope="col">Operation</th>

      </tr>
    </thead>
    <tbody>
    
    </tbody>
  </table>


</div>
   
@endsection