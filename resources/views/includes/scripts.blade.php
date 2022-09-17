{{-- <script src="{{ asset('js/lib/jquery.min.js') }}"></script> --}}
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ asset('vendor/global/global.min.js') }}"></script>
<script src="{{ asset('js/lib/quixnav-init.js') }}"></script>
<script src="{{ asset('js/lib/custom.min.js') }}"></script>
<script src="{{ asset('js/lib/uppy.min.js') }}"></script>
<script src="{{ asset('js/lib/bs-stepper.min.js') }}"></script>
<script src="{{ asset('vendor/highlightjs/highlight.pack.min.js') }}"></script>

@stack('scripts')
@yield('scripts')
@livewireScripts