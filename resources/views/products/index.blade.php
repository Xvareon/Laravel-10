<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" contents="ie=edge">
    <title>Product Index Page</title>
</head>

<body>
    <a href="{{route('product.index')}}">
        <h1>Product</h1>
    </a>

    <!-- Display message for success sessions -->
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif
    </div>

    <div>

        <!-- For going to the create product page -->
        <div>
            <a href="{{route('product.create')}}">
                Create a product
            </a>
        </div>

        <!-- For searching a product using name -->
        <div>
            <form method="GET" action="{{route('product.search')}}">
                <label for="search">Search by Product Name:</label>
                <input type="text" id="search" name="search" placeholder="Enter product name">
                <button type="submit">Search</button>
            </form>
        </div>

        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Variant</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->variant}}</td>
                <td>{{$product->qty}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td>
                    <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('product.remove', ['product' => $product])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" , value="Delete" />
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>