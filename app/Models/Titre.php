<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titre extends Model
{
    use HasFactory;
    protected $table = "titres";

    protected $fillable = [
        "h2",
        "p1",
        "p2"
    ];
}
