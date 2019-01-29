<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikels extends Model
{
    protected $table='artikels';

    protected $fillable=['judul','gambar','deskripsi','publish','slug'];

    public $timestamps= true;

    

    public function getRouteKeyName()
    {
    	return 'slug';
    }
}