<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use \App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){

        Article::where('user_id','auth()->user()->id()->get()');
        $articles = auth()->user()->articles;
        return view('account.articles.index', compact('articles'));
    }

 

    public function create() 
    {
        $categories = Category::orderBy('name')->get();
        return view('account.articles.create', compact('categories'));
    }

    public function store(StoreArticleRequest $request)
    {
       $article = Article::create(array_merge(
        $request->all(),
        ['user_id' => auth()->user()->id]
    ));


       $article->categories()->attach($request->categories);

       if($request->hasFile('image') && $request->file('image')->isValid()){
            $extension = $request->file('image')->extension();
            $filename = uniqid('article_image') . ".$extension";
            $article->image = $request->file('image')->storeAs('/public/images'. $article->id , $filename);
            $article->save();
       }

        return redirect()->back()
                        ->with(['success' => 'Articolo creato con successo']);
    }

    public function edit(Article $article)
    {
        if($article->user_id !== auth()->user()->id) {
            abort(403);
        }
        return view('account.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {

        if($article->user_id !== auth()->user()->id) {
            abort(403);
        }


        $article->fill($request->all())->save();


        $article->categories()->detach();
        $article->categories()->attach($request->categories);
        
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $extension = $request->file('image')->extension();
            $filename = uniqid('article_image') . ".$extension";
            $article->image = $request->file('image')->storeAs('/public/images'. $article->id , $filename);
            $article->save();
       }

        return redirect()->route('articles.index')
            ->with(['success' => 'Articolo modificato con successo']);
    } 
    public function destroy(Article $article)
    {
        if($article->user_id !== auth()->user()->id) {
            abort(403);
        }

        $article->categories()->detach();
        $article->delete();

        return redirect()->route('articles.index')
            ->with(['success' => 'Articolo cancellato correttamente']);
    }

}
