<?php

use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\DescriptionList\Node\DescriptionTerm;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\SuperheroesController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LivewireController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Mockery\Generator\StringManipulation\Pass\Pass;

Route::get('/', [PageController::class, 'home']) ->name('home');

//CONTACTS
Route::get('/contatti', [ContactController::class, 'form'])->name('contatti');
Route::post('/contatti/save', [ContactController::class, 'saveData'])->name('contatti.save');

//ABOUT-US
Route::get('/about-us', [PageController::class, 'about_us'])->name('about-us');

//ARTICLES
Route::get('/articles-all', [PageController::class, 'index'])->name('public.articles');
Route::get('/article/{id}', [PageController::class, 'article'])->name('article');


//ANIME
Route::get('/anime/genres', [AnimeController::class, 'index'])->name('anime.genres');
Route::get('/anime/genres/{id}', [AnimeController::class, 'animeByGenre'])->name('anime.byGenres');
//Route::get('seeder', [AnimeController::class, 'saveData']);

//MIDDLEWARE('AUTH')
Route::middleware('auth')->group(function(){
    Route::get('/account', [ AccountController::class, 'home']);
    Route::resources([
        'articles' => ArticleController::class,
        'categories' => CategoryController::class
    ]);
  
});
 
//ADMIN-USERS
Route::get('admin/users', [LivewireController::class, 'adminUsers'])->name('admin.users');
//COUNTER
Route::get('counter', [LivewireController::class, 'counter']);

//API
Route::get('/supereroi', function(){

    return view('pages\supereroi');

})->name('supereroi'); 
