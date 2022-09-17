<div class="step" data-target="#{{ $section }}-part">

    <button type="button" class="step-trigger" role="tab" aria-controls="{{ $section }}" id="{{ $section }}-part-trigger">
        
        <span class="bs-stepper-circle">{{ $number }}</span>

        <span class="bs-stepper-label">{{ $slot }}</span>

    </button>

</div>
