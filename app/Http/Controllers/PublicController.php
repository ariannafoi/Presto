<?php

namespace App\Http\Controllers;

use App\Models\cr;
use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {

        $articles = Article::take(6)->get()->orderBy('created_at');
        dd($articles);
        return view('welcome');
    }
}
