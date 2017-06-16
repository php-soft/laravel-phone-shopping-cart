<?php

use Illuminate\Database\Seeder;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promotions')->insert([
            ['percent' => "1", 'max_price' => "2000000", 'start_date' => date('2017-6-17'), 'end_date' => date('2017-10-17')],
            ['percent' => "10", 'max_price' => "5000000", 'start_date' => date('2017-6-17'), 'end_date' => date('2017-10-17')],
        ]);
    }
}
