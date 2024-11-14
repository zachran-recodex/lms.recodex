<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Module;
use Illuminate\Support\Str;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modules = [
            [
                'title' => 'Pengenalan Mekanika Traktor',
                'slug' => Str::slug('Pengenalan Mekanika Traktor'),
                'image' => 'mekanika_traktor.jpg',
                'is_active' => true,
            ],
            [
                'title' => 'Perawatan dan Perbaikan Traktor',
                'slug' => Str::slug('Perawatan dan Perbaikan Traktor'),
                'image' => 'perawatan_traktor.jpg',
                'is_active' => true,
            ],
            [
                'title' => 'Operasi Traktor Lanjutan',
                'slug' => Str::slug('Operasi Traktor Lanjutan'),
                'image' => 'operasi_traktor.jpg',
                'is_active' => false,
            ],
        ];

        foreach ($modules as $module) {
            Module::create($module);
        }
    }
}
