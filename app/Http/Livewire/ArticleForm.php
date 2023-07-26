<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;

class ArticleForm extends Component
{

    public $title;
    public $body;
    public $price;
    public $category;

    public function save(){
        $category = Category::find($this->category);

        Article::create([
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price,
            
        ]);
        return redirect()->route('welcome')->with('message', 'Articolo inserito correttamente');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.article-form');
    }
    protected $rules = [
        'title' => 'required|min:6',
        'body' =>'required | min:20',
        'price' => 'required ',
        'category' =>'required'
    ];
    protected $messages = [
        'title.required' => 'Il titolo è obbligatorio',
        'title.min' => 'Il titolo deve avere almeno 6 caratteri',
        'body.required' => 'Il corpo è obbligatorio',
        'body.min' => 'Il corpo deve avere almeno 20 caratteri',
        'price.required' => 'Il prezzo è obbligatorio',
        'category.required' => 'La categoria è obbligatoria',
    ];
            

    public function updated($propertyName)
       {
           $this->validateOnly($propertyName);
       }
}
