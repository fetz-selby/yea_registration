<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputSelectRegion extends Component
{
    public $name;
    public $values;
    public $title;
    public $label;
    public $errorMessage;
    public $inputWrapperClass;
    public $defaultValue;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $inputWrapperClass, string $name, array $values, string $label, string $title, string $errorMessage, string $defaultValue = "")
    {
        $this->inputWrapperClass = $inputWrapperClass;
        $this->defaultValue = $defaultValue;
        $this->errorMessage = $errorMessage;
        $this->label = $label;
        $this->name = $name;
        $this->title = $title;
        

        sort($values);
        $this->values = $values;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-select-region');
    }
}
