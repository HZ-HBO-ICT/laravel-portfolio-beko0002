<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // values that can be in the article for mass assignment
    // this is for automatic protection
    protected $fillable = ['title', 'excerpt', 'body'];
}
