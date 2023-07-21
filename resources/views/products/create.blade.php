<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Create a Product</h1>
        <form method="post" action="{{route('product.store')}}">
            @csrf 
            @method('post')
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" />
                </div>
                <div class="form-group col-sm-6">
                    <label for="qty">Qty</label>
                    <input type="text" class="form-control" id="qty" name="qty" placeholder="Qty" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Price" />
                </div>
                <div class="form-group col-sm-6">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Description" />
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save a New Product</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/usm/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
