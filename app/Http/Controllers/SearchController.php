<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    public function index()
    {
        return view('search');
    }

    public function searchBand(Request $request)
    {
        $this->validate($request, [
            'band'=>'required|max:255'
        ]);
        $band = $request['band'];
        $bands = Http::get('http://ws.audioscrobbler.com/2.0/?method=artist.getsimilar&artist="' . $band . '"&api_key=a32fb63a8d2b5340a9dc289fe416232f&format=json&limit=10');
        
        $bands = $bands['similarartists']['artist'];
        return view('searchResult', compact('bands', 'band'));
    }
}