<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = "articles";

    protected $fillable = [
        "h2",
        "p" ,
        "img" ,
        "confirm"
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class,"article_tags");
    }
    public function categories(){
        return $this->belongsToMany(Category::class,"article_categories");
    }
}
