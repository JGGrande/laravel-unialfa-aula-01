<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\FeatureFlag;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::get();
        $feature = FeatureFlag::where('name', 'botao_criar_cliente')->first();

        return view(
            'clients.index', [
                "clients" => $clients,
                "feature" => $feature
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->except('_token');

        $request->validate([
            "name" => "required|max:255|min:1",
            "address" => "required|max:255|min:1"
        ]);

        $dados['observation'] = $dados['observation'] ?? '';

        Client::create($dados);

        return redirect('/clients');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::find($id);

        return view('clients.show', [
            'client' => $client
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Client::find($id);
        return view('clients.edit', [
            'client' => $client
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = $request->except('_token');
        $client = Client::findOrFail($id);

        $client->update([
            'name' =>  $dados['name'],
            'address' => $dados['address'],
            'observation' => $dados['observation']
        ]);

        return redirect('/clients');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Client::destroy($id);
        return redirect("/clients");
    }
}
