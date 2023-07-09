<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlamatUdd extends Model
{
    use HasFactory;

    protected $table = 'alamat_udds';
    protected $fillable = 
    [
        'udd_kabkot', 'udd_alamat', 'telp' ,'email'
    ];
}
