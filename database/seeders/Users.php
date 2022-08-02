<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $password = bcrypt('123');

        $user = [
            'id' => 1,
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>$password,
            'is_admin'=>'1',
        ];

        User::create($user);

        User::factory()->count(100)->create();
    }
}
