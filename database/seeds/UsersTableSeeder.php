<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            // Admin seeder
            'name' => 'admin',
            'password' => bcrypt('123456'),
            'email' => 'm@ya.com',
            'admin' =>1,
            'avatar' => asset('avatars/avatar.png')
        ]);
    }
}
