<?php

namespace App\Http\Controllers;

use App\Models\Komoditas;
use Illuminate\Http\Request;
use Carbon\Carbon;

class KomoditasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Komoditas::orderBy('id', 'desc')->get();
        return view('komoditas.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('komoditas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_produksi' => 'required|integer',
            'tanggal_type' => 'required|date|unique:tb_komoditas,tanggal_type',
            't_komoditas_kode' => 'required',
            'produksi' => 'required|integer',
        ]);

        Komoditas::create([
            'id_produksi' => $request->id_produksi,
            'tanggal_type' => $request->tanggal_type,
            't_komoditas_kode' => $request->t_komoditas_kode,
            'produksi' => $request->produksi,
            'created_on' => Carbon::now(),
            'created_by' => 1,
        ]);

        return redirect()->route('komoditas.index')->with('success', 'Data berhasil ditambahkan.');
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
        $item = Komoditas::findOrFail($id);
        return view('komoditas.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'id_produksi' => 'required|integer',
            'tanggal_type' => 'required|date',
            't_komoditas_kode' => 'required',
            'produksi' => 'required|integer',
        ]);

        Komoditas::where('id', $id)->update([
            'id_produksi' => $request->id_produksi,
            'tanggal_type' => $request->tanggal_type,
            't_komoditas_kode' => $request->t_komoditas_kode,
            'produksi' => $request->produksi,
            'updated_on' => Carbon::now(),
            'updated_by' => 1,
        ]);

        return redirect()->route('komoditas.index')->with('success', 'Data berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Komoditas::destroy($id);
        return redirect()->route('komoditas.index')->with('success', 'Data berhasil dihapus.');
    }
}
