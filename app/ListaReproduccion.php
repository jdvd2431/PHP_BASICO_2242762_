<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ListaReproduccion extends Model
{
    protected $table = "playlist";
    protected $primaryKey = "PlayListId";
    public $timestamps = false;

    public function canciones(){
        return $this->BelongsToMany(
            'App\Cancion',
            'playlisttrack',
            'PlayListId',
            'TrackId'
        );
    }
}
