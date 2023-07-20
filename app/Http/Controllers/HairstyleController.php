<?php

namespace App\Http\Controllers;

use App\Models\Hairstyle;
use Illuminate\Http\Request;

class HairstyleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Hairstyle::all();
        return view('hairstyle.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hairstyle.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Hairstyle::create([
            'style_name' => $request->style_name,
            'style_jenis' => $request->style_jenis,
            'style_harga' => $request->style_harga,
        ]);

        return redirect('hairstyle');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Hairstyle::findOrFail($id);
        return view('hairstyle.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Hairstyle::findOrFail($id);
        $row->update([
            'style_name' => $request->style_name,
            'style_jenis' => $request->style_jenis,
            'style_harga' => $request->style_harga,
        ]);

        return redirect('hairstyle');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Hairstyle::findOrFail($id);
        $row->delete();

        return redirect('hairstyle');
    }
}
