<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::paginate(6);
        return view('article.index' , compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Category $category)
    {
        return view('article/create');
    }
    public function productsByCategory(Category $category){
        return view('product.category', compact('category'));
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $article = Auth::user()->articles()->create(
        [
            'name'=>$request->input('name'),
            'body'=>$request->input('body'),
            'price'=>$request->input('price'),
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show' , compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
    
}
