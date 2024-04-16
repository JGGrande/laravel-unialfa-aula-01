@extends('app')
@section('title', 'Funcionalidades')
@section('content')
<form action="{{ route('feature_flags.update', $feature_flag->id) }}" method="post" class="d-flex flex-column justify-content-center border border-primary rounded p-4 w-100">
    @csrf
    @method('PUT')
    <div class="form-group p-2">
        <label for="name_field">Name</label>
        <input type="text" class="form-control" value="{{ $feature_flag->name }}"  name="name" required id="name_field" >
        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
    </div>
    <div class="form-group p-2">
        <label for="address_field">Ativo</label>
        <select required name="active" value="{{ $feature_flag->active }}" >
            <option value="false">Desativado</option>
            <option value="true">Ativado</option>
        </select>
    </div>
    <div class="form-group p-2">
        <label for="observation_field">Descrição</label>
        <textarea  class="form-control" name="description" id="observation_field">{{ $feature_flag->description }}</textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Editar</button>
</form>
@endsection
