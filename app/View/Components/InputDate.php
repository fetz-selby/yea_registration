<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputDate extends Component
{
    public string $name;
    public string $label;
    public string $errorMessage;
    public string $inputWrapperClass;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $inputWrapperClass,  string $name,  string $label, string $errorMessage)
    {
        $this->inputWrapperClass = $inputWrapperClass;
        $this->errorMessage = $errorMessage;
        $this->label = $label;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-date');
    }
}
