<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Website;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\Website::factory(10)->create();

        User::factory()
            ->has(Website::factory()->count(2))
            ->create();

            User::factory()
            ->has(Website::factory()->count(2))
            ->create();

            User::factory()
            ->has(Website::factory()->count(2))
            ->create();

            User::factory()
            ->has(Website::factory()->count(2))
            ->create();

            User::factory()
            ->has(Website::factory()->count(2))
            ->create();
    }
}
