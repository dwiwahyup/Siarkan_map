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
                $jam_kecelakaanC = ($jam_kecelakaan - 15) / (15 - 17);
            } elseif ($jam_kecelakaan > 17 && $jam_kecelakaan < 19) {
                $jam_kecelakaanC = (19 - $jam_kecelakaan) / (19 - 17);
            } elseif ($jam_kecelakaan == 17) {
                $jam_kecelakaanC = 1;
            } elseif ($jam_kecelakaan <= 15 && $jam_kecelakaan >= 19) {
                $jam_kecelakaanC = 0;
            }
            $kecelakaanRule = 'Sore';
        }

        if ($jam_kecelakaan >= 19 && $jam_kecelakaan < 23) {
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
}

if (!function_exists('keanggotaanKepadatan')) {
    function keanggotaanKepadatan($kepadatan)
    {
        $kepadatanA = $kepadatanB = $kepadatanC = 0;
        if ($kepadatan <= 7388) {
            if ($kepadatan <= 6000) {
                $kepadatanA = 1;
            } elseif ($kepadatan > 6000 && $kepadatan < 7388) {
                $kepadatanA = (7388 - $kepadatan) / (7388 - 6000);
            } elseif ($kepadatan >= 7388) {
                $kepadatanA = 0;
            }
            $kepadatanRule = 'Tidak Padat';
        }

        if ($kepadatan >= 7388 && $kepadatan < 9289) {
            if ($kepadatan > 7388 && $kepadatan < 8338) {
                $kepadatanB = ($kepadatan - 7388) / (8338 - 7388);
            } elseif ($kepadatan > 8338 && $kepadatan < 9289) {
                $kepadatanB = (9289 - $kepadatan) / (9289 - 8338);
            } elseif ($kepadatan == 8338) {
                $kepadatanB = 1;
            } elseif ($kepadatan <= 7388 && $kepadatan >= 9289) {
                $kepadatanB = 0;
            }
            $kepadatanRule = 'Ramai';
        }

        if ($kepadatan >= 9289 && $kepadatan < 11190) {
            if ($kepadatan >= 9289 && $kepadatan < 11190) {
                $kepadatanC = ($kepadatan - 9289) / (11190 - 9289);
            } elseif ($kepadatan >= 11190) {
                $kepadatanC = 1;
            } elseif ($kepadatan <= 9289) {
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

if (!function_exists('keanggotaanIntensitas')) {
    function keanggotaanIntensitas($intensitas_kecelakaan)
    {
        $intensitas_kecelakaanA = $intensitas_kecelakaanB = $intensitas_kecelakaanC = 0;
        if ($intensitas_kecelakaan <= 21) {
            if ($intensitas_kecelakaan <= 10) {
                $intensitas_kecelakaanA = 1;
            } elseif ($intensitas_kecelakaan > 10 && $intensitas_kecelakaan < 21) {
                $intensitas_kecelakaanA = (21 - $intensitas_kecelakaan) / (21 - 10);
            } elseif ($intensitas_kecelakaan >= 21) {
                $intensitas_kecelakaanA = 0;
            }
            $intensitas_kecelakaanRule = 'Sangat Jarang';
        }

        if ($intensitas_kecelakaan >= 21 && $intensitas_kecelakaan < 42) {
            if ($intensitas_kecelakaan > 21 && $intensitas_kecelakaan < 31) {
                $intensitas_kecelakaanB = ($intensitas_kecelakaan - 21) / (31 - 21);
            } elseif ($intensitas_kecelakaan > 31 && $intensitas_kecelakaan < 42) {
                $intensitas_kecelakaanB = (42 - $intensitas_kecelakaan) / (42 - 31);
            } elseif ($intensitas_kecelakaan == 31) {
                $intensitas_kecelakaanB = 1;
            } elseif ($intensitas_kecelakaan <= 21 && $intensitas_kecelakaan >= 42) {
                $intensitas_kecelakaanB = 0;
            }
            $intensitas_kecelakaanRule = 'Jarang';
        }

        if ($intensitas_kecelakaan >= 42 && $intensitas_kecelakaan <= 64) {
            if ($intensitas_kecelakaan >= 42 && $intensitas_kecelakaan < 64) {
                $intensitas_kecelakaanC = ($intensitas_kecelakaan - 42) / (64 - 42);
            } elseif ($intensitas_kecelakaan >= 64) {
                $intensitas_kecelakaanC = 1;
            } elseif ($intensitas_kecelakaan <= 42) {
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

        if ($kondisi_korban > 2 && $kondisi_korban <= 3) {
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
