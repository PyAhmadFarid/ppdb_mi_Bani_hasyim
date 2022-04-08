<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('head')
    <title>Document</title>
</head>

<body class="bg-gray-100">
    <div class="flex flex-col h-screen" >
        <div class="bg-green-600 flex justify-between items-center py-3 px-20">
            <a href="{{route('home')}}" class="text-white font-bold flex space-x-3 items-center">
                {{-- <img src="{{ asset('images/logo.svg') }}" class=" w-8" alt=""> --}}
                <span>
                    MI Bani Hasyim
                </span>
            </a>
            <div class="flex space-x-5 text-white font-semibold">

                {{-- <a href="">About</a> --}}
                @guest
                    <a href="{{ route('register') }}">Pendaftaran Siswa Baru</a>
                    <a href="{{ route('login') }}">Login</a>
                @endguest
                @auth
                    @if (auth()->user()->is_admin)
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                        <a href="{{ route('admin.siswa') }}">Data Siswa</a>
                    @else
                        <a href="{{route('siswa')}}">Data Diri</a>
                    @endif


                    <a class="" href="{{ route('logout') }}">Logout</a>
                @endauth

            </div>
        </div>
        @yield('content')
        <div class="flex bg-green-600 py-5 text-white space-x-5 justify-center font-semibold">
            Made With ❤️ by person x
        </div>
    </div>
</body>


@yield('script')

</html>
