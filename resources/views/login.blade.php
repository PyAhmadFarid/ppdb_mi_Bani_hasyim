@extends('template.default')

@section('content')
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
