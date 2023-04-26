<?php

namespace App\Http\Livewire\Components;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Feed\FeedableItem;

class DocumentTable extends Component
{
    protected $listeners = [
        'NewNotification' => '$refresh',
        //'QuarterAndYearSelected' => '$refresh',
    ];

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $paginate = 10;


    public function render()
    {
        $lastSevenDays = Carbon::today()->subDays(7);

        return view('livewire.components.document-table',[
            'documentRecords' => FeedableItem::where('date_created', '>=', $lastSevenDays)
                ->latest()
                ->paginate($this->paginate)
        ]);
    }
}
