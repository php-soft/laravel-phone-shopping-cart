<?php

use Illuminate\Database\Seeder;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            ['name' => "Đang xử lý"],    
            ['name' => "Đã xử lý"],    
            ['name' => "Đã gửi đi"],    
            ['name' => "Giao thành công"],    
            ['name' => "Hủy"],    
        ]);    
    }
}
