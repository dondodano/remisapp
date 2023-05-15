<?php

namespace App\Http\Livewire\Components;

use Cache;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Events\PusherNotificationEvent;
use App\Models\Requisite\ResponsibilityCenter;

class NavBar extends Component
{

    public $quarter;
    public $year;
    public $suffix;
    public $rcenterId;
    public $rcenterName;


    public function mount()
    {
        // Suffix
        $this->suffix = getQuarterSuffix();

        // Quarter
        $this->quarter = concat(' ',[
            getCurrentQuarter()['value'] . getCurrentQuarter()['suffix'],
            'Quarter'
        ]);
        Cache::put('current-quarter-'.auth()->user()->id,[
            'value' => getCurrentQuarter()['value'],
            'suffix' => getCurrentQuarter()['suffix']
        ]);
        sessionSet('current-quarter-'.auth()->user()->id,[
            'value' => getCurrentQuarter()['value'],
            'suffix' => getCurrentQuarter()['suffix']
        ]);


        // Year
        $this->year = getCurrentYear()['value'];
        Cache::put('current-year-'.auth()->user()->id,[
            'value' => getCurrentYear()['value']
        ]);
        sessionSet('current-year-'.auth()->user()->id,[
            'value' => getCurrentYear()['value']
        ]);

        // Responsibility Center
        $this->rcenterId = sessionGet('responsibility_center')['id'];
        $this->rcenterName = sessionGet('responsibility_center')['name'];
    }

    public function selectQuarter($index)
    {

        $currentQuarter = decipher($index);

        if(in_array($currentQuarter, [1,2,3,4]))
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

            $this->emit('refreshDashboard');
            $this->emit('refreshIndexComponent');
            $this->dispatchBrowserEvent('reloadComponent');
        }else{
            toastr('Please select a valid quarter!' . $currentQuarter,'error');
        }
    }

    public function selectYear()
    {
        sessionSet('current-year-'.auth()->user()->id,[
            'value' => (int)filter_var( $this->year, FILTER_SANITIZE_NUMBER_INT)
        ]);

        Cache::put('current-year-'.auth()->user()->id, [
            'value' => (int)filter_var( $this->year, FILTER_SANITIZE_NUMBER_INT)
        ]);

        $this->year = (int)filter_var( $this->year, FILTER_SANITIZE_NUMBER_INT);

        $this->emit('refreshDashboard');
        $this->emit('refreshIndexComponent');
        $this->dispatchBrowserEvent('reloadComponent');
    }

    public function selectResponsibilityCenter($centerId)
    {
        sessionSet('responsibility_center', [
            'id' => $centerId,
            'name' => Auth::user()->with('user_responsibility_center')->where('responsibility_center_id', $centerId)->first()->user_responsibility_center->term
        ]);


        $this->emit('refreshDashboard');
        $this->emit('refreshIndexComponent');
        $this->dispatchBrowserEvent('reloadComponent');
    }

    public function render()
    {
        return view('livewire.components.nav-bar',[
            'rcenters' => ResponsibilityCenter::activeStatus()->get()
        ]);
    }
}
