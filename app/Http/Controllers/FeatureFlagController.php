<?php

namespace App\Http\Controllers;

use App\Models\FeatureFlag;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class FeatureFlagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $featureFlags = FeatureFlag::get();
        return view(
            'feature_flags.index', [
                "feature_flags" => $featureFlags
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("feature_flags.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->except('_token');

        $dados['active'] = filter_var($dados['active'], FILTER_VALIDATE_BOOLEAN);

        FeatureFlag::create($dados);

        return redirect("/feature-flags");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $feature = FeatureFlag::find($id);

        return view("feature_flags.show", [
            "feature_flag" => $feature
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $feature = FeatureFlag::find($id);

        return view("feature_flags.edit", [
            "feature_flag" => $feature
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = $request->except('_token');
        $feature = FeatureFlag::findOrFail($id);

        $dados['active'] = filter_var($dados['active'], FILTER_VALIDATE_BOOLEAN);

        $feature->update([
            'name' =>  $dados['name'],
            'active' => $dados['active'],
            'description' => $dados['description']
        ]);

        return redirect('/feature-flags');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        FeatureFlag::destroy($id);
        return redirect("/feature-flags");
    }
}
