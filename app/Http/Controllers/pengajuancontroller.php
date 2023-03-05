<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use App\Models\jenis_kesenian;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\pengajuan;
use App\Models\sanggar;
use Illuminate\Support\Facades\DB;

class pengajuancontroller extends Controller
{
    public function index(){
        $kecamatans = DB::table('kecamatans')->get();

    	return view('pengajuan',['kecamatans' => $kecamatans]);
        // return view('Pengajuan', ['title' => 'Pengajuan']);
    }
    public function store(Request $request)
    {
        //
        
        // $no_induk_sanggar = Helper::IDGenerator(new pengajuan, 'no_induk_sanggar', 5, 'STD');
        $validatedData = $request->validate([
            'nama' => ['required|max:255'],
            'rt' => 'required',
            'rw' =>'required',
            'dusun' => 'required',
            'desa' => 'required',
            'kecamatan' => 'required',
            'kode_pos' => 'required',
            'lintang' => 'required',
            'bujur' => 'required',
            'pembinaan_seni' => 'required',
            'sk_pendirian' => 'required',
            'tanggal_pendirian' => 'required',
            'status_kepemilikan' => 'required',
            'no_akta' => 'required',
            'tanggal_penetapan_notaris' => 'required',
            'pejabat_pengesahan_notaris' => 'required',
            'tanggal_penetapan_kemenkumham' => 'required',
            'no_pendaftaran_kemenkumham' => 'required',
            'no_rekening' => 'required',
            'nama_bank' => 'required',
            'cabang_kcp_unit' => 'required',
            'an_rekening' => 'required',
            'luas_tanah_milik' => 'required',
            'luas_tanah_bukanmilik' => 'required',
            'nama_wajib_pajak' => 'required',
            'npwp' => 'required',
            'no_tlp' => 'required',
            'no_fax' => 'required',

        ]);
        // $validatedData['photo'] = $request->file('photo')->store('post-image');
        // User::create($validatedData);
        
        // return redirect('/Dashboard')->with('success', 'Data pengajuan berhasil ditambahkan');

        $validatedData['photo'] = $request->file('photo')->store('post-image');
        User::create($validatedData);
        
        return redirect('/Pengajuan')->with('success', 'Data pengajuan berhasil ditambahkan');

        $requestData = $request->all();
        $fileName = time() . $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $requestData["photo"] = '/storage/' . $path;
        pengajuan::create($requestData);
        return redirect('pengajuan')->with('flash_message', 'Upload Addedd!');
    }

    // public function code(){
    //     $codek = Kecamatan::max('kode_kecamatan');
    //     $codejk = jenis_kesenian::max('id');
    //     $codep = sanggar::max('id');
    //     $nomor = 1;
    //     $no = sprintf("%03",$nomor). '/' . $codep . '/' . $codek . '/' . $codejk;

    //     return view('pengajuan', compact($no));
    // }
}

