<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokDarah extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'id_namaudd', 'golda_a', 'golda_b' ,'golda_ab', 'golda_o', 'tanggal'
    ];
}
