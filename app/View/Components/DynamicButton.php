<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DynamicButton extends Component
{
    public $icon;
    public $label;
    public $active;

    public function __construct($icon, $active = false, $label = 'Button')
    {
        $this->active = $active;
        $this->icon = $icon;
        $this->label = $label;
    }

    public function render()
    {
        return view('components.dynamic-button');
    }
}
