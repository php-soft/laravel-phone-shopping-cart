<?php

use Illuminate\Database\Seeder;

class Promotion_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promotion_products')->insert([
            ['promotion_id' => "1", 'product_id' => "1"],
            ['promotion_id' => "2", 'product_id' => "2"],
        ]);
    }
}
