<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com',
            'password' => 'john123'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        // Listing::create([
        //     'title' => 'Entry 1',
        //     'tags' => 'Tag1, Tag2',
        //     'company' => 'Company A',
        //     'location' => 'Location A',
        //     'email' => 'email@example.com',
        //     'website' => 'https://example.com',
        //     'description' => 'Description for Entry 1',
        // ]);

        // Listing::create([
        //     'title' => 'Entry 2',
        //     'tags' => 'Tag3, Tag4',
        //     'company' => 'Company B',
        //     'location' => 'Location B',
        //     'email' => 'email2@example.com',
        //     'website' => 'https://example2.com',
        //     'description' => 'Description for Entry 2',
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
