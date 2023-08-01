<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class ArticleForm extends Component
{

    use WithFileUploads;
 
    public $temporary_images;
    public $images = [];
    public $image;

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
        'images.*'=>'image|max:1024',
        'temporary_images.*'=>'image|max:1024',
    ];
    protected $messages = [

        'title.required' => 'Il titolo è obbligatorio',
        'title.min' => 'Il titolo deve avere almeno 6 caratteri',
        'body.required' => 'La descrizione è obbligatoria',
        'body.min' => 'La descrizione deve avere almeno 15 caratteri',
        'price.required' => 'Il prezzo è obbligatorio',
        'category.required' => 'La categoria è obbligatoria',
        'temporary_images.required'=>'L\'immagine è obbligatoria',
        'temporary_images.*.image'=>'I file devono essere immagini',
        'temporary_images.*.max'=>'L\'immagine deve essere massimo di 1Mb',
        'images.image'=>'L\'immagine deve essere un\'immgine',
        'images.max'=>'L\'immagine deve essere massimo di 1Mb',

    ];

    public function save(){

        $this->validate([
            'images.*'=>'image|max:1024',
        ]);
        foreach ($this->images as $image) {
            $image->store('images');
        }

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
