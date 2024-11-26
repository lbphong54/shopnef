<h1>Products</h1>
<a href="{{ route('products.create') }}">Add Product</a>
<table>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Actions</th>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->stock }}</td>
        <td>
            <a href="#">Edit</a>
            <a href="#">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
