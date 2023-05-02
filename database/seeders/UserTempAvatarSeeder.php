<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User\UserTempAvatar;

class UserTempAvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserTempAvatar::create([
            'user_id' => 1,
            'avatar' => '<span class="avatar-initial rounded-circle bg-label-primary">SA</span>'
        ])->save();
    }
}
