<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarKarya extends Model
{
    use HasFactory;
    protected $guarded =["id"];
    public function sanggar()
    {
        return $this->belongsTo(Sanggar::class,'sanggar_id');
    }
}
