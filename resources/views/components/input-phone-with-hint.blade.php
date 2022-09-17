<x-input-wrapper wrapper-class="{{ $inputWrapperClass }}">

    <label class="form-label" for="{{ $name }}">{{ $label }} <span class="text-danger font-weight-bold">*</span></label>
    <a  href="#" title="The Number must be a registered momo number!"><img src="https://shots.jotform.com/kade/Screenshots/blue_question_mark.png" height="13px"/></a>
    <div class="input-group">

            <input type="{{ $inputTextType }}" autocomplete="off" name="{{ $name }}"  value="{{ old("$name")}}" 
                class="form-control" style="background-color:beige;" id="{{ $name }}" minlength="{{$minValue}}" maxlength="{{$minValue}}" placeholder="{{ $placeholder }}" required>
            
    </div>
    <div class=" text-danger">
        Please enter ONLY a registered MOMO number linked to your Ghana Card!
    </div>
    <div class="invalid-feedback">{{ $errorMessage }}</div>
    <div class=" text-danger">
                                            

        @error("$name")
        {{$message}}
        @enderror
    </div>


</x-input-wrapper>
