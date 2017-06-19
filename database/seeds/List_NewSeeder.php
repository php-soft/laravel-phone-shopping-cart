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
            ['name' => "Tin mới", 'slug' => "Tin-mới"],
            ['name' => "Sản phẩm mới", 'slug' => "Sản-phẩm-mới"],
        ]);
    }
}
