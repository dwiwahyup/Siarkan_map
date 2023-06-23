<?php

namespace App\Http\Controllers;

use App\Models\Kecelakaan;
use Illuminate\Http\Request;
use App\Models\Lokasi;

class DashboardController extends Controller
{
    public function index()
    {
        $md = Kecelakaan::sum('korban_md');
        $lb = Kecelakaan::sum('korban_lb');
        $lr = Kecelakaan::sum('korban_lr');


        $jumlah_laka = Kecelakaan::count();

        $data = Kecelakaan::with('jalan')->get();
        //jika memiliki titik koordinat yang sama hitung jumlahnya dan tampilkan
        $jalan = $data->groupBy('latitude')->map(function ($item) {
            return $item->count();
        });
        $data = $data->map(function ($item) use ($jalan) {
            $item->jumlah = $jalan[$item->latitude];
            return $item;
        });
        $data = $data->unique('latitude');
        // return $data;
        // dd($data);
        return view('dashboard.index', ['md' => $md, 'lb' => $lb, 'lr' => $lr, 'jumlah_laka' => $jumlah_laka, 'data' => $data]);
    }
}
