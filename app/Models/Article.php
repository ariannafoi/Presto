<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    protected $fillable = ['title','body','price', 'user_id' , 'category_id'];
    
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function getDescriptionSubstring(){
        if(strlen($this->body) > 20){
            return substr($this->body, 0, 20). '...';
        }
        else{
            return $this->body;
        }
    }

    public function getTitleSubstring(){
        if(strlen($this->title) > 15){
            return substr($this->title, 0, 15). '...';
        }
        else{
            return $this->title;
        }
    }
}
