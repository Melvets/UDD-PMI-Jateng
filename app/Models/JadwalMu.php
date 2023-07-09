<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalMu extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'id_namaudd', 'tempat', 'alamat', 'jam_mulai', 'jam_selesai', 'peruntukan', 'tanggal'
    ];
}
