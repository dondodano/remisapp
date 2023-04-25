<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'firstname' => 'Super',
                'middlename' => '',
                'lastname' => 'Admin',
                'extension' => '',
                'title' => '',
                'avatar' => '',
                'email' => 'dondo.dano@spamast.edu.ph',
                'password' => bcrypt('password'),
                'role_id' => 1,
                'status' => 1,
            ]
        )->save();
    }
}
