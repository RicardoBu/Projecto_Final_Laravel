<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Albuns extends Model
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
    {
        return $this->belongsTo(Banda::class);
    }
}
