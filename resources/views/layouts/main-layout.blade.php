<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{ seo()->render() }}

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300,500,600,700%7CRoboto:300,400,500,700">
    @if (!empty($settings->header_scripts))
        {!! $settings->header_scripts !!}
    @endif



    {{-- page Css --}}
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/main-color.css')}}" id="colors">
    <style>


        .hover-10:hover{
            background: linear-gradient(#1433d6,#1433d6) bottom repeat-x;
            background-size: 100% 100%;
            color: #fff;
        }
        .download-button{
            background-color: dodgerblue;
            padding: 2px 5px 2px 5px;
            color: #fff;
            float: right;
        }
        .download-button:hover{
            background: linear-gradient(#64bc36,#64bc36) bottom repeat-x;
            background-size: 100% 100%;
            color: #fff;
        }
        .pricing-resource{
            font-weight: bolder;
            font-size: 16px;
        }
    </style>
    @stack('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" type="text/css">
    @livewireStyles

</head>

<body class="dark-header_">

<!-- Wrapper -->
<div id="wrapper">

        @if (!empty($settings->body_scripts))
            {!! $settings->body_scripts !!}
        @endif
        <!--Header + Nav -->
            @livewire('partials.navigation')

        <!--Header + Nav -->


        <!--Contents -->
        @yield('content')

            <!-- Footer -->
        @livewire('partials.footer')


    </div>



<!-- Js Scripts -->

<!-- Scripts
================================================== -->
<script type="text/javascript" src="{{asset('frontend/scripts/jquery-3.6.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/jquery-migrate-3.3.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/mmenu.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/chosen.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/rangeslider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/counterup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/tooltips.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/scripts/custom.js')}}"></script>


<!-- Leaflet // Docs: https://leafletjs.com/ -->
<script src="{{asset('frontend/scripts/leaflet.min.js')}}"></script>

<!-- Leaflet Maps Scripts -->
<script src="{{asset('frontend/scripts/leaflet-markercluster.min.js')}}"></script>
<script src="{{asset('frontend/scripts/leaflet-gesture-handling.min.js')}}"></script>
<script src="{{asset('frontend/scripts/leaflet-listeo.js')}}"></script>

<!-- Leaflet Geocoder + Search Autocomplete // Docs: https://github.com/perliedman/leaflet-control-geocoder -->
<script src="{{asset('frontend/scripts/leaflet-autocomplete.js')}}"></script>
<script src="{{asset('frontend/scripts/leaflet-control-geocoder.js')}}"></script>


@if (!empty($settings->footer_scripts))
    {!! $settings->footer_scripts !!}
@endif
{{-- page scripts --}}
@stack('js')

{{-- {!! NoCaptcha::renderJs() !!} --}}
{{-- <script src="{{ asset('js/share.js') }}"></script>--}}
@livewireScripts

</body>

</html>

