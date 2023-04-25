<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Cache;

class NavBar extends Component
{

    public $quarter;
    public $year;
    public $suffix;


    public function mount()
    {
        // Suffix
        $this->suffix = [
            '1' => 'st',
            '2' => 'nd',
            '3' => 'rd'
        ];

        // Cache
        $currentQuarter = ceil(date('m', time()) / 3);
        if(Cache::has('current-quarter-'.auth()->user()->id))
        {
            $this->quarter = concat(' ',[
                Cache::get('current-quarter-'.auth()->user()->id)['value'] . Cache::get('current-quarter-'.auth()->user()->id)['suffix'],
                'Quarter'
            ]);
        }else{
            Cache::put('current-quarter-'.auth()->user()->id, [
                'value' => $currentQuarter,
                'suffix' => $this->suffix[$currentQuarter]
            ]);
            $this->quarter = $currentQuarter.$this->suffix[$currentQuarter];
        }


        // Year
        if(Cache::has('current-year-'.auth()->user()->id))
        {
            $this->year = Cache::get('current-year-'.auth()->user()->id)['value'];
        }else{
            $this->year = setToday('Y');
        }


        sessionSet('current-quarter-'.auth()->user()->id,[
            'value' => $this->quarter,
            'suffix' => $this->suffix[$currentQuarter]
        ]);
        sessionSet('current-year-'.auth()->user()->id,[
            'value' => $this->year
        ]);
    }

    public function selectQuarter($index)
    {

        $currentQuarter = decipher($index);

        if(in_array($currentQuarter, [1,2,3]))
        {
            $this->quarter = concat(' ',[
                $currentQuarter . $this->suffix[$currentQuarter],
                'Quarter'
            ]);

            sessionSet('current-quarter-'.auth()->user()->id,[
                'value' => $currentQuarter,
                'suffix' => $this->suffix[$currentQuarter]
            ]);

            Cache::put('current-quarter-'.auth()->user()->id, [
                'value' => $currentQuarter,
                'suffix' => $this->suffix[$currentQuarter]
            ]);
        }else{
            toastr('Please select a valid quarter!' . $currentQuarter,'error');
        }
    }

    public function selectYear()
    {
        sessionSet('current-year-'.auth()->user()->id,[
            'value' => $this->year
        ]);

        Cache::put('current-year-'.auth()->user()->id, [
            'value' => $this->year
        ]);
    }

    public function render()
    {
        return view('livewire.components.nav-bar');
    }
}
