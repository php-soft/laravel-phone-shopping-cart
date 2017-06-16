<?php

use Illuminate\Database\Seeder;

class NewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            ['list_new_id' => "2", 'title' => "Sam Sung S8+", 'description' => "Sam Sung S8+ chính thức ra mắt", 'image' => "ảnh", 'content' => "Sam Sung S8+ chính thức ra mắt với giá như năm ngoái"],
            ['list_new_id' => "2", 'title' => "Iphone 7+", 'description' => "Iphone 7+ chính thức ra mắt", 'image' => "ảnh", 'content' => "Iphone 7+ chính thức ra mắt với giá như năm ngoái"],
        ]);
    }
}
