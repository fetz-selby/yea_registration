<script>

    function buildRadioDisable(className) {
      return function(event) {
        document.querySelectorAll(className).forEach(current_element => {
          if (event.target.value === "No") {
            if (current_element.nodeName === 'div' || current_element.nodeName === 'DIV') {
                current_element.querySelectorAll('input').forEach(element => {
                  element.setAttribute("disabled", true);
                  element.style.backgroundColor = "white";  

                });
                current_element.querySelectorAll('select').forEach(element => {
                  element.setAttribute("disabled", true);
                });

              } else if (current_element.nodeName === 'label' || current_element.nodeName === 'LABEL') {
                current_element.classList.add('text-muted'); 
              }
              current_element.querySelectorAll('label').forEach(element => {
                element.classList.add('text-muted');
              });
            } else if (event.target.value === "Yes") {
              if (current_element.nodeName === 'div' || current_element.nodeName === 'DIV') {
                current_element.querySelectorAll('input').forEach(element => {
                  element.removeAttribute("disabled");
                  element.style.backgroundColor = "beige";
                  console.log("working");
                });
                
                current_element.querySelectorAll('select').forEach(element => {
                  element.removeAttribute("disabled");
                });
              } else if (current_element.nodeName === 'label' || current_element.nodeName === 'LABEL') {
                current_element.classList.remove('text-muted'); 
              }
              current_element.querySelectorAll('label').forEach(element => {
                element.classList.remove('text-muted');
              });
            }
        });
      }
    }

    function showModuleQuestions(){

 
          var Module = document.getElementById("module");
          var cpa_div_1 = document.getElementById("CPA-1-row");
          var cpa_div_2 = document.getElementById("CPA-2-row");
          var chw_div_1 = document.getElementById("CHW-1-row");
          var chw_div_2 = document.getElementById("CHW-2-row");
          var cpa_education = document.getElementById("cpa-formal-education-row");
          var chw_education = document.getElementById("chw-formal-education-row");
          
          
          if( Module.value == "Community Policy Assistant")
          {
            cpa_div_1.style.display = 'block';
            cpa_div_2.style.display = 'block';
            cpa_education.style.display = 'block';

            chw_education.style.display = 'none';


          }
          else if(Module.value == "Community Health Worker")
          {
           
            chw_education.style.display = 'block';
            cpa_div_1.style.display = 'none';
            cpa_div_2.style.display = 'none';
            cpa_education.style.display = 'none';
                      }
          else{
            cpa_div_1.style.display = 'none';
            cpa_div_2.style.display = 'none';
            cpa_education.style.display = 'none';
            chw_education.style.display = 'none';
           
          }
          

    }

    function terms_changed(termsCheckBox){
    //If the checkbox has been checked
    if(termsCheckBox.checked){
        //Set the disabled property to FALSE and enable the button.
        document.getElementById("submit_button").disabled = false;
    } else{
        //Otherwise, disable the submit button.
        document.getElementById("submit_button").disabled = true;
    }
}
    
    
    function ValidateEmail(mail) 
    {
      const mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
     if (mainFormat.test(email))
      {
        return true;
      }
        return false;
    }

    
    
    function registrationFormIsValid(stepper_pan_id) {
    
      if (stepper_pan_id === 'step_1-part') {
        const lastName = document.querySelector('[name="last_name"]');
        const firstName = document.querySelector('[name="first_name"]');


        const ResidentialAddress = document.querySelector('[name="residential_address"]');
        const dateOfBirth = document.querySelector('[name="date_of_birth"]');
        const gps = document.querySelector('[name="gps_address"]');
        const communty = document.querySelector('[name="community"]');
        const region = document.querySelector("[name='region']");
        const district = document.querySelector("[name='district']");
      
    
    
        return  lastName.value.length && firstName.value.length &&
          ResidentialAddress.value.length && dateOfBirth.value.length && gps.value.length && 
          communty.value.length && region.value.length && district.value.length ;
    
      }
    
      if (stepper_pan_id === 'step_2-part') {
        const nextOfKin = document.querySelector("[name='next_of_kin']");
        const nextOfKinPhoneNumber = document.querySelector("[name='next_of_kin_phone_number']");
        const MomoNetwork = document.querySelector("[name='momo_network']");
        const  MomoNumber= document.querySelector("[name='momo_number']");
        const  module= document.querySelector("[name='module']");
        const levelOfEducation = document.querySelector("[name='level_of_education']");    
        if (!levelOfEducation.value) {
          return false;
        }
        // const  cpa= document.querySelector("[name='CPA']");
        // const  cpa_yea_name= document.querySelector("[name='CPA_YEA_name']");
        // const  chw= document.querySelector("[name='chw']");
        // const  chw_yea_name= document.querySelector("[name='CHW_YEA_name']");
        // const  agreement= document.querySelector("[name='aggrement']");
        

        // if (cpa.value.length && ((cpa.value === "No" && cpa.checked === true) ||
        //     (cpa.value === "Yes" && cpa.checked === false))) {
        //   return true
        // }else{
          
        return nextOfKin.value.length && nextOfKinPhoneNumber.value.length &&
        MomoNetwork.value.length && MomoNumber.value.length &&
        cpa.value.length && trainingCenterName.value.length ;
      }
    
      
      // if (stepper_pan_id === 'step_3-part') {
      //   const levelOfEducation = document.querySelector("[name='level_of_education']");    
      //   if (!levelOfEducation.value) {
      //     return false;
      //   }
      //   const trainedArtisan = document.querySelector("[name='trained_artisan']");
      //   if (trainedArtisan.value.length && ((trainedArtisan.value === "No" && trainedArtisan.checked === true) ||
      //       (trainedArtisan.value === "Yes" && trainedArtisan.checked === false))) {
      //     return true
      //   } else {  
      //     const trainingCenterName = document.querySelector("[name='training_center_name']");
      //     const trainingCenterAddress = document.querySelector("[name='training_center_address']");
      //     const trainerName = document.querySelector("[name='trainer_name']");
      //     const trainerPhoneNumber = document.querySelector("[name='trainer_phone_number']");
      //     if (!(trainingCenterName.value.length && trainingCenterAddress.value.length &&
      //     trainerName.value.length && trainerPhoneNumber.value.length )) {
      //       return false;
      //     }
      //   }
      //   const memberOfTradeAsc = document.querySelector("[name='member_of_trade_association']");
      //   if (memberOfTradeAsc.value.length && ((memberOfTradeAsc.value === "No" && memberOfTradeAsc.checked === true) ||
      //       (memberOfTradeAsc.value === "Yes" && memberOfTradeAsc.checked === false))) {
      //     return true;  
      //   } else {
      //     const tradeAssociationId = document.querySelector("[name='trade_association_membership_id']");
      //     const tradeAssociationName = document.querySelector("[name='trade_association_name']");
      //     if (!(tradeAssociationId.value.length && tradeAssociationName.value.length)) {
      //       return false;
      //     }
      //   }
      //   const apprenticeshipCompletionCertificate = document.querySelector("[name='apprenticeship_completion_certificate']");
      //   return apprenticeshipCompletionCertificate.value.length !== 0;
      // }
    
      // if (stepper_pan_id === 'work_information-part') {
      //   const businessRegistered = document.querySelector("[name='registered_business']");
      //   if (businessRegistered.value.length && ((businessRegistered.value === "No" && businessRegistered.checked === true) ||
      //     (businessRegistered.value === "Yes" && businessRegistered.checked === false))) {
      //     return true;
      //   }else{
      //     const businessName = document.querySelector("[name='business_name']");
      //     const tradeArea = document.querySelector("[name='trade_area']");
      //     const businessAddress = document.querySelector("[name='business_address']");
      //     const businessTin = document.querySelector("[name='business_tin']");
      //     const yearsOfExperience = document.querySelector("[name='years_of_experience']");
      //     return businessName.value.length && tradeArea.value.length && businessAddress.value.length &&
      //     businessTin.value.length && yearsOfExperience.value.length;
      //   }
    
      // }
    
      return true;
    
    }
    
    (function () {
    
    
      'use strict';
    
      // BS-Stepper Init
      document.addEventListener('DOMContentLoaded', function () {
        window.stepper = new Stepper(document.querySelector('#{{ $stepperId }}'), {
          linear: true,
          animation: true
        }
      )});
    
    
      document.querySelectorAll("[name='trained_artisan']").forEach(element => {
        element.addEventListener('change', function(event) {
          const radioDisable = buildRadioDisable('.trained-artisan-disable');
          radioDisable(event);
        });
      });
      document.querySelectorAll("[name='CPA']").forEach(element => {
        element.addEventListener('change', function(event) {
          const radioDisable = buildRadioDisable('.CPA-disable');
          radioDisable(event);
          console.log(element.value);

        });
      });
      // document.querySelectorAll("[name='CHW']").forEach(element => {
      //   element.addEventListener('change', function(event) {
      //     const radioDisable = buildRadioDisable('.CHW-disable');
      //     radioDisable(event);
      //   });
      // });
    
      document.querySelectorAll("[name='apprenticeship_completion_certificate']").forEach(element => {
        element.addEventListener('change', function(event) {
          const radioDisable = buildRadioDisable('.appren-disable');
          radioDisable(event);
        });
      });
      
      document.querySelectorAll("[name='certified_artisan']").forEach(element => {
        element.addEventListener('change', function(event) {
          const radioDisable = buildRadioDisable('.artisan-disable');
          radioDisable(event);
        });
      });
      
      document.querySelectorAll("[name='member_of_trade_association']").forEach(element => {
        element.addEventListener('change', function(event) {
          const radioDisable = buildRadioDisable('.trade-disable');
          radioDisable(event);
        });
      });
    
      document.querySelectorAll("[name='registered_business']").forEach(element => {
        element.addEventListener('change', function(event) {
          const radioDisable = buildRadioDisable('.business-disable');
          radioDisable(event);
        });
      });  

      
        document.querySelector("[name='ghana_card']").addEventListener('input', function(e) {
        var foo = this.value.split("-").join("");
          if (foo.length > 0) {
            foo = foo.match(new RegExp('.{1,9}', 'g')).join("-");
          }
          this.value = foo;
        });

        
    
      const mainStepper = document.querySelector('#main-stepper');
      
      const form = mainStepper.querySelector('.bs-stepper-content form');
      
      const stepperPanList = [].slice.call(mainStepper.querySelectorAll('.bs-stepper-pane'));
      
      const btnNextList = [].slice.call(document.querySelectorAll('.btn-next-form'));
    
      mainStepper.addEventListener('show.bs-stepper', function (event) {
        form.classList.remove('was-validated')
        var nextStep = event.detail.indexStep
        var currentStep = nextStep
    
        if (currentStep > 0) {
          currentStep--
        }
    
        var stepperPan = stepperPanList[currentStep]
    
        if ((event.detail.to !== event.detail.from  && !registrationFormIsValid(stepperPan.getAttribute('id')))) {
          event.preventDefault();
          form.classList.add('was-validated');
        }
        
      })
    
    })();
  </script>
    