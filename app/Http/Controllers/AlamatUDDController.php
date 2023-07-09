<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\AlamatUdd;

class AlamatUDDController extends Controller
{
    public function index()
    {
        $data_alamatudd = AlamatUdd::all();
        return view ('alamatudd', ["title" => "Alamat UDD"], compact('data_alamatudd'));
    }

    // Create
    public function create ()
    {
        return view ('crud/c_alamatudd', ["title" => "Tambah Data Alamat UDD"]);
    }

    public function store(Request $request)
    {
        DB::table ('alamat_udds') -> insert ([
            'udd_kabkot' => $request-> udd_kabkot,
            'udd_alamat' => $request-> alamat,
            'telp' => $request-> no_telp,
            'email' => $request-> email
        ]);
        return redirect('/dashboard/alamatudd');
    }

    // Update
    public function edit($id)
    {
        $alamatudd = DB::table('alamat_udds')->where('id_alamatudd', $id)->get();
        return view ('crud/e_alamatudd', ["title" => "Edit Data", 'data_alamatudd' => $alamatudd]);
    }

    public function update (Request $request)
    {
        DB::table('alamat_udds')->where('id_alamatudd', $request->id)->update([
            'udd_kabkot' => $request -> udd_kabkot,
            'udd_alamat' => $request -> alamat,
            'telp' => $request -> no_telp,
            'email' => $request -> email
        ]);
        return redirect('/dashboard/alamatudd');
    }

    // Delete
    public function delete($id)
    {
        DB::table('alamat_udds')->where('id_alamatudd', $id)->delete();
        return redirect('/dashboard/alamatudd');
    }
}
