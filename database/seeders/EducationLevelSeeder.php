<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\EducationLevel::insert([
            ['name' => 'Taman Kanak-Kanak', 'code' => 'TK'],
            ['name' => 'Sekolah Dasar', 'code' => 'SD'],
            ['name' => 'Sekolah Menengah Pertama', 'code' => 'SMP'],
            ['name' => 'Sekolah Menengah Atas', 'code' => 'SMA'],
            ['name' => 'Perguruan Tinggi', 'code' => 'PT'],
        ]);
    }
}
