<?php

use App\User;
use jeremykenedy\LaravelRoles\Models\Role;
use jeremykenedy\LaravelRoles\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('categories')->insert(['cate_name' => 'Plumbing','description'=>'','status'=>1]);
        DB::table('categories')->insert(['cate_name' => 'Electrical','description'=>'','status'=>1]);
        DB::table('categories')->insert(['cate_name' => 'Painting','description'=>'','status'=>1]);
        DB::table('categories')->insert(['cate_name' => 'Clean/Maid Service','description'=>'','status'=>1]);
        DB::table('categories')->insert(['cate_name' => 'Application Repair','description'=>'','status'=>1]);
        DB::table('categories')->insert(['cate_name' => 'Landscaping','description'=>'','status'=>1]);
        DB::table('categories')->insert(['cate_name' => 'Heating & Cooling','description'=>'','status'=>1]);
        DB::table('categories')->insert(['cate_name' => 'Other Hnadyman Service','description'=>'','status'=>1]);
    }

}