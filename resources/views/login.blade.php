@extends('layout.base')

@section('content')
<div class="flex justify-center text-3xl pt-4">
    <h1>Wanna login ? Fill it out !</h1>
</div>
<div class="flex justify-center">
    <div class="w-4/12 p-6 rounded-lg">
        <form class="text-center pt-5" action="{{route('login') }}" method="post">
            @if(session('status'))
            <div>{{session('status')}}</div>
            @enderror
            @csrf
            <div class="mb-4">
                <label class="sr-only" for="email">Your email:</label>
                <input class="border-2 bg-white w-full p-4 rounded-lg" type="email" id="email" name="email"
                    placeholder="Your email" value="{{old('email') }}">
            </div>
            <div class="mb-4">
                <label class="sr-only" for="password">Your password :</label>
                <input class="border-2 bg-white w-full p-4 rounded-lg" type="password" id="password" name="password"
                    placeholder="Enter your password">
            </div>
            <div class="mb-4">
                <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember">Remember me</label>
                </div>
            </div>
            <button class="bg-blue-600 text-white p-4 w-full rounded" type="submit">Log me in !</button>
        </form>
        <div class="flex justify-center pt-4">
            <p><a class="" href=" {{route('register')}}">Don't have an account yet ? Create one !</p>
        </div>
    </div>
    @endsection