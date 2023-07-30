<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoriesRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $categories= Category::all();
        $categories = Category::orderBy('name')->get();
        $categories = Category::paginate(5);
    
        return view('account.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     return view('account.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoriesRequest $request)
    {
        Category::create([
            'name'=> $request->name
        ]);

        
        return redirect()->route('categories.index')->with(['success'=> 'Categoria creata correttamente']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('account.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $category->name = $request->name;
        $category->save();

        return redirect()->route('categories.index')->with(['success' => 'Categoria modificata correttamente']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if($category->articles->count()){
            return redirect()->back()->with(['error' => 'Questa categoria non può essere cancellata']);
        };
        
        $category->delete();
        return redirect()->route('categories.index')->with(['success' => 'Categoria eliminata correttamente']);
    }
}
