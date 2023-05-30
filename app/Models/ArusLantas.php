<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArusLantas extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'slug', 'nama_jalan', 'jam_mulai', 'jam_selesai', 'arah_1', 'arah_2', 'total_arah_1', 'total_arah_2', 'total_2_arah', 'jalans_id',
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
