<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Common -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('logo.png') }}">
     <link href="{{ asset('css/lib/bootstrap.min.css') }}" rel="stylesheet">
     <link href="{{ asset('css/lib/datepicker/bootstrap-datepicker3.min.css') }}" rel="stylesheet">
     <link href="{{ asset('css/lib/bs-stepper.min.css') }}" rel="stylesheet">
     <link href="{{ asset('css/lib/jquery-ui.min.css') }}" rel="stylesheet">
     <link href="{{ asset('css/lib/uppy.min.css') }}" rel="stylesheet">

     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">

     <link href="{{ asset('css/lib/filepond.css') }}" rel="stylesheet">

     <link href="https://releases.transloadit.com/uppy/v2.2.3/uppy.min.css" rel="stylesheet">
     
    {{-- @yield('head') --}}
    <style>

.column {
  flex: 50%;
}
    </style>
    @livewireStyles

</head>
