@extends('layout.base')

@section('content')
<div class="flex justify-center">
    <div class="w-4/12 p-6 rounded-lg">
        <form class="text-center pt-5" action=" {{route('register') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="name">Your name :</label>
                <input class="border-2 bg-gray-200 w-full" type="text" placeholder="Your name" value="{{old('name')}}">
            </div>
            <div class="mb-4">
                <label for="email">Your email:</label>
                <input class="border-2 bg-gray-200 w-full" type="email" placeholder="Your email" value="{{old('email') }}">
            </div>
            <div class="mb-4">
                <label for="password">Your password :</label>
                <input class="border-2 bg-gray-200 w-full" type="password" placeholder="Choose a password">
            </div>
            <div class="mb-4">
                <label for="password_confirmation">Confirm your password :</label>
                <input class="border-2 bg-gray-200 w-full" type="password_confirmation" placeholder="Enter your password again">
            </div>
            <button class="bg-blue-600 text-white p-4 rounded" type="submit">Register</button>
        </form>
    </div>
</div>
@endsection