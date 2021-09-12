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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    {{-- <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-#e3f2fd">
            <div class="container-fluid ml-2">
                <a class="navbar-brand ml-3" href="{{ url('/') }}" style="font-family: gergoriea">
                    <img src="{{ asset('images/logo.ico') }}" alt="" width="50" height="50"> SMK Khusus Angkatan Laut 2 Surabaya
                </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse mr-3" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/articles') }}">Article</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/profile-sekolah') }}">Profile Sekolah</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Jurusan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Pelayaran</a></li>
                      <li><a class="dropdown-item" href="#">Otomotif</a></li>
                      <li><a class="dropdown-item" href="#">Perkapalan</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/info-pendaftaran') }}">Info Pendaftaran</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Hubungi Kami</a>
                  </li>
                </ul>
             
              </div>
            </div>
          </nav>
    </div> --}}

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
