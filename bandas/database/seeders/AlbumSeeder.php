<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Album;
use App\Models\Banda;

class AlbumSeeder extends Seeder
{
    public function run(): void
    {
        $beatles = Banda::where('nome', 'The Beatles')->first();
        $u2 = Banda::where('nome', 'U2')->first();

        // Beatles
        Album::create([
            'nome' => 'Abbey Road',
            'src_imagem' => 'abbey_road.jpg',
            'data_lancamento' => '1969-09-26',
            'banda_id' => $beatles->id,
        ]);

        Album::create([
            'nome' => 'Let It Be',
            'src_imagem' => 'let_it_be.jpg',
            'data_lancamento' => '1970-05-08',
            'banda_id' => $beatles->id,
        ]);

        // U2
        Album::create([
            'nome' => 'The Joshua Tree',
            'src_imagem' => 'joshua_tree.jpg',
            'data_lancamento' => '1987-03-09',
            'banda_id' => $u2->id,
        ]);

        Album::create([
            'nome' => 'Achtung Baby',
            'src_imagem' => 'achtung_baby.jpg',
            'data_lancamento' => '1991-11-18',
            'banda_id' => $u2->id,
        ]);
    }
}
