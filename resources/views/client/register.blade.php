@extends('layouts.registration')

@section('content')
<div>
    <div class="row mt-4 justify-content-center">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

            <div class="card mx-auto" style="width: 60%;">

                <div class="row text-center justify-content-center card-header">

                    <div class="col-md-12 my-4 row justify-content-center">

                        {{-- <img style="height: 60px;" class="img-fluid" src="{{ asset('logo.png') }}" alt="" srcset=""> --}}

                        <img class="mb-3" style="display: block; height:60px; margin: auto; width: auto;"
                            src="{{ asset('logo.png') }}" alt="">

                        <h4 class="mt-4 text-center h3">YEA REGISTRATION FORM</h4>

                    </div>

                </div>

                <div class="card-body">

                    <div class="row mb-5 justify-content-center">

                        <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12">

                            @include('forms.register.index')

                        </div>

                    </div>


                </div>

            </div>

        </div>

    </div>
</div>
@endsection