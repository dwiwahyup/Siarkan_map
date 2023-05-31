<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_jalan',
        'alamat',
        'latitude',
        'longitude',
        'jam_kecelakaan',
        'kepadatan',
        'intensitas_kecelakaan',
        'kondisi_korban',
        'tingkat_kerawanan',
        'rules_id',
    ];

    public function rules()
    {
        return $this->belongsTo(Rules::class);
    }
}
