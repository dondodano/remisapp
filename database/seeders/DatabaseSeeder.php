<?php

namespace Database\Seeders;

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
            UserRoleSeeder::class,
            MiscellaneousSeeder::class,
            GeneralSeeder::class,
            UserSeeder::class,
            UserTempAvatarSeeder::class
        ]);
    }
}
