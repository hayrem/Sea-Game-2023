<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Matching;
use App\Models\Ticket;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Matching::factory()->create(
            [
                'title' => 'Cambodia vs Laos',
                'time' => '04:00:00'
            ]
        );
        Ticket::factory()->create(
            [
                'price' => 'Free',
                'schedule'=>'16 May 2023'
            ]
        );
    }
}
