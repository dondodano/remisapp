<?php

namespace App\Http\Livewire\Requisite\Institute;

use Livewire\Component;
use App\Models\Requisite\Institute;

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

        $create = Institute::firstOrCreate([
            'term' => $this->term,
            'definition' => $this->definition
        ]);
        $create->save();

        if($create)
            logUserActivity(request(), 'Created new institute with ID = ['.$create->id.']');
            toastr("Institute successfully saved!", "success");
            $this->term = '';
            $this->definition = '';
    }

    public function render()
    {
        return view('livewire.requisite.institute.create');
    }
}
