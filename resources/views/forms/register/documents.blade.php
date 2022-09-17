<x-stepper-content-part section="documents">

    <div class="form-row mb-3">

        <x-input-file input-wrapper-class="col-12" name="photo" label="Upload Passport Photo" />

    </div>

    <div class="form-row mb-3">

        <x-input-file input-wrapper-class="col-12" name="cv" label="Upload CV" />

    </div>

    <x-stepper-button-previous />

    <button onclick="ignoreFileInputs()" type="submit" class="btn mt-4 btn btn-primary">Save & Submit</button>

</x-stepper-content-part>

@push('form-scripts')

    <x-input-file-script name="cv" />

    <x-input-file-script name="photo" only-images="true" />

@endpush
