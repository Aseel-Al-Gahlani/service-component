<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DynamicButton extends Component
{
    public $icon;
    public $label;
    public $active;

    public function __construct($icon, $label, $active = false)
    {
        $this->icon = $icon;
        $this->label = $label;
        $this->active = $active;
    }

    public function render()
    {
        return view('components.dynamic-button');
    }
}
