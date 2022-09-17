<x-stepper-content-part section="step_2">

   {{-- <label class="mt-2 h4 mb-3 required" for="contact-details-row">Contact Details <span
            class="text-danger font-weight-bold">*</span></label> --}}
   {{-- 
    <div id="contact-details-row" class="form-row mb-3"> --}}

        {{-- <x-input-text input-text-type="email" error-message="Please enter valid email"
            input-wrapper-class="col-lg-6 col-md-12" name="email" placeholder="ex: example@example.com" label="Email" /> --}}

        {{-- <x-input-text error-message="Please enter valid phone number" input-wrapper-class="col-lg-6 col-md-12"
            icon="fas fa-phone" type="number" name="phone_number" placeholder="ex: 024XXXXXXX" label="Phone Number" /> --}}

        {{-- <x-input-text error-message="Please enter valid WhatsApp number" input-wrapper-class="col-lg-6 col-md-12"
            icon="fab fa-whatsapp" type="number" name="whatsapp_number" placeholder="ex: 024XXXXXXX"
            label="WhatsApp Number" /> --}}

    {{-- </div> --}}

    {{-- <label class="mt-2 h4 mb-3 required" for="residence-details-row">Residential Information
        <span class="text-danger font-weight-bold">*</span></label> --}}


    <div id="next-of-kin-number-row" class="form-row mb-3">
        <div class="column">
        <x-input-text-mandatory error-message="Please enter Next of Kin's name" input-wrapper-class="col-lg-12 col-md-12"
        name="next_of_kin" placeholder="" label="Next of Kin" />
        </div>
        <div class="column">
        <x-input-phone-mandatory error-message="Please enter valid phone number" input-wrapper-class="col-lg-8 col-md-12 "
            icon="fas fa-phone" type="number" name="next_of_kin_phone_number" minlength="10" maxlength="10" placeholder="ex: 024XXXXXXX" label="Phone Number of Next of Kin" />
        </div>
    </div>


    <div id="momo-network-row" class="form-row mb-3">

        {{-- <x-input-text-mandatory error-message="Please enter your Momo network" input-wrapper-class="col-lg-6 col-md-12"
        name="momo_network" placeholder="" label="Momo Network" /> --}}
        <div class="column">
        <x-input-select error-message="Please enter your Momo network" label="Momo Network" input-wrapper-class="col-lg-12 col-md-12 " name="momo_network"
        title="Momo Network"
        :values="['MTN','Tigo','Vodaphone','GLO']" />
        </div>

        <div class="column">
        <x-input-phone-with-hint error-message="Please enter valid phone number" input-wrapper-class="col-lg-8 col-md-12 "
         icon="fas fa-phone" type="number" name="momo_number" minlength="10" maxlength="10"  placeholder="ex: 024XXXXXXX" label="momo Number" />
        </div>
         {{-- <x-input-i-d error-message="Please enter valid phone number" input-wrapper-class="col-lg-6 col-md-12"
         icon="fas fa-phone" placeholder="ex: 024XXXXXXX" type="number" name="momo_number" minlength="10" maxlength="10"  label="momo Number" /> --}}
    </div>

    <div id="module-row" class="form-row mb-3">

        <x-input-select-onclick error-message="Please choose a module" title="module"
            label="Please select a Module" input-wrapper-class="col-lg-6 col-md-12 " name="module" function="showModuleQuestions()"
            :values="$module_list" />

       
    </div>

    <div id="cpa-formal-education-row" class="form-row mb-3" style="display: none;">

        <x-input-select error-message="Please choose Educational Level" title="Educational Level"
            label="Educational Level" input-wrapper-class="col-lg-6 col-md-12" name="level_of_education1"
            :values="['BECE','WASSCE/SSCE','NVTI Proficiency I','NVTI Proficiency II','NVTI Proficiency III','NVTI Foundation Certificate','NVTI Certificate I','NVTI Certificate II','HND','Degree']" />

       
    </div>

    <div id="CPA-1-row" class="form-row mb-3" style="display: none;">

        <x-input-radio error-message="Please choose an Yes or No" input-wrapper-class="col-lg-6 col-md-12 "
         name="CPA" label="Have you worked as a CPA with YEA before?" :values="['Yes', 'No']" />

    </div>

    <div id="CPA-2-row" class="CPA-disable form-row mb-3" style="display: none;">

        <x-input-text-mandatory error-message="Please enter your YEA number" input-wrapper-class="col-lg-4 col-md-12"
            name="CPA_YEA_name" placeholder="" label="Please enter your YEA number"/>

    </div>

    <div id="chw-formal-education-row" class="form-row mb-3" style="display: none;">

        <x-input-select error-message="Please choose Educational Level" title="Educational Level"
            label="Educational Level" input-wrapper-class="col-lg-6 col-md-12" name="level_of_education2"
            :values="['WASSCE/SSCE','NVTI Proficiency I','NVTI Proficiency II','NVTI Proficiency III','NVTI Foundation Certificate','NVTI Certificate I','NVTI Certificate II','HND','Degree']" />

       
    </div>



    <div id="aggreement" class=" form-row mb-3 ">
        <div class="col-lg-12 col-md-12 ">

        <input class="form-check-input" type="checkbox" name="agreement" value="1" id="flexCheckChecked"  onclick="terms_changed(this)"/>
        <label class="form-check-label" for="flexCheckChecked">I do hereby declare that to the best of my knowledge, the Information given in the application form is correct.</label>
        </div>
    </div>


    

   

    {{-- <div id="module-row" class="form-row mb-3">

        <x-input-select error-message="Please choose a module" title="module"
            label="Please select a Module" input-wrapper-class="col-lg-6 col-md-12" name="level_of_education"
            :values="['Community Policy Assistant', 'Community Health Worker']" />

       
    </div> --}}

    

    <x-stepper-button-previous />

    <button  type="submit" id="submit_button" disabled class="btn mt-4 btn btn-primary">Save & Submit</button>

</x-stepper-content-part>

@push('form-scripts')
    <script>
        (function() {
            // Restricts input for the given textbox to the given inputFilter function.
            function setInputFilter(textbox, inputFilter) {
                ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(
                    event) {
                    textbox.addEventListener(event, function() {
                        if (inputFilter(this.value)) {
                            this.oldValue = this.value;
                            this.oldSelectionStart = this.selectionStart;
                            this.oldSelectionEnd = this.selectionEnd;
                        } else if (this.hasOwnProperty("oldValue")) {
                            this.value = this.oldValue;
                            this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                        } else {
                            this.value = "";
                        }
                    });
                });
            }

            setInputFilter(document.getElementById("phone_number"), function(value) {
                return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
            });

            setInputFilter(document.getElementById("whatsapp_number"), function(value) {
                return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
            });

        })();
    </script>
@endpush
