<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name' => "SamSung S8+", 'slug' => "Sam-Sung-S8-Plus", 'price' => "20490000", 'description' => "SamSung S8+", 'image' => "ảnh", 'tophot' => "1", 'warranty_moth' => "12", 'status' => true, 'category_id' => "1", 'factory_id' => "1", 'back_camera_id' => "1", 'front_camera_id' => "1", 'battery_id' => "1", 'connect_id' => "1", 'design_id' => "1", 'opera_system_id' => "1", 'screen_id' => "1", 'utility_id' => "1", 'color_id' => "1", 'memory_id' => "1"],
            ['name' => "Iphone 7+", 'slug' => "Iphone-7-Plus", 'price' => "2599000", 'description' => "Iphone 7+", 'image' => "ảnh", 'tophot' => "1", 'warranty_moth' => "12", 'status' => true, 'category_id' => "2", 'factory_id' => "2", 'back_camera_id' => "2", 'front_camera_id' => "2", 'battery_id' => "2", 'connect_id' => "2", 'design_id' => "2", 'opera_system_id' => "2", 'screen_id' => "2", 'utility_id' => "2", 'color_id' => "2", 'memory_id' => "2"],
        ]);
    }
}
