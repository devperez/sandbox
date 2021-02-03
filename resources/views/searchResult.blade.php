@extends('layout.base')

@section('content')
<h1 class="flex justify-center text-3xl">You've searched for {{$band}}.</h1>
<h3 class="flex justify-center text-2xl">These are the bands or artists you should check out :</h3>

<div class="grid grid-cols-3 gap-4 ml-5 mt-5">
    @foreach($bands as $band)
    <form class="m-auto w-7/12 bg-indigo-200 rounded-lg text-center" action="{{ route('details') }}" method="post">
        @csrf
        <input class="bg-indigo-200" name="band" value="{{ $band['name'] }}" type="submit">
    </form>
    @endforeach
</div>

@endsection