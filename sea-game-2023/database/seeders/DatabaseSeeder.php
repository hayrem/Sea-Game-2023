<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Matching;
use App\Models\Event;
use App\Models\Stadium;
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

        Stadium::factory()->create(
            [
                'name' => 'Olympic Stadium',
                'zone' => 'Zone A',
            ]
            );

        Event::factory()->create(
            [
                'name' => 'Football',
                'type' => 'Men football U22',
                'available_ticket' => 5,
                'stadium_id' => 1
            ]
        );
        Ticket::factory()->create(
            [
                'price' => 'Free',
                'schedule'=>'16 May 2023',
                'event_id'=>1
            ]
        );
        
        Matching::factory()->create(
            [
                'title' => 'Cambodia vs Laos',
                'time' => '04:00',
                'event_id'=> 1
            ]
        );
       
    }
}
