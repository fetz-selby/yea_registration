<x-stepper-content-part section="step_1">

    <div id="fullname-row" class="form-row mb-4">

        <div class="column">
        <x-input-text-mandatory error-message="Please enter first name" input-wrapper-class="col-lg-12 col-md-12" name="first_name"
        placeholder="" label="First Name" />
        </div>
        <div class="column">
        <x-input-text-mandatory error-message="last_name" input-wrapper-class="col-lg-12 col-md-12" name="last_name"
            placeholder="" label="Last Name" />
        </div>
       

    </div>
    <div id="fullname-row" class="form-row mb-4">

        
        <div class="column">
        <x-input-text error-message="Please enter other name(s)" input-wrapper-class="col-lg-12 col-md-12"
        name="other_name" placeholder="" label="Other Name(s)" />
        </div>
        <div class="column">
        <x-input-i-d error-message="Please enter Ghana Card Number" input-wrapper-class="col-lg-8 col-md-12"
        name="ghana_card" placeholder="XXXXXXXXX-X" minlength="11" maxlength="11"  label="Ghana Card PIN" />
        </div>

    </div>

   

    {{-- <div id="gender-row" class="form-row mb-4">

        <x-input-radio error-message="Please choose your gender" input-wrapper-class="col-lg-6 col-md-12" name="gender"
            label="What is your gender?" :values="['Male', 'Female']" />

    </div> --}}

    <div id="other-info-row" class="form-row mb-4 ">
    
            <div class="column"><x-input-date error-message="Please enter date of birth" input-wrapper-class="col-lg-6 col-md-12"
                name="date_of_birth" label="Date of Birth" /></div>
            <div class="column">  <x-input-text input-text-type="email" error-message="Please enter valid email"
                input-wrapper-class="col-lg-12 col-md-12" name="email" placeholder="ex: example@example.com" label="Email" />
    </div>


        

          
    </div>


    <div class="form-row mb-3">
        <x-input-text-mandatory  error-message="Please enter your Residential address"
        input-wrapper-class="col-lg-12 col-md-12" name="residential_address" placeholder="" label="Residential Address" />


    </div>

    <div class="form-row mb-3">
        <x-input-text-mandatory  error-message="Please enter your GPS address"
        input-wrapper-class="col-lg-6 col-md-12" name="gps_address" placeholder="" label="GPS Address" />

        <x-input-text-mandatory error-message="Please enter community name" input-wrapper-class="col-lg-6 col-md-12"
        name="community" placeholder="" label="Community" />
    </div>

    <div id="residence-details-row" class="form-row mb-3">

        <x-input-region-district region-name="region" district-name="district"
        region-input-wrapper-class="col-lg-6 col-md-12" district-input-wrapper-class="col-lg-6 col-md-12" />
            
    </div>




    {{-- <label class="mt-2 h4 mb-3 required" for="card-details-row">ID Card Details <span
            class="text-danger font-weight-bold">*</span></label> --}}

    {{-- <div id="card-details-row" class="form-row mb-3">

        <x-input-select error-message="Please choose ID Type" title="ID Type" label="Type of ID Card"
            input-wrapper-class="col-lg-6 col-md-12" name="id_card_type"
            :values="[ 'Ghana Card', 'Voters ID', 'Passport', 'Drivers License', 'SSNIT Card' ]" />

        <x-input-text error-message="Please enter ID number" input-wrapper-class="col-lg-6 col-md-12"
            name="id_card_number" placeholder="" label="ID Number" />

    </div> --}}

    <x-stepper-button-next />

</x-stepper-content-part>

@push('form-scripts')
    <script src="{{ asset('js/lib/datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script>
        (function() {

            $("#date_of_birth").datepicker({
                startDate: "-100Y",
                endDate: "-18Y",
                changeMonth: true,
                changeYear: true,
                showButtonPanel: true,
                format: "yyyy/mm/dd"
            });

        })();
    </script>
@endpush
