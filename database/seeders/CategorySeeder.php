<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::unguard();
        Category::create([
            'type' => 'Instalación de software'
        ]);
        Category::create([
            'type' => 'Mantenimiento preventivo'
        ]);
        Category::create([
            'type' => 'Mantenimiento correctivo'
        ]);
        Category::create([
            'type' => 'Cambio de hardware'
        ]);
        Category::reguard();
    }
}
