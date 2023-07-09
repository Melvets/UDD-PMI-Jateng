<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

use App\Models\User;
use App\Models\AlamatUDD;
use App\Models\StokDarah;
use App\Models\JadwalMU;


class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'admin',
            'password' => bcrypt ('12345')
        ]);

        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kota Semarang',
            'udd_alamat' => 'Jl MGR Soegijopranoto SJ No. 31 dan 35',
            'email' => 'uddpmismg@yahoo.com',
            'telp' => '024 - 3515050'
          ]);

        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kabupaten Semarang',
            'udd_alamat' => 'Jl. Gatot Subroto No.96 Ungaran',
            'email' => 'udd_kabsemarang@pmi.or.id',
            'telp' => '024 - 76902606'
          ]);

        AlamatUDD::create([
            'udd_kabkot' => 'UDD PMI Kota Tegal',
            'udd_alamat' => 'Jl. Aiptu KS. Tubun No. 8',
            'email' => 'udd_kotategal@pmi.or.id',
            'telp' => '0283 - 343244'
          ]);

        StokDarah::create([
            'id_namaudd' => 1,
            'golda_a' => 444,
            'golda_b' => 519,
            'golda_ab' => 219,
            'golda_o' => 557,
            'tanggal' => Carbon::now()
          ]);

        StokDarah::create([
            'id_namaudd' => 3,
            'golda_a' => 6,
            'golda_b' => 36,
            'golda_ab' => 11,
            'golda_o' => 11,
            'tanggal' => Carbon::now()
          ]);

        StokDarah::create([
            'id_namaudd' => 2,
            'golda_a' => 3,
            'golda_b' => 65,
            'golda_ab' => 25,
            'golda_o' => 92,
            'tanggal' => Carbon::now()
          ]);

        JadwalMU::create([
            'id_namaudd' => 1,
            'tempat' => 'SMK Negeri 2 Semarang',
            'alamat' => 'Jl. Dr. Cipto',
            'jam_mulai' => 09.00,
            'jam_selesai' => 12.00,
            'peruntukan' => 'Internal',
            'tanggal' => Carbon::createFromFormat('Y-m-d', '2023-06-18')
        ]);
    }
}
