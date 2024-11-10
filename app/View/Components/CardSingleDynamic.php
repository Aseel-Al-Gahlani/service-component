<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardSingleDynamic extends Component
{
    // public $icon;
    public $iconColor;
    public $title;
    public $label;
    public $bgColor;

    public function __construct( $iconColor, $title, $label, $bgColor)
    {
        // $this->icon = $icon;
        $this->iconColor = $iconColor;
        $this->title = $title;
        $this->label = $label;
        $this->bgColor = $bgColor;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-single-dynamic');
    }
}
