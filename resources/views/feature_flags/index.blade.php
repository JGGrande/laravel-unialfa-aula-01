@extends('app')
@section('title', 'Funcionalidades')
@section('content')

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <td>Nome</td>
            <td>Ativado</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($feature_flags as $feature_flag)
            <tr>
                <th>{{ $feature_flag->id }}</th>
                <td><a href="{{ route('feature_flags.show', $feature_flag) }}">{{ $feature_flag->name }}</a></td>
                <td>
                    @if($feature_flag->active)
                        Ativado
                    @else
                        Desativado
                    @endif
                </td>
                <td>
                    <a class="btn btn-warning" href="{{ route('feature_flags.edit', $feature_flag->id) }}">Editar</a>
                    <a class="btn btn-outline-danger" href="{{ route('feature_flags.destroy', $feature_flag->id) }}">Deletar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a class="btn btn-success" href="{{ route('feature_flags.create') }}">Criar</a>
@endsection
