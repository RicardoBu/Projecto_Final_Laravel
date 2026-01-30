<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    //

    protected $table = 'albuns';

    protected $fillable = [
    'nome',
    'src_imagem',
    'data_lancamento',
    'banda_id',

];

public function banda()
//aqui ta-se a dizer que album pertence a 1 banda
    {
        return $this->belongsTo(Banda::class);
    }
}
