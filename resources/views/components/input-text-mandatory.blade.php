<x-input-wrapper wrapper-class="{{ $inputWrapperClass }}">

    <label class="form-label" for="{{ $name }}">{{ $label }} <span class="text-danger font-weight-bold">*</span></label>

    <input type="{{ $inputTextType }}" autocomplete="off" name="{{ $name }}"  value="{{ old("$name")}}" 
        class="form-control" style="background-color:beige;" id="{{ $name }}" placeholder="{{ $placeholder }}" required>

    <div class="invalid-feedback">{{ $errorMessage }}</div>
    <div class=" text-danger">
                                            

        @error("$name")
        {{$message}}
        @enderror
    </div>


</x-input-wrapper>
