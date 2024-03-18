@extends('app')
@section('title', 'Product')
@section('content')
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
@endsection
