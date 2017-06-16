<?php

use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->insert([
            ['name' => "Thẻ thanh toán"],
            ['name' => "Thanh toán trực tiếp"],
        ]);
    }
}
