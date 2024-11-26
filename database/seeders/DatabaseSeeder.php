<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Apartment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Apartment::factory()
        ->count(5) // Create 5 apartments
        ->hasRooms(3, function (array $attributes, Apartment $apartment) {
            // Create 3 rooms for each apartment with tenants
            return [
                'tenants' => Tenant::factory(),
            ];
        })
        ->create();
    }
}
