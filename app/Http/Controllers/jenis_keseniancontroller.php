<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\jenis_kesenian;
use App\Models\sanggar;

class jenis_keseniancontroller extends Controller
{
    //

    public function index()
    {

        // mengambil data dari table 
        $jeniskesenian = DB::table('jenis_kesenians')->get();

        // mengirim data ke view index
        return view('jeniskesenian', ['jenis_kesenians' => $jeniskesenian]);
    }

    public function create()
    {
        return view('jenis-seni-create', ['title' => 'Jenis-Kesenian-Create']);
    }

    public function store(Request $request)
    {
        // insert data ke table 
        DB::table('jenis_kesenians')->insert([
            'id' => $request->id,
            'nama_jnskesenian' => $request->nama_jnskesenian
        ]);
        // alihkan halaman ke halaman jenis kesenian
        return redirect('/jeniskesenian');
    }

    public function destroy($id)
    {
        try {
            DB::table('jenis_kesenians')->where('id', $id)->delete();

            return redirect('/jeniskesenian')->with('toast_success', 'Data telah dihapus');
            //code...
        } catch (\Throwable $th) {
            return $th->getMessage();
            //throw $th; 
        }
    }

    public function datasanggar(sanggar $nama_jenis)
    {
        //return $id-> DaftarKarya;
        return view('/Jenis-Kesenian',[
            "data" =>  $nama_jenis,
            "title" => 'Data-Sanggar',
            "daftarkarya" => $nama_jenis-> jenis_kesenian,
        ]
    );
    }

    //
    public function seni()
    {
        $dataa = jenis_kesenian::all();
        return view('jeniskesenian', ['dataseni' => $dataa, 'title' => 'Data-Kesenian']);
    }

    // public function show()
    // {
    //     $jenissenis = jenisseni::all();
    //     return view('jenisseni.show', compact('jenissenis'));
    // }

    public function dataseni(jenis_kesenian $id_KIK, $nama_Sanggar, $status_pemilik, $alamat )
    {
        //return $id-> DaftarKarya;
        return view('/Jenis-Kesenian',[
            "data" =>  $id_KIK, $nama_Sanggar, $status_pemilik, $alamat,
            "title" => 'Data-Kesenian',
            "daftarkarya" => $id_KIK, $nama_Sanggar, $status_pemilik, $alamat-> dataseni,
        ]
    );
    }
}
