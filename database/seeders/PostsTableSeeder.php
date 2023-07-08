<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    $data = [
        [
            'thumbnail' => 'thumbnail1.jpg',
            'judul' => 'Post 1',
            'konten' => 'Konten Post 1',
            'status_publish' => 'Publish',
            'tanggal_publikasi' => now(),
        ],
        [
            'thumbnail' => 'thumbnail2.jpg',
            'judul' => 'Post 2',
            'konten' => 'Konten Post 2',
            'status_publish' => 'Draft',
            'tanggal_publikasi' => null,
        ],
        // Tambahkan data lainnya sesuai kebutuhan
    ];

    DB::table('posts')->insert($data);
}

}
