@extends('layout.base')

@section('content')
<h1 class="flex justify-center text-3xl">Welcome to the search page !</h1><br />
<p class="flex justify-center text-xl">You can enter a band or an artist and get suggestions.</p>

<div class="flex justify-center">
    <div class="w-4/12 p-6 rounded-lg">
        <form class="text-center pt-5" action=" {{ route('search') }}" method='post'>
            @csrf
            <div class="mb-4">
                <label for="band" class="sr-only">Enter the name of the band or the name of the artist:</label>
                <input class="border-2 bg-white w-full p-4 rounded-lg" type="text" id="band" name="band"
                    placeholder="Name of the band or name of the artist">
                <button class="bg-blue-600 text-white p-4 w-full rounded mt-4" type="submit">Search !</button>
            </div>
        </form>
    </div>
</div>





@endsection