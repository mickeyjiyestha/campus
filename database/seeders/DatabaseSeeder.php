<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use App\Models\ClassRoom;
use App\Models\Teacher;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        student::factory(40)->create();
        Teacher::factory(20)->create();
        
    ClassRoom::create([
        'Jurusan' => 'Teknologi Informasi',
        'Program_Studi' => 'Manajemen Informatika',
        'Kelas' => 'A'
    ]);

    ClassRoom::create([
        'Jurusan' => 'Teknologi Informasi',
        'Program_Studi' => 'Manajemen Informatika',
        'Kelas' => 'B'
    ]);

    ClassRoom::create([
        'Jurusan' => 'Teknologi Informasi',
        'Program_Studi' => 'Manajemen Informatika',
        'Kelas' => 'C'
    ]);

    ClassRoom::create([
        'Jurusan' => 'Teknologi Informasi',
        'Program_Studi' => 'Manajemen Informatika',
        'Kelas' => 'D'
    ]);
    }
}