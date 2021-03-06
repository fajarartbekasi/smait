<!DOCTYPE html>
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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <div class="d-flex align-items-center">
                    <div>
                        <img src="{{asset('img/logo.jpeg')}}" width="60" height="60" class="mr-3" alt="">
                    </div>
                    <div>
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @auth
                    <ul class="navbar-nav mr-auto">
                         <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                         </li>
                         @role('admin')
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Master Data
                                <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('ambil-data.jadwal') }}">
                                    Data Jadwal
                                    </a>
                                    <a class="dropdown-item" href="{{ route('ambil-data.mapel') }}">
                                        Data Mapel
                                    </a>
                                    <a class="dropdown-item" href="{{ route('ambil-data.kelas') }}">
                                    Data Kelas
                                    </a>
                                    <a class="dropdown-item" href="{{ route('ambil-data.guru') }}">
                                    Data Guru
                                    </a>
                                    <a class="dropdown-item" href="{{ route('ambil-data.siswa') }}">
                                    Data Siswa
                                    </a>
                                    <a class="dropdown-item" href="{{ route('ambil-data.walikelas') }}">
                                        Data Walikelas
                                    </a>
                                    <a class="dropdown-item" href="{{ route('ambil-data.invitation') }}">
                                        Invitations
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('ambil-data.absensi-guru') }}">Absensi Guru</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Nilai
                                <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('ambil-data.kelas') }}">
                                        Nilai Raport
                                    </a>
                                    <a class="dropdown-item" href="{{ route('ambil-data.predikat') }}">
                                        Deskripsi Predikat
                                    </a>
                                </div>
                            </li>
                        @endrole

                        @role('guru|walas')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('buat-form.absensi-guru') }}">Absensi</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Input Nilai
                                    <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="{{route('ambil-data.raport.siswa')}}" class="dropdown-item">
                                       Nilai Raport
                                    </a>
                                </div>
                            </li>
                        @endrole
                        @role('siswa')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('cek.absensi', Auth::user()->id) }}">Absensi</a>
                            </li>
                        @endrole
                    </ul>
                    @endauth
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
