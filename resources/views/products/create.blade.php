<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" contents="ie=edge">
    <title>Product Create Page</title>
</head>

<body>
    <a href="{{route('product.create')}}"><h1>Create a Product</h1><a/>

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

    <form method="post" action="{{route('product.upload')}}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" required/>
        </div>
        <div>
            <label>Variant</label>
            <input type="number" name="variant" placeholder="Variant" required/>
        </div>
        <div>
            <label>Qty</label>
            <input type="number" name="qty" placeholder="Qty" required/>
        </div>
        <div>
            <label>Price</label>
            <input type="number" name="price" step="0.01" placeholder="Price" required/>
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" required/>
        </div>
        <div>
            <input type="submit" value="Create the product">
        </div>
    </form>
</body>

</html>