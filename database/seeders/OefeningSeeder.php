<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OefeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('oefeningen')->insert([
            ['naam' => 'Push-ups', 'beschrijving' => 'Basic upper body exercise', 'foto' => 'https://static.strengthlevel.com/images/exercises/push-ups/push-ups-800.jpg'],
            ['naam' => 'Squats', 'beschrijving' => 'Lower body exercise targeting quadriceps, hamstrings, and glutes', 'foto' => 'https://static.strengthlevel.com/images/exercises/squat/squat-800.jpg'],
            ['naam' => 'Plank', 'beschrijving' => 'Core stability exercise', 'foto' => 'https://www.jdk-bootcamp.nl/wp-content/uploads/2018/10/Plank.jpg'],
            ['naam' => 'Lunges', 'beschrijving' => 'Lower body exercise targeting quadriceps, hamstrings, and glutes', 'foto' => 'https://cdn.shopify.com/s/files/1/1497/9682/files/4.Split_Squat_Lunges.jpg?v=1672764672.jpg'],
            ['naam' => 'Deadlifts', 'beschrijving' => 'Compound exercise targeting multiple muscle groups including the back, glutes, and hamstrings', 'foto' => 'https://cdn.shopify.com/s/files/1/1497/9682/files/2_illustration.jpg?v=1629114354'],
            ['naam' => 'Pull-ups', 'beschrijving' => 'Upper body exercise targeting the back and arms', 'foto' => 'https://weighttraining.guide/wp-content/uploads/2016/10/pull-up-2-resized.png'],
            ['naam' => 'Bench Press', 'beschrijving' => 'Upper body exercise targeting chest, shoulders, and triceps', 'foto' => 'https://static.strengthlevel.com/images/exercises/bench-press/bench-press-800.jpg'],
            ['naam' => 'Bicep Curls', 'beschrijving' => 'Arm exercise targeting the biceps', 'foto' => 'https://static.strengthlevel.com/images/exercises/bicep-curl/bicep-curl-800.jpg'],
            ['naam' => 'Tricep Dips', 'beschrijving' => 'Upper body exercise targeting the triceps', 'foto' => 'https://static.strengthlevel.com/images/exercises/dips/dips-800.jpg'],
            ['naam' => 'Lat Pulldowns', 'beschrijving' => 'Upper body exercise targeting the back muscles', 'foto' => 'https://static.strengthlevel.com/images/exercises/lat-pulldown/lat-pulldown-800.jpg'],
            ['naam' => 'Leg Press', 'beschrijving' => 'Lower body exercise targeting the quadriceps, hamstrings, and glutes', 'foto' => 'https://static.strengthlevel.com/images/exercises/leg-press/leg-press-800.jpg'],
            ['naam' => 'Shoulder Press', 'beschrijving' => 'Upper body exercise targeting the shoulders', 'foto' => 'https://static.strengthlevel.com/images/exercises/shoulder-press/shoulder-press-800.jpg'],
            ['naam' => 'Crunches', 'beschrijving' => 'Core exercise targeting the abdominal muscles', 'foto' => 'https://static.strengthlevel.com/images/exercises/crunches/crunches-800.jpg'],
            ['naam' => 'Leg Raises', 'beschrijving' => 'Core exercise targeting the lower abdominal muscles', 'foto' => 'https://static.strengthlevel.com/images/exercises/leg-raises/leg-raises-800.jpg'],
            ['naam' => 'Russian Twists', 'beschrijving' => 'Core exercise targeting the obliques', 'foto' => 'https://static.strengthlevel.com/images/exercises/russian-twist/russian-twist-800.jpg'],
            ['naam' => 'Burpees', 'beschrijving' => 'Full body exercise targeting multiple muscle groups', 'foto' => 'https://static.strengthlevel.com/images/exercises/burpees/burpees-800.jpg'],
            ['naam' => 'Mountain Climbers', 'beschrijving' => 'Full body exercise targeting the core and lower body', 'foto' => 'https://static.strengthlevel.com/images/exercises/mountain-climbers/mountain-climbers-800.jpg'],
            ['naam' => 'Kettlebell Swings', 'beschrijving' => 'Full body exercise targeting the core and lower body', 'foto' => 'https://static.strengthlevel.com/images/exercises/kettlebell-swing/kettlebell-swing-800.jpg'],
            ['naam' => 'Jumping Jacks', 'beschrijving' => 'Cardiovascular exercise targeting the whole body', 'foto' => 'https://static.strengthlevel.com/images/exercises/jumping-jack/jumping-jack-800.jpg'],
            ['naam' => 'High Knees', 'beschrijving' => 'Cardiovascular exercise targeting the lower body and core', 'foto' => 'https://s3.amazonaws.com/prod.skimble/assets/2437757/image_iphone.jpg'],
        ]);
    }
}
