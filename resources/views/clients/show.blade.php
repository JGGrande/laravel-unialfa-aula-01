@extends('app')
@section('title', 'Client')
@section('content')
<div class="card">
    <div class="card-header">
        Detalhes do cliente {{ $client->name }}
    </div>
    <div class="card-body">
        <p><strong>ID: </strong> {{ $client->id }}</p>
        <p><strong>Name: </strong> {{ $client->name }}</p>
        <p><strong>Address: </strong> {{ $client->address }}</p>
        <p><strong>Observation: </strong >{{ $client->observation }}</p>
        <br>
        <a href="{{ route('clients.index') }}" class="btn btn-success">Voltar</a>
    </div>
</div>
@endsection
