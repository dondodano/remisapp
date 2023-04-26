<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MiniCard extends Component
{
    public $title;
    public $text;
    public $icon;
    public $key;

    public function __construct($title = 'Title Here', $text = 'Text Here', $icon = 'bx-search', $key = 'key')
    {
        $this->title = $title;
        $this->text = $text;
        $this->icon = $icon;
        $this->key = $key;
    }


    public function render()
    {
        return view('components.mini-card');
    }
}
