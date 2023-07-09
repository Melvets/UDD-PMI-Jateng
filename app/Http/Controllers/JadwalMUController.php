<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalMUController extends Controller
{
    public function index ()
    {
        $data_jadwalmu = DB::table('jadwal_mus')
                            -> join ('alamat_udds', 'jadwal_mus.id_namaudd', '=', 'alamat_udds.id_alamatudd')
                            -> select ('jadwal_mus.*', 'alamat_udds.udd_kabkot')
                            -> get ();

                            // dd($data_jadwalmu);

        return view ('jadwalmu', ["title" => "Jadwal MU", "slug" => "jadwal-mu"], compact('data_jadwalmu'));
    }
}
