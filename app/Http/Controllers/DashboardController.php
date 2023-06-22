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
        // dd($data);
        return view('dashboard.index', ['md' => $md, 'lb' => $lb, 'lr' => $lr, 'jumlah_laka' => $jumlah_laka, 'data' => $data]);
    }
}
