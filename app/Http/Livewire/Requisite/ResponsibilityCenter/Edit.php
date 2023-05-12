<?php

namespace App\Http\Livewire\Requisite\ResponsibilityCenter;

use Livewire\Component;
use App\Models\Requisite\ResponsibilityCenter;

class Edit extends Component
{
    public $term;
    public $definition;
    public $responsibilitycenter;

    public function mount($id)
    {
        $this->responsibilitycenter = ResponsibilityCenter::findOrFail($id);

        $this->term = $this->responsibilitycenter->term;
        $this->definition = $this->responsibilitycenter->definition;
    }

    public function update()
    {
        if(strlen($this->term) == 0 || strlen($this->definition) == 0)
        {
            toastr("Please fill all fields required!", "error");
            return;
        }

        $update = $this->responsibilitycenter;
        $update->update([
            'term' => $this->term,
            'definition' => $this->definition,
            'date_modified' => setTimestamp()
        ]);

        if($update)
            logUserActivity(request(), 'Updated responsibility center with ID = ['.$update->id.']');
            toastr("Responsibility Center successfully updated!", "info");
    }

    public function render()
    {
        return view('livewire.requisite.responsibilitycenter.edit');
    }
}
