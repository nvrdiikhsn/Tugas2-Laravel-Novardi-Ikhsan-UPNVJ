<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create(['name' => 'Tere Liye', 'bio' => 'Penulis novel Indonesia']);
        Author::create(['name' => 'Mark Manson', 'bio' => 'Penulis buku motivasi']);
        Author::create(['name' => 'Masashi Kishimoto', 'bio' => 'Pembuat Naruto']);
        Author::create(['name' => 'James Clear', 'bio' => 'Penulis Atomic Habits']);
        Author::create(['name' => 'Andrea Hirata', 'bio' => 'Penulis Laskar Pelangi']);
        Author::create(['name' => 'Raditya Dika', 'bio' => 'Penulis dan komedian']);
        Author::create(['name' => 'Pramoedya Ananta Toer', 'bio' => 'Sastrawan Indonesia']);
        Author::create(['name' => 'Habiburrahman El Shirazy', 'bio' => 'Penulis novel islami']);
    }
}
