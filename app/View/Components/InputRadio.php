<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputRadio extends Component
{
    public string $name;
    public string $label;
    public array $values;
    public string $inputWrapperClass;
    public string $errorMessage;
    public string $inline;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $inputWrapperClass, string $errorMessage,  string $name,  string $label, array $values, string $inline = "false")
    {
        $this->inputWrapperClass = $inputWrapperClass;
        $this->values = $values;
        $this->label = $label;
        $this->name = $name;
        $this->inline = $inline;
        $this->errorMessage = $errorMessage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-radio');
    }
}
