<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuzzyController extends Controller
{
    public function fuzzy($request)
    {
        // $data = $request->;

        //request data dari form
        $a['jam_kecelakaan'] = $request->['jam_kecelakaan'];
        $b['kepadatan'] = $request->['kepadatan'];
        $c['intensitas_kecelakaan'] = $request->['intensitas_kecelakaan'];
        $d['kondisi_korban'] = $request->['kondisi_korban'];

        //menghitung nilai fuzzyfikasi

        //Fungsi Keanggotaan

        // ----------------------------------Jam Kecelakaan---------------------------------- //
        if ($jam_kecelakaan <= 10) {
            if ($jam_kecelakaan <= 6) {
                $jam_kecelakaanA = 1;
            }elseif ($jam_kecelakaan > 6 && $jam_kecelakaan < 10) {
                $jam_kecelakaanA = (10 - $jam_kecelakaan) / (10 - 6);
            }elseif ($jam_kecelakaan >= 10) {
                $jam_kecelakaanA = 0;
            }
        }

        if ($jam_kecelakaan >= 10 && $jam_kecelakaan < 15) {
            if ($jam_kecelakaan > 10 && $jam_kecelakaan < 12) {
                $jam_kecelakaanB = ($jam_kecelakaan - 10) / (12 - 10);
            }elseif ($jam_kecelakaan > 12 && $jam_kecelakaan < 15) {
                $jam_kecelakaanB = (15 - $jam_kecelakaan) / (15 - 12);
            }elseif ($jam_kecelakaan == 12) {
                $jam_kecelakaanB = 1;
            }elseif ($jam_kecelakaan <=10 && $jam_kecelakaan >= 15) {
                $jam_kecelakaanB = 0;
            }
        }

        if ($jam_kecelakaan >= 15 && $jam_kecelakaan < 19) {
            if ($jam_kecelakaan >= 15 && $jam_kecelakaan < 17) {
                $jam_kecelakaanC = ($jam_kecelakaan - 15) / (15 - 17);
            }elseif ($jam_kecelakaan > 17 && $jam_kecelakaan < 19) {
                $jam_kecelakaanC = (19 - $jam_kecelakaan) / (19 - 17);
            }elseif ($jam_kecelakaan == 17) {
                $jam_kecelakaanC = 1;
            }elseif ($jam_kecelakaan <= 15 && $jam_kecelakaan >= 19) {
                $jam_kecelakaanC = 0;
            }
        }

        if ($jam_kecelakaan >= 19 && $jam_kecelakaan < 23) {
            if ($jam_kecelakaan >= 19 && $jam_kecelakaan < 23) {
                $jam_kecelakaanD = ($jam_kecelakaan - 19) / (23 - 19);
            }elseif ($jam_kecelakaan >= 23) {
                $jam_kecelakaanD = 1;
            }elseif ($jam_kecelakaan <= 19) {
                $jam_kecelakaanD = 0;
            }
        }

        // ----------------------------------Kepadatan ---------------------------------- //
        if ($kepadatan <= 7388) {
            if ($kepadatan <= 6000) {
                $kepadatanA = 1;
            }elseif ($kepadatan > 6000 && $kepadatan < 7388) {
                $kepadatanA = (7388 - $kepadatan) / (7388 - 6000);
            }elseif ($kepadatan >= 7388) {
                $kepadatanA = 0;
            }
        }

        if ($kepadatan >= 7388 && $kepadatan < 9289) {
            if ($kepadatan > 7388 && $kepadatan < 8338) {
                $kepadatanB = ($kepadatan - 7388) / (8338 - 7388);
            }elseif ($kepadatan > 8338 && $kepadatan < 9289) {
                $kepadatanB = (9289 - $kepadatan) / (9289 - 8338);
            }elseif ($kepadatan == 8338) {
                $kepadatanB = 1;
            }elseif ($kepadatan <= 7388 && $kepadatan >= 9289) {
                $kepadatanB = 0;
            }
        }

        if ($kepadatan >= 9289 && $kepadatan < 11190) {
            if ($kepadatan >= 9289 && $kepadatan < 11190) {
                $kepadatanC = ($kepadatan - 9289) / (11190 - 9289);
            }elseif ($kepadatan >= 11190) {
                $kepadatanC = 1;
            }elseif ($kepadatan <= 9289) {
                $kepadatanC = 0;
            }
        }

        // ----------------------------------Intensitas Kecelakaan ---------------------------------- //

        if ($intensitas_kecelakaan <=21) {
            if ($intensitas_kecelakaan <= 10) {
                $intensitas_kecelakaanA = 1;
            }elseif ($interitas_kecelakaan > 10 && $intensitas_kecelakaan < 21) {
                $intensitas_kecelakaanA = (21 - $intensitas_kecelakaan) / (21 - 10);
            }elseif ($intensitas_kecelakaan >= 21) {
                $interitas_kecelakaanA = 0;
            }
        }

        if ($intensitas_kecelakaan >= 21 && $intensitas_kecelakaan < 42) {
            if ($intensitas_kecelakaan > 21 && $intensitas_kecelakaan < 31) {
                $intensitas_kecelakaanB = ($intensitas_kecelakaan - 21) / (31 - 21);
            }elseif ($intensitas_kecelakaan > 31 && $intensitas_kecelakaan < 42) {
                $intensitas_kecelakaanB = (42 - $intensitas_kecelakaan) / (42 - 31);
            }elseif ($kepadatan == 31) {
                $intensitas_kecelakaanB = 1;
            }elseif ($intensitas_kecelakaan <= 21 && $intensitas_kecelakaan >= 42) {
                $intensitas_kecelakaanB = 0;
            }
        }

        if ($intensitas_kecelakaan >= 42 && $intensitas_kecelakaan < 64) {
            if ($intensitas_kecelakaan >= 42 && $intensitas_kecelakaan < 64) {
                $intensitas_kecelakaanC = ($intensitas_kecelakaan - 42) / (64 - 42);
            }elseif ($intensitas_kecelakaan >= 64) {
                $intensitas_kecelakaanC = 1;
            }elseif ($intensitas_kecelakaan <= 42) {
                $intensitas_kecelakaanC = 0;
            }
        }

        // ----------------------------------Kondisi Korban ---------------------------------- //

        if ($kondisi_korban <= 1) {
            if ($kondisi_korban <= 1) {
                $kondisi_korbanA = 1;
            }elseif ($kondisi_korban > 1 && $kondisi_korban < 2) {
                $kondisi_korbanA = (2 - $kondisi_korban) / (2 - 1);
            }elseif ($kondisi_korban >= 2) {
                $kondisi_korbanA = 0;
            }
        }

        if ($kondisi_korban >= 1 && $kondisi_korban < 3) {
            if ($kondisi_korban > 1 && $kondisi_korban < 2) {
                $kondisi_korbanB = ($kondisi_korban - 1) / (2 - 1);
            }elseif ($konidisi_korban > 2 && $kondisi_korban < 3) {
                $kondisi_korbanB = (3 - $kondisi_korban) / (3 - 2);
            }elseif ($konidisi_korban == 2) {
                $kondisi_korbanB = 1;
            }elseif ($konidisi_korban <= 1 && $kondisi_korban >= 3) {
                $konidisi_korbanB = 0;
            }
        }

        if ($konidisi_korban >=2 && $kondisi_korban < 3) {
            if ($konidisi_korban >= 2 && $kondisi_korban < 3) {
                $kondisi_korbanC = ($kondisi_korban - 2) / (3 - 2);
            }elseif ($konidisi_korban >= 3) {
                $kondisi_korbanC = 1;
            }elseif ($konidisi_korban <= 2) {
                $konidisi_korbanC = 0;
            }
        }

        //Set value keanggotaan

        // Jam Kecelaaan
        $jam_kecelakaan_setA = 'dini pagi';
        $jam_kecelakaan_setB = 'siang' ;
        $jam_kecelakaan_setC = 'sore';
        $jam_kecelakaan_setD = 'malam';
        // Kepadatan
        $kepadatan_setA = 'lengang';
        $kepadatan_setB = 'ramai';
        $kepadatan_setC = 'padat';
        // Intensitas
        $intensitas_kecelakaan_setA = 'rendah';
        $intensitas_kecelakaan_setB = 'sedang';
        $intensitas_kecelakaan_setC = 'tinggi';
        // Kondisi Korban
        $kondisi_korban_setA = 'ringan';
        $kondisi_korban_setB = 'sedang';
        $kondisi_korban_setC = 'berat';

        // Fuzzifikasi

        // Jam Kecelakaan
        if (isset($jam_kecelakaanA)) {
            $jam_kecelakaanOutput = [$jam_kecelakaanA];
            $jam_kecelakaanGrade = [$jam_kecelakaan_setA];
        }elseif (iseet($jam_kecelakaanB)) {
            $jam_kecelakaanOutput = [$jam_kecelakaanB];
            $jam_kecelakaanGrade = [$jam_kecelakaan_setB];
        }elseif (isset($jam_kecelakaanC)) {
            $jam_kecelakaanOutput = [$jam_kecelakaanC];
            $jam_kecelakaanGrade = [$jam_kecelakaan_setC];
        }elseif ($jam_kecelakaanD) {
            $jam_kecelakaanOutput = [$jam_kecelakaanD];
            $jam_kecelakaanGrade = [$jam_kecelakaan_setD];
        }

        // Kepadatan
        if (isset($kepadatanA)) {
            $kepadatanOutput = [$kepadatanA];
            $kepadatanGrade = [$kepadatan_setA];
        }elseif (isset($kepadatanB)) {
            $kepadatanOutput = [$kepadatanB];
            $kepadatanGrade = [$kepadatan_setB];
        }elseif (isset($kepadatanC)) {
            $kepadatanOutput = [$kepadatanC];
            $kepadatanGrade = [$kepadatan_setC];
        }

        // Intensitas
        if (isset($intensitas_kecelakaanA)) {
            $intensitas_kecelakaanOutput = [$intensitas_kecelakaanA];
            $intensitas_kecelakaanGrade = [$intensitas_kecelakaan_setA];
        }elseif (isset($intensitas_kecelakaanB)) {
            $intensitas_kecelakaanOutput = [$intensitas_kecelakaanB];
            $intensitas_kecelakaanGrade = [$intensitas_kecelakaan_setB];
        }elseif (isset($intensitas_kecelakaanC)) {
            $intensitas_kecelakaanOutput = [$intensitas_kecelakaanC];
            $intensitas_kecelakaanGrade = [$intensitas_kecelakaan_setC];
        }

        // Kondisi Korban
        if (isset($kondisi_korbanA)) {
            $kondisi_korbanOutput = [$kondisi_korbanA];
            $kondisi_korbanGrade = [$kondisi_korban_setA];
        }elseif (isset($kondisi_korbanB)) {
            $kondisi_korbanOutput = [$kondisi_korbanB];
            $kondisi_korbanGrade = [$kondisi_korban_setB];
        }elseif (isset($kondisi_korbanC)) {
            $kondisi_korbanOutput = [$kondisi_korbanC];
            $kondisi_korbanGrade = [$kondisi_korban_setC];
        }

        







    }
}
