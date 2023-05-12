<?php

namespace App\Http\Livewire\Requisite\ResponsibilityCenter;

use Livewire\Component;
use App\Models\Requisite\ResponsibilityCenter;

class Create extends Component
{

    public $term;
    public $definition;

    public function save()
    {
        if(strlen($this->term) == 0 || strlen($this->definition) == 0)
        {
            toastr("Please fill all fields required!", "error");
            return;
        }

        $create = ResponsibilityCenter::firstOrCreate([
            'term' => $this->term,
            'definition' => $this->definition
        ]);
        $create->save();

        if($create)
            logUserActivity(request(), 'Created new responsibility center with ID = ['.$create->id.']');
            toastr("ResponsibilityCenter successfully saved!", "success");
            $this->term = '';
            $this->definition = '';
    }

    public function render()
    {
        return view('livewire.requisite.responsibilitycenter.create');
    }
}
