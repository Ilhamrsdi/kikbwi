<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis_kesenian extends Model
{
    use HasFactory;
    protected $guarded =["nama_jenis"];
    public function sanggar()
    {
        return $this->belongsTo(sanggar::class,'sanggar_id');
    }
}
