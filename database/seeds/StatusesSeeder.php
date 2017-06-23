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
            ['id' => 1, 'name' => "Đang xử lý"],    
            ['id' => 2, 'name' => "Đã xử lý"],    
            ['id' => 3, 'name' => "Đã gửi đi"],    
            ['id' => 4, 'name' => "Giao thành công"],    
            ['id' => 5, 'name' => "Hủy"],    
        ]);    
    }
}
