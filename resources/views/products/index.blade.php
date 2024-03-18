@extends('app')
@section('title', 'Products')
@section('content')
<div class="d-flex  justify-content-center">
    @foreach($products as $product)
        <div class="card col-md-1" style="width: 18rem; margin: 10px;">
            <img class="card-img-top" style="aspect-ratio: 4/3;" src="{{ $product->img_url }}" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">{{ $product->description }}</p>
            <a href="{{ route('products.show', $product) }}" class="btn btn-primary">Detalhes</a>
            </div>
        </div>
    @endforeach

</div>
@endsection
