<?php

use Illuminate\Database\Seeder;

class Vote_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vote_products')->insert([
            ['customer_id' => "3", 'product_id' => "1", 'star' => "5", 'comment' => "Sản phẩm tốt"],
            ['customer_id' => "4", 'product_id' => "2", 'star' => "5", 'comment' => "Sản phẩm tuyệt vời"],
        ]);
    }
}
