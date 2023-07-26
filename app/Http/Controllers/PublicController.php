<?php

namespace App\Http\Controllers;

use App\Models\cr;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {

        $articles = Article::take(6)->get()->sortDesc();
        // dd($articles);
        return view('welcome', compact('articles'));
    }

    public function categoryShow(Category $category){
        return view('categoryShow', compact('category'));
    }
}
