<?php

use Illuminate\Database\Seeder;

class SupportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supports')->insert([
            ['employee_id' => "1", 'name' => "Lê Công Viên", 'email' => "lecongvien@gmail.com", 'phonenumber' => "0123456789", 'description' => "abc", 'vote' => "5"],
            ['employee_id' => "2", 'name' => "Lê Đức Thiện", 'email' => "leducthien@gmail.com", 'phonenumber' => "012345679", 'description' => "abc", 'vote' => "5"],
        ]);
    }
}
