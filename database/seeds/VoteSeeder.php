<?php

use Illuminate\Database\Seeder;

class VoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('votes')->insert([
            ['product_id' => "1", 'star' => "5", 'comment' => "Sản phẩm tốt"],
            ['product_id' => "2", 'star' => "5", 'comment' => "Sản phẩm tuyệt vời"],
        ]);
    }
}
