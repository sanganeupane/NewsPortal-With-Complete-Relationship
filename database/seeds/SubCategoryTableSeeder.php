<?php

use Illuminate\Database\Seeder;

class SubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $subCategoryData=[
            ['sub_cat_name'=>'FOOTBALL','slug'=>'football','cat_id'=>5,'posted_by'=>1],
            ['sub_cat_name'=>'BASKETBALL','slug'=>'basketball','cat_id'=>5,'posted_by'=>1],
            ['sub_cat_name'=>'NATIONAL','slug'=>'national','cat_id'=>2,'posted_by'=>1],
            ['sub_cat_name'=>'INTERNATIONAL','slug'=>'international','cat_id'=>2,'posted_by'=>1],
            ['sub_cat_name'=>'MOBILE','slug'=>'mobile','cat_id'=>3,'posted_by'=>1],
            ['sub_cat_name'=>'SAMSUNG','slug'=>'samsung','cat_id'=>3,'posted_by'=>1],
            ['sub_cat_name'=>'LAPTOP','slug'=>'laptop','cat_id'=>3,'posted_by'=>1],
        ];
        foreach($subCategoryData as $subCat) {
            \App\Models\SubCategory\SubCategory::create($subCat);
        }
    }

}
