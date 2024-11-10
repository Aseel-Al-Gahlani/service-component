<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardGroupSingleDynamic extends Component
{
    public $cardsingles;

    public function __construct($cardsingles = [])
    {
        $this->cardsingles = $cardsingles;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-group-single-dynamic');
    }
}
