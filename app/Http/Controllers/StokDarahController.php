<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\AlamatUdd;

class StokDarahController extends Controller
{
    public function index()
    {
        $data_stokdarah = DB::table('stok_darahs')
                            -> join ('alamat_udds', 'stok_darahs.id_namaudd', '=', 'alamat_udds.id_alamatudd')
                            -> select ('stok_darahs.*', 'alamat_udds.udd_kabkot')
                            -> get ();

                            // dd($data_stokdarah);

        return view ('stokdarah', ["title" => "Stok Darah"], compact('data_stokdarah'));
    }

    public function create()
    {
        $udd_kabkot = AlamatUdd::all();
        return view ('crud/c_stokdarah', ["title" => "Tambah Data Stok Darah"] , compact('udd_kabkot'));
    }

    public function store(Request $request)
    {
        DB::table('stok_darahs')
            -> join ('alamat_udds', 'stok_darahs.id_namaudd', '=', 'alamat_udds.id_alamatudd')
            -> select ('stok_darahs.*', 'alamat_udds.udd_kabkot')
            -> insert ([
                'udd_kabkot' => $request -> udd_kabkot,
                'golda_a'    => $request -> golda_a,
                'golda_b'    => $request -> golda_b,
                'golda_ab'   => $request -> golda_ab,
                'golda_o'    => $request -> golda_o,
                'tanggal'    => $request -> tgl_update
            ]);
        return redirect ('/dashboard/stokdarah');
    }
}
