@extends('template.default')


@section('head')
    <script src="{{ asset('js/alpinejs.min.js') }}"></script>
@endsection
@section('content')

    <div x-transition x-data="{ open: {{ Session::get('msg') ? 'true' : 'false' }} }" x-show="open" class="fixed w-screen h-screen z-10 bg-black bg-opacity-10">
        <div class="flex justify-center items-center h-full">
            <div class="bg-white w-1/3 rounded-lg shadow-lg overflow-hidden scale-105">
                <div class="p-5  font-semibold text-xl">
                    Notification
                </div>
                <p class="p-5">
                    Akun telah di buat sekarang anda dapat mengecek status anda dengan login mengunakan akun yang telah anda
                    buat
                </p>
                <div class="p-5 flex justify-end space-x-3 bg-gray-50">
                    <button x-on:click="open = ! open" class="bg-red-400 p-3 font-semibold text-white rounded-md">Okey</button>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full flex justify-center items-center h-full">

        <div class="bg-white p-10 shadow rounded w-1/3">
            <div class="text-4xl font-bold pb-5">Login</div>
            <form method="POST">
                @csrf
                <div class="flex flex-col space-y-3">
                    <span>email</span>
                    <input class="p-3 bg-gray-50 rounded" type="email" name="email" id="">
                    @if ($errors->has('email'))
                        <small class="text-red-500">{{ $errors->first('email') }}</small>
                    @endif
                </div>
                <div class="flex flex-col space-y-3 my-5">
                    <span>password</span>
                    <input class="p-3 bg-gray-50 rounded" type="password" name="password" id="">
                    @if ($errors->has('password'))
                        <small class="text-red-500">{{ $errors->first('password') }}</small>
                    @endif
                </div>
                <button class="bg-green-600 text-white font-semibold rounded p-3 w-full">Login</button>
            </form>
        </div>
    </div>
@endsection
