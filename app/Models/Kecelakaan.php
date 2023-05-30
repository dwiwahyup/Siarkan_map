<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecelakaan extends Model
{
        use HasFactory, Sluggable;

    protected $fillable = [
        'slug', 'tanggal', 'jam', 'nama_jalan', 'km_simpang_gang', 'dusun_desa', 'kecamatan', 'kabupaten', 'kendaraan' ,'korban_md','korban_lb','korban_lr','jalans_id',
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['nama_jalan']
            ]
            ];
    }
}
