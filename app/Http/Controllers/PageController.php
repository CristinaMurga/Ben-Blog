<?php

namespace App\Http\Controllers;

use \App\Models\Article;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $auth = [
            'name' => 'Cris',
            'email' => 'cris@example.com',
        ];
    
        //$auth = [];
        
        return view('home', compact('auth'));

    }

    public function index(Article $article)
    {
        $title = 'Tutti gli articoli';

        $subtitle = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores culpa praesentium dignissimos facilis eius modi rem officia. Omnis id quo inventore. Possimus, quae cumque fuga ullam voluptates tempora harum totam!';
        $articles = \App\Models\Article::all();
        
        return view('articoli.articoli', compact('title','subtitle','articles'));
        
    }

    public function article($id){
        
        $article= \App\Models\Article::findOrFail($id);
    
        return view('articoli.articolo', compact('article'));
    }

   
    public function about_us()
    {
        $title = 'About us';
        $description = 'Pubblichiamo i vostri articoli';
        
        return view('pages.template', compact('title', 'description'));
    }
    
}
