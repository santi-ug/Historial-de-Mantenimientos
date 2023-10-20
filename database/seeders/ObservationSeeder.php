<?php

namespace Database\Seeders;

use App\Models\Observation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Observation::unguard();
        Observation::create([
            'description' => 'Pantalla dañada',
            'owner' => 1,
            'computer' => 1,
            'category' => 4
        ]);
        Observation::create([
            'description' => 'Computador esta desactulizado',
            'owner' => 1,
            'computer' => 2,
            'category' => 1
        ]);
        Observation::create([
            'description' => "Tecla 'a' no funciona",
            'owner' => 1,
            'computer' => 3,
            'category' => 4
        ]);
        Observation::reguard();
    }
}
