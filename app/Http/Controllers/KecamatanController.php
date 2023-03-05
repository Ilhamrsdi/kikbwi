<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Kecamatan;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data dari table 
    	$kecamatans = DB::table('kecamatans')->get();
 
    	// mengirim data ke view index
    	return view('kecamatan',['kecamatans' => $kecamatans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kecamatan-create');
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
	    DB::table('kecamatans')->insert([
		    'kode_kecamatan' => $request->kode_kecamatan,
		    'nama_kecamatan' => $request->nama_kecamatan,
	    ]);
	    // alihkan halaman ke halaman kecamatan
	    return redirect('/kecamatan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // mengambil data berdasarkan id yang dipilih
	    $kecamatans = DB::table('kecamatans')->where('id',$id)->get();
	    // passing data yang didapat ke view edit.blade.php
	    return view('kecamatan-edit',['kecamatans' => $kecamatans]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // update data 
	    DB::table('kecamatans')->where('id',$request->id)->update([
		    'kode_kecamatan' => $request->kode_kecamatan,
		    'nama_kecamatan' => $request->nama_kecamatan,
	    ]);
	    // alihkan halaman
	    return redirect('/kecamatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::table('kecamatans')->where('id', $id)->delete();

            return redirect('/kecamatan')->with('toast_success', 'Data telah dihapus');
            //code...
        } catch (\Throwable $th) {
            return $th->getMessage();
            //throw $th; 
        }
    }
}
