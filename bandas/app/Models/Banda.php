<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banda extends Model
{
    //

    //
    protected $table = 'bandas';

    protected $fillable = [
    'id',
    'nome',
    'src_foto',
    'numero_albuns_criados',

];

 public function albuns() //nao percebi tudo
    {
        return $this->hasMany(Album::class);
    }

}
