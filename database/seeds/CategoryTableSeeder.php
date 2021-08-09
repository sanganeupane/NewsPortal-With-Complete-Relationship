<?php

use Illuminate\Database\Seeder;
use App\Models\Category\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryData=[
            ['cat_name'=>'BUSINESS','slug'=>'business', 'posted_by'=>1],
            ['cat_name'=>'FINANCE','slug'=>'finance','posted_by'=>1],
            ['cat_name'=>'TECHNOLOGY','slug'=>'technology','posted_by'=>1],
            ['cat_name'=>'FASHION','slug'=>'fashion','posted_by'=>1],
            ['cat_name'=>'SPORTS','slug'=>'sports','posted_by'=>1],
            ['cat_name'=>'ENTERTAINMENT','slug'=>'entertainment','posted_by'=>1],
            ['cat_name'=>'GLOBAL','slug'=>'global','posted_by'=>1],
            ['cat_name'=>'PHOTOGRAPHY','slug'=>'photography','posted_by'=>1],
//            ['cat_name'=>'BLOG','slug'=>'blog','posted_by'=>1],


        ];
        foreach($categoryData as $cat){
            Category::create($cat);
        }

    }
}
