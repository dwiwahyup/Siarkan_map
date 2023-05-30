<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lokasi;

class PemetaaanUserController extends Controller
{
    public function index()
    {
        $lokasiData = Lokasi::all();
        // dd($lokasiData);
        return view('users.pemetaan.index', ['data' => $lokasiData]);
    }
}
