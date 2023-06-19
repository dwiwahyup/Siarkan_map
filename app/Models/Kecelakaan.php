<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecelakaan extends Model
{
        use HasFactory, Sluggable;

    protected $fillable = [
        'slug', 'tanggal', 'jam', 'nama_jalan', 'km', 'tkp_dusun','desa', 'kecamatan', 'kabupaten', 'latitude', 'longitude', 'kendaraan' ,'korban_md','korban_lb','korban_lr','jalans_id',
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['nama_jalan']
            ]
            ];
    }

    public function jalan()
    {
        return $this->belongsTo(Jalan::class, 'jalans_id', 'id');
    }
}
