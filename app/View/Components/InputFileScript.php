<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputFileScript extends Component
{
    public string $name;
    public string $onlyImages;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $name, string $onlyImages = "false")
    {
        $this->name = $name;
        $this->onlyImages = $onlyImages;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-file-script');
    }
}
