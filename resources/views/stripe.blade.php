<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Stripe integration tutorial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <h1 class="my-5 text-center">Stripe Store</h1>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="data:image/webp;base64,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" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product['name'] }}</h5>
                        <p class="card-text">{{ $product['description'] }}</p>
                        <a href="{{ route('stripe.checkout', ['price' => $product['price'] , 'product' => $product['name']]) }}" class="btn btn-primary">Pay {{ $product['price'] }} RS</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

</body>

</html>