<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GebruikerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gebruikers')->insert([
            ['naam' => 'John Doe'],
            ['naam' => 'Jane Smith'],
            ['naam' => 'Ali Aloosh'],
            ['naam' => 'Hans'],
            ['naam' => 'Humayun Saeed'],
            ['naam' => 'Nero N'],
            ['naam' => 'King K'],
            ['naam' => 'Mr Darcy'],
            ['naam' => 'Romeo Santos'],

    ]);

}
}
