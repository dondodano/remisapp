<?php

namespace App\Http\Livewire\Requisite\Institute;

use Livewire\Component;
use App\Models\Requisite\Institute;

class Edit extends Component
{
    public $term;
    public $definition;
    public $institute;

    public function mount($id)
    {
        $this->institute = Institute::findOrFail($id);

        $this->term = $this->institute->term;
        $this->definition = $this->institute->definition;
    }

    public function update()
    {
        if(strlen($this->term) == 0 || strlen($this->definition) == 0)
        {
            toastr("Please fill all fields required!", "error");
            return;
        }

        $update = $this->institute;
        $update->update([
            'term' => $this->term,
            'definition' => $this->definition,
            'date_modified' => setTimestamp()
        ]);

        if($update)
            logUserActivity(request(), 'Updated institute with ID = ['.$update->id.']');
            toastr("Institute successfully updated!", "info");
    }

    public function render()
    {
        return view('livewire.requisite.institute.edit');
    }
}
