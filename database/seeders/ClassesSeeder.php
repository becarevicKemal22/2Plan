<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classes')->insert(
            ['subject' => 'Matematika', 'professor' => 'Elma Bajramović', 'day' => 'Tuesday', 'classroom' => '101', 'schoolClass' => 'III-4'],
            ['subject' => 'Programiranje', 'professor' => 'Nina Šmalcelj', 'day' => 'Wednesday', 'classroom' => '107', 'schoolClass' => 'III-4'],
            ['subject' => 'Informatika', 'professor' => 'Aida Arnautović', 'day' => 'Thursday', 'classroom' => '107', 'schoolClass' => 'III-4'],
            ['subject' => 'Bosanski jezik i knjizevnost', 'professor' => 'Jasmina Hasanbegović-Herenda', 'day' => 'Monday', 'classroom' => '101', 'schoolClass' => 'III-4'],
            ['subject' => 'Matematičke osnove kompjuterskih nauka', 'professor' => 'Feđa Šolak', 'day' => 'Friday', 'classroom' => '101', 'schoolClass' => 'III-4'],
            ['subject' => 'Baze podataka', 'professor' => 'Merima Kurtović-Čengić', 'day' => 'Tuesday', 'classroom' => '001', 'schoolClass' => 'III-4'],
            ['subject' => 'Engleski jezik', 'professor' => 'Elma Begović', 'day' => 'Tuesday', 'classroom' => '101', 'schoolClass' => 'III-4'],
            ['subject' => 'Latinski jezik', 'professor' => 'Ana Đogović', 'day' => 'Tuesday', 'classroom' => '101', 'schoolClass' => 'III-4'],
        );
    }
}
