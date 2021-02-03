@extends('layout.base')

@section('content')

<h1 class="flex justify-center text-xl">You are looking for some informations about {{ $title }} by {{ $band }}.</h1>


<div class="grid grid-cols-3 gap-4 ml-5 mt-5">
    @foreach ($coverart as $cover)
    <img src="{{$cover}}">
    @endforeach
</div>




@endsection