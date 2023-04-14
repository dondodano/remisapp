<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User\Setting\General as GeneralSetting;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GeneralSetting::create([
            'site_title' => 'REMIS',
            'site_definition' => 'Research and Extension Management Information System',
            'entity_name' => 'SPAMAST',
            'entity_definition' => 'Southern Philippines Agri-business and Marine and Aquatic School of Technology',
            'app_url' => 'http://127.0.0.1:8000',
            'fav_icon' => 'favicon/9Lu5sqTaR8YmOzRAOzVoy6z1zZU8M8Zte5aKCDkF.png'
        ]);
    }
}
