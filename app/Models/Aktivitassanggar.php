<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aktivitassanggar extends Model
{
    use HasFactory;
    protected $fillable = ['nm_sanggar', 'kegiatan', 'tanggal', 'photo'];
}