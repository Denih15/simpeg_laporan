<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
        User::create([
            'id' => 1,
            'name' => 'denih',
            'email' => 'denih4578@gmail.com',
            'password' => '$2y$10$jQLEfIyUjIvYNul7zcIJSOxJWdfCt12qhRVxw/18qhvgHs55N1N8y',
            'role_id' => 1
        ]);
        $this->call([
            RoleSeeder::class,
            FeatureSeeder::class,
            RoleFeature::class,
        ]);
    }
}
