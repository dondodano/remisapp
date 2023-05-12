<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Requisite\ResponsibilityCenter;

class ResponsibilityCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ResponsibilityCenter::create([
            'term' => 'RIDE',
            'definition' => 'Research Innovation Development and Extension'
        ])->save();
    }
}
