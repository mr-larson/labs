<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $table = "users";

    protected $fillable = [
        "nom",
        "email",
        "password",
        "img",
    ];

    public function role(){
        return $this->belongsTo(Role::class);
    }
    public function articles(){
        return $this->hasMany(Article::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}