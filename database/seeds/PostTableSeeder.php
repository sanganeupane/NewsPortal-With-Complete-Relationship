<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $postData=[
            ['title'=>'हवाई यात्रा सुरक्षित छ','description'=>'दिदीभाइको माया र झगडाको कथा, हेर्नुस् ४० मिनेटको नेपाली फिल्म युट्युबमा','sub_cat_id'=>1,'cat_id'=>5,'posted_by'=>1],
            ['title'=>'खुलै राखौं','description'=>'४० मिनेटको नेपाली फिल्म युट्युबमा','sub_cat_id'=>4,'cat_id'=>2,'posted_by'=>1],
            ['title'=>' यात्रा सुरक्षित राखौं','description'=>' माया र झगडाको कथा, हेर्नुस्  युट्युबमा','sub_cat_id'=>7,'cat_id'=>3,'posted_by'=>1],

        ];
        foreach($postData as $post) {
            \App\Models\Post\Post::create($post);
        }
    }

}
