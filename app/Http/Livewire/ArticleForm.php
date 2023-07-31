<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ArticleForm extends Component
{

    public $title;
    public $body;
    public $price;
    public $category;
    public $user_id;
    public $article;


    protected $rules = [
        'title' => 'required|min:6',
        'body' =>'required|min:15',
        'price' => 'required',
        'category' =>'required',
    ];
    protected $messages = [

        'title.required' => 'Il titolo è obbligatorio',
        'title.min' => 'Il titolo deve avere almeno 6 caratteri',
        'body.required' => 'La descrizione è obbligatoria',
        'body.min' => 'La descrizione deve avere almeno 15 caratteri',
        'price.required' => 'Il prezzo è obbligatorio',
        'category.required' => 'La categoria è obbligatoria',

    ];

    public function save(){

        $this->validate();

        $this->article = Category::find($this->category)->articles()->create([
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price,
            'user_id'=>Auth::user()->id,
        ]);

        $this->article->user()->associate(Auth::user());
        return redirect()->route('welcome')->with('message', 'Articolo inserito correttamente');
        $this->reset();
    }
        

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.article-form');
    }
    
}
