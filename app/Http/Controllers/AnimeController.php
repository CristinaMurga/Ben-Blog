<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    
    public function index()
    {
    $endpoint = 'https://api.jikan.moe/v4/genres/anime';
    
    $genres = Http::get($endpoint)->json();

    //dd($genres);

    return view('anime.genres', ['genres' => $genres['data']]);

    }

    public function animeByGenre($id)
    {
                   
        $endpoint =  'https://api.jikan.moe/v4/anime?genres=' . $id;
        $anime = Http::get($endpoint)->json();

     
        return view('anime.index', ['anime' => $anime['data']]);
    }

    public function saveData()
    {
        $endpoint = 'https://api.jikan.moe/v4/genres/anime';
    
        $genres = Http::get($endpoint)->json();
        $dataGenres= $genres['data'];
        dd($dataGenres);
        /*
        \App\Models\Animegenre::create([
            'id' => $genres['data']['mal_id'],
            'name' => $genres['data']['name']
            ]);
    
     */
    }
     
}
