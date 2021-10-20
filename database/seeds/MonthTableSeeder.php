<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonthTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Models\Month::class, 100)->create();

        DB::table('months')->insert([
            'month' =>'2021-01-01'
        ]);
        DB::table('months')->insert([
            'month' =>'2021-01-02'
        ]);
        DB::table('months')->insert([
            'month' =>'2021-01-03'
        ]);
        DB::table('months')->insert([
            'month' =>'2021-01-04'
        ]);
        DB::table('months')->insert([
            'month' =>'2021-01-05'
        ]);
    }
}
