@extends('app')
@section('title', 'Client')
@section('content')
<form action="{{ route('clients.update', $client->id) }}" method="POST" class="d-flex flex-column justify-content-center border border-primary rounded p-4 w-100">
    @csrf
    @method('PUT')
    <div class="form-group p-2">
        <label for="name_field">Name</label>
        <input type="text" value="{{ $client->name }}" class="form-control" name="name" required id="name_field" >
    </div>
    <div class="form-group p-2">
        <label for="address_field">Address</label>
        <input type="text" value="{{ $client->address }}" class="form-control" name="address" required id="address_field">
    </div>

    <div class="form-group p-2">
        <label for="observation_field">Observation</label>
        <textarea class="form-control" name="observation" id="observation_field">{{ $client->observation }}</textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
