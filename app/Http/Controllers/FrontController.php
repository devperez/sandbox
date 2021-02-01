<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FrontController extends Controller
{
    public function index() 
    {
        $band = Http::get('https://www.theaudiodb.com/api/v1/json/1/search.php?s=radiohead&strArtistLogo');
        $band2 = Http::get('https://www.theaudiodb.com/api/v1/json/1/search.php?s=nirvana&strArtistLogo');
        $band3 = Http::get('https://www.theaudiodb.com/api/v1/json/1/search.php?s=anathema&strArtistLogo');
        $band4 = Http::get('https://www.theaudiodb.com/api/v1/json/1/search.php?s=deftones&strArtistLogo');
        $band5 = Http::get('https://www.theaudiodb.com/api/v1/json/1/search.php?s=cradle_of_filth&strArtistLogo');
        $band6 = Http::get('https://www.theaudiodb.com/api/v1/json/1/search.php?s=ulver&strArtistLogo');
        $band7 = Http::get('https://www.theaudiodb.com/api/v1/json/1/search.php?s=anna_von_hausswolff&strArtistLogo');
        $band8 = Http::get('https://www.theaudiodb.com/api/v1/json/1/search.php?s=tool&strArtistLogo');
        
        return view("welcome", [
            'band' => $band,
            'band2' => $band2,
            'band3' => $band3,
            'band4' => $band4,
            'band5' => $band5,
            'band6' => $band6,
            'band7' => $band7,
            'band8' => $band8,
        ]);
    }
}
