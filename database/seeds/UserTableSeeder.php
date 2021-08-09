<?php

use Illuminate\Database\Seeder;
use App\Models\User\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'user',
            'username'=>'user',
            'email'=>'user@gmail.com',
            'password'=>bcrypt('user002'),
            'image'=>'',
            'status'=>1
        ]);
    }
}
