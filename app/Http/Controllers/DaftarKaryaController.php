<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarKarya;

class DaftarKaryaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('input-karya', ['title' => 'DaftarKarya']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        $fileName = time() . $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $requestData["photo"] = '/' . $path;
        daftarkarya::create($requestData);
        //return redirect('/Dashboard')->with('toast_success', 'Pengajuan telah ditambahkan');
        //$validatedData = $request->all();
        //$requestData = $request->all();
        //$fileName = time() . $request->file('photo')->getClientOriginalName();
        //$path = $request->file('photo')->store('images', $fileName, 'public');
        //$requestData["photo"] = '/' . $path;
        //DaftarKarya::create($requestData);
         //return redirect('/aktivitas-sanggar')->with('toast_success', 'aktivitas telah ditambahkan');

        return redirect('/input-karya')->with('success', 'Data Karya berhasil ditambahkan');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
