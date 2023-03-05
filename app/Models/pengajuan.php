<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajuan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $fillable = [
        'nama',
        'desa',
        'kecamatan',
        'pembinaan_seni',
        'status_kepemilikan',
        'status_validasi'
    ];

    public function sanggar()
    {
        return $this->belongsTo('App\Models\sanggar', 'id');
    }
}
