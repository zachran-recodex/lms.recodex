<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            [
                'title' => 'Keselamatan Kerja untuk Teknisi',
                'slug' => Str::slug('Keselamatan Kerja untuk Teknisi'),
                'image' => 'keselamatan_kerja.jpg',
                'description' => 'Artikel ini membahas pentingnya keselamatan kerja di tempat kerja, terutama untuk teknisi dan operator alat berat.',
                'is_active' => true,
            ],
            [
                'title' => 'Panduan Perawatan Mesin Diesel',
                'slug' => Str::slug('Panduan Perawatan Mesin Diesel'),
                'image' => 'perawatan_mesin_diesel.jpg',
                'description' => 'Pelajari cara merawat mesin diesel agar tetap bekerja secara optimal dan memiliki umur panjang.',
                'is_active' => true,
            ],
            [
                'title' => 'Efisiensi Operasi Alat Berat',
                'slug' => Str::slug('Efisiensi Operasi Alat Berat'),
                'image' => 'efisiensi_operasi_alat_berat.jpg',
                'description' => 'Artikel ini memberikan tips dan trik untuk meningkatkan efisiensi dalam mengoperasikan alat berat.',
                'is_active' => false,
            ],
            [
                'title' => 'Teknologi Terkini dalam Alat Berat',
                'slug' => Str::slug('Teknologi Terkini dalam Alat Berat'),
                'image' => 'teknologi_terkini_alat_berat.jpg',
                'description' => 'Mengenal teknologi terkini yang diterapkan dalam industri alat berat untuk meningkatkan produktivitas.',
                'is_active' => true,
            ],
            [
                'title' => 'Cara Memulai Karir sebagai Operator Alat Berat',
                'slug' => Str::slug('Cara Memulai Karir sebagai Operator Alat Berat'),
                'image' => 'karir_operator_alat_berat.jpg',
                'description' => 'Panduan lengkap untuk memulai karir sebagai operator alat berat, termasuk keterampilan yang dibutuhkan dan prospek karir.',
                'is_active' => false,
            ],
        ];

        foreach ($articles as $article) {
            Article::create($article);
        }
    }
}
