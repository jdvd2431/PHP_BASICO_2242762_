<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    //Configuraciones basicas
    protected $table = "artist";
    protected $primaryKey = "ArtistId";
    public $timestamps = false;
}
