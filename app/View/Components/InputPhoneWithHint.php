<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputPhoneWithHint extends Component
{
    public $name;
    public $label;
    public $placeholder;
    public $errorMessage;
    public $inputWrapperClass;
    public $inputTextType;
    public $defaultValue;
    public $maxValue;
    public $minValue;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $inputWrapperClass,
        string $name,
        string $label,
        string $errorMessage,
        string $inputTextType = "text",
        string $placeholder = "",
        string $defaultValue = "",
        string $minValue = "10",
        string $maxValue = "10",
    ) {
        $this->inputWrapperClass = $inputWrapperClass;
        $this->defaultValue = $defaultValue;
        $this->errorMessage = $errorMessage;
        $this->label = $label;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->inputTextType = $inputTextType;
        $this->minValue = $minValue;
        $this->maxValue = $maxValue;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-phone-with-hint');
    }
}
