<?php

use Illuminate\Database\Seeder;

class JobstatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobstates')->insert(['jobstate' => 'Pending','description'=>'','status'=>1]);
        DB::table('jobstates')->insert(['jobstate' => 'Runing','description'=>'','status'=>1]);
        DB::table('jobstates')->insert(['jobstate' => 'Completed','description'=>'','status'=>1]);
        DB::table('jobstates')->insert(['jobstate' => 'Closed','description'=>'','status'=>1]);
        DB::table('jobstates')->insert(['jobstate' => 'Dispute','description'=>'','status'=>1]);
    }
}
