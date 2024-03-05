<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
</head>
<body>
    <h1>Clientes</h1>
    @foreach($clients as $client)
        <h2>{{ $client->name }}</h2>
    @endforeach
</body>
</html>
