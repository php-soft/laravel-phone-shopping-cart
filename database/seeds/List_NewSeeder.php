<?php

use Illuminate\Database\Seeder;

class List_NewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('list_news')->insert([
            ['name' => "Sản phẩm mới", 'slug' => "san-pham"],
            ['name' => "Đánh giá", 'slug' => "danh-gia"],
            ['name' => "Công nghệ mới", 'slug' => "cong-nghe-moi"],
            ['name' => "Mẹo hay", 'slug' => "meo-hay"],
            ['name' => "Game - Ứng dụng", 'slug' => "game-ung-dung"],
        ]);
    }
}
