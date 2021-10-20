<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MealTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // factory(App\Models\Meal::class, 100)->create();

         DB::table('meals')->insert([
            'member_id' =>1,
            'month_id' =>2,
            'amount'    =>3
         ]);
         DB::table('meals')->insert([
            'member_id' =>2,
            'month_id' =>2,
            'amount'    =>4
         ]);
         DB::table('meals')->insert([
            'member_id' =>3,
            'month_id' =>2,
            'amount'    =>5
         ]);



         DB::table('meals')->insert([
            'member_id' =>1,
            'month_id' =>3,
            'amount'    =>2
         ]);
         DB::table('meals')->insert([
            'member_id' =>2,
            'month_id' =>3,
            'amount'    =>2
         ]);
         DB::table('meals')->insert([
            'member_id' =>3,
            'month_id' =>3,
            'amount'    =>1
         ]);



         DB::table('meals')->insert([
            'member_id' =>1,
            'month_id' =>4,
            'amount'    =>1
         ]);
         DB::table('meals')->insert([
            'member_id' =>2,
            'month_id' =>4,
            'amount'    =>4
         ]);
         DB::table('meals')->insert([
            'member_id' =>3,
            'month_id' =>4,
            'amount'    =>2
         ]);
       
    }
}
