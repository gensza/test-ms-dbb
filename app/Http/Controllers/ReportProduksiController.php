<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Komoditas;
use App\Models\KomoditasName;

class ReportProduksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua data komoditas lengkap dengan nama
        $komoditasList = KomoditasName::all();

        // Ambil semua tahun yang tersedia di tb_komoditas
        $tahunList = Komoditas::select(DB::raw("YEAR(tanggal_type) as tahun"))
            ->groupBy('tahun')
            ->orderBy('tahun', 'asc')
            ->get()
            ->pluck('tahun');

        $report = [];

        foreach ($tahunList as $tahun) {
            foreach ($komoditasList as $komoditas) {

                // siapkan row
                $row = [
                    'tahun' => $tahun,
                    'komoditas' => $komoditas->komoditas_name,
                ];

                // isi bulan Jan–Des
                for ($bulan = 1; $bulan <= 12; $bulan++) {

                    $nilai = Komoditas::where('t_komoditas_kode', $komoditas->komoditas_kode)
                        ->whereYear('tanggal_type', $tahun)
                        ->whereMonth('tanggal_type', $bulan)
                        ->sum('produksi');

                    $row["bulan_$bulan"] = $nilai;
                }

                $report[] = $row;
            }
        }

        return view('report.produksi', compact('report'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
