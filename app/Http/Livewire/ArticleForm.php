<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleForm extends Component
{

    public $title;
    public $body;
    public $price;

    public function save(){
        Article::create([
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price,
        ]);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.article-form');
    }
    protected $rules = [
        'title' => 'required|min:6',
        'body' =>'required | min:20',
        'price' => 'required '
       ];
    public function updated($propertyName)
       {
           $this->validateOnly($propertyName);
       }
}
