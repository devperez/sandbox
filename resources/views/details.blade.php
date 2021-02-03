@extends('layout.base')

@section('content')

<p class="flex justify-center text-3xl">Details about {{ $band }}</p>
<h1 class="flex justify-center text-2xl">albums majeurs</h1>

@foreach($albums as $album)
<div class="grid grid-cols-3 gap-6 ml-5 mt-5">
    <div class="m-auto w-8/12 bg-indigo-200 rounded-lg text-center">{{$album['name']}}</div>
</div>
@endforeach

@endsection