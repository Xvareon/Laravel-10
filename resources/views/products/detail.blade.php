<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" contents="ie=edge">
    <title>Product Detail Page</title>
</head>

<body>

    <a href="{{route('product.detail', ['product' => $product])}}"><h1>Product Details</h1></a>
    
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

    <div>
        <label>ID:</label>
        <span>{{$product->id}}</span>
    </div>
    <div>
        <label>Name:</label>
        <span>{{$product->name}}</span>
    </div>
    <div>
        <label>Variant:</label>
        <span>{{$product->variant}}</span>
    </div>
    <div>
        <label>Qty:</label>
        <span>{{$product->qty}}</span>
    </div>
    <div>
        <label>Price:</label>
        <span>{{$product->price}}</span>
    </div>
    <div>
        <label>Description:</label>
        <span>{{$product->description}}</span>
    </div>

    <div>
    <form method="post" action="{{route('product.remove', ['product' => $product])}}">
        @csrf
        @method('delete')
        <input type="submit" , value="Delete" />
    </form>
    </div>
    
</body>

</html>