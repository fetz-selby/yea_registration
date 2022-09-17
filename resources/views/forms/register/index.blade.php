<x-stepper stepper-id="main-stepper">

    <x-stepper-header>

        <x-stepper-header-part section="step_1" number="1">
            <p class="d-none d-lg-block">Step 1</p>
        </x-stepper-header-part>

        <x-stepper-header-line />

        <x-stepper-header-part section="step_2" number="2">
            <p class="d-none d-lg-block">Step 2</p>
        </x-stepper-header-part>

        {{-- <x-stepper-header-line /> --}}

        {{-- <x-stepper-header-part section="step_3" number="3">
            <p class="d-none d-lg-block">Final Step</p>
        </x-stepper-header-part> --}}

        {{-- <x-stepper-header-line /> --}}

        {{-- <x-stepper-header-part section="work_information" number="4">
            <p class="d-none d-lg-block">Work Information</p>
        </x-stepper-header-part>

        <x-stepper-header-line />

        <x-stepper-header-part section="documents" number="5">
            <p class="d-none d-lg-block">CV & Documents</p>
        </x-stepper-header-part> --}}

    </x-stepper-header>

    <x-stepper-content>

        <form class="form-floating needs-validation" method="POST" action="{{ route('client.store') }}" novalidate>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @csrf

            @include('forms.register.step1')
            @include('forms.register.step2')
            {{-- @include('forms.register.step3') --}}
            {{-- @include('forms.register.work')
            @include('forms.register.documents') --}}

        </form>

    </x-stepper-content>

</x-stepper>

@section('scripts')

    <x-stepper-script stepper-id="main-stepper" />
    
    @stack('form-scripts')

@endsection
