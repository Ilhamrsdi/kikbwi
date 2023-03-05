<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
class AnggotaController extends Controller
{
    public function index(){
        return view('anggota', ['title' => 'Anggota']);
    }
    public function store(Request $request)
    {
        //
        $validatedData = $request->all();
        //$validatedData = $request->validate([
            //'id_sanggar' => 'required',
            //'nama' => 'required',
            //'jenis_kelamin'=> 'required',
            //'alamat' => 'required',
            //'status_pekerjaan' =>'required',
            //'jabatan' => 'required',
            //'status_keanggotaan' => 'required',
            //'tempat_lahir' => 'required',
            //'tanggal_lahir' => 'required',
            Anggota::create($validatedData);
        //anggotas::create($validatedData);
        
        return redirect('/Dashboard')->with('success', 'Data Anggota berhasil ditambahkan');
    }
}
