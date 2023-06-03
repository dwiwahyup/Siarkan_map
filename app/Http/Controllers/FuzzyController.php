<?php

namespace App\Http\Controllers;

use App\Models\Jalan;
use App\Models\Lokasi;
use App\Models\Rules;
use Illuminate\Http\Request;

class FuzzyController extends Controller
{
    public function fuzzy(Request $request)
    {
        // $data = $request->;
        // dd($request->all());

        //request data dari form
        $jam_kecelakaan = $request->jam_kecelakaan;
        $kepadatan = $request->kepadatan;
        $intensitas_kecelakaan = $request->intensitas_kecelakaan;
        $kondisi_korban = $request->kondisi_korban;
        $jalan_id = $request->nama_jalan;
        // dd($intensitas_kecelakaan);

        $jalan = Jalan::find($jalan_id);

        // ----------------------------------Jam Kecelakaan---------------------------------- //
        $jam = keanggotaanJam($jam_kecelakaan);
        // ----------------------------------Kondisi Korban ---------------------------------- //
        $kondisiKorban = keanggotaanKondisiKorban($kondisi_korban);
        if ($jalan->status_jalan == 'Dalam Kota') {
            // ----------------------------------Kepadatan ---------------------------------- //
            $kepadatanKec = keanggotaanKepadatanDalam($kepadatan);

            // ----------------------------------Intensitas Kecelakaan ---------------------------------- //
            $intensitas = keanggotaanIntensitasDalam($intensitas_kecelakaan);
        } elseif ($jalan->status_jalan == 'Luar Kota') {
            // ----------------------------------Kepadatan ---------------------------------- //
            $kepadatanKec = keanggotaanKepadatanLuar($kepadatan);

            // ----------------------------------Intensitas Kecelakaan ---------------------------------- //
            $intensitas = keanggotaanIntensitasLuar($intensitas_kecelakaan);
        }

        // // ----------------------------------Min-Max ---------------------------------- //
        // $Maxjam_kecelakaan = max($jam['jam_kecelakaanA'], $jam['jam_kecelakaanB'], $jam['jam_kecelakaanC'], $jam['jam_kecelakaanD']);
        // $Maxkepadatan = max($kepadatanKec['kepadatanA'], $kepadatanKec['kepadatanB'], $kepadatanKec['kepadatanC']);
        // $Maxintensitas_kecelakaan = max($intensitas['intensitas_kecelakaanA'], $intensitas['intensitas_kecelakaanB'], $intensitas['intensitas_kecelakaanC']);
        // $Maxkondisi_korban = max($kondisiKorban['kondisi_korbanA'], $kondisiKorban['kondisi_korbanB'], $kondisiKorban['kondisi_korbanC']);
        // $minRule = min($Maxjam_kecelakaan, $Maxkepadatan, $Maxintensitas_kecelakaan, $Maxkondisi_korban);

        // $minRule = round($minRule, 3);
        $rule = Rules::where('jam', $jam['kecelakaanRule'])
            ->where('kepadatan', $kepadatanKec['kepadatanRule'])
            ->where('intensitas', $intensitas['intensitas_kecelakaanRule'])
            ->where('kondisi_korban', $kondisiKorban['kondisi_korbanRule'])
            ->first();


        // ---------------------------------- Luas dan Moment ---------------------------------- //
        // $luasMoment = hitungLuasMoment($rule->tingkat_kerawanan, $minRule);

        // ---------------------------------- Defuzzyfikasi ---------------------------------- //
        // $deffuzy = $luasMoment['totalMoment'] / $luasMoment['totalLuas'];

        Lokasi::create([
            'jalan_id' => $jalan_id,
            'alamat' => $request->alamat,
            'latitude' => $request->lattitude,
            'longitude' => $request->longitude,
            'jam_kecelakaan' => $jam_kecelakaan,
            'kepadatan' => $kepadatan,
            'intensitas_kecelakaan' => $intensitas_kecelakaan,
            'kondisi_korban' => $kondisi_korban,
            'tingkat_kerawanan' => $rule->tingkat_kerawanan,
            'rules_id' => $rule->id,
        ]);
        // dd($lokasi);

        //if has auth return to dashboard if not return to home
        if (auth()->user()) {
            return redirect()->route('daerahrawan.index')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('pemetaan')->with('success', 'Data Berhasil Ditambahkan');
        }
    }
}
