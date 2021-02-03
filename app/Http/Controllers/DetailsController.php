<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\Console\Input\Input;

class DetailsController extends Controller
{
    public function details(Request $request)
    {
        $band = $request->input('band');
            
        $albums = Http::get('http://ws.audioscrobbler.com/2.0/?method=artist.gettopalbums&artist="' . $band . '"&api_key=a32fb63a8d2b5340a9dc289fe416232f&format=json');
        $query = json_decode($albums, true);
        //$albums = $albums['topalbums'];
        $albums = $query['topalbums']['album'];
       // dd($albums);
       return view('details', compact('band', 'albums'));
    }
}
