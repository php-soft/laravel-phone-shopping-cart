<?php

use Illuminate\Database\Seeder;

class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vouchers')->insert([
            ['code' => "123abc123", 'percent' => "1", 'max' => "2000000", 'quantity' => "10", 'start_date' => date('2017-6-17'), 'end_date' => date('2018-6-17')],
            ['code' => "123abc", 'percent' => "10", 'max' => "5000000", 'quantity' => "10", 'start_date' => date('2017-6-17'), 'end_date' => date('2018-6-17')],
        ]);
    }
}
