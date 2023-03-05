<?php

namespace App\Http\Controllers;

use App\Models\Aktivitassanggar;
use Illuminate\Http\Request;

class AktivitassanggarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $aktivitassanggars = Aktivitassanggar::orderBy('tanggal','desc')->get();
        return view ('aktivitas-sanggar', compact('aktivitassanggars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('create');
        return view('aktivitas-sanggar-create');
    }

    public function store(Request $request)
    {
        $requestData = $request->all();
        $fileName = time() . $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $requestData["photo"] = '/storage/' . $path;
        aktivitassanggar::create($requestData);
        return redirect('/aktivitas-sanggar')->with('toast_success', 'aktivitas telah ditambahkan');
    }
}