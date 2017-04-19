<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert(['skill' => 'Plumber','description'=>'','status'=>1]);
        DB::table('skills')->insert(['skill' => 'Electrican','description'=>'','status'=>1]);
        DB::table('skills')->insert(['skill' => 'Painter','description'=>'','status'=>1]);
        DB::table('skills')->insert(['skill' => 'Maid','description'=>'','status'=>1]);
        DB::table('skills')->insert(['skill' => 'Repairman','description'=>'','status'=>1]);
        DB::table('skills')->insert(['skill' => 'Landscaper','description'=>'','status'=>1]);
        DB::table('skills')->insert(['skill' => 'Operator','description'=>'','status'=>1]);
        DB::table('skills')->insert(['skill' => 'Other Handymans','description'=>'','status'=>1]);
    }
}
