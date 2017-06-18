<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
        	['title'=>"Iphone 7 gia xap san", 'slug'=>"iphone-7-gia-xap-san", 'description'=>'Do thi trong co nhieu bien dong nen smartphone giam gia hang loat', 'image'=>'image1.png', 'content'=>'Noi dung', 'list_new_id'=>'1'],
        	['title'=>"Iphone 8 gia xap san", 'slug'=>"iphone-8-gia-xap-san", 'description'=>'Do thi trong co nhieu bien dong nen smartphone giam gia hang loat', 'image'=>'image1.png', 'content'=>'Noi dung', 'list_new_id'=>'1'],
        	['title'=>"Iphone 9 gia xap san", 'slug'=>"iphone-9-gia-xap-san", 'description'=>'Do thi trong co nhieu bien dong nen smartphone giam gia hang loat', 'image'=>'image1.png', 'content'=>'Noi dung', 'list_new_id'=>'1'],
        	
        ]);
    }
}
