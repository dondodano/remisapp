<?php

namespace App\Http\Livewire\Requisite\Program;

use Livewire\Component;
use App\Models\Requisite\Program;
use App\Models\Requisite\Institute;

class Edit extends Component
{
    public $term;
    public $definition;
    public $program;
    public $institute;

    public function mount($id)
    {
        $this->program = Program::findOrFail($id);

        $this->term = $this->program->term;
        $this->definition = $this->program->definition;
        $this->institute = $this->program->institute_id;
    }

    public function getInstitutesProperty()
    {
        return Institute::where('active',1)->where('status',1);
    }

    public function update()
    {
        if(strlen($this->term) == 0 || strlen($this->definition) == 0 || strlen($this->institute) == 0)
        {
            toastr("Please fill all fields required!", "error");
            return;
        }

        $update = $this->program;
        $update->update([
            'institute_id' => $this->institute,
            'term' => $this->term,
            'definition' => $this->definition,
            'date_modified' => setTimestamp()
        ]);

        if($update)
            logUserActivity(request(), 'Updated program with ID = ['.$update->id.']');
            toastr("Program successfully updated!", "info");
    }

    public function render()
    {
        return view('livewire.requisite.program.edit',[
            'institutes' => $this->institutes->get()
        ]);
    }
}
