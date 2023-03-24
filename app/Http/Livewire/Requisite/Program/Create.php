<?php

namespace App\Http\Livewire\Requisite\Program;

use Livewire\Component;
use App\Models\Requisite\Program;
use App\Models\Requisite\Institute;

class Create extends Component
{
    public $term;
    public $definition;
    public $institute;

    public function getInstitutesProperty()
    {
        return Institute::where('active',1)->where('status',1);
    }

    public function save()
    {
        if(strlen($this->term) == 0 || strlen($this->definition) == 0 || strlen($this->institute) == 0)
        {
            toastr("Please fill all fields required!", "error");
            return;
        }

        $create = Program::firstOrCreate([
            'institute_id' => $this->institute,
            'term' => $this->term,
            'definition' => $this->definition
        ]);
        $create->save();

        if($create)
            logUserActivity(request(), 'Created new program with ID = ['.$create->id.']');
            toastr("Program successfully saved!", "success");
            $this->term = '';
            $this->definition = '';
            $this->institute = '';
    }

    public function render()
    {
        return view('livewire.requisite.program.create',[
            'institutes' => $this->institutes->get()
        ]);
    }
}
