<x-input-wrapper wrapper-class="{{ $inputWrapperClass }}">

    <label class="h4 required" for="{{ $name }}_radio">{{ $label }} <span class="text-danger font-weight-bold">*</span></label>
        
    @foreach ($values as $key => $value)
    
    <div 
        @if ($inline === "true")
            
            class="form-check form-check-inline"
            
        @else
        
            class="form-check"
            
        @endif
    
    >

        <input
        
            class="form-check-input"
            
            type="radio" name="{{ $name }}"
            
            id="{{ $name }}{{ $key }}"
            
            value="{{ $value}}" 
            
            required
            
            />
            
            <label class="form-check-label" for="{{ $name }}{{ $key }}">
                
                {{ $value }}
                
            </label>

            @if ($value == end($values))
            
            <div style="margin-left: -1.35em" class="invalid-feedback">{{ $errorMessage }}</div>
            <div class=" text-danger">
                                            

                @error("$name")
                {{$message}}
                @enderror
            </div>

            @endif

    </div>

    @endforeach


</x-input-wrapper>