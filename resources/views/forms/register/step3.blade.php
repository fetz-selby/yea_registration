<x-stepper-content-part section="step_3">




    {{-- <label class="mt-2 h4 mb-3 required" for="formal-education-row">Formal Education <span
            class="text-danger font-weight-bold">*</span></label>

    <div id="formal-education-row" class="form-row mb-3">

        <x-input-select error-message="Please choose Educational Level" title="Educational Level"
            label="Educational Level" input-wrapper-class="col-lg-6 col-md-12" name="level_of_education"
            :values="['BECE','WASCE/SSCE','NVTI Proficiency I','NVTI Proficiency II','NVTI Proficiency III','NVTI Foundation Certificate','NVTI Certificate I','NVTI Certificate II','HND','Degree','Masters','Phd']" />

    </div> --}}

    {{-- <div class="form-row mb-3">

        <x-input-radio error-message="Please choose an Yes or No" input-wrapper-class="col-lg-6 col-md-12"
            name="trained_artisan" label="Are you a trained artisan?" :values="['Yes', 'No']" />

    </div> --}}

    {{-- <label class="mt-2 h4 mb-3 appren-disable trained-artisan-disable required" for="artisan-training-row">Training
        Center Information <span class="text-danger font-weight-bold">*</span></label> --}}

    {{-- <div id="artisan-training-row" class="trained-artisan-disable form-row mb-3">

        <x-input-text error-message="Please enter training centre name" input-wrapper-class="col-lg-6 col-md-12"
            name="training_center_name" placeholder="" label="Training Center Name" />

        <x-input-text error-message="Please enter training centre address" input-wrapper-class="col-lg-6 col-md-12"
            name="training_center_address" placeholder="ex: A000/0" label="Training Center Address" />

    </div> --}}

    {{-- <label class="mt-2 h4 mb-3 trained-artisan-disable required" for="trainer-info-row">Trainer Information <span
            class="text-danger font-weight-bold">*</span></label> --}}

    {{-- <div id="trainer-info-row" class="form-row trained-artisan-disable mb-3">

        <x-input-text error-message="Please enter trainer name" input-wrapper-class="col-lg-6 col-md-12"
            name="trainer_name" placeholder="" label="Trainer Name" />

        <x-input-text error-message="Please enter trainer phone number" input-wrapper-class="col-lg-6 col-md-12"
            name="trainer_phone_number" placeholder="ex: 024XXXXXXX" label="Trainer Phone Number" />

    </div> --}}

    {{-- <div class="form-row trained-artisan-disable mb-3">

        <x-input-radio error-message="Please choose an Yes or No" input-wrapper-class="col-lg-6 col-md-12"
            name="apprenticeship_completion_certificate" label="Do you have apprenticeship completion certificate?"
            :values="['Yes', 'No']" />

    </div> --}}

    {{-- <div id="artisan-certificate-row" class="form-row appren-disable trained-artisan-disable mb-3">

        <x-input-file input-wrapper-class="col-12" name="apprenticeship_certifacte"
            label="Upload Apprenticeship Certificate" />

    </div> --}}

    {{-- <div class="form-row appren-disable trained-artisan-disable mb-3">

        <x-input-radio error-message="Please choose an Yes or No" input-wrapper-class="col-lg-6 col-md-12"
            name="certified_artisan" label="Are you a certified artisan?" :values="['Yes', 'No']" />

    </div>

    <label class="mt-2 h4 mb-3 appren-disable trained-artisan-disable artisan-disable required"
        for="certificate-info-row">Artisan Certificate Information <span
            class="text-danger font-weight-bold">*</span></label>

    <div id="certificate-info-row" class="form-row appren-disable trained-artisan-disable artisan-disable mb-3">

        <x-input-select error-message="Please choose artisan certificate" title="Name of Certificate"
            label="Name of Certificate" input-wrapper-class="col-lg-6 col-md-12" name="artisan_certificate_name"
            :values="['NVTI','NAPTEX','HND','Degree']" />

        <x-input-text error-message="Please enter artisan certificate name" input-wrapper-class="col-lg-6 col-md-12"
            name="artisan_certificate_name" placeholder="ex: NVTI, NAPTEX, TERTIARY" label="Name of Certificate" />

        <x-input-file input-wrapper-class="col-12" name="artisan_certificate"
            label="Upload Artisan Certificate" />

    </div> --}}

    {{-- <div class="form-row appren-disable trained-artisan-disable artisan-disable mb-3">

        <x-input-radio error-message="Please choose an Yes or No" input-wrapper-class="col-lg-6 col-md-12"
            name="member_of_trade_association" label="Are you a member of an existing trade association?"
            :values="['Yes', 'No']" />

    </div> --}}

    {{-- <label class="mt-2 h4 mb-3 appren-disable trained-artisan-disable trade-disable artisan-disable required"
        for="trade-info-row">Trade Association Membership Information <span
            class="text-danger font-weight-bold">*</span></label>

    <div id="trade-info-row" class="form-row appren-disable trained-artisan-disable trade-disable artisan-disable mb-3">

        <x-input-text error-message="Please enter trade association name" input-wrapper-class="col-lg-6 col-md-12"
            name="trade_association_name" placeholder="" label="Trade Association Name" />

        <x-input-text error-message="Please enter trade association membership ID Name"
            input-wrapper-class="col-lg-6 col-md-12" name="trade_association_membership_id" placeholder=""
            label="Membership ID" />

    </div> --}}

    <x-stepper-button-previous />

    <button onclick="ignoreFileInputs()" type="submit" class="btn mt-4 btn btn-primary">Save & Submit</button>

</x-stepper-content-part>

@push('form-scripts')

    <x-input-file-script name="artisan_certificate" />

    <x-input-file-script name="apprenticeship_certifacte" />

@endpush
