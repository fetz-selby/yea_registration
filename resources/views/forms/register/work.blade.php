<x-stepper-content-part section="work_information">

    <div class="form-row mb-3">

        <x-input-radio error-message="Please choose an Yes or No" input-wrapper-class="col-lg-6 col-md-12"
            name="registered_business" label="Do you have a registered business ?" :values="['Yes', 'No']" />

    </div>

    <label class="mt-2 h4 mb-3 business-disable required" for="business-info-row">Business
        Information <span class="text-danger font-weight-bold">*</span></label>

    <div id="business-info-row" class="form-row business-disable mb-3">

        <x-input-text error-message="Please enter business name" input-wrapper-class="col-lg-6 col-md-12"
            name="business_name" placeholder="" label="Buisness Name" />

        <x-input-text error-message="Please enter trade area" input-wrapper-class="col-lg-6 col-md-12" name="trade_area"
            placeholder="" label="Trade Area" />

        <x-input-text error-message="Please enter business address" input-wrapper-class="col-lg-6 col-md-12"
            name="business_address" placeholder="ex: A000/0" label="Business Address" />

        <x-input-text error-message="Please enter business TIN number" input-wrapper-class="col-lg-6 col-md-12"
            name="business_tin" placeholder="" label="Buisness TIN Number" />

        <x-input-text error-message="Please enter years of experience" input-wrapper-class="col-lg-6 col-md-12"
            name="years_of_experience" placeholder="" label="Years of Experience" />

    </div>

    <x-stepper-button-previous />

    <x-stepper-button-next />

</x-stepper-content-part>
