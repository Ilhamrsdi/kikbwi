<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\sanggar;
use App\Models\User;
use App\Models\jenis_kesenian;
use App\Models\sub_kesenian;
use mysqli;

class sanggarcontroller extends Controller
{
    //
    // public function index()
    // {
    //     $pagination = 10;
    //     $datas = sanggar::paginate($pagination);
    //     return view('dashboard', ['sanggar' => $datas, 'title' => 'Dashboard']);
    // }

    // public function store(Request $request)
    // {
    //     $requestData = $request->all();
    //     $fileName = time() . $request->file('photo')->getClientOriginalName();
    //     $path = $request->file('photo')->storeAs('images', $fileName, 'public');
    //     $requestData["photo"] = '/' . $path;
    //     sanggar::create($requestData);
    //     return redirect('/Dashboard')->with('toast_success', 'Pengajuan telah ditambahkan');
    // }

    // // public function edit(){}
    // public function destroy($id)
    // {
    //     try {
    //         DB::table('anggotas')->where('sanggar_id', $id)->delete();
    //         DB::table('daftar_karyas')->where('sanggar_id', $id)->delete();
    //         DB::table('sanggars')->where('id', $id)->delete();

    //         return redirect('/Dashboard')->with('toast_success', 'Data telah dihapus');
    //         //code...
    //     } catch (\Throwable $th) {
    //         return $th->getMessage();
    //         //throw $th; 
    //     }
    //     //delete post

    //     //redirect to index

    // }

    // public function show(Sanggar $data)
    // {
    //     //return $data-> DaftarKarya;
    //     // dd($data);
    //     return view(
    //         'detailsanggar',
    //         [
    //             "data" =>  $data,
    //             "title" => 'Detail-Sanggar',
    //             "daftarkarya" => $data->daftarkarya,
    //             "anggota" => $data->anggota,
    //         ]
    //     );
    // }

    // public function detailsanggar()
    // {
    //     return 'view';
    // }
    // public function changeStatusSanggar(Request $request, $id){
    //     $data = Sanggar::find($id);
    //     $data->update([
    //         'status' => $request->status
    //     ]);
    //     //return 'view';
    //     return  redirect()->route('index');
    // }

    public function index(){
        $datas = sanggar::where('status', 'menunggu')->get();
        $sanggar = sanggar::where('status', 'aktif')->get();
        $data = sanggar::where('status', 'tidak aktif')->get();
        $totalk = Kecamatan::count();
        $totaljk = jenis_kesenian::count();
        $totalsk = sub_kesenian::count();
        $totalp = User::count();

        return view('dashboard', compact('sanggar', 'data', 'datas', 'totalk', 'totaljk', 'totalsk', 'totalp'));
    }

    public function store(Request $request)
    {
        $requestData = $request->all();
        $fileName = time() . $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $requestData["photo"] = '/' . $path;

        
        
        sanggar::create($requestData);
        return redirect('/Dashboard')->with('toast_success', 'Pengajuan telah ditambahkan');
    }

    // public function edit(){}
    public function destroy($id)
    {
        try {
            DB::table('anggotas')->where('sanggar_id', $id)->delete();
            DB::table('daftar_karyas')->where('sanggar_id', $id)->delete();
            DB::table('sanggars')->where('id', $id)->delete();

            return redirect('/Dashboard')->with('toast_success', 'Data telah dihapus');
            //code...
        } catch (\Throwable $th) {
            return $th->getMessage();
            //throw $th; 
        }
        //delete post

        //redirect to index

    }

    public function show(Sanggar $data)
    {
        //return $data-> DaftarKarya;
        // dd($data);
        return view(
            'detailsanggar',
            [
                "data" =>  $data,
                "title" => 'Detail-Sanggar',
                "daftarkarya" => $data->daftarkarya,
                "anggota" => $data->anggota,
            ]
        );
    }

    public function detailsanggar()
    {
        return 'view';
    }

    public function changeStatusSanggar(Request $request, $id){        
        $data = Sanggar::find($id);
        $data->update([
            'status' => $request->status
        ]);
        return redirect()->route('index');
    }
}

