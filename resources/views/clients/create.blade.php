@extends('app')
@section('title', 'Client')
@section('content')

<form action="{{ route('clients.store') }}" method="post" class="d-flex flex-column justify-content-center border border-primary rounded p-4 w-100">
    @csrf
    <div class="form-group p-2">
        <label for="name_field">Name</label>
        <input type="text" class="form-control" name="name" required id="name_field" >
        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
    </div>
    <div class="form-group p-2">
        <label for="address_field">Address</label>
        <input type="text" class="form-control" name="address" required id="address_field">
    </div>

    <div class="form-group p-2">
        <label for="observation_field">Observation</label>
        <textarea  class="form-control" name="obeservation" id="observation_field"></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
