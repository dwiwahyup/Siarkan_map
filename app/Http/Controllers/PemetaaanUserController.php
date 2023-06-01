<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lokasi;
use App\Models\Jalan;

class PemetaaanUserController extends Controller
{
    public function index()
    {
        $lokasiData = Lokasi::all();
        // dd($lokasiData);
        $jalan = Jalan::all();

        $sangatRawanCount = Lokasi::where('tingkat_kerawanan', 'Sangat Rawan')->count();
        $rawanCount = Lokasi::where('tingkat_kerawanan', 'Rawan')->count();
        $tidakRawanCount = Lokasi::where('tingkat_kerawanan', 'Tidak Rawan')->count();

        return view('users.pemetaan.index', ['data' => $lokasiData, 'jalan' => $jalan, 'sangatRawanCount' => $sangatRawanCount, 'rawanCount' => $rawanCount, 'tidakRawanCount' => $tidakRawanCount]);
    }

    //detail
    public function detail($id)
    {
        $data = Lokasi::where('id', $id)->with('rules')->first();
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
        //return to view
        return view('users.pemetaan.detail', [
            'data' => $data,
            'fungsiKeanggotaan' => $fungsiKeanggotaan,
            'defuzzy' => $defuzzy
        ]);

    }


}
