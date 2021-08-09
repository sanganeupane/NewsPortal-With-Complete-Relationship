<?php

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             AdminUserTableSeeder::class,
             UserTableSeeder::class,
             CategoryTableSeeder::class,
             SubCategoryTableSeeder::class,
             PostTableSeeder::class
    ]);
    }
}
