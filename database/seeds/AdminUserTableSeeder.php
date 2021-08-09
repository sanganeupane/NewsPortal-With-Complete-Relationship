<?php

use Illuminate\Database\Seeder;
use App\Models\AdminUser\AdminUser;

class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminUser::create([
            'name'=>'admin',
            'username'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('admin002'),
            'image'=>'',
            'status'=>1,
            'admin_type'=>'super-admin'
        ]);
    }
}
