<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MitraKerja extends Model
{
     protected $table='mitrakerja';

    protected $fillable=['gambar','slug'];

    public $timestamps= true;
}
