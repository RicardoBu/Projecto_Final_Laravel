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
            'src_foto' => 'beatles.jpg',
        ]);

        Banda::create([
            'nome' => 'U2',
            'src_foto' => 'u2.jpg',
        ]);
    }
}
