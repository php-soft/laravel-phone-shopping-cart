<?php

use Illuminate\Database\Seeder;

class MemorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('memories')->insert([
            ['name' => "SamSung"],
            ['name' => "Iphone"],
        ]);
    }
}
