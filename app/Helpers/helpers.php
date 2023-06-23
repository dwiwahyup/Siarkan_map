<?php
if (!function_exists('keanggotaanJam')) {
    function keanggotaanJam($jam_kecelakaan)
    {
        $jam_kecelakaanA = $jam_kecelakaanB = $jam_kecelakaanC = $jam_kecelakaanD = 0;
        if ($jam_kecelakaan <= 10) {
            if ($jam_kecelakaan <= 6) {
                $jam_kecelakaanA = 1;
            } elseif ($jam_kecelakaan > 6 && $jam_kecelakaan < 10) {
                $jam_kecelakaanA = (10 - $jam_kecelakaan) / (10 - 6);
            } elseif ($jam_kecelakaan >= 10) {
                $jam_kecelakaanA = 0;
            }
            $kecelakaanRule = 'Dini-Pagi';
        }

        if ($jam_kecelakaan >= 10 && $jam_kecelakaan < 15) {
            if ($jam_kecelakaan > 10 && $jam_kecelakaan < 12) {
                $jam_kecelakaanB = ($jam_kecelakaan - 10) / (12 - 10);
            } elseif ($jam_kecelakaan > 12 && $jam_kecelakaan < 15) {
                $jam_kecelakaanB = (15 - $jam_kecelakaan) / (15 - 12);
            } elseif ($jam_kecelakaan == 12) {
                $jam_kecelakaanB = 1;
            } elseif ($jam_kecelakaan <= 10 && $jam_kecelakaan >= 15) {
                $jam_kecelakaanB = 0;
            }
            $kecelakaanRule = 'Siang';
        }

        if ($jam_kecelakaan >= 15 && $jam_kecelakaan < 19) {
            if ($jam_kecelakaan >= 15 && $jam_kecelakaan < 17) {
                $jam_kecelakaanC = ($jam_kecelakaan - 15) / (17 - 15);
            } elseif ($jam_kecelakaan > 17 && $jam_kecelakaan < 19) {
                $jam_kecelakaanC = (19 - $jam_kecelakaan) / (19 - 17);
            } elseif ($jam_kecelakaan == 17) {
                $jam_kecelakaanC = 1;
            } elseif ($jam_kecelakaan <= 15 && $jam_kecelakaan >= 19) {
                $jam_kecelakaanC = 0;
            }
            $kecelakaanRule = 'Sore';
        }

        if ($jam_kecelakaan >= 19) {
            if ($jam_kecelakaan >= 19 && $jam_kecelakaan < 23) {
                $jam_kecelakaanD = ($jam_kecelakaan - 19) / (23 - 19);
            } elseif ($jam_kecelakaan >= 23) {
                $jam_kecelakaanD = 1;
            } elseif ($jam_kecelakaan <= 19) {
                $jam_kecelakaanD = 0;
            }
            $kecelakaanRule = 'Malam';
        }

        return [
            'jam_kecelakaanA' => $jam_kecelakaanA,
            'jam_kecelakaanB' => $jam_kecelakaanB,
            'jam_kecelakaanC' => $jam_kecelakaanC,
            'jam_kecelakaanD' => $jam_kecelakaanD,
            'kecelakaanRule' => $kecelakaanRule
        ];
    }
    // dd(keanggotaanJam(16.25));
}

//kepadatan Dalam
if (!function_exists('keanggotaanKepadatanDalam')) {
    function keanggotaanKepadatanDalam($kepadatan)
    {
        $kepadatanA = $kepadatanB = $kepadatanC = 0;
        if ($kepadatan <= 6867) {
            if ($kepadatan <= 6688) {
                $kepadatanA = 1;
            } elseif ($kepadatan > 6688 && $kepadatan < 6867) {
                $kepadatanA = (6867 - $kepadatan) / (6867 - 6688);
            } elseif ($kepadatan >= 6867) {
                $kepadatanA = 0;
            }
            $kepadatanRule = 'Tidak Padat';
        }

        if ($kepadatan >= 6867 && $kepadatan < 7225) {
            if ($kepadatan > 6867 && $kepadatan < 7046) {
                $kepadatanB = ($kepadatan - 6867) / (7046 - 6867);
            } elseif ($kepadatan > 7046 && $kepadatan < 7225) {
                $kepadatanB = (7225 - $kepadatan) / (7225 - 7046);
            } elseif ($kepadatan == 7046) {
                $kepadatanB = 1;
            } elseif ($kepadatan <= 6867 && $kepadatan >= 7225) {
                $kepadatanB = 0;
            }
            $kepadatanRule = 'Ramai';
        }

        if ($kepadatan >= 7225) {
            if ($kepadatan >= 7225 && $kepadatan < 7405) {
                $kepadatanC = ($kepadatan - 7225) / (7405 - 7225);
            } elseif ($kepadatan >= 7405) {
                $kepadatanC = 1;
            } elseif ($kepadatan <= 7225) {
                $kepadatanC = 0;
            }
            $kepadatanRule = 'Padat';
        }

        return [
            'kepadatanA' => $kepadatanA,
            'kepadatanB' => $kepadatanB,
            'kepadatanC' => $kepadatanC,
            'kepadatanRule' => $kepadatanRule
        ];
    }
}

//intensitas Dalam
if (!function_exists('keanggotaanIntensitasDalam')) {
    function keanggotaanIntensitasDalam($intensitas_kecelakaan)
    {
        $intensitas_kecelakaanA = $intensitas_kecelakaanB = $intensitas_kecelakaanC = 0;
        if ($intensitas_kecelakaan <= 670) {
            if ($intensitas_kecelakaan <= 654) {
                $intensitas_kecelakaanA = 1;
            } elseif ($intensitas_kecelakaan > 654 && $intensitas_kecelakaan < 670) {
                $intensitas_kecelakaanA = (670 - $intensitas_kecelakaan) / (670 - 654);
            } elseif ($intensitas_kecelakaan >= 670) {
                $intensitas_kecelakaanA = 0;
            }
            $intensitas_kecelakaanRule = 'Sangat Jarang';
        }

        if ($intensitas_kecelakaan >= 670 && $intensitas_kecelakaan < 705) {
            if ($intensitas_kecelakaan > 670 && $intensitas_kecelakaan < 689) {
                $intensitas_kecelakaanB = ($intensitas_kecelakaan - 670) / (689 - 670);
            } elseif ($intensitas_kecelakaan > 689 && $intensitas_kecelakaan < 705) {
                $intensitas_kecelakaanB = (705 - $intensitas_kecelakaan) / (705 - 689);
            } elseif ($intensitas_kecelakaan == 689) {
                $intensitas_kecelakaanB = 1;
            } elseif ($intensitas_kecelakaan <= 670 && $intensitas_kecelakaan >= 705) {
                $intensitas_kecelakaanB = 0;
            }
            $intensitas_kecelakaanRule = 'Jarang';
        }

        if ($intensitas_kecelakaan >= 705) {
            if ($intensitas_kecelakaan >= 705 && $intensitas_kecelakaan < 724) {
                $intensitas_kecelakaanC = ($intensitas_kecelakaan - 705) / (724 - 705);
            } elseif ($intensitas_kecelakaan >= 724) {
                $intensitas_kecelakaanC = 1;
            } elseif ($intensitas_kecelakaan <= 705) {
                $intensitas_kecelakaanC = 0;
            }
            $intensitas_kecelakaanRule = 'Sering';
        }

        return [
            'intensitas_kecelakaanA' => $intensitas_kecelakaanA,
            'intensitas_kecelakaanB' => $intensitas_kecelakaanB,
            'intensitas_kecelakaanC' => $intensitas_kecelakaanC,
            'intensitas_kecelakaanRule' => $intensitas_kecelakaanRule
        ];
    }
}

//kepadatan luar
if (!function_exists('keanggotaanKepadatanLuar')) {
    function keanggotaanKepadatanLuar($kepadatan)
    {
        $kepadatanA = $kepadatanB = $kepadatanC = 0;
        if ($kepadatan <= 6000) {
            if ($kepadatan <= 5563) {
                $kepadatanA = 1;
            } elseif ($kepadatan > 5563 && $kepadatan < 6000) {
                $kepadatanA = (6000 - $kepadatan) / (6000 - 5563);
            } elseif ($kepadatan >= 6000) {
                $kepadatanA = 0;
            }
            $kepadatanRule = 'Tidak Padat';
        }

        if ($kepadatan >= 6000 && $kepadatan < 6500) {
            if ($kepadatan > 6000 && $kepadatan < 6250) {
                $kepadatanB = ($kepadatan - 6000) / (6250 - 6000);
            } elseif ($kepadatan > 6250 && $kepadatan < 6500) {
                $kepadatanB = (6500 - $kepadatan) / (6500 - 6250);
            } elseif ($kepadatan == 6250) {
                $kepadatanB = 1;
            } elseif ($kepadatan <= 6000 && $kepadatan >= 6500) {
                $kepadatanB = 0;
            }
            $kepadatanRule = 'Ramai';
        }

        if ($kepadatan >= 6500) {
            if ($kepadatan >= 6500 && $kepadatan < 6862) {
                $kepadatanC = ($kepadatan - 6500) / (6862 - 6500);
            } elseif ($kepadatan >= 6862) {
                $kepadatanC = 1;
            } elseif ($kepadatan <= 6500) {
                $kepadatanC = 0;
            }
            $kepadatanRule = 'Padat';
        }

        return [
            'kepadatanA' => $kepadatanA,
            'kepadatanB' => $kepadatanB,
            'kepadatanC' => $kepadatanC,
            'kepadatanRule' => $kepadatanRule
        ];
    }
}

//intensitas Luar
if (!function_exists('keanggotaanIntensitasLuar')) {
    function keanggotaanIntensitasLuar($intensitas_kecelakaan)
    {
        $intensitas_kecelakaanA = $intensitas_kecelakaanB = $intensitas_kecelakaanC = 0;
        if ($intensitas_kecelakaan <= 57) {
            if ($intensitas_kecelakaan <= 55) {
                $intensitas_kecelakaanA = 1;
            } elseif ($intensitas_kecelakaan > 55 && $intensitas_kecelakaan < 57) {
                $intensitas_kecelakaanA = (57 - $intensitas_kecelakaan) / (57 - 55);
            } elseif ($intensitas_kecelakaan >= 57) {
                $intensitas_kecelakaanA = 0;
            }
            $intensitas_kecelakaanRule = 'Sangat Jarang';
        }

        if ($intensitas_kecelakaan >= 57 && $intensitas_kecelakaan < 63) {
            if ($intensitas_kecelakaan > 57 && $intensitas_kecelakaan < 61) {
                $intensitas_kecelakaanB = ($intensitas_kecelakaan - 57) / (61 - 57);
            } elseif ($intensitas_kecelakaan > 61 && $intensitas_kecelakaan < 63) {
                $intensitas_kecelakaanB = (63 - $intensitas_kecelakaan) / (63 - 61);
            } elseif ($intensitas_kecelakaan == 61) {
                $intensitas_kecelakaanB = 1;
            } elseif ($intensitas_kecelakaan <= 57 && $intensitas_kecelakaan >= 63) {
                $intensitas_kecelakaanB = 0;
            }
            $intensitas_kecelakaanRule = 'Jarang';
        }

        if ($intensitas_kecelakaan >= 63) {
            if ($intensitas_kecelakaan >= 63 && $intensitas_kecelakaan < 67) {
                $intensitas_kecelakaanC = ($intensitas_kecelakaan - 63) / (67 - 63);
            } elseif ($intensitas_kecelakaan >= 67) {
                $intensitas_kecelakaanC = 1;
            } elseif ($intensitas_kecelakaan <= 63) {
                $intensitas_kecelakaanC = 0;
            }
            $intensitas_kecelakaanRule = 'Sering';
        }

        return [
            'intensitas_kecelakaanA' => $intensitas_kecelakaanA,
            'intensitas_kecelakaanB' => $intensitas_kecelakaanB,
            'intensitas_kecelakaanC' => $intensitas_kecelakaanC,
            'intensitas_kecelakaanRule' => $intensitas_kecelakaanRule
        ];
    }
}

if (!function_exists('keanggotaanKondisiKorban')) {
    function keanggotaanKondisiKorban($kondisi_korban)
    {
        $kondisi_korbanA = $kondisi_korbanB = $kondisi_korbanC = 0;
        if ($kondisi_korban <= 1) {
            if ($kondisi_korban <= 1) {
                $kondisi_korbanA = 1;
            } elseif ($kondisi_korban > 1 && $kondisi_korban < 2) {
                $kondisi_korbanA = (2 - $kondisi_korban) / (2 - 1);
            } elseif ($kondisi_korban >= 2) {
                $kondisi_korbanA = 0;
            }
            $kondisi_korbanRule = 'Ringan';
        }

        if ($kondisi_korban > 1 && $kondisi_korban <= 2) {
            if ($kondisi_korban > 1 && $kondisi_korban < 2) {
                $kondisi_korbanB = ($kondisi_korban - 1) / (2 - 1);
            } elseif ($kondisi_korban > 2 && $kondisi_korban < 3) {
                $kondisi_korbanB = (3 - $kondisi_korban) / (3 - 2);
            } elseif ($kondisi_korban == 2) {
                $kondisi_korbanB = 1;
            } elseif ($kondisi_korban <= 1 && $kondisi_korban >= 3) {
                $kondisi_korbanB = 0;
            }
            $kondisi_korbanRule = 'Sedang';
        }

        if ($kondisi_korban > 2) {
            if ($kondisi_korban >= 2 && $kondisi_korban < 3) {
                $kondisi_korbanC = ($kondisi_korban - 2) / (3 - 2);
            } elseif ($kondisi_korban >= 3) {
                $kondisi_korbanC = 1;
            } elseif ($kondisi_korban <= 2) {
                $kondisi_korbanC = 0;
            }
            $kondisi_korbanRule = 'Berat';
        }

        return [
            'kondisi_korbanA' => $kondisi_korbanA,
            'kondisi_korbanB' => $kondisi_korbanB,
            'kondisi_korbanC' => $kondisi_korbanC,
            'kondisi_korbanRule' => $kondisi_korbanRule
        ];
    }
}

if (!function_exists('hitungLuasMoment')) {
    function hitungLuasMoment($tingkat_kerawanan, $minRule)
    {
        if ($tingkat_kerawanan == 'Tidak rawan') {
            // Keanggotaaan berdasarkan fungsi keanggotaan
            $keanggotaan = 20;
            $keanggotaanAkhir = 30;

            // Batas bawah dan batas atas dari fungsi keanggotaan
            $batasBawah = 0;
            $batasAtas = $keanggotaanAkhir - $minRule * ($keanggotaanAkhir - $keanggotaan);

            // Menghitung luas
            $luasA1 = $batasAtas * $minRule;
            $luasA2 = (($keanggotaanAkhir - $batasAtas) * $minRule) / 2;
            $totalLuas = $luasA1 + $luasA2;

            // Menghitung moment
            $momentSatu = ($minRule / 2) * pow($batasAtas, 2) - ($minRule / 2) * pow($batasBawah, 2);
            $momentDua = (3 / 2) * pow($keanggotaanAkhir, 2) - (0.1 / 3) * pow($keanggotaanAkhir, 3) - ((3 / 2) * pow($batasAtas, 2) - (0.1 / 3) * pow($batasAtas, 3));
            $totalMoment = $momentSatu + $momentDua;
        } elseif ($tingkat_kerawanan == 'Rawan') {
            // Keanggotaaan berdasarkan fungsi keanggotaan
            $keanggotaan = 30;
            $keanggotaanTengah = 50;
            $keanggotaanAkhir = 70;

            // Batas bawah dan batas atas dari fungsi keanggotaan
            $batasBawah = $minRule * ($keanggotaanTengah - $keanggotaan) + $keanggotaan;
            $batasAtas = $keanggotaanAkhir - $minRule * ($keanggotaanAkhir - $keanggotaanTengah);

            // Menghitung luas
            $luasA1 = (($batasBawah - $keanggotaan) * $minRule) / 2;
            $luasA2 = ($batasAtas - $batasBawah) * $minRule;
            $luasA3 = (($keanggotaanAkhir - $batasAtas) * $minRule) / 2;
            $totalLuas = $luasA1 + $luasA2 + $luasA3;

            // Menghitung moment
            $momentSatu = (0.05 / 3) * pow($batasBawah, 3) - (1.5 / 2) * pow($batasBawah, 2) - ((0.05 / 3) * pow($keanggotaan, 3) - (1.5 / 2) * pow($keanggotaan, 2));
            $momentDua = ($minRule / 2) * pow($batasAtas, 2) - ($minRule / 2) * pow($batasBawah, 2);
            $momentTiga = (3.5 / 2) * pow($keanggotaanAkhir, 2) - (0.05 / 3) * pow($keanggotaanAkhir, 3) - ((3.5 / 2) * pow($batasAtas, 2) - (0.05 / 3) * pow($batasAtas, 3));
            $totalMoment = $momentSatu + $momentDua + $momentTiga;
        } elseif ($tingkat_kerawanan == 'Sangat Rawan') {
            // Keanggotaaan berdasarkan fungsi keanggotaan
            $keanggotaan = 70;
            $keanggotaanAkhir = 90;

            // Batas bawah dan batas atas dari fungsi keanggotaan
            $batasBawah = $minRule * ($keanggotaanAkhir - $keanggotaan) + $keanggotaan;
            $batasAtas = 100;

            // Menghitung luas
            $luasA1 = (($batasBawah - $keanggotaan) * $minRule) / 2;
            $luasA2 = ($batasAtas - $batasBawah) * $minRule;
            $totalLuas = $luasA1 + $luasA2;

            // Menghitung moment
            $momentSatu = (0.05 / 3) * pow($batasBawah, 3) - (3.5 / 2) * pow($batasBawah, 2) - ((0.05 / 3) * pow($keanggotaan, 3) - (3.5 / 2) * pow($keanggotaan, 2));
            $momentDua = ($minRule / 2) * pow($batasAtas, 2) - ($minRule / 2) * pow($batasBawah, 2);
            $totalMoment = $momentSatu + $momentDua;
        }

        return [
            'keanggotaan' => $keanggotaan ?? 0,
            'keanggotaanTengah' => $keanggotaanTengah ?? 0,
            'keanggotaanAkhir' => $keanggotaanAkhir ?? 0,
            'batasBawah' => $batasBawah ?? 0,
            'batasAtas' => $batasAtas ?? 0,
            'luasA1' => $luasA1 ?? 0,
            'luasA2' => $luasA2 ?? 0,
            'luasA3' => $luasA3 ?? 0,
            'momentSatu' => $momentSatu ?? 0,
            'momentDua' => $momentDua ?? 0,
            'momentTiga' => $momentTiga ?? 0,
            'totalLuas' => $totalLuas ?? 0,
            'totalMoment' => $totalMoment ?? 0,
        ];
    }
}
