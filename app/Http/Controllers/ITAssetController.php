<?php

namespace App\Http\Controllers;

use App\Models\ITAsset;
use Illuminate\Http\Request;

class ITAssetController extends Controller
{
    public function index()
    {
        $assets = ITAsset::all();
        return view('assets.index', compact('assets'));
    }

    public function create()
    {
        return view('assets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required',
            'serial_number' => 'required|unique:it_assets',
            'warranty_expiration_date' => 'required|date',
            'status' => 'required'
        ]);

        ITAsset::create($request->all());

        return redirect()->route('assets.index');
    }

    public function show(ITAsset $asset)
    {
        return view('assets.show', compact('asset'));
    }

    public function edit(ITAsset $asset)
    {
        return view('assets.edit', compact('asset'));
    }

    public function update(Request $request, ITAsset $asset)
    {
        $request->validate([
            'brand' => 'required',
            'serial_number' => 'required|unique:it_assets,serial_number,' . $asset->id,
            'warranty_expiration_date' => 'required|date',
            'status' => 'required'
        ]);

        $asset->update($request->all());

        return redirect()->route('assets.index');
    }

    public function destroy(ITAsset $asset)
    {
        $asset->delete();

        return redirect()->route('assets.index');
    }
}
