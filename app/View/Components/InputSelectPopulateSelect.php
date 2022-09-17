<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputSelectPopulateSelect extends Component
{
    public $master;
    public $slave;
    public $slaveLabel;
    public $masterLabel;
    public $slaveTitle;
    public $masterTitle;
    public $masterInputWrapperClass;
    public $slaveInputWrapperClass;
    public $masterErrorMessage;
    public $slaveErrorMessage;
    public $inputValues;
    public $masterValues;
    public $defaultSlaveValue;
    public $defaultMasterValue;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $master,
        string $slave,
        string $slaveLabel,
        string $masterLabel,
        string $slaveTitle,
        string $masterTitle,
        string $masterInputWrapperClass,
        string $slaveInputWrapperClass,
        string $masterErrorMessage,
        string $slaveErrorMessage,
        string $defaultSlaveValue = "",
        string $defaultMasterValue = "",
        array $inputValues
    ) {
        $this->master = $master;
        $this->masterLabel = $masterLabel;
        $this->masterTitle = $masterTitle;
        $this->masterInputWrapperClass = $masterInputWrapperClass;
        $this->masterErrorMessage = $masterErrorMessage;
        $this->slave = $slave;
        $this->slaveLabel = $slaveLabel;
        $this->slaveTitle = $slaveTitle;
        $this->slaveInputWrapperClass = $slaveInputWrapperClass;
        $this->slaveErrorMessage = $slaveErrorMessage;
        $this->inputValues = $inputValues;
        $this->defaultSlaveValue = $defaultSlaveValue;
        $this->defaultMasterValue = $defaultMasterValue;
        $this->masterValues = array_keys($inputValues);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-select-populate-select');
    }
}