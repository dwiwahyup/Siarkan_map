<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Jalan extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'slug', 'nama_jalan', 'panjang_jalan', 'status_jalan'
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['nama_jalan']
            ]
        ];
    }

    public function arusLantas()
    {
        return $this->hasMany(ArusLantas::class, 'jalans_id', 'id');
    }
}
