<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User\UserRole as UserRoles;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserRoles::create([
            'term' => 'Super',
            'is_visible' => 0
        ],[
            'term' => 'Admin',
            'is_visible' => 1
        ],[
            'term' => 'Faculty',
            'is_visible' => 1
        ],[
            'term' => 'Staff',
            'is_visible' => 1
        ])->save();
    }
}
