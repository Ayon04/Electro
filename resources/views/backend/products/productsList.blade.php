@extends("backend.layouts.admin")

@section("page_header")
    Admin Dashboard
@endsection

@section("page_li")
    <li class="breadcrumb-item active">
        <a href="#">Products Management</a>
    </li>
@endsection

@section("content")
    <!-- Table for displaying products -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">SKU</th>
                <th scope="col">Slug</th>
                <th scope="col">Type</th>
                <th scope="col">Description</th>
                <th scope="col">Brand</th>
                <th scope="col">Price</th>
                <th scope="col">Stock Count</th>
                <th scope="col">Stock Status</th>
                <th scope="col">Image</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $products)
                <tr>
                    <th scope="row">{{ $products->id }}</th>
                    <td>{{ $products->title }}</td>
                    <td>{{ $products->sku }}</td>
                    <td>{{ $products->slug }}</td>
                    <td>{{ $products->type }}</td>
                    <td>{{ $products->description }}</td>
                    <td>{{ $products->brand }}</td>
                    <td>{{ $products->price }}</td>
                    <td>{{ $products->stock_count }}</td>
                    <td>{{ $products->stock_status }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $products->image) }}" height="70" width="70" />
                    </td>
                    <td>
                        <a href="{{ url('edit-product/' . $products->id) }}" class="btn btn-warning">Edit</a>
                    
                    </td>
                    <td>
                        <form action="{{ route('delete', $products->id) }}" method="POST" style="display:inline;" id="delete-form-{{ $products->id }}">
                            @csrf
                            <button type="button" onclick="confirmDelete({{ $products->id }}, event)" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                                        
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
      function confirmDelete(productId, event) {
    event.preventDefault();
    
    if (confirm("Are you sure you want to delete this item?")) {
        document.getElementById('delete-form-' + productId).submit();
    } else {
        return false;
    }
}

    </script>
@endsection
