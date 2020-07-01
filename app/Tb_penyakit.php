<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tb_penyakit extends Model
{
    //
    protected $fillable = [
        'nama_penyakit', 'deskripsi_penyakit', 'jenis_diet', 'anjuran_makanan', 'larangan_makanan'
    ];
}
