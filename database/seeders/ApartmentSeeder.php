<?php

// database/seeders/ApartmentSeeder.php

namespace Database\Seeders;

use App\Models\Apartment;
use App\Models\Room;
use App\Models\Tenant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Apartment::factory()
            ->count(5) // 5 apartments
            ->sequence(fn($sequence) => ['name' => 'Apartment ' . ($sequence->index + 1)]) // Sequential apartment names
            ->has(
                Room::factory()
                    ->count(3) // 3 rooms per apartment
                    ->state(
                        new Sequence(
                            ['room_number' => 'Room 1'],
                            ['room_number' => 'Room 2'],
                            ['room_number' => 'Room 3']
                        )
                    )
                    ->has(
                        Tenant::factory()
                            ->count(1) // 1 tenant per room
                            ->state(
                                fn(array $attributes, Room $room) => [
                                    'room_id' => $room->room_id
                                ]
                            )
                    )
            )
            ->create();
    }
}


