<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Stepper extends Component
{
    public string $stepperId;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $stepperId)
    {
        $this->stepperId = $stepperId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.stepper');
    }
}
