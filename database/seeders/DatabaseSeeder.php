<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Created Automatically
        // User::factory(10)->create();
        
        // $data_dummy = User::create([
        //     'name' => 'Muhamad Gunawan',
        //     'username' => 'igunawan550',
        //     'email' => 'igunnawan24@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10)
        // ]);

        // Created Normally
        // User::create([
        //     'name' => 'Muhamad Gunawan',
        //     'username' => 'igunawan550',
        //     'email' => 'igunnawan24@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10)
        // ]);

        // Category::create([
        //     'name' => 'Web Design',
        //     'slug' => 'web-design'
        // ]);

        // Post::create([
        //     'title' => 'Judul Artikel 1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-artikel-1',
        //     'body' => 'Informatika adalah salah satu jurusan di Universitas Dipoengoro
        //     lebih tepatnya ada di Fakultas Sains dan Matematika'
        // ]);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all()
            // Category::factory(3)->create(),
            // $data_dummy
        ])->create();
    }
}
