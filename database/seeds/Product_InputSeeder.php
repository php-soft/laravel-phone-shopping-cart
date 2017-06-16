<?php

use Illuminate\Database\Seeder;

class Product_InputSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_inputs')->insert([
            ['employee_id' => "5", 'store_id' => "1"],
            ['employee_id' => "5", 'store_id' => "1"],
        ]);
    }
}
