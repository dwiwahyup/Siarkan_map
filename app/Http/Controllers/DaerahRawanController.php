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

    //show data
    public function show($id)
    {
        $data = Lokasi::find($id)->with('rules')->first();
        // ----------------------------------Jam Kecelakaan---------------------------------- //
        $jam = keanggotaanJam($data->jam_kecelakaan);

        // ----------------------------------Kepadatan ---------------------------------- //
        $kepadatanKec = keanggotaanKepadatan($data->kepadatan);

        // ----------------------------------Intensitas Kecelakaan ---------------------------------- //
        $intensitas = KeanggotaanIntensitas($data->intensitas_kecelakaan);

        // ----------------------------------Kondisi Korban ---------------------------------- //
        $kondisiKorban = keanggotaanKondisiKorban($data->kondisi_korban);

        // // ----------------------------------Min-Max ---------------------------------- //
        $Maxjam_kecelakaan = max($jam['jam_kecelakaanA'], $jam['jam_kecelakaanB'], $jam['jam_kecelakaanC'], $jam['jam_kecelakaanD']);
        $Maxkepadatan = max($kepadatanKec['kepadatanA'], $kepadatanKec['kepadatanB'], $kepadatanKec['kepadatanC']);
        $Maxintensitas_kecelakaan = max($intensitas['intensitas_kecelakaanA'], $intensitas['intensitas_kecelakaanB'], $intensitas['intensitas_kecelakaanC']);
        $Maxkondisi_korban = max($kondisiKorban['kondisi_korbanA'], $kondisiKorban['kondisi_korbanB'], $kondisiKorban['kondisi_korbanC']);
        $minRule = min($Maxjam_kecelakaan, $Maxkepadatan, $Maxintensitas_kecelakaan, $Maxkondisi_korban);

        // ---------------------------------- Luas dan Moment ---------------------------------- //
        $luasMoment = hitungLuasMoment($data->tingkat_kerawanan, $minRule);

        // ---------------------------------- Defuzzyfikasi ---------------------------------- //
        $defuzzy = $luasMoment['totalMoment'] / $luasMoment['totalLuas'];

        $fungsiKeanggotaan = [
            'jam' => $Maxjam_kecelakaan,
            'kepadatan' => $Maxkepadatan,
            'intensitas' => $Maxintensitas_kecelakaan,
            'kondisiKorban' => $Maxkondisi_korban,
        ];
        return view('dashboard.daerah_rawan.detail', [
            'data' => $data,
            'keanggotaan' => $fungsiKeanggotaan,
            'defuzzy' => $defuzzy,
        ]);
    }
}
