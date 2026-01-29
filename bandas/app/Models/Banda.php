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

 public function albuns() 
 //aqui ta-se a dizer que uma banda tem varios albuns
 // o nome da funcao tem que ser igual ao nome da tabela,onde se busca os dados, em plural
    {
        return $this->hasMany(Album::class);
    }

}
