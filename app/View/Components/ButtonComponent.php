<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonComponent extends Component
{
    public $color;
    public $outline;
    public $rounded;
    public $label;

    public function __construct($color = 'blue', $outline = false, $rounded = false, $label = 'Button')
    {
        $this->color = $color;
        $this->outline = $outline;
        $this->rounded = $rounded;
        $this->label = $label;
    }

    public function render()
    {
        return view('components.button-component');
    }
}
