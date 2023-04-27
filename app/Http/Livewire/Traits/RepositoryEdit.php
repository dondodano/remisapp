<?php

namespace App\Http\Livewire\Traits;

use Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class RepositoryEdit extends Component
{
    use WithFileUploads;
    use AuthorizesRequests;
    public $fileInputId;
    public $attachments = [];

    public $quarter;
    public $year;

    protected $listeners = [
        //'refreshRepository' =>  'mount',
    ];
}
