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
        "day" ,
        "h3", 
        "p1" ,
        "p2" ,
        "p3" ,
        "img" ,
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
