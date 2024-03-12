<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Products</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Home</a>
        </div>
    </nav>

    <div class="container">
        <div class="d-flex" style="gap: 20px">
            <div class="container-img" style="width: 600px">
                <img style="width: 100%; aspect-ratio: 4/3;"  src="{{ $product->img_url }}" alt="">
            </div>
            <div class="mx-auto" >
                <h2>{{ $product->name }}</h2>
                <h3><strong>R$ {{ $product->price }}</strong></h3>
                <p>{{ $product->description }}</p>
                <p style="font-weight: bold" >{{ $product->status }}</p>
                <p>Stock: {{ $product->stock }} / u</p>
                <a class="btn btn-success" href="{{ route('products.index') }}">Voltar</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
