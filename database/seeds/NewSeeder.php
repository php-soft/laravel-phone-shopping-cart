<?php

use Illuminate\Database\Seeder;

class NewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            ['list_new_id' => "1", 'title' => "Sam Sung 1", 'slug' => "sam-sung-s8", 'description' => "Sam Sung S8+ chính thức ra mắt", 'image' => "imge.jpg", 'content' => "Sam Sung S8+ chính thức ra mắt với giá như năm ngoái", 'view' => "0", 'user_id' => "1"],
            ['list_new_id' => "2", 'title' => "Sam Sung S2", 'slug' => "sam-sung-s8", 'description' => "Sam Sung S8+ chính thức ra mắt", 'image' => "imge.jpg", 'content' => "Sam Sung S8+ chính thức ra mắt với giá như năm ngoái", 'view' => "0", 'user_id' => "1"],
            ['list_new_id' => "3", 'title' => "Sam Sung S3", 'slug' => "sam-sung-s8", 'description' => "Sam Sung S8+ chính thức ra mắt", 'image' => "imge.jpg", 'content' => "Sam Sung S8+ chính thức ra mắt với giá như năm ngoái", 'view' => "0", 'user_id' => "1"],
            ['list_new_id' => "3", 'title' => "Sam Sung S4", 'slug' => "sam-sung-s8", 'description' => "Sam Sung S8+ chính thức ra mắt", 'image' => "imge.jpg", 'content' => "Sam Sung S8+ chính thức ra mắt với giá như năm ngoái", 'view' => "0", 'user_id' => "1"],
            ['list_new_id' => "2", 'title' => "Sam Sung S5", 'slug' => "sam-sung-s8", 'description' => "Sam Sung S8+ chính thức ra mắt", 'image' => "imge.jpg", 'content' => "Sam Sung S8+ chính thức ra mắt với giá như năm ngoái", 'view' => "0", 'user_id' => "1"],
            ['list_new_id' => "1", 'title' => "Sam Sung S6", 'slug' => "sam-sung-s8", 'description' => "Sam Sung S8+ chính thức ra mắt", 'image' => "imge.jpg", 'content' => "Sam Sung S8+ chính thức ra mắt với giá như năm ngoái", 'view' => "0", 'user_id' => "1"],
            ['list_new_id' => "2", 'title' => "Sam Sung s7", 'slug' => "sam-sung-s8", 'description' => "Sam Sung S8+ chính thức ra mắt", 'image' => "imge.jpg", 'content' => "Sam Sung S8+ chính thức ra mắt với giá như năm ngoái", 'view' => "0", 'user_id' => "1"],
        ]);
    }
}
