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
        $datas = [
            [
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
            ]
        ];

        Misc::create($datas[0])->save();
        Misc::create($datas[1])->save();
        Misc::create($datas[2])->save();
        Misc::create($datas[3])->save();
        Misc::create($datas[4])->save();
        Misc::create($datas[5])->save();
        Misc::create($datas[6])->save();
        Misc::create($datas[7])->save();
        Misc::create($datas[8])->save();
        Misc::create($datas[9])->save();
        Misc::create($datas[10])->save();
        Misc::create($datas[11])->save();
        Misc::create($datas[12])->save();
        Misc::create($datas[13])->save();
        Misc::create($datas[14])->save();
        Misc::create($datas[15])->save();
        Misc::create($datas[16])->save();
    }
}
