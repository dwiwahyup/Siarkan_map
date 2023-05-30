<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lokasi;
use App\Models\Jalan;

class DaerahRawanController extends Controller
{
    public function index()
    {
        $data = Lokasi::all();
        // dd($data);
        $jalan = Jalan::all();
        // dd($jalan);
        return view('dashboard.daerah_rawan.index', ['data' => $data, 'jalan' => $jalan]);
    }

    public function detail()
    {
        return view('dashboard.daerah_rawan.detail');
    }
}
