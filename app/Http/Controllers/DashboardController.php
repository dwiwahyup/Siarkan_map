<?php

namespace App\Http\Controllers;

use App\Models\Kecelakaan;
use Illuminate\Http\Request;
use App\Models\Lokasi;

class DashboardController extends Controller
{
    public function index()
    {
        $sangatRawanCount = Lokasi::where('tingkat_kerawanan', 'Sangat Rawan')->count();
        $rawanCount = Lokasi::where('tingkat_kerawanan', 'Rawan')->count();
        $tidakRawanCount = Lokasi::where('tingkat_kerawanan', 'Tidak Rawan')->count();

        $data = Kecelakaan::with('jalan')->get();
        // dd($data);
        return view('dashboard.index', ['sangatRawanCount' => $sangatRawanCount, 'rawanCount' => $rawanCount, 'tidakRawanCount' => $tidakRawanCount, 'data' => $data]);
    }
}
