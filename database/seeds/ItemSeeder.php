<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker ;
use Carbon\Carbon;

class ItemSeeder extends Seeder
{

    protected $carbon;

    protected $faker;

    public function __construct(Faker $faker, Carbon $carbon)
    {
        $this->faker = $faker::create();
        $this->carbon = $carbon;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i < 100; $i++) {
            DB::table('items')->insert([
                'title' => $this->faker->sentence($nbWords = 5),
               
                'description' => $this->faker->sentence($nbWords = 250),
                'created_at' => $this->carbon->now()->toDateTimeString(),
                'updated_at' => $this->carbon->now()->toDateTimeString(),
            ]);
        }
    }
}
