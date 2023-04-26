<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MiniCard extends Component
{
    public $title;
    public $text;
    public $icon;


    public function __construct($title = 'Title Here', $text = 'Text Here', $icon = 'bx-search')
    {
        $this->title = $title;
        $this->text = $text;
        $this->icon = $icon;
    }


    public function render()
    {
        return view('components.mini-card');
    }
}
