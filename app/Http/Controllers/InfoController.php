<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InfoController extends Controller
{
    public function index()
    {
        return view('album');
    }

    public function searchAlbum(Request $request)
    {
        $this->validate($request, [
            'band'=>'required|max:255',
            'album'=>'required|max:255'
        ]);
            $band=$request["band"];
            $album=$request["album"];
        //dd($band, $album);
        $query = Http::get('http://ws.audioscrobbler.com/2.0/?method=album.getinfo&api_key=a32fb63a8d2b5340a9dc289fe416232f&artist="' . $band .'"&album="' . $album .'"&format=json&autocorrect=1');
            
        $query = json_decode($query, true);
        dd($query);
        $title = $query['album']['name'];
        $band = $query['album']['artist'];
        $coverart = $query['album']['image'][2];
        $tracks = $query['album']['tracks'];
        dd($title);
        return view('albumResult', compact('title', 'band', 'coverart', 'tracks'));
    }
}
