<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Banda;

class BandaSeeder extends Seeder
{
    public function run(): void
    {
        Banda::create([
            'nome' => 'The Beatles',
            'src_foto' => 'bandas/beatles.jpg',
            'numero_albuns' => 2,
        ]);

        Banda::create([
            'nome' => 'U2',
            'src_foto' => 'bandas/u2.avif',
            'numero_albuns' => 2,
        ]);
    }
}
