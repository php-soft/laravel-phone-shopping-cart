<?php

use Illuminate\Database\Seeder;

class Product_Input_DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_input_details')->insert([
            ['product_id' => "1", 'product_input_id' => "1", 'color_memory' => "black 64gb", 'quantity' => "10", 'price' => "20490000", 'total' => "204900000"],
            ['product_id' => "2", 'product_input_id' => "2", 'color_memory' => "black 128gb", 'quantity' => "10", 'price' => "25990000", 'total' => "25990000"],
        ]);
    }
}
