<x-input-wrapper wrapper-class="{{ $inputWrapperClass }}">

    <label class="required" for="{{ $name }}">{{ $label }} <span class="text-danger font-weight-bold">*</span></label>

    <input autocomplete="off" type="text" placeholder="yyyy/mm/dd" name="{{ $name }}"  class="form-control" style="background-color:beige;"
        id="{{ $name }}" value="{{ old("$name")}}"  required>

    <div class="invalid-feedback">{{ $errorMessage }}</div>
    <div class=" text-danger">
                                            

        @error("$name")
        {{$message}}
        @enderror
    </div>

</x-input-wrapper>
