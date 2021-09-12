<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body, html {
          height: 100%;
          margin: 0;
        }
        
        .bg {
          /* The image used */
          background-image: url('images/MURID6.jpg');

          text-align: center;
        
          /* Full height */
          height: 60%; 
        
          /* Center and scale the image nicely */
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          opacity: 0.8;
        }
        .caption {
        position: absolute;
        top: 60%;
        left: 50%;
        transform: translate( -45%, -70% );
        text-align: center;
        color: black;
        font-weight: bold;
        }
        
        .image-article {
         height: 60%; 
         width: 100%; 
         position: center; 
         repeat: no-repeat; 
         object-fit: cover; 
         opacity: 0.8;
        }
    </style>
</head>
<body>
  {{-- <div class="bg"></div> --}}
    <img src="{{ asset('images/MURID6.jpg') }}" alt="" class="image-article">
</body>
</html>
