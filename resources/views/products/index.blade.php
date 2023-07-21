<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Add your custom styles here */
        body {
            padding: 20px;
        }
        .table-responsive {
            margin-top: 20px;
        }
        .success {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #dff0d8;
            border: 1px solid #d6e9c6;
            color: #3c763d;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Product</h1>
    <div class="d-flex justify-content-between">
        <div>
            <a href="{{route('product.create')}}" class="btn btn-primary">Create a Product</a>
        </div>
        <div>
            <form action="{{ route('product.logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
        
    </div>


        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @php $serialNumber = 1; @endphp
                    @foreach($products as $product)
                        <tr>
                            <td style="font-weight: bold;">{{ $serialNumber }}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->qty}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->description}}</td>
                            <td>
                                <a href="{{route('product.edit', ['product' => $product])}}" class="btn btn-sm btn-primary">Edit</a>
                            </td>
                            <td>
                                <form method="post" action="{{route('product.destroy', ['product' => $product])}}" onsubmit="return confirm('Are you sure you want to delete this product?')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @php $serialNumber++; @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>