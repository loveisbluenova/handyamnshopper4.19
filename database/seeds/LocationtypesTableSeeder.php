<?php

use Illuminate\Database\Seeder;

class LocationtypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locationtypes')->insert(['locationtype' => 'Home']);
        DB::table('locationtypes')->insert(['locationtype' => 'Business']);
    }
}
