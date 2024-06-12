<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PrestatieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        // Define sample prestations
        $prestaties = [
            ['gebruiker_id' => 1, 'oefeningen_id' => 1, 'score' => 90, 'datum' => Carbon::now()],
            ['gebruiker_id' => 2, 'oefeningen_id' => 2, 'score' => 85, 'datum' => Carbon::now()],
            ['gebruiker_id' => 3, 'oefeningen_id' => 3, 'score' => 80, 'datum' => Carbon::now()],
            ['gebruiker_id' => 4, 'oefeningen_id' => 4, 'score' => 75, 'datum' => Carbon::now()],
            ['gebruiker_id' => 5, 'oefeningen_id' => 5, 'score' => 70, 'datum' => Carbon::now()],
            ['gebruiker_id' => 6, 'oefeningen_id' => 6, 'score' => 65, 'datum' => Carbon::now()],
        ];
      

    }
}


