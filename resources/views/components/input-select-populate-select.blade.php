<x-input-select-region default-value="{{ $defaultMasterValue }}" error-message="{{ $masterErrorMessage }}" input-wrapper-class="{{ $masterInputWrapperClass }}" name="{{ $master }}"  label="{{ $masterLabel }}" title="{{ $masterTitle }}" :values="$masterValues"  />

<x-input-select-district default-value="{{ $defaultSlaveValue  }}" error-message="{{ $slaveErrorMessage }}" input-wrapper-class="{{ $slaveInputWrapperClass }}" name="{{ $slave }}"  label="{{ $slaveLabel }}" title="{{ $slaveTitle }}" :values="[]"/>

<script>

    const options = <?php echo json_encode($inputValues); ?>;  // [TODO] protect against XSS

    const master_{{ $master }} = document.querySelector("#{{ $master }}");

    const slave_{{ $slave }} = document.querySelector("#{{ $slave }}");

    master_{{ $master }}.addEventListener("change", function(event) {

        const key = event.target.value;

        slave_{{ $slave }}.innerHTML = "<option disabled value='' selected>Select {{ $slaveLabel }}</option>";
        
        for(var option of options[key]){

            var newOption=document.createElement("option");

            newOption.value= option;
            
            newOption.innerHTML= option;
            
            slave_{{ $slave }}.options.add(newOption);
         
        }
    });


    @if ($defaultMasterValue !== "")

    for(var option of options["{{ $defaultMasterValue }}"]){

        var newOption=document.createElement("option");

        newOption.value= option;

        newOption.innerHTML= option;

        if (option === "{{ $defaultSlaveValue }}") {

            newOption.setAttribute('selected', true);
            
        }

        slave_{{ $slave }}.options.add(newOption);

    }

    @endif

</script>