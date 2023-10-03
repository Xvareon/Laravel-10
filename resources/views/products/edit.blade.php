<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" contents="ie=edge">
    <title>Product Create Page</title>
</head>

<body>

    <a href="{{route('product.edit', ['product' => $product])}}"><h1>Edit a Product</h1></a>
    
    <!-- For going back to the index page -->
    <div>
        <a href="{{route('product.index')}}">
            Go back to index page
        </a>
    </div>

    <!-- For errors in user input -->
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <form method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf
        @method('put')
        <div>
            <label>ID</label>
            <input type="text" name="id" placeholder="Id" value="{{$product->id}}" readonly/>
        </div>
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$product->name}}" required/>
        </div>
        <div>
            <label>Variant</label>
            <input type="number" name="variant" placeholder="Variant" value="{{$product->variant}}" required/>
        </div>
        <div>
            <label>Qty</label>
            <input type="number" name="qty" placeholder="Qty" value="{{$product->qty}}" required/>
        </div>
        <div>
            <label>Price</label>
            <input type="number" name="price" step="0.01" placeholder="Price" value="{{$product->price}}" required/>
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" value="{{$product->description}}" required/>
        </div>
        <div>
            <input type="submit" value="Update the product">
        </div>
    </form>
</body>

</html>