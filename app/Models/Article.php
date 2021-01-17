<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->hasMany(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
