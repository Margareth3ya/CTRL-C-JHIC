<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Content;

class PrestasiSeeder extends Seeder
{
    public function run(): void
    {
        Content::create([
            'title' => 'Juara 1 Lomba Sains Nasional',
            'credit' => 'Ahmad Zulfikar - XI IPA 3',
            'body' => 'Meraih Juara 1 dalam kompetisi sains nasional tingkat SMA pada bidang Fisika.',
            'image' => 'Prestasi1.jpg',
            'folder' => 'prestasi',
        ]);
    }
}
