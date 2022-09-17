<x-input-wrapper wrapper-class="{{ $inputWrapperClass }}">


    <label class="required" for="{{ $name }}">{{ $label }}<span class="text-danger font-weight-bold">*</span></label>

    <select class="form-control" style="background-color:beige;" name="{{ $name }}"  id="{{ $name }}" required>

        <option disabled selected value="{{ old("$name")}}">Choose {{ $title }}</option>

        @foreach ($values as $value)
            <option @if ($value === $defaultValue) selected @endif value="{{ $value }}">{{ $value }}</option>
        @endforeach

    </select>

    <div class="invalid-feedback">{{ $errorMessage }}</div>
    <div class=" text-danger">
                                            

        @error("$name")
        {{$message}}
        @enderror
    </div>

</x-input-wrapper>