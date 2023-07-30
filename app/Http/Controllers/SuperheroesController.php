<?php

namespace App\Http\Controllers;

use App\Custom\Superhero;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class SuperheroesController extends Controller
{
    //create API
    public function index()
    {
        $superheroes = [
            new Superhero('Batman', 45),
            new Superhero('Spiderman', 24),
            new Superhero('Ironman', 40),
            new Superhero('Superman', 30),
        ];

        return $superheroes;
    }

}
