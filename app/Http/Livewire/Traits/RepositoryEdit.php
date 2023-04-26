<?php

namespace App\Http\Livewire\Traits;

use Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Validator;

class RepositoryEdit extends Component
{
    use WithFileUploads;
    public $fileInputId;
    public $attachments = [];

    public $quarter;
    public $year;

    protected $listeners = [
        //'refreshRepository' =>  'mount',
    ];
}
