<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Pulang',
            'description' => 'Novel tentang perjalanan pulang',
            'price' => 40000,
            'stock' => 15,
            'cover_photo' => 'pulang.jpg',
            'genre_id' => 1,
            'author_id' => 1
        ]);

        Book::create([
            'title' => 'Sebuah Seni Untuk Bersikap Bodo Amat',
            'description' => 'Buku motivasi',
            'price' => 25000,
            'stock' => 5,
            'cover_photo' => 'sebuah_seni.jpg',
            'genre_id' => 2,
            'author_id' => 2
        ]);

        Book::create([
            'title' => 'Naruto',
            'description' => 'Cerita ninja',
            'price' => 30000,
            'stock' => 55,
            'cover_photo' => 'naruto.jpg',
            'genre_id' => 3,
            'author_id' => 3
        ]);

        Book::create([
            'title' => 'Laskar Pelangi',
            'description' => 'Perjuangan anak sekolah',
            'price' => 35000,
            'stock' => 10,
            'cover_photo' => 'laskar_pelangi.jpg',
            'genre_id' => 1,
            'author_id' => 5 // sudah diperbaiki
        ]);

        Book::create([
            'title' => 'Atomic Habits',
            'description' => 'Membangun kebiasaan baik',
            'price' => 45000,
            'stock' => 20,
            'cover_photo' => 'atomic_habits.jpg',
            'genre_id' => 2,
            'author_id' => 4
        ]);
    }
}
