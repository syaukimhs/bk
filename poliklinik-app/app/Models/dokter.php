<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_poli',
        'nama',
        'alamat',
        'no_hp',
        // Tambahkan atribut lain yang juga boleh diisi secara massal
    ];
}
