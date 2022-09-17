<x-input-wrapper wrapper-class="{{ $inputWrapperClass }}">

    <label class="p-0 mb-3 h6 required" for="{{ $name }}-UppyInput">{{ $label }} (at most 4MB)</label>
  
    <div id="{{ $name }}-UppyInput" class="p-0 UppyInput"></div>
        
    <div id="{{ $name }}-UppyInput-Progress" class="UppyInput-Progress"></div>
    
    <input hidden id="{{ $name }}" name="{{ $name }}" type="text">
  
  </x-input-wrapper>
  