<?php

use Illuminate\Database\Seeder;

class DurationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('durations')->insert(['duration' => 'Less than 1 week']);
        DB::table('durations')->insert(['duration' => 'Less than 1 Month']);
        DB::table('durations')->insert(['duration' => '1 to 3 months']);
        DB::table('durations')->insert(['duration' => '3 to 6 months']);
        DB::table('durations')->insert(['duration' => 'More than 6 months']);
        DB::table('durations')->insert(['duration' => 'Not Specified']);

    }
}
