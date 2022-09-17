<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>YEA Artisan Login</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('logo.png') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body style="background: #eaeed6d9;" class="h-100">
   
    <div class="authincation h-100">
   
        <div class="container-fluid h-100">
  
            <div class="row justify-content-center h-100 align-items-center">
                
                <div class="col-md-6">
                    
                    <div class="">
                   
                        <div class="row no-gutters">
                            
                            <div class="col-xl-12 h-25">
                            <div clss="h-25">  
                                <img  style="display: block; margin: auto; width: 20%;" src="{{ asset('logo.png') }}" alt="">  
                                 </div>
                                <div class="auth-form h-25">
                                
                                   <div class="h-100">
                                    <h4 class="text-center mb-4 ">This is your registration code</h4>
                                  </div>
                                    <form class="form-valide-with-icon h-50" method="GET" action="{{route('client.show', ['num' => Session::get('yea_code')  ])}}">
                                        @csrf

                                        <div class="text-center">
                                            <label><strong>Registration Code</strong></label>
                                            <div class="text-center">
                                                {{-- <input type="text" disabled class="form-control" value="{{ Session::get('yea_code') }}">
                                                <input type="text" hidden name="registration_code" value="{{ Session::get('yea_code') }}"> --}}
                                                <h3>{{Session::get('yea_code') }}</h3>
                                            </div>
                                            <div class="text-danger">@error('registration_code') {{ $message }}  @enderror</div>
                                        </div>
                                        <div class="form-group">
                                        {{-- <label><strong>New Pin</strong></label>
                                           <div class="input-group">
                                             <input type="password" class="form-control" maxlength="4" value="" id="new_password" name="new_password">
                                            </div>
                                            <div class="text-danger">@error('new_password') {{ $message }}  @enderror</div>
                                        </div>
                                        <div class="form-group">
                                        <label ><strong>Confirm New Pin</strong></label>
                                          <div class="input-group">
                                             <input type="password" id="new_confirm_password" maxlength="4" value="" name="new_confirm_password" class="form-control">
                                            </div>  
                                            <div class="text-danger">@error('new_confirm_password') {{ $message }}  @enderror</div>
                                        </div> --}}
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Print Registration Receipt</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



  <script>
    
    // Restricts input for the given textbox to the given inputFilter function.
    function setInputFilter(textbox, inputFilter) {
      ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
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
    
    setInputFilter(document.getElementById("pin"), function(value) {
      return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
    });
    
    setInputFilter(document.getElementById("new_password"), function(value) {
      return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
    });
    
    setInputFilter(document.getElementById("new_confirm_password"), function(value) {
      return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
    });
    
  </script>

</body>

</html>
