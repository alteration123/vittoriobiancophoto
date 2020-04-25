<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert some test values in actor table
        DB::table('actors')->insert([
            'name' => 'Orc',
            'base_attack' => 5,
            'hit_points' => 15,
            'initiative' => 2,
            'armor_class' => 16,
        ]);

        DB::table('actors')->insert([
        'name' => 'Mind Flayer',
        'base_attack' => 10,
        'hit_points' => 40,
        'initiative' => 6,
        'armor_class' => 25,
    ]);
    }
}
