@extends('app')
@section('title', 'Funcionalidade')
@section('content')
<div class="card">
    <div class="card-header">
        Detalhes da funcionalidade {{ $feature_flag->name }}
    </div>
    <div class="card-body">
        <p><strong>ID: </strong> {{ $feature_flag->id }}</p>
        <p><strong>nome: </strong> {{ $feature_flag->name }}</p>
        <p>
            <strong>Ativo: </strong>
            @if($feature_flag->active == 1)
                Ativado
            @else
                Desativado
            @endif
        </p>
        <p><strong>Description: </strong >{{ $feature_flag->description }}</p>
        <br>
        <a href="{{ route('feature_flags.index') }}" class="btn btn-success">Voltar</a>
    </div>
</div>
@endsection
