<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
        ]);

        $categories = ['Berita Nasional', 'Film'];
        foreach($categories as $category) {
            Category::create([
                'name' => $category,
                'description' => 'Tambahkan deskripsi sendiri'
            ]);
        }
    }
}
