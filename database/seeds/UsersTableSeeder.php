<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'full_name' => 'Sonjoy Barua John',
            'email' => 'sonjoy.john@gmail.com',
            'user_name' => 'sonjoy.john',
            'password' => bcrypt('123456'),
        ];

        User::create($user);


    }
}
