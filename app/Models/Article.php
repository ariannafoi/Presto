<?php

namespace App\Models;

use App\Models\User;
use App\Models\Image;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    protected $fillable = ['title','body','price', 'user_id' , 'category_id'];
    
    use HasFactory,Searchable;

    public function toSearchableArray()
    {
        $category = $this->category;
        $array = [
            'id'=>$this->id,
            'title'=>$this->title,
            'body'=>$this->body,
            'category'=>$category,
        ];
        
        return $array;
    }

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
        if(strlen($this->title) > 10){
            return substr($this->title, 0, 10). '...';
        }
        else{
            return $this->title;
        }
    }
    public function setAccepted($value){
        $this->is_accepted = $value;
        $this->save();
        return true;
    }
    public static function toBeRevisonedCount(){
        return Article::where('is_accepted',null)->count();
    }

    public function images(){
        return $this->hasMany(Image::class);
    }
}
