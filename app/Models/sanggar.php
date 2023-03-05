<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanggar extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $fillable = ['nama', 'no_induk_sanggar', 'desa', 'kecamatan'];


    public function DaftarKarya()

    {
        return $this->hasMany(DaftarKarya::class);
    }

    public function Anggota()
    {
        return $this->hasMany(Anggota::class);
    }

    public function Kecamatan(){
        return $this->hasMany(Kecamatan::class);
    }

}
