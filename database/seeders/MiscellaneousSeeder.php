<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Misc\Miscellaneous AS Misc;

class MiscellaneousSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Misc::create([
            'term' => 'Internally Funded',
            'group' => 'fundclass'
        ],[
            'term' => 'Externally Funded',
            'group' => 'fundclass'
        ],[
            'term' => 'Research',
            'group' => 'projectcategory'
        ],[
            'term' => 'Development',
            'group' => 'projectcategory'
        ],[
            'term' => 'On-Going',
            'group' => 'projectstatus'
        ],[
            'term' => 'Completed',
            'group' => 'projectstatus'
        ],[
            'term' => 'Publish',
            'group' => 'submissionstatus'
        ],[
            'term' => 'Draft',
            'group' => 'submissionstatus'
        ],[
            'term' => 'International',
            'group' => 'presentationtype'
        ],[
            'term' => 'National',
            'group' => 'presentationtype'
        ],[
            'term' => 'Regional',
            'group' => 'presentationtype'
        ],[
            'term' => 'Local',
            'group' => 'presentationtype'
        ],[
            'term' => 'Poor',
            'group' => 'relevance'
        ],[
            'term' => 'Fair',
            'group' => 'relevance'
        ],[
            'term' => 'Satisfactory',
            'group' => 'relevance'
        ],[
            'term' => 'Very Satisfactory',
            'group' => 'relevance'
        ],[
            'term' => 'Excellent',
            'group' => 'relevance'
        ])->save();
    }
}
