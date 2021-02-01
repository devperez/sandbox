@extends('layout.base')

@section('content')

<h1 class="mt-4 text-blue-700 text-lg font-bold text-center">Bienvenue sur BandZilla</h1>
<p class="text-center m-4">The one and only purpose of this app is to help you discover new artists.<br /> Enter the
    name of a band and it will return artists that you may like.
    Enter the title of an album and it will do just the same with similar albums.<br />
    This app uses the <a class="text-indigo-600" href="http://www.lastfm.com">LastFM</a> API.<br />
    You have to create an account to use the research function.
</p>

<div class="grid grid-cols-1 gap-8 md:grid-cols-3 lg:grid-cols-4 mt-8 ml-10">
    <div>
        @foreach($band['artists'] as $artist)
        <img class="h-20 ml-4" src="{{$artist['strArtistLogo']}}">
        @endforeach
    </div>
    <div>
        @foreach($band2['artists'] as $artist)
        <img class="h-20 ml-4" src="{{$artist['strArtistLogo']}}">
        @endforeach
    </div>
    <div>
        @foreach($band3['artists'] as $artist)
        <img class="h-20 ml-4" src="{{$artist['strArtistLogo']}}">
        @endforeach
    </div>
    <div>
        @foreach($band4['artists'] as $artist)
        <img class="h-20 ml-4" src="{{$artist['strArtistLogo']}}">
        @endforeach
    </div>
    <div>
        @foreach($band5['artists'] as $artist)
        <img class="h-20 ml-4" src="{{$artist['strArtistLogo']}}">
        @endforeach
    </div>
    <div>
        @foreach($band6['artists'] as $artist)
        <img class="h-20 ml-4" src="{{$artist['strArtistLogo']}}">
        @endforeach
    </div>
    <div>
        @foreach($band7['artists'] as $artist)
        <img class="h-20 ml-4" src="{{$artist['strArtistLogo']}}">
        @endforeach
    </div>
    <div>
        @foreach($band8['artists'] as $artist)
        <img class="h-20 ml-4" src="{{$artist['strArtistLogo']}}">
        @endforeach
    </div>
</div>

@endsection