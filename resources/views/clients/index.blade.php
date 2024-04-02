@extends('app')
@section('title', 'Clients')
@section('content')
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <td>Name</td>
            <td>Observation</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as $client)
            <tr>
                <th>{{ $client->id }}</th>
                <td><a href="{{ route('clients.show', $client) }}">{{ $client->name }}</a></td>
                <td>{{ $client->observation }}</td>
                <td>
                    <a class="btn btn-warning" href="{{ route('clients.edit', $client->id) }}">Edit</a>
                    <a class="btn btn-outline-danger" href="{{ route('clients.destroy', $client->id) }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a class="btn btn-success" href="{{ route('clients.create') }}">Create</a>

@endsection()
