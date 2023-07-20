<?php

namespace App\Http\Controllers;

use App\Models\Hairstyle;
use App\Models\Pelanggan;
use App\Models\User;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Pelanggan::with('hairstyle', 'user')->get();
        return view('pelanggan.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rowsUser = User::all();
        $rowHairstyle = Hairstyle::all();
        return view('pelanggan.create', compact('rowHairstyle', 'rowsUser'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pelanggan::create([
            'pel_id_style' => $request->pel_id_style,
            'pel_nama' => $request->pel_nama,
            'pel_alamat' => $request->pel_alamat,
            'pel_hp' => $request->pel_hp,
            'pel_ktp' => $request->pel_ktp,
            'pel_id_user' => $request->pel_id_user,
        ]);

        return redirect('pelanggan');
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
        $row = Pelanggan::findOrFail($id);
        $rowUser = User::findOrFail($row->pel_id_style);
        $rowHairstyle = Hairstyle::findOrFail($row->pel_id_style);
        return view('pelanggan.edit', compact('row', 'rowUser', 'rowHairstyle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Pelanggan::findOrFail($id);
        $row->update([
            'pel_nama' => $request->pel_nama,
            'pel_alamat' => $request->pel_alamat,
            'pel_hp' => $request->pel_hp,
        ]);

        return redirect('pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Pelanggan::findOrFail($id);
        $row->delete();

        return redirect('pelanggan');
    }
}
