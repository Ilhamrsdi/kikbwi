<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class subkeseniancontroller extends Controller
{
    //
    public function index()
    {
        // mengambil data dari table 
        $subkesenian = DB::table('sub_kesenians')->get();

        // mengirim data ke view index
        return view('sub-kesenian', ['sub_kesenians' => $subkesenian]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sub-seni-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // insert data ke table 
        DB::table('sub_kesenians')->insert([
            'id_jenis_kesenian' => $request->id_jenis_kesenian,
            'nama_subkesenian' => $request->nama_subkesenian,
        ]);
        // alihkan halaman ke halaman sub kesenian
        return redirect('/sub-seni');
    }

    public function destroy($id)
    {
        try {
            DB::table('sub_kesenians')->where('id', $id)->delete();

            return redirect('/sub-seni')->with('toast_success', 'Data telah dihapus');
            //code...
        } catch (\Throwable $th) {
            return $th->getMessage();
            //throw $th; 
        }
    }
}
