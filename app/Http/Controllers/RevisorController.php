<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index(){
        $article_to_check = Article::where('is_accepted',null)->first();
        return view('revisor.index',compact('article_to_check'));
    }
    public function acceptArticle(Article $article){
        $article->setAccepted(true);
        return redirect()->back()->with('message', 'Annuncio accettato');

    }
    public function rejectArticle(Article $article){
        $article->setAccepted(false);
        return redirect()->back()->with('message', 'Annuncio rifiutato');
        
    }

    public function becomeRevisor(){
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        
        return redirect()->back()->with('message' , 'Richiesta per diventare revisore inoltrata con successo');

    }

    public function makeRevisor(User $user)
    {
        Artisan::call('presto:makeUserRevisor', ["email"=>$user->email]);

        return redirect()->route('welcome')->with('message', 'La richiesta per diventare revisore è stata accettata');
    }

    public function searchArticles(Request $request)
    {
        $articles = Article::search($request->searched)->where('is_accepted', true)->paginate(8);
        return view('article.index', compact('articles'));
    }

    public function setLocale($lang){

        session()->put('locale', $lang);
        return redirect()->back();

    }
}
